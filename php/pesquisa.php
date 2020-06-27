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
<?php while($lin = $pes->listar($res)){ ?>
<!-- estilo JQUery -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="javascipt/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="javascipt/jquery-ui.min.js"></script>
<script type="text/javascript" src="javascipt/script.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css"></link>
<!-- estilo JQUery -->
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Informações</a></li>
    <li><a href="#tabs-2">Produtos</a></li>
  </ul>
  <div id="tabs-1">
    Nome: <input type="text" id="infos" value="<?php echo $lin["agenda_nome"]; ?>" readonly="readonly" size="30"/>
	Telefone Fixo: <input type="text" id="infos" value="<?php echo $lin["agenda_tel_fixo"]; ?>" readonly="readonly" />
	Telefone Celular: <input type="text" id="infos" value="<?php echo $lin["agende_tel_movel"]; ?>" readonly="readonly" />
	<hr />
	Rua: <input type="text" id="infos" value="<?php echo $lin["agenda_rua"]; ?>" readonly="readonly" />
	Nº: <input type="text" id="infos" value="<?php echo $lin["agenda_num"]; ?>" readonly="readonly" size="3"/>
	Bairro: <input type="text" id="infos" value="<?php echo $lin["agenda_bairro"]; ?>" readonly="readonly" />
	Cidade: <input type="text" id="infos" value="<?php echo $lin["agenda_cidade"]; ?>" readonly="readonly" />
	Estado: <input type="text" id="infos" value="<?php echo $lin["agenda_estado"]; ?>" readonly="readonly" size="3"/>
	<hr />
  </div>
  <div id="tabs-2">
    <p><?php echo $lin["agenda_texto"]; ?></p>
  </div>
</div>
<?php };?>