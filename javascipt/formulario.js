$(document).ready(function(){
	$("input[name=nome]").focus();
	$("input[type=submit]").button();
	$("input[type=reset]").button();
	
	// Plugin Mascara
	$("input[name=tel_fixo]").mask("(99) 9999-9999");
	$("input[name=tel_movel]").mask("(99) 9999-9999");
	$("input[name=estado]").mask("**");
	// Fim Plugin Mascara
	
	//Script EXECUÇÃO
	$("#formulario").submit(function(){
		$.ajax({
			url:'php/cadastro.php',
			type:'post',
			data: $("#formulario").serialize(),
			success: function(data){
				//resp_form
				//alert("Enviado!");
				$("#resp_form").html(data);
			}
		});
	return false;	
	});	
	//fim Script EXECUÇÃO
});