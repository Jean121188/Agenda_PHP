<?php
include_once("ConexaoMySql.php");
class Session extends ConexaoMySql{	
	protected 	$Login,
				$Senha,
				$Msg;
	function setLogin($login){
		$this->Login = $login;
	}
	function setSenha($senha){
		$this->Senha = $senha;
	}
	function getMsg(){
		return $this->Msg;
	}
	public function IniciaSession(){	
		$Sql = self::executaSQL("SELECT usu_nome, usu_senha FROM usuario WHERE usu_nome = '$this->Login' and usu_senha = '$this->Senha'");
		$linhas = self::NumLinhas($Sql);
			if($linhas == 1){
				session_start();
				$_SESSION['login'] = $this->Login;
				$_SESSION['senha'] = $this->Senha;
				header("Location:Index.php");
			}else{
				$this->Msg = '<a href="javascript:history.go(-1)">Usuario ou senha Invavidos </a>';
			}
		}
	public function SessionAcao(){
		@session_start();
		if(isset($_SESSION['login'])){
			/* Define o limitador de cache para 'private' */
			session_cache_limiter('private');
			$cache_limiter = session_cache_limiter();

			/* Define o limite de tempo do cache em 10 minutos */
			session_cache_expire(10);
			$cache_expire = session_cache_expire();
		}else{
		header("Location:Login.php");
		}
	}
	public function SessionDestroy($destroy){
		if($destroy == "sim"){
			SESSION_DESTROY($_SESSION['login']);
			header("Location:Login.php");
		}else{
			$this->Msg = "A Session nao foi destruida!";
		}
	}
}
?>