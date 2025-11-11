<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); // Seu usuário (padrão do XAMPP é root)
define('DB_PASSWORD', '');     // Sua senha (padrão do XAMPP é vazia)
define('DB_NAME', 'gestor_max');

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Define o charset para UTF-8 para evitar problemas com acentuação
$conn->set_charset("utf8");
