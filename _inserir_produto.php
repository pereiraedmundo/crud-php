<?php

include 'conexao.php';//comunicação com arquivo de conexao

$nroproduto = $_POST['nroproduto']; //recebe o valor do atributo
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor= $_POST['fornecedor'];

$sql = " INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `fornecedor`, `quantidade`) VALUES ($nroproduto,'$nomeproduto','$categoria','$fornecedor',$quantidade);";

$inserir = mysqli_query($conexao,$sql);

?>
  <!--DESIGN DA TELA DE CONFIRMAÇÃO -->

    <!--COPIANDO LINK DO BOOTSTRAPE -->

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
<div class="container" style="width: 500px;margin-top: 20px">

  <!--TELA DE MENSAGEM -->

<center>
    <h4>Produto adicionado com sucesso!</h4>
</center>

<div style="padding-top: 20px">
    <center>
<a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item!!</a>
</center>
</div>

</div> 









