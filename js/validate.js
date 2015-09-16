$().ready(function(){
	
	jQuery.validator.addMethod("lettersonly", function(value, element) {
  		return this.optional(element) || /^[a-z]+$/i.test(value);
	}, "Introduce solo letras");
	
	$("#form").validate({
		rules:{
			nombre:{
				lettersonly: true
			},
			apellidos:{
				required: true
			},
			email:{
				required: true,
				email: true
			},
			celular:{
				required: true,
				maxlength: 10,
				numbersonly: true
			},
			
		},

		messages:{
			nombre:{
				required: "Necesitas ingresar tu nombre"
			},
			apellidos:{
				required: "Necesitas ingresar tus apellidos"
			},
			email:{
				required: "Necesitas ingresar tu correo"
			},
			celular:{
				required: "Tu celular a 10 digitos"
			},
		}
	});
	
});