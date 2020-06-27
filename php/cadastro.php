<?php
/*Cadastro.php*/
include_once("classes/ManipulcaoDeDados.php");
$grava = new ManipulacaoDeDados();
	//Pega Dados
	$nome 		= $_POST["nome"];
	$tel_fixo 	= $_POST["tel_fixo"];
	$tel_movel 	= $_POST["tel_movel"];
	$que_trab 	= $_POST["trab"];
	$rua		= $_POST["rua"];
	$num		= $_POST["num"];
	$bairro		= $_POST["bairro"];
	$cidade		= $_POST["cidade"];
	$estado		= $_POST["estado"];
	$texto		= $_POST["texto"];
	// fim pega dados
	$grava->setTabela("agenda");
	$grava->setCampos("
	agenda_nome,
	agenda_tel_fixo,
	agende_tel_movel,
	agenda_referencia,
	agenda_rua,
	agenda_num,
	agenda_bairro,
	agenda_cidade,
	agenda_estado,
	agenda_texto
	");
	$grava->setDados("
	'$nome',
	'$tel_fixo',
	'$tel_movel',
	'$que_trab',
	'$rua',
	'$num',
	'$bairro',
	'$cidade',
	'$estado',
	'$texto'
	");
?>
<script type='text/javascript'>
		var text;
		var reso = confirm('Deseja Gravar o Contato?');
		if(reso == true){
			<?php $grava->inserir(); ?>
			document.formulario.reset();
			document.getElementById("cad_est").focus();
		}else{
			alert('Contato Cancelado!');
		}
</script>
