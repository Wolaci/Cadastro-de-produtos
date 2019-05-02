<?php
    include 'init.php';
    if (!is_logged()) {
        include 'forbidden.html';
        exit();
    }
    $nome = post('nome');
    $autor = post('autor');
    $usuarioEmail = currentUserEmail();
    $data = juntar([$usuarioEmail, $nome, $autor]) . "\n";
    $handle = fopen('produtos.csv', 'a');
    fwrite($handle, $data);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="message">
        <h1>Produto cadastrado</h1>
        <a href="produto.php">Voltar</a>
    </div>
</body>
</html>