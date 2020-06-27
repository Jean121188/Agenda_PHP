<?php
	include_once("ConexaoMySql.php");
	
	class ManipulacaoDeDados extends ConexaoMySql {
		protected $Sql;
		protected $Tabela;
		protected $Campos;
		protected $Dados;
		protected $Msg;
		protected $ValorNaTabela;
		protected $ValorPesquisa;
		
		public function setTabela($tbl){
			$this->Tabela = $tbl;
		}
		
		public function setCampos($campo){
			$this->Campos = $campo;
		}
		
		public function setDados($dados){
			$this->Dados = $dados;
		}
		
		public function getMsg(){
			return $this->Msg;
		}
		
		public function setValorNaTabela($ValTa){
			return $this->ValorNaTabela = $ValTa;
		}
		
		public function setValorPesquisa($ValPes){
			return $this->ValorPesquisa = $ValPes;
		}
		
		public function inserir(){
			$this->Sql = "INSERT INTO $this->Tabela ($this->Campos) VALUES ($this->Dados)";
			if(parent::executaSQL($this->Sql)){
				$this->Msg = "Registro Completado com Sucesso!";
			}
		}
		
		public function excluir(){
			$this->Sql = "DELETE FROM $this->Tabela WHERE $this->ValorNaTabela = '$this->ValorPesquisa'";
			if(parent::executaSQL($this->Sql)){
				$this->Msg = "Registro Excluido com Sucesso";
			}
		}
		
		public function editar(){
			$this->Sql = "UPDATE $this->Tabela SET $this->Campos WHERE $this->ValorNaTabela = '$this->ValorPesquisa'";
			if(parent::executaSQL($this->Sql)){
				$this->Msg = "Registro Alterado com Sucesso!";
			}
		}
		
		public function GetExib(){
			return $this->Sql;
		}
		
	}
?>