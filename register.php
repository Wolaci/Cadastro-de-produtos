<?php
    sleep(2);
    include 'init.php'; //esse init contém as seções e os bagulhos que pegam o id
    $nome = post('nome');// passando os nomes dos inputs pelo método post
    $username = post('username'); // passando os nomes dos inputs pelo método post
    $email = post('email');  // passando os nomes dos inputs pelo método post
    $senha = post('senha'); // passando os nomes dos inputs pelo método post
    $senha2 = post('senha2'); // passando os nomes dos inputs pelo método post
    $telefone=post('telefone'); // passando os nomes dos inputs pelo método post
    $estado=post('estado'); // passando os nomes dos inputs pelo método post
    $pais=post('pais') // passando os nomes dos inputs pelo método post
?>

<?php if ($senha != $senha2): ?> <!-- //verificando se as senhas são diferentes, se forem vai aparecer esse h1 na tela -->
    <h1>Senhas não conferem; tente novamente</h1>
    <a href="index.php">Voltar</a> <!-- link para voltar pra página -->
    <?php exit(); ?>
<?php endif ?>

<?php
    $data = juntar([$nome, $username, $email, md5($senha),$telefone,$estado,$pais]) . "\n"; //junta todos os inputs/campos e da uma quebra de linha quando for salvo no arquivo csv
    // salva o dado no arquivo csv
    $handle = fopen('users.csv', 'a');//abre o arquivo csv
    fwrite($handle, $data);
    header('location: index.php?message=Usuário ' . $email . ' cadastrado'); //aparece na tela do index que foi registrado e o email do usuário
?>