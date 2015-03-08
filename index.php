<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title> Sistema Administrativo </title>
	</head>
	<body>
		<header id="header">
			<h3 class="logo">Willian Monteiro</h3>
			<!--  MENU  -->
			<nav class="menu"> 
				<ul>
			       		<li><a href="index.php?page=inicio">INÍCIO</a></li>
			       		<li><a href="index.php?page=login">LOGIN</a></li>
			       		<li><a href="index.php?page=cadastro">CADASTRO</a></li>
				</ul>
			</nav>
		</header>
		<?php
		$page = isset($_GET['page'])?$_GET['page'] : 'login';
		include "$page.php";
		?>
	</body>
</html>
