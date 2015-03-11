<?php 

require "system/config.php";

// Pega os dados do formulário de login
if(isset($_POST['bnt-login'])){
	$usuario = mysql_real_escape_string(trim($_POST['usuario']));
	$senha   = mysql_real_escape_string(trim($_POST['senha']));

	$alert = 0; 

	// Valida o login
	if(empty($usuario)) {			
		$alert = 1;
		header("Location: ".BASE_URL."?page=login&alert=$alert");
    	}elseif(empty($senha)) {
    		$alert = 2;
    		header("Location: ".BASE_URL."?page=login&alert=$alert");
    	}else{
    		// Criptografa Senha
    		$senhaCriptografada = md5($senha);

	   		// Prepara os dados
			$consulta=$conn->prepare("SELECT * FROM usuarios WHERE usuario =:user AND senha = :pass"); 
			$consulta->bindValue(":user", $usuario); 
			$consulta->bindValue(":pass", $senhaCriptografada); 

			// Executa a consulta 
			$consulta->execute(); 

			// Obtem linha consultada 
			$linha = $consulta->fetchObject(); 

				// Se a linha existe: Abre a sessão e redireciona para o painel Administrativo
				if($linha !=0){
					session_start();	
					$_SESSION['logado'] = 	true;		
					$_SESSION['usuario'] = 	$usuario;
					header('Location: '.BASE_URL.'/admin');

				}else{
					$alert = 3;
					// Redireciona para o login com a mensagem de erro
					header("Location: ".BASE_URL."?page=login&alert=$alert");
				}
		}
}
