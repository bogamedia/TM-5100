/*SCRIPT CARRITO*/

window.onload = function () {
	// Variables
	const baseDeDatos = [
		{
			id: 1,
			nombre: 'Niños',
			precio: 1000,
			imagen: 'imgs/buy-tickets/ticket-children.png'
		},
		{
			id: 2,
			nombre: 'Adultos',
			precio: 2500,
			imagen: 'imgs/buy-tickets/ticket-adult.png'
		},
	];

	let carrito = [];
	let total = 0;
	let disponible = 50;
	let ticketAdulto = '';
	let ticketNino = '';
	
	const DOMitems = document.querySelector('#items');
	const DOMcarrito = document.querySelector('#carrito');
	const DOMtotal = document.querySelector('#total');
	const DOMdisponible = document.querySelector('#disponible');
	const DOMbotonVaciar = document.querySelector('#boton-vaciar');
	const miLocalStorage = window.localStorage;
	const miLocalStorageTicketAdulto = window.localStorage;
	const miLocalStorageTicketNino = window.localStorage;
	const miLocalStorageTicketTotal = window.localStorage;
	
	// Funciones
	/**
	* Dibuja todos los productos a partir de la base de datos. No confundir con el carrito
	*/
	function renderizarProductos() {
		baseDeDatos.forEach((info) => {
			// Estructura
			const miNodo = document.createElement('div');
			miNodo.classList.add('card', 'col-lg-6');
			// Body
			const miNodoCardBody = document.createElement('div');
			miNodoCardBody.classList.add('card-body');
			// Titulo
			const miNodoTitle = document.createElement('h5');
			miNodoTitle.classList.add('card-title');
			miNodoTitle.textContent = info.nombre;
			// Imagen
			const miNodoImagen = document.createElement('img');
			miNodoImagen.classList.add('img-fluid');
			miNodoImagen.setAttribute('src', info.imagen);
			// Precio
			const miNodoPrecio = document.createElement('p');
			miNodoPrecio.classList.add('card-text');
			miNodoPrecio.textContent = '₡ ' + info.precio;
			// Boton 
			const miNodoBoton = document.createElement('button');
			miNodoBoton.classList.add('btn', 'btn-primary');
			miNodoBoton.textContent = '+';
			miNodoBoton.setAttribute('marcador', info.id);
			miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);
			// Insertamos
			miNodoCardBody.appendChild(miNodoImagen);
			miNodoCardBody.appendChild(miNodoTitle);
			miNodoCardBody.appendChild(miNodoPrecio);
			miNodoCardBody.appendChild(miNodoBoton);
			miNodo.appendChild(miNodoCardBody);
			DOMitems.appendChild(miNodo);
		});
	}

	/**
	* Evento para añadir un producto al carrito de la compra
	*/
	function anyadirProductoAlCarrito(evento) {
		
		if (disponible !== 0) {
		// Anyadimos el Nodo a nuestro carrito
		carrito.push(evento.target.getAttribute('marcador'))
		// Calculo el total
		calcularTotal();
		// Calculo el total
		calcularDisponible();
		// Actualizamos el carrito 
		renderizarCarrito();
		// Actualizamos el LocalStorage
		guardarEnLocalStorage();
		}
	}

	/**
	* Dibuja todos los productos guardados en el carrito
	*/
	function renderizarCarrito() {
		// Vaciamos todo el html
		DOMcarrito.textContent = '';
		// Quitamos los duplicados
		const carritoSinDuplicados = [...new Set(carrito)];
		// Generamos los Nodos a partir de carrito
		carritoSinDuplicados.forEach((item) => {
			// Obtenemos el item que necesitamos de la variable base de datos
			const miItem = baseDeDatos.filter((itemBaseDatos) => {
				// ¿Coincide las id? Solo puede existir un caso
				return itemBaseDatos.id === parseInt(item);
			});
			// Cuenta el número de veces que se repite el producto
			const numeroUnidadesItem = carrito.reduce((total, itemId) => {
				// ¿Coincide las id? Incremento el contador, en caso contrario no mantengo
				return itemId === item ? total += 1 : total;
			}, 0);
			// Creamos el nodo del item del carrito
			const miNodo = document.createElement('li');
			miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
			miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} - ₡ ${miItem[0].precio}`;
			
			// Cargar valor en ticket para factura
			if (miItem[0].nombre == 'Adultos') {
				ticketAdulto = miNodo.textContent;
			}
			
			if (miItem[0].nombre == 'Niños'){
				ticketNino = miNodo.textContent;
			}
			// Boton de borrar
			const miBoton = document.createElement('button');
			miBoton.classList.add('btn', 'btn-danger', 'mx-5');
			miBoton.textContent = 'X';
			miBoton.style.marginLeft = '1rem';
			miBoton.dataset.item = item;
			miBoton.addEventListener('click', borrarItemCarrito);
			// Mezclamos nodos
			miNodo.appendChild(miBoton);
			DOMcarrito.appendChild(miNodo);
		});
	}

	/**
	* Evento para borrar un elemento del carrito
	*/
	function borrarItemCarrito(evento) {
		// Obtenemos el producto ID que hay en el boton pulsado
		const id = evento.target.dataset.item;
		// Borramos todos los productos
		carrito = carrito.filter((carritoId) => {
			return carritoId !== id;
		});
		// volvemos a renderizar
		renderizarCarrito();
		// Calculamos de nuevo el precio
		calcularTotal();
		// Calculamos de nuevo el precio
		calcularDisponible();
		// Actualizamos el LocalStorage
		guardarEnLocalStorage();

	}

	/**
	* Calcula el precio total teniendo en cuenta los productos repetidos
	*/
	function calcularTotal() {
		// Limpiamos precio anterior
		total = 0;
		// Recorremos el array del carrito
		carrito.forEach((item) => {
			// De cada elemento obtenemos su precio
			const miItem = baseDeDatos.filter((itemBaseDatos) => {
				return itemBaseDatos.id === parseInt(item);
			});
			total = total + miItem[0].precio;
		});
		// Renderizamos el precio en el HTML
		DOMtotal.textContent = total.toFixed(2);
	}
	
	/**
	* Calcula el disponible teniendo en cuenta los productos repetidos
	*/
	function calcularDisponible() {
		// Limpiamos precio anterior
		disponible = 50;
		// Recorremos el array del carrito
		carrito.forEach((item) => {
			// De cada elemento obtenemos su precio
			const miItem = baseDeDatos.filter((itemBaseDatos) => {
				return itemBaseDatos.id === parseInt(item);
			});
			disponible = disponible - 1;
		});
		// Renderizamos el precio en el HTML
		DOMdisponible.textContent = disponible;
	}

	/**
	* Varia el carrito y vuelve a dibujarlo
	*/
	function vaciarCarrito() {
		// Limpiamos los productos guardados
		carrito = [];
		ticketAdulto = '';
	    ticketNino = '';
		// Renderizamos los cambios
		renderizarCarrito();
		calcularTotal();
		calcularDisponible();
		//Borra LocalStorage
		//localStorage.clear();
	}

	function guardarEnLocalStorage () {
		miLocalStorage.setItem('carrito', JSON.stringify(carrito));
		miLocalStorageTicketAdulto.setItem('ticketAdulto', JSON.stringify(ticketAdulto));
		miLocalStorageTicketNino.setItem('ticketNino', JSON.stringify(ticketNino));
		miLocalStorageTicketTotal.setItem('total', JSON.stringify(total));
	}

	function cargarCarritoDeLocalStorage () {
		// ¿Existe un carrito previo guardado en LocalStorage?
		if (miLocalStorage.getItem('carrito') !== null) {
			// Carga la información
			carrito = JSON.parse(miLocalStorage.getItem('carrito'));
			ticketAdulto = JSON.parse(miLocalStorageTicketAdulto.getItem('ticketAdulto'));
			ticketNino = JSON.parse(miLocalStorageTicketNino.getItem('ticketNino'));
			total = JSON.parse(miLocalStorageTicketTotal.getItem('total'));
		}
	}
	
	// Eventos
	DOMbotonVaciar.addEventListener('click', vaciarCarrito);

	// Inicio
	cargarCarritoDeLocalStorage();
	renderizarProductos();
	calcularTotal();
	calcularDisponible();
	renderizarCarrito();
	cargarInfoDeLocalStorage();
}