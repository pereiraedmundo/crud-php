<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql);


?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  

<div class="container" style="width: 400px">
<center>
   <h3>Excluído com sucesso</h3>
   <div style="margin-top: 10px">
   <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
   </div>
</center>


</div>

