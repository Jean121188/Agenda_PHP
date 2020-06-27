<?php
include_once("classes/ConexaoMySql.php");
$comando = $_POST['comando'];
$detalhar = new ConexaoMySql();
$result = $detalhar->executaSQL("SELECT * FROM agenda WHERE agenda_id = '$comando'");		
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="../javascipt/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../javascipt/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css"></link>
<link href='http://fonts.googleapis.com/css?family=Nobile' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../css/formulario.css"></link>
<form name="formulario" id="formulario" action="#">
	<fieldset><legend><span id="frase"><b>Detalhes</b></span></legend>
<?php	
	while($lin = $detalhar->listar($result)){
			echo "<span id='frase'> ID: </span> <input type='text' size='4' id='infos' value=".$lin["agenda_id"]."></input>";
			echo "<span id='frase'> NOME: </span><input type='text' id='infos' value=".$lin["agenda_nome"]."></input>";
			echo "<span id='frase'> TEL FIXO: </span><input type='text' id='infos' value=".$lin["agenda_tel_fixo"]."></input><p />";
			echo "<span id='frase'> TEL MOVEL: </span><input type='text' id='infos' value=".$lin["agende_tel_movel"]."></input>";
			echo "<span id='frase'> REFERENCIA: </span><input type='text' id='infos' value=".$lin["agenda_referencia"]."></input>";
			echo "<span id='frase'> RUA: </span><input type='text' id='infos' value=".$lin["agenda_rua"]."></input><p />";
			echo "<span id='frase'> NUMERO: </span><input type='text' size='4' id='infos' value=".$lin["agenda_num"]."></input>";
			echo "<span id='frase'> BAIRRO: </span><input type='text' id='infos' value=".$lin["agenda_bairro"]."></input>";
			echo "<span id='frase'> CIDADE: </span><input type='text' id='infos' value=".$lin["agenda_cidade"]."></input>";
			echo "<span id='frase'> ESTADO: </span><input type='text' size='4' id='infos' value=".$lin["agenda_estado"]."></input><p />";
			echo "<span id='frase'> TEXTO: </span><textarea rows='4' cols='50' id='infos'>".$lin["agenda_texto"]."</textarea>";
			// teste
			/*echo $lin["agenda_id"]."<br />";
			echo $lin["agenda_nome"]."<br />";
			echo $lin["agenda_tel_fixo"]."<br />";
			echo $lin["agende_tel_movel"]."<br />";
			echo $lin["agenda_referencia"]."<br />";
			echo $lin["agenda_rua"]."<br />";
			echo $lin["agenda_num"]."<br />";
			echo $lin["agenda_bairro"]."<br />";
			echo $lin["agenda_cidade"]."<br />";
			echo $lin["agenda_estado"]."<br />";
			echo $lin["agenda_texto"]."<br />";*/
		};
?>
	</fieldset>
</form>