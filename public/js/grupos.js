// Seleccionar elemento
var opcionesCarrera = $('#carrera');

if(opcionesCarrera[0]) {
	// Manejo de evento change
	opcionesCarrera.change(function() {
		var clave = this.value;

		$.ajax({
			url: '/grupos/obtener-grupos',
			data: {
				clave: clave
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				var opcionesGrupos = $('#grupos');
				opcionesGrupos.empty();
				var opciones = respuesta.opciones;
				for(var i = 0; i < opciones.length; i++) {
					opcionesGrupos.append('<option value="' + opciones[i] + '">' + opciones[i] + '</option>');
				}
			},
			error: function() {

			}
		});
	});
}