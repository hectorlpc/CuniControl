// Seleccionar elemento
var opcionesConeja = $('#conejaParto');

if(opcionesConeja[0]) {
	var vivos = $('#vivos');
	var pesoDestete = $('#pesoDestete');
	var noDestetados = $('#noDestetados');
	var fechaDestete = $('#fechaDestete');
	// Manejo de evento change
	opcionesConeja.change(function() {
		var datos = this.value;

		$.ajax({
			url: '/destete/obtener-datos',
			data: {
				datos: datos
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				vivos.val(respuesta.cantidad);
				noDestetados.val(respuesta.no_destetados);
				pesoDestete.val(respuesta.peso);
				fechaDestete.val(respuesta.fechaDeParto);
			},
			error: function() {

			}
		});
	});
}