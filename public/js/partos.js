// Seleccionar elemento
var opcionesConeja = $('#parto');

if(opcionesConeja[0]) {
	// Manejo de evento change
	opcionesConeja.change(function() {
		var fecha = this.value;

		$.ajax({
			url: '/parto/obtener-fecha',
			data: {
				fecha: fecha
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				var opcionesFecha = $('#fechadeparto');
				opcionesFecha.empty();
				var opciones = respuesta.opciones;
				for(var i = 0; i < opciones.length; i++) {
					opcionesFecha.append('<option value="' + opciones[i] + '">' + opciones[i] + '</option>');
				}
			},
			error: function() {

			}
		});
	});
}