// Seleccionar elemento
var opcionesConeja = $('#parto');

if(opcionesConeja[0]) {
	var fechaDeParto = $('#fechaDeParto');
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
				fechaDeParto.val(respuesta.fecha_parto);
			},
			error: function() {

			}
		});
	});
}