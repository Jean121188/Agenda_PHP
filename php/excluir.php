<?php
	include_once("classes/ManipulcaoDeDados.php");
	$exc = new ManipulacaoDeDados();
	$indice = $_GET["id"];
	$exc->setTabela("agenda");
	$exc->setValorNaTabela("agenda_id");
	$exc->setValorPesquisa("$indice");
?>
<script type='text/javascript'>
	var comando = confirm("Tem certeza Que Deseja Excluir este Contato?");
	if(comando == true){
		<?php
		$exc->excluir();
		?>
		window.history.go(-1);
	}else if(comando == false){
		window.history.go(-1);
	}
</script>