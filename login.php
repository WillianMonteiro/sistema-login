<div class="container clearfix">
	 <div class="centraliza-form">	 	
		<form action="valida-form.php" method="post" name="frm-login" class="frm-login">
			<fieldset class="box-login">
				<?php 
					if(isset($_GET['error'])){
						$pegaErro = $_GET['error']; 
						switch ($pegaErro) {
							case 1:
								echo '<div class="alert atencao"><p> ! Digite seu usuário</p></div>';
							break;
							case 2:
							     echo '<div class="alert atencao"><p>Digite sua senha</p></div>';
							break;

							case 3:
							     	echo '<div class="alert error"><p>Usuário ou senha incorretos</p></div>';
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
				<input name="bnt-login" class="bnt-login" type="submit" value="Entrar">

			</fieldset>
		</form>
	</div>
</div>
