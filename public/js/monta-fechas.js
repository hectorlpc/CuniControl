// Seleccionar elemento
var opcionesConeja = $('#idMonta');

if(opcionesConeja[0]) {
	var fechaMonta = $('#fechaMonta');
	// Manejo de evento change
	opcionesConeja.change(function() {
		var datosMonta = this.value;

		$.ajax({
			url: '/monta/obtener-fechas',
			data: {
				datosMonta: datosMonta
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				fechaMonta.val(respuesta.fecha_monta);
			},
			error: function() {

			}
		});
	});
}