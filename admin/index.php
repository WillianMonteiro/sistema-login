<?php
session_start();

require "../system/config.php";

if( ! isset($_SESSION['logado']) && $_SESSION['logado'] != true ){
	header('Location: '.BASE_URL.'?page=login');
}

if( isset($_GET['page']) && $_GET['page'] == 'logout' ){
	session_destroy();
	header('Location: '.BASE_URL);
}

?>
<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<title> Sistema Administrativo </title>
	</head>
	<body>
		<header id="header">
			<h3 class="logo">Willian Monteiro - <small>Olá, <?php echo  $_SESSION['usuario']; ?></small></h3>
			<!--  MENU  -->
			<nav class="menu"> 
				<ul>
			       		<li><a href="<?php echo BASE_URL; ?>">INÍCIO</a></li>
			       		<li><a href="#">POSTS</a></li>
			       		<li><a href="#">MINHA CONTA</a></li>
			       		<li><a href="<?php echo BASE_URL; ?>/admin/?page=logout" class="logout">SAIR</a></li>
				</ul>
			</nav>
		</header>
		<?php
		$page = isset($_GET['page'])?$_GET['page'] : 'home';
		include "$page.php";
		?>
	</body>
</html>
