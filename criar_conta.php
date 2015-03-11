

<div class="container clearfix">
	<form action="valida_cadastro.php" name="frm_cadastro" method="post">
		<fieldset class="box-login">

				<!-- Tratamento de erros -->
				<?php 
				if(isset($_GET['alert'])){
					$pegaAlert = $_GET['alert']; 
					switch ($pegaAlert){
						case 1:
						 echo '<div class="alert atencao"><p>Preencha todos os campos!</p></div>';
						break;
						}
					}

				?>

			<label for="nome">Nome</label>
			<input name="nome" id="nome" type="text">
			<br/><br/>

			<label for="usuario">Usuário</label>
			<input name="usuario" id="usuario" type="text">
			<br/><br/>

			<label for="senha">Senha</label>
			<input name="senha" id="senha" type="password">
			<br/><br/>

			<label for="email">E-mail</label>
			<input name="email" id="email" type="email">
			<br/><br/>

			<input type="submit" class="bnt" name="bnt-cadastro" value="Cadastrar">
			<input type="reset" class="bnt" name="bnt-limpar" value="Limpar">
		</fieldset>
	</form>	


</div>