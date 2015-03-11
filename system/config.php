<?php

// Base do sistema
define('BASE_URL', '/sessao');

// Conexão com banco de dados
try{
	$conn = new PDO('mysql:host=localhost;dbname=login', 'root', '');
}catch(PDOException $erro){
	echo '<strong>Erro:</strong> '.$erro->getMessage();
}