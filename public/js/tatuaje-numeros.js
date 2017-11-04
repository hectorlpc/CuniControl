// Seleccionar elemento
var opcionesConeja = $('#conejaDestete');

if(opcionesConeja[0]) {
	// Manejo de evento change
	opcionesConeja.change(function() {
		var numero = this.value;

		$.ajax({
			url: '/tatuaje/obtener-numero',
			data: {
				numero: numero
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				var numeroProductora = $('#numeroConejo');
				numeroProductora.empty();
				var opciones = respuesta.opciones;
				for(var i = 0; i < opciones.length; i++) {
					numeroProductora.append('<option value="' + opciones[i] + '">' + opciones[i] + '</option>');
				}
			},
			error: function() {

			}
		});
	});
}