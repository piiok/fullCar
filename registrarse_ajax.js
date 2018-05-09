		$("#pass").keypress(function(e) {
		       if(e.which == 13) {
		          $("#parte1").css("display", "none");
		          $("#parte2").css("display", "inline");
		       }
		   });

		$( "#c1" ).click(function() {
  			$("#parte1").css("display", "none");
  			$("#parte2").css("display", "inline");
		});
		$( "#a1" ).click(function() {
  			window.location.href = "./inicio.php";
		});

		$( "#c2" ).click(function() {
  			$("#parte2").css("display", "none");
  			$("#parte3").css("display", "inline");
		});
		$( "#a2" ).click(function() {
  			$("#parte2").css("display", "none");
  			$("#parte1").css("display", "inline");
		});

		$( "#a3" ).click(function() {
  			$("#parte3").css("display", "none");
  			$("#parte2").css("display", "inline");
		});

	// var form = $('#form_reg1');

	// form.submit(function(event){
	// 	event.preventDefault();
 //        // ventana.setModalBody().css('width','400px');
	// 	// var parametros = {
 //  //               "name" : $('#name').value,
 //  //               "email" : $('#email').value,
 //  //               "subject" : $('#subject').value,
 //  //               "message" : $('#message').value
 //  //       };
 //  		var param = $(this).serialize();
	// 	$.ajax({
	// 		// data: parametros, //datos que se envian
	// 		dataType: 'json',
	// 		data: param, //de esta forma se evita el crear esa var parametros o asi data: $("#main-contact-form").serialize(),
	// 		// url: $(this).attr('action'), si se pone en el action se redirecciona
	// 		url: './sendemail.php',
	// 		type: 'POST',
	// 		error: function(){
	// 			ventana.setMessage('<center><img src="./img/error-500.png"><br><br>Error en el servidor, vuelve a intentarlo...</center>');
	// 			ventana.setClosable(true);
	// 		}

	// 		// beforeSend: function(){
	// 		// 	form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Enviando correo...</p>').fadeIn() );
	// 		// }
	// 	}).done(function(data){
	// 		// form_status.html('<p class="text-success">Gracias por contactarnos. Tu mensaje ha sido enviado y responderemos lo mas pronto posible.</p>').delay(3000).fadeOut();
	// 		if (data) {
	// 			ventana.setMessage('<style>.wrapper {width: 100px;}.checkmark {stroke: green;stroke-dashoffset: 745.74853515625;stroke-dasharray: 745.74853515625;animation: dash 2s ease-out forwards infinite;}@keyframes dash {0% {stroke-dashoffset: 745.74853515625;}100% {stroke-dashoffset: 0;}}</style><center><div class="wrapper"><br><svg  id="Layer_1" x="0px" y="0px"viewBox="0 0 98.5 98.5" enable-background="new 0 0 98.5 98.5" xml:space="preserve"><path class="checkmark" fill="none" stroke-width="8" stroke-miterlimit="10" d="M81.7,17.8C73.5,9.3,62,4,49.2,4C24.3,4,4,24.3,4,49.2s20.3,45.2,45.2,45.2s45.2-20.3,45.2-45.2c0-8.6-2.4-16.6-6.5-23.4l0,0L45.6,68.2L24.7,47.3"/></svg></div><br>Gracias por contactarnos.<br>Tu mensaje ha sido enviado y responderemos lo mas pronto posible.</center>');
	// 		}else{
	// 			ventana.setMessage('<style type="text/css">svg {stroke:red;width: 128px;}circle, .checkmark ,.checkmark2 {fill: none;stroke: red;stroke-width: 8px;stroke-linecap: square;stroke-miterlimit: 10;stroke-dasharray: 400;opacity: 1;}.checkmark {animation: checkmark-stroke 4s ease-out forwards infinite;}.checkmark2 {animation: checkmark-stroke2 4s ease-out forwards infinite;}@keyframes checkmark-stroke {0%{opacity: 0;}49%{opacity: 0;}50% {stroke-dashoffset: 400;opacity: 1;}75% {stroke-dashoffset: 0;}}@keyframes checkmark-stroke2 {0%{opacity: 0;}65% {opacity: 0;}66% {stroke-dashoffset: 400;opacity: 1;}100%{stroke-dashoffset: 0;opacity: 1;}}circle {animation-iteration-count:infinite;animation: circle-stroke 4s ease-out forwards infinite;}@keyframes circle-stroke {0% {stroke-dashoffset: -400;}50% {stroke-dashoffset: 0;}}</style><br><center><svg ><circle id="circle" cx="64" cy="64" r="59.4" /><path class="checkmark" d="M 35 35 93 93"/><path class="checkmark2" d="M 93 35 35 93"/></svg><br>El correo no pudo ser enviado.<br>Vuelve a intentarlo...</center>');
	// 		}
	// 		ventana.setClosable(true);
	// 	});
	// });