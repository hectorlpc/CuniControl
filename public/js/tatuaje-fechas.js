// Seleccionar elemento
var opcionesConeja = $('#conejaDestete');

if(opcionesConeja[0]) {
	// Manejo de evento change
	opcionesConeja.change(function() {
		var fecha = this.value;

		$.ajax({
			url: '/tatuaje/obtener-fecha',
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