<?php
	class ConexaoMySql{
		protected 	$Servidor,
					$Usuario,
					$Senha,
					$Banco,
					$Conexao,
					$Qry,
					$Dados,
					$Linhas;
		
		function __construct(){
			$this->Servidor ="127.0.0.1";
			$this->Usuario	="root";
			$this->Senha	="";
			$this->Banco	="agenda";
			self::conectar(); // Self invoca netodos dentro de uma classe
		}
		
		function conectar(){
			$this->Conexao 	= @mysql_connect($this->Servidor,$this->Usuario,$this->Senha) or die ("Nao Foi Possivel Conectar ao Servidor $this->Servidor".mysql_error());
			$this->Banco	= @mysql_select_db($this->Banco) or die("Nao Foi Pessivel Conectar ao Banco de Dados ".mysql_error());
		}
		
		// Metodo Executa SQL
		
		function executaSQL($sql){
			$this->Qry	= @mysql_query($sql) or die("Nao foi possivel Executar o Comando SQL: $sql <br />".mysql_error());
			return $this->Qry;
		}
		
		// Metodo Listar
		
		public function listar($qr){
			$this->Dados = @mysql_fetch_array($qr);
			return $this->Dados;
		}
		
		public function NumLinhas($qr){
			$this->Linhas = @mysql_num_rows($qr);
			return $this->Linhas;
		}
	}
?>