<?php
    include 'init.php'; //INCLUI O ARQUIVO DA PÁGINA INIT.PHP
    if (!is_logged()) { //VERIFICA SE TÁ LOGADO
        include 'forbidden.html';
        exit();
    }
    $nome = post('nome'); //PASSANDO NOME DOS INPUTS
    $autor = post('autor'); // PASSANDO NOME DOS INPUTS
    $usuarioEmail = currentUserEmail();
    $data = juntar([$usuarioEmail, $nome, $autor]) . "\n";//junta os bagulhos quando cadastra aí aparece na página
    $handle = fopen('produtos.csv', 'a');//abre o arquivo produtos.csv
    fwrite($handle, $data);//escreve no arquivo produtos.csv
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