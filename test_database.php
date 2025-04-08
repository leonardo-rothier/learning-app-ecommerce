<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Teste a conexão com o banco de dados
$link = mysqli_connect('ecomdb', 'ecomuser', '@Ecomuser123', 'ecomdb');

if (!$link) {
    die('<h2 style="color:red;">❌ Falha na conexão: ' . mysqli_connect_error() . '</h2>');
}
echo '<h2 style="color:green;">✅ Conectado com sucesso!</h2>';

phpinfo();
?>

