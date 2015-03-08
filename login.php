
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo-form-login.css">
</head>

<header id="header">
	<div class="container"> 
		<h1>Willian Monteiro</h1>
		<div class="cad"><a href="cadastro.php">Cadastrar-se</a></div>
	</div>

</header>
<div class="container clearfix">
	 <div class="centraliza-form">	 	
		<form action="valida-form.php" method="post" name="frm-login" class="frm-login">
			<fieldset class="box-login">

				<div style="display:none;">
					<div class="alert error"><p>Erro</p></div>
					<div class="alert atencao"><p>Alerta</p></div>
					<div class="alert sucesso"><p>Sucesso</p></div>
				</div>


				<?php 

				/*	if(isset($_GET['error'])){
					$pegaErro = $_GET['error']; 
						echo $pegaErro;
					}*/

					switch (isset($_GET['error'])) {
						case 0:
							echo '';
							break;

						case $_GET['error'] == '1':
							echo '<div class="alert atencao"><p> ! Digite seu usuário</p></div>';
							break;
						case $_GET['error'] == '2':
						     echo '<div class="alert atencao"><p>Digite sua senha</p></div>';
						break;

						case $_GET['error'] == '3':
						     echo '<div class="alert error"><p>Usuário ou senha incorretos</p></div>';
						break;

					}

				?>


				<!-- USUARIO -->
				<label for="user">Usuário</label><br/>
				<input name="usuario" id="user" type="text" placeholder=" Digite o nome de usuário">
				<br/><br/>


			<!-- SENHA -->
				<label for="pass">Senha</label><br/>
				<input name="senha" id="pass" type="password" placeholder=" Digite sua senha">
				<br/><br/>

			<!-- LOGIN-->
				<input name="bnt-login" class="bnt-login" type="submit" value="Entrar">

			</fieldset>
		</form>
	</div>
</div>