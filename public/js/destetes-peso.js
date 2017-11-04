// Seleccionar elemento
var numeroVivos = $('#conejaParto');

if(numeroVivos[0]) {
	// Manejo de evento change
	numeroVivos.change(function() {
		var peso = this.value;

		$.ajax({
			url: '/destete/obtener-peso',
			data: {
				peso: peso
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				var pesos = $('#pesoDestete');
				pesos.empty();
				var opciones = respuesta.opciones;
				for(var i = 0; i < opciones.length; i++) {
					pesos.append('<option value="' + opciones[i] + '">' + opciones[i] + '</option>');
				}
			},
			error: function() {

			}
		});
	});
}