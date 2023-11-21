<?php
session_start(); // Inicia a sessão se ainda não estiver iniciada

// Verifique se o usuário está autenticado (ou seja, se a variável de sessão 'logged_in' está definida como verdadeira)
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Destrua todas as variáveis de sessão
    session_destroy();
    
    // Redirecione para a página de login ou outra página após o logout
    header("Location: index.php"); // Substitua "login.php" pelo URL da sua página de login
    exit();
} else {
    // Se o usuário não estiver autenticado, simplesmente redirecione para a página de login
    header("Location: index.php");
    exit();
}
?>
