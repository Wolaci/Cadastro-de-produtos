<?php

    include 'init.php';
    $usuario = currentUser();
    $usuarioEmail = currentUserEmail();
    if (!is_logged()) {
        include 'forbidden.html';
        exit();
    }
    $livrosFile = [];
    if (file_exists('produtos.csv')) {
        $livrosFile = file('produtos.csv');
    }
    function explodir($el) {
        $livroData = explode(',', $el);
        return [
            'usuarioEmail' => $livroData[0],
            'nome' => $livroData[1],
            'autor' => $livroData[2]
        ];
    }
    $livros = array_map('explodir', $livrosFile);
    function filtrar($el) {
        return $el['usuarioEmail'] == currentUser();
    }
    $livros = array_filter($livros, 'filtrar');
    //COPIA DE ACORDO COM OS CAMPOS QUE DEVEM SER USADOS
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?> - Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1 class="title">Produtos <?= $usuario ?> <span><a href="logout.php">Sair</a></span></h1>
    <h2>Peça seu novo produto</h2>
    <table>
        
        <?php foreach ($livros as $id => $livro): ?>
                <tr>
                    <td><?= $livro['nome'] ?></td>
                    <td><?= $livro['autor'] ?></td>
                    <td>
                        <a href="delProduto.php?id=<?= $id ?>">Remover</a>
                    </td>
                </tr>
        <?php endforeach ?>
    </table>
    <table>
       <tr>
           <th>Nome</th>
           <th>Autor</th>
           


       </tr>
       <?php foreach ($livros as $i => $livros_leitor): ?>
           <tr>
               <?php foreach ($livros_leitor as $livro): ?>
                   <td><?= $livro ?></td>
               <?php endforeach ?>
               <td>
                   <a href="delete.php?id=<?= $i ?>">remover </a>
               </td>
           </tr>
       <?php endforeach ?>

            <?php foreach ($usuarios as $nome): ?>
                <li><a href="livros.php?usuario=<?= $nome ?>"><?= $nome ?></a></li>
            <?php endforeach ?>
   </table>

    <form action="addProduto.php" method="POST">
        Tipo de produto<select name="nome">
            <option value="eletronico"> eletronico</option>
            <option value="relógio">relogio</option>
            <option value="cosmético">cosmético</option>
            <option value="Outros">outros</option>
        </select>
        <br>
        Descrição<input type="text" name="autor" placeholder="">
        
        <input type="submit" value="Adicionar">
    </form>
    <div class="back">
        <a href="index.php">Voltar</a>
    </div>
    <a href="verProduto.php">Clique aqui para ver seu produto</a>
</body>
</html>


