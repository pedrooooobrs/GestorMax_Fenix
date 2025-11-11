<?php
// Este arquivo deve ser chamado DEPOIS de session_start()
// (que já está no header.php)

if (!isset($_SESSION['id_usuario'])) {
    // Se não estiver logado, redireciona para o login
    header("Location: /index.php"); // Ajuste o caminho se necessário
    exit;
}
?>