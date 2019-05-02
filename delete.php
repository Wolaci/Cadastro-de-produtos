<?php
$livro = file('produtos.csv');

$id = $_GET['id'];
unset($livro[$id]);

$str = "";
foreach($livro as $livro1) {
    $str = $str . $livro1;
}
$handle = fopen("produtos.csv", "w");
fwrite($handle, $str);



?>
<h1>Removido</h1>
<a href="verProduto.php">Voltar</a>