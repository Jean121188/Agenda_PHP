<?php
	include_once("classes/ConexaoMySql.php");
	$pes = new ConexaoMySql();
	$text = $_POST['pesquisa'];
	$res = $pes->executaSQL("select * from agenda where agenda_nome like '%$text%'");
	$NumLi = $pes->NumLinhas($res);
	if($NumLi == 0){
		echo "A Pesquisa Não retornou nenhum Resulato com a palavra '$text' Clique em Cadastrar para Incluir mais um Contato";
	}elseif($NumLi > 1){
		echo "A Pesquisa retornou mais de um resultado";
	}
?>
<HTML lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8 />
<script type="text/javascript" src="javascipt/script.js"></script>
<link href='http://fonts.googleapis.com/css?family=Nobile' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/xp10.css" />
</head>
<body>
	<table>
		<tr>
			<td colspan="6" align="center">Contato(s)</td>
		</tr>
		<tr>
	<?php while($lin = $pes->listar($res)){ ?>		
			<td><b>Nome</b></td>
			<td><?php echo $lin["agenda_nome"]; ?></td>
			<td>Celular</td>
			<td><?php echo $lin["agende_tel_movel"]; ?></td>
			<td>Telefone</td>
			<td><?php echo $lin["agenda_tel_fixo"]; ?></td>
			<td><a id="link_pes" href="<?php echo $lin["agenda_id"];?>"><img src="img/explorer.png" height="27px" width="27px" title="Clique aqui para detalhar"></a></img></td>
		</tr>
	<?php };?>	
	</table>
</body>
</html>	