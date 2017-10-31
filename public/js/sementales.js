// Seleccionar elemento
var opcionesConeja = $('#coneja');

if(opcionesConeja[0]) {
	// Manejo de evento change
	opcionesConeja.change(function() {
		var raza = this.value[0];

		$.ajax({
			url: '/montas/obtener-sementales',
			data: {
				raza: raza
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				var opcionesSementales = $('#sementales');
				opcionesSementales.empty();
				var opciones = respuesta.opciones;
				for(var i = 0; i < opciones.length; i++) {
					opcionesSementales.append('<option value="' + opciones[i] + '">' + opciones[i] + '</option>');
				}
			},
			error: function() {

			}
		});
	});
}