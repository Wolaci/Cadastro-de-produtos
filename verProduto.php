 <?php
       $livros = file('produtos.csv');
       for ($i = 0; $i < sizeof($livros); $i++) {
           $livros[$i] = explode(';', $livros[$i]);
       }
   ?>
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
   </table>
   <a href="produto.php">Peça um novo produto</a>