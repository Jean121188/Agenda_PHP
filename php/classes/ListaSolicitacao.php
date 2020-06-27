<?php
	include_once("ConexaoMySql.php");
	
	class ListaSolicitacao extends ConexaoMySql{
		
		public function ListaDeSolicitacao(){
			$Qry = self::executaSQL("SELECT * FROM solicitacao");
				while($dados = self::listar($Qry)){
					echo "<tr><td>".$dados['sol_cliente']."</td>";
					echo "<td>".$dados['sol_email']."</td>";
					echo "<td><a href='acao=ver&id=".$dados['sol_cliente']."'> Verificar </a></td>";
					echo "<td><a href='acao=exc&id=".$dados['sol_cliente']."'> Excluir </a></td></tr>";
				}
		}
		
		public function NumSolicitacoes(){
			$Qry = self::executaSQL("SELECT * FROM solicitacao");
			$Num = mysql_num_rows($Qry);
			return $Num;
		}
		
		public function NumClientes(){
			$Qry = self::executaSQL("SELECT * FROM cliente");
			$Num = mysql_num_rows($Qry);
			return $Num;
		}
	}
?>