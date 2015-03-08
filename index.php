<?php

/*
/app
	index.php
	login.php
	/admin
		index.php
		dashboard.php
		/functions

*/

session_start();
// Usuário Logado
if(!isset($_SESSION['user'])){header('Location: http://localhost/sessao/login.php?page=login');}
?>


<!--  MENU  -->
    <nav class="menu"> 
		<ul>
	       <li><a href="index.php?page=inicio">INÍCIO</a></li>
	       <li><a href="index.php?page=login">LOGIN</a></li>
	       <li><a href="index.php?page=cadastro">CADASTRO</a></li>
		</ul>
	</nav>

<?php

$page = isset($_GET['page'])?$_GET['page']:'inicio';
			include "$page.php";