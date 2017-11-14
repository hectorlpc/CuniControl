// Seleccionar elemento
var donador = $('#donador');

if(donador) {
	// Manejo de evento change
	donador.change(function() {
		var valor = this.value;

		$.ajax({
			url: '/donacion/obtener-receptores',
			data: {
				valor: valor
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				var opcionesReceptor = $('#receptor');
				opcionesReceptor.empty();
				var opciones = respuesta.opciones;
				for(var i = 0; i < opciones.length; i++) {
					console.log(opciones[i], valor);
					if( opciones[i].Id_Parto !=  valor) {
						opcionesReceptor.append('<option value="' + opciones[i].Id_Parto + '">' + opciones[i].Id_Conejo_Hembra + '</option>');
					}
				}
			},
			error: function() {

			}
		});
	});
}