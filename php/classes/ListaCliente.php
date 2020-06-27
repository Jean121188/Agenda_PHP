<?php
	include_once("ConexaoMySql.php");
	
	class ListaCliente extends ConexaoMySql{
		
		public function ListaDeClientes(){
			$Qry = self::executaSQL("SELECT * FROM cliente ORDER BY cli_nome");
				while($dados = self::listar($Qry)){
					echo "<tr><td>".$dados['cli_nome']."</td>";
					echo "<td>".$dados['cli_email']."</td>";
					echo "<td><a id='cx_dia' href='acao=ver&id=".$dados['cli_id']."'> Verificar </a></td>";
					echo "<td><a href='acao=alt&id=".$dados['cli_id']."'> Alterar </a></td>";
					echo "<td><a href='acao=exc&id=".$dados['cli_id']."'> Excluir </a></td></tr>";
				}
		}
	}
?>