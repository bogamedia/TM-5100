window.onload = function () {
	let nombreEvento = '';
	let lugarEvento = '';
	let fechayhoraEvento = '';
	let imagenEvento = '';
	let idEvento = '';
	
	const miLSnombreEvento = window.localStorage;
	const miLSlugarEvento = window.localStorage;
	const miLSfechayhoraEvento = window.localStorage;
	const miLSimagenEvento = window.localStorage;
	const miLSidEvento = window.localStorage;
	
	function guardarInfoHTML() {
		nombreEvento = document.getElementById("nombreEvento").textContent;
		lugarEvento = document.getElementById("lugarEvento").textContent;
		fechayhoraEvento = document.getElementById("fechayhoraEvento").textContent;
		imagenEvento = document.getElementById("imagenEvento").src;
		idEvento = document.getElementById("idEvento").textContent;
	}
	
	function guardarEnLocalStorage() {
		miLSnombreEvento.setItem('nombreEvento', JSON.stringify(nombreEvento));
		miLSlugarEvento.setItem('lugarEvento', JSON.stringify(lugarEvento));
		miLSfechayhoraEvento.setItem('fechayhoraEvento', JSON.stringify(fechayhoraEvento));
		miLSimagenEvento.setItem('imagenEvento', JSON.stringify(imagenEvento));
		miLSfechayhoraEvento.setItem('idEvento', JSON.stringify(idEvento));
	}
	
	guardarInfoHTML();
	guardarEnLocalStorage();
}
