// Seleccionar elemento
var opcionesConeja = $('#conejaParto');

if(opcionesConeja[0]) {
	var vivos = $('#vivos');
	var pesoDestete = $('#pesoDestete');
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
				pesoDestete.val(respuesta.peso);
			},
			error: function() {

			}
		});
	});
}