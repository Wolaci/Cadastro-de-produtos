<?php
    include 'init.php';
    // setcookie('data', '2019-03-26');
    if (is_logged()) {
        header('location: livros.php');
    }
    $inputs = [     //ESSA VARIÁVEL ESTÁ RECEBENDO O NOME DO INPUT E SEU TIPO, AO INVÉS DE USAR HTML
        'nome' => 'text',
        'username' => 'text',
        'email' => 'text',
        'senha' => 'password',
        'senha2' => 'password',
        'telefone' => 'text',
        'estado'=>'text',
        'pais'=>'text'
    ];
    $usuariosFile = file('users.csv');//ESSA VARIÁVEL TA DIZENDO QUE OS BAGULHOS VÃO SER SALVOS NO ARQUIVO 'USERS.CSV'
    $usuarios = [];//ARRAY VAZIO, COPIA ESSE CÓDIGO QUE É SUCESSO
    foreach ($usuariosFile as $usuario) {
        $usuarioData = explode(',', $usuario);
        $nome = $usuarioData[0];
        $usuarios[] = $nome; // adiciona o elemento $nome ao final do array $usuarios
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?> -  Registro de Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (get('message') !== false): ?>
        <div class="message">
            <?= get('message') ?>
        </div>
    <?php endif ?>
    <form action="register.php"  method="POST"> <!-- o action register.php vai mandar o formulário dessa página pra página register.php -->
        <?php foreach ($inputs as $name => $type): //foreach básico que passa os inputs para as variável nome ?>
            <input type="<?= $type ?>" name="<?= $name ?>" placeholder="<?= $name ?>">
        <?php endforeach ?>
        <input type="submit" value="Enviar">
    </form>
    <div class="users">
        <a href="login.php"><h1>Produtos dos usuários</h1></a> <!-- LINK PARA SE LOGAR -->
    </div>

            <?php foreach ($usuarios as $nome): ?>
                <li><a href="login.php?usuario=<?= $nome ?>"><?= $nome ?></a></li> <!-- LISTA DO NOME DOS USUÁRIOS EXPOSTOS NA PAGE
 -->            <?php endforeach ?>
</body>
</html>
