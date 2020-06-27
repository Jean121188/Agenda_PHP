<?php
	include_once("classes/ConexaoMySql.php");
	$list = new ConexaoMySql();
	$comando = $_GET['comando'];
	if($comando =="Alterar"){
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'a%' ORDER BY agenda_nome ASC");
		echo "<b>"."A"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'b%' ORDER BY agenda_nome ASC");
		echo "<b>"."B"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'c%' ORDER BY agenda_nome ASC");
		echo "<b>"."C"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'd%' ORDER BY agenda_nome ASC");
		echo "<b>"."D"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'e%' ORDER BY agenda_nome ASC");
		echo "<b>"."E"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'f%' ORDER BY agenda_nome ASC");
		echo "<b>"."F"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'g%' ORDER BY agenda_nome ASC");
		echo "<b>"."G"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'h%' ORDER BY agenda_nome ASC");
		echo "<b>"."H"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'i%' ORDER BY agenda_nome ASC");
		echo "<b>"."I"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'j%' ORDER BY agenda_nome ASC");
		echo "<b>"."J"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'k%' ORDER BY agenda_nome ASC");
		echo "<b>"."K"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'l%' ORDER BY agenda_nome ASC");
		echo "<b>"."L"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'm%' ORDER BY agenda_nome ASC");
		echo "<b>"."M"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'n%' ORDER BY agenda_nome ASC");
		echo "<b>"."N"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'o%' ORDER BY agenda_nome ASC");
		echo "<b>"."O"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'p%' ORDER BY agenda_nome ASC");
		echo "<b>"."P"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'q%' ORDER BY agenda_nome ASC");
		echo "<b>"."Q"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'r%' ORDER BY agenda_nome ASC");
		echo "<b>"."R"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 's%' ORDER BY agenda_nome ASC");
		echo "<b>"."S"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 't%' ORDER BY agenda_nome ASC");
		echo "<b>"."T"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'u%' ORDER BY agenda_nome ASC");
		echo "<b>"."U"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'v%' ORDER BY agenda_nome ASC");
		echo "<b>"."V"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'x%' ORDER BY agenda_nome ASC");
		echo "<b>"."X"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'w%' ORDER BY agenda_nome ASC");
		echo "<b>"."W"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'y%' ORDER BY agenda_nome ASC");
		echo "<b>"."Y"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
		echo "<p />";
		$result = $list->executaSQL("SELECT agenda_nome, agenda_tel_fixo FROM agenda WHERE agenda_nome LIKE 'z%' ORDER BY agenda_nome ASC");
		echo "<b>"."Z"."</b><br />";
		while($lin = $list->listar($result)){
			echo $lin["agenda_nome"]." - ";
			echo $lin["agenda_tel_fixo"]."<br />";
		};
	}elseif($comando=="Excluir"){
		$result = $list->executaSQL("SELECT agenda_id, agenda_nome FROM agenda ORDER BY agenda_nome ASC");
		echo "<p />";
		while($lin = $list->listar($result)){
			echo "<a href='php/excluir.php?id=".$lin["agenda_id"]."'>".$lin["agenda_nome"]."</a><br />";
		};
	}
?>