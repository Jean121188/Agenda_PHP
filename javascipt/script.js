$(document).ready(function(){
	$("#text").focus();
	$("#submeter").button();
	$("#tabs").tabs();
	$("input[type=button]").button();
	// Validação com Plugin
	$("input[type=submit]").click(function(){
		if($("#text").val() == ""){
			$("#text").css("border","1px solid red");
			$("#tabs").css("color","red").text("Caixa de Texto Vazia!");
			return false;
		}
	});
	// Fim da Validação
	// Envia Formulario requisitando Digite o Nome do Contato
	$("#home").load("home.html");
	$(".form").submit(function(){
	$("#home").hide();
		$.ajax({
			url:'php/lista_xp10.php',
			type:'post',
			data: $(".form").serialize(),
			success: function(data){
				$("#tabs").html(data);
			}
		});
	return false;	
	});	
	// Fim da Pesquisa
	// Cadastro
	$(".cadastrar").click(function(){
		$("#home").hide();
		$("#cadastro").load("cadastro.html");
	});
	//Fim cadastro
	// Comando Alterar
		$(".alterar").click(function(){
			$.ajax({
				url:"php/listar.php",
				type: 'get',
				data: "comando=Alterar",
				success: function(data){
					$("#alterar").html(data);
				}
			});
		});
	//Fim do Comando de Alterar
	// Excluir
	$(".excluir").click(function(){	
	$("#home").hide();
			$.ajax({
				url:"php/listar.php",
				type: 'get',
				data: "comando=Excluir",
				success: function(data){
					$("#alterar").html(data);
				}
			});	
		});
	// Fim de Excluir
	// Grafico
		$("#grafico").load('chart.html');
	// Fim do Grafico
	// Exibir mais dados
		var link = $("#link_pes").attr("href");
		$("img").click(function(){
			$.ajax({
				url:"php/detalhar.php",
				type: 'post',
				data: "comando="+link,
				success: function(data){
					$("#detalhar").html(data).show();
					//alert(data);
				}
			});
			return false;
		});
	// fim exibir mais dados
	// auto complete
	
});