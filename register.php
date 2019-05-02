<?php
    sleep(2);
    include 'init.php';
    $nome = post('nome');
    $username = post('username');
    $email = post('email');
    $senha = post('senha');
    $senha2 = post('senha2');
    $telefone=post('telefone');
    $estado=post('estado');
    $pais=post('pais')
?>

<?php if ($senha != $senha2): ?>
    <h1>Senhas não conferem; tente novamente</h1>
    <a href="index.php">Voltar</a>
    <?php exit(); ?>
<?php endif ?>

<?php
    $data = juntar([$nome, $username, $email, md5($senha),$telefone,$estado,$pais]) . "\n";
    // salva o dado no arquivo csv
    $handle = fopen('users.csv', 'a');
    fwrite($handle, $data);
    header('location: index.php?message=Usuário ' . $email . ' cadastrado');
?>