<?php require "system/config.php";

//Pega os dados do formulário
if(isset($_POST['bnt-cadastro'])){
	$nome    = mysql_real_escape_string(trim($_POST['nome']));
	$usuario = mysql_real_escape_string(trim($_POST['usuario']));
	$senha   = md5(mysql_real_escape_string(trim($_POST['senha'])));
	$email   = mysql_real_escape_string(trim($_POST['email']));

	// Valida os campos do formulário
	 if(empty($nome) || empty($usuario) || empty($senha) || empty($email)){
	 	$alert ='1';
	 	header("Location: ".BASE_URL."?page=criar_conta&alert=".$erro);
	 }else{
	 	// Prepara o cadastro
	 	$insereDados=$conn->prepare("INSERT INTO usuarios (nome,usuario,senha,email) VALUES (:nome,:usuario,:senha,:email)");
		 	$insereDados->bindValue(":nome", $nome);
		 	$insereDados->bindValue(":usuario", $usuario);
		 	$insereDados->bindValue(":senha", $senha);
		 	$insereDados->bindValue(":email", $email);
		 // Executa o cadastro
		 $insereDados->execute();

		// Redireciona para a página de login
	 	$alert = '4';
	 	header("Location: ".BASE_URL."?page=login&alert=".$alert);
	 }
}	
 ?>