	var form = $('#buscar1');
	form.submit(function(event){
		//alert("Entró");
		event.preventDefault();
		var result = $('#result');
		// BootstrapDialog.alert('I want banana!');
		$.ajax({
			// data: parametros, //datos que se envian
			data: $(this).serialize(), //de esta forma se evita el crear esa var parametros o asi data: $("#main-contact-form").serialize(),
			// url: $(this).attr('action'), si se pone en el action se redirecciona
			url: './buscar_db.php',
			type: 'POST',
			error: function(){
				alert(" Error en el servidor");
			},
			success: function(data) {
	         	result.html(data);
	        }
		});
	});