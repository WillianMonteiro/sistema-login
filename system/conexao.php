<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BD'  , 'login');

    $conn = mysql_connect(HOST, USER, PASS) or die ('Erro ao conectar: <strong>'.mysql_error().'</strong>');
    $db = mysql_select_db(BD) or die('Erro ao selecionar o banco: <strong>'.mysql_error().'</strong>');
    
?>