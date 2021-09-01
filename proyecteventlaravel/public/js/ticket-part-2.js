window.onload = function () {
	let total = 0;
	let ticketAdulto = '';
	let ticketNino = '';
	
	let ticketname = 'as';
	let ticketemail = 'asassss';
	
	const miLSTicketAdulto = window.localStorage;
	const miLSTicketNino = window.localStorage;
	const miLSTicketTotal = window.localStorage;
	
	const miLSTicketName = window.localStorage;
	const miLSTicketEmail = window.localStorage;
	
	const DOMbotonComprar = document.querySelector('#boton-compra');
	
	function cargarInfoDeLocalStorage () {
		// ¿Existe un carrito previo guardado en LocalStorage?
		if (miLSTicketTotal.getItem('total') !== 0) {
			// Carga la información
			ticketAdulto = JSON.parse(miLSTicketAdulto.getItem('ticketAdulto'));
			ticketNino = JSON.parse(miLSTicketNino.getItem('ticketNino'));
			total = JSON.parse(miLSTicketTotal.getItem('total'));
		}
	}
	
	function cargarInfoHTML() {
		document.getElementById('tickets_adult_info').innerHTML = ticketAdulto;
		document.getElementById('tickets_children_info').innerHTML = ticketNino;
		document.getElementById('total_info').innerHTML = total;
	}
	
	function guardarEnLocalStorage() {
		ticketname = document.getElementById("tickets_name").value;
		ticketemail = document.getElementById("tickets_email").value;
		
		miLSTicketName.setItem('ticketname', JSON.stringify(ticketname));
		miLSTicketEmail.setItem('ticketemail', JSON.stringify(ticketemail));
	}
	
	cargarInfoDeLocalStorage();
	cargarInfoHTML();
	
	DOMbotonComprar.addEventListener('click', guardarEnLocalStorage);
}
