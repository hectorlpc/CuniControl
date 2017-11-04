// Seleccionar elemento
var numeroVivos = $('#conejaParto');

if(numeroVivos[0]) {
	// Manejo de evento change
	numeroVivos.change(function() {
		var numero = this.value;

		$.ajax({
			url: '/destete/obtener-vivos',
			data: {
				numero: numero
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				var totalVivos = $('#vivos');
				totalVivos.empty();
				var opciones = respuesta.opciones;
				for(var i = 0; i < opciones.length; i++) {
					totalVivos.append('<option value="' + opciones[i] + '">' + opciones[i] + '</option>');
				}
			},
			error: function() {

			}
		});
	});
}