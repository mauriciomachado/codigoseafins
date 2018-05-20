<?php



$servidor = 'localhost';
$usuario = 'nicew021_natan';
$senha = '8LKTH3HO^~C=';
$banco = 'nicew021_natan';

// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>   