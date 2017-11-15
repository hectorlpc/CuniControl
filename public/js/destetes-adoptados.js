// Seleccionar elemento
var conejita = $('#conejaParto');

if(conejita[0]) {
	var adoptados = $('#adoptados');
	var donador = $('#donador');
	// Manejo de evento change
	conejita.change(function() {
		var conejo = this.value;

		$.ajax({
			url: '/destete/obtener-adoptados',
			data: {
				conejo: conejo
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				adoptados.val(respuesta.adoptados);
				donador.val(respuesta.donador);
			},
			error: function() {

			}
		});
	});
}