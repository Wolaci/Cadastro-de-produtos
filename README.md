# Cadastro-de-produtos


CRUD é o acrônimo da expressão do idioma Inglës, Create (Criação), Retrieve (Consulta), Update (Atualização) e Delete (Destruição). Este acrônimo é comumente utilizado definir as quatro operações básicas usadas em Banco de Dados Relacionais.
O CRUD que vocês irão encontrar nesse repositório é um bem simples que não trabalham com Mysql e sim com arquivos csv,
ele servirá para registro, login e cadastro de produtos de acordo com a vontade do usuário.

# Como usar

Ao clonar o projeto você vai entrar na pasta e ligar o servidor do php com o comando 'php -S localhost:8000' ou qualquer outra porta que desejar,
se você estiver usando a ferramenta 'sublime' como eu usei é só digitar 'subl .' que todos os arquivos serão listados, para você que quer usar os 
códigos para desenvolver, a primeira página é o index.php que está a tela de registro do usuário, os campos em questão você pode modificar, criar
os seus entre outras coisas na variável 'inputs', lá você primeiro especifica o nome do input e seus respectivos tipos, quando você preenche os
campos e clica em enviar o usuário fica numa lista abaixo dos campos, você pode clicar lá para logar ou no link, ambos redirecionará você pra página
de login onde você vai logar com o seu e-mail e senha registradas, após isso terá a página para o cadastro de produtos, nas próximas linhas eu vou listar
a ordem dos arquivos para facilitar seu aprendizado.

primeira página: index.php -- lá tem os campos para se registrar e a listagem de usuário.
segunda página: login.php -- lá haverá os campos para logar-se
terceira página: auth.php -- você vai receber a mensagem que está logado e um link para acessar a página dos produtos.
quarta página: produto.php -- lá você cadastra o produto entre outras coisas.


