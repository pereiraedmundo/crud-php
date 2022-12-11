<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  
      <script src="https://kit.fontawesome.com/ec6645f98e.js" crossorigin="anonymous"></script>
    <title>Listagem de produtos</title>
    
</head>
<body>
    
    <div class="container" style="margin-top: 40px">
    <!-- Botão Voltar -->
    <div style="text-align: right">
       <a href="index.php" class="btn btn-primary btn-sm" >Voltar</a>
    </div>  

    <h3>Lista de Produtos</h3>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nro Produto</th>
      <th scope="col">Nome do Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  
    <tr>
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao,$sql); 
            while($array = mysqli_fetch_array($busca)){

                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $fornecedor = $array['fornecedor'];
                $quantidade = $array['quantidade'];            

        ?> 
    <tr>
        <td><?php echo $nroproduto ?></td>

        <td><?php echo $nomeproduto ?></td>

        <td><?php echo $categoria ?></td>

        <td><?php echo $fornecedor ?></td>
        
        <td><?php echo $quantidade ?></td>
        <!--componente botão ---pode ser usado para criar  botões tipo "deletar" -->
        <td><a class="btn btn-warning btn-sm" style="color: #fff" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp Editar</a>
        
        <!--lembrar de mudar o nome do arquivo "deletar_produto.php"-->
        <a class="btn btn-danger btn-sm" style="color: #fff" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-regular fa-trash-can"></i>&nbsp Excluir</a>


        <!--PESQUISAR FONTES---site: font awesome -->
        <!--https://fontawesome.com/icons/pen-to-square?s=regular&f=classic: LINK BOTTON-->
        </td> 
    </tr>

    <?php } ?>  
    <!--IMPORTANT: fecha as "chaves"do while após a TAG "td" para incrementar a cada bucas ***abrindo outra tag PHP abaixo -->


    </tr>
  
</table>


        

    </div>



    
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>