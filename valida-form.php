<?php 
	if(isset($_POST['bnt-login'])){
		$form['user'] = mysql_real_escape_string($_POST['usuario']);
		$form['pass'] = mysql_real_escape_string($_POST['senha']);

			if(empty($form{'user'})){			
				header('Location: http://localhost/sessao/login.php?page=login?&error=1');
	    	}elseif (empty($form['pass'])){
	    		header('Location: http://localhost/sessao/login.php?page=login?&error=2');
	    	}elseif ($form['user'] != 'willian'){
	    		header('Location: http://localhost/sessao/login.php?page=login?&error=3');
	    	}
	}
