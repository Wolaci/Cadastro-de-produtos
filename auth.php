<?php
include 'init.php';
$email = post('email');
$senha = post('senha');
$users = file('users.csv');//pegando o email e a senha e salvando no arquivo csv
foreach($users as $user) {
    $userData = explode(',', $user);
    if (trim($userData[2]) == $email && trim($userData[3]) == md5($senha)) { //só copia isso que é sucesso
        login($userData[0], $userData[2]);
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (is_logged()): ?>  <!-- se o email e a senha estiverem corretos vai aparecer a primeira mensagem e automaticamente vai se logar na sessão -->
        Você está logado! <a href="produto.php">Clique aqui para acessar</a>
    <?php else: ?>
        Login ou senha incorreto. <a href="login.php">Clique para voltar</a>
    <?php endif ?>
</body>
</html>