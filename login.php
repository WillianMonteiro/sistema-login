<?php session_start();


require "system/config.php";

// Se ja esta logado, quando clicar em login leva para a página que contém informações de sua conta.
if(isset($_SESSION['logado']) && $_SESSION['logado'] = true ){

	header('Location: '.BASE_URL.'/admin?page=conta');
}

?>

<!-- COLOQUEI ESSE HEAD POR QUE QUANDO A PAGINA login.php CHAMA O FORMULÁRIO (sessao/login.php?page=login) NÃO TAVA PEGANDO O ESTILO -->
<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class="container clearfix">
	 <div class="centraliza-form">	 	
		<form action="valida_login.php" method="post" name="frm-login" class="frm-login">
			<fieldset class="box-login">

			<!-- Tratamento de erros -->
				<?php 
					if(isset($_GET['alert'])){
						$pegaAlert = $_GET['alert']; 
						switch ($pegaAlert) {
							case 1:
								echo '<div class="alert atencao"><p> ! Digite seu usuário</p></div>';
							break;
							case 2:
							     echo '<div class="alert atencao"><p>Digite sua senha</p></div>';
							break;

							case 3:
							     	echo '<div class="alert error"><p>Usuário ou senha incorretos</p></div>';
							break;	

							case 4:
							     	echo '<div class="alert sucesso"><p>Cadastrado com sucesso!</p></div>';
							break;							
						

						}
					}

				?>

			<!-- USUARIO -->
				<label for="user">Usuário</label><br/>
				<input name="usuario" id="user" type="text" placeholder="Digite o nome de usuário">
				<br/><br/>


			<!-- SENHA -->
				<label for="pass">Senha</label><br/>
				<input name="senha" id="pass" type="password" placeholder=" Digite sua senha">
				<br/><br/>

			<!-- LOGIN-->
				<input name="bnt-login" class="bnt" type="submit" value="Entrar">

			</fieldset>
		</form>
	</div>
</div>
