// Seleccionar elemento
var conejita = $('#conejaParto');

if(conejita[0]) {
	var notas = $('#notas');	
	// Manejo de evento change
	conejita.change(function() {
		var donador = this.value;

		$.ajax({
			url: '/destete/obtener-notas',
			data: {
				donador: donador
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				notas.val(respuesta.notas);
			},
			error: function() {

			}
		});
	});
}