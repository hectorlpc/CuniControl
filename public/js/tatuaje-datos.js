// Seleccionar elemento
var opcionesConeja = $('#conejaDestete');

if(opcionesConeja[0]) {
	var numeroConsecutivo = $('#numeroConsecutivo');
	var numeroConeja = $('#numeroConeja');
	var razaTatuaje = $('#razaTatuaje');
	var fechaParto = $('#fechaParto');
	var numero_jaula = $('#numero_jaula');
	// Manejo de evento change
	opcionesConeja.change(function() {
		var numero = this.value;

		$.ajax({
			url: '/tatuaje/obtener-datos',
			data: {
				numero: numero
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				numeroConsecutivo.val(respuesta.numero_consecutivo);
				numeroConeja.val(respuesta.numero_conejo);
				razaTatuaje.val(respuesta.raza);
				fechaParto.val(respuesta.fecha_parto);
				numero_jaula.val(respuesta.numero_jaula);
			},
			error: function() {

			}
		});
	});
}