<?php

include 'conexao.php';

$id = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro script</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  
    
    <style>
        #tamanhoContainer{
            width: 500px;

        }

        #botao {
            background-color: #604830; /*color de fundo*/ 
            color: #ffffff; /*cor da letra*/
            font-weight: bold;

        }

        label {
            font-weight: bold;

        }
    </style>

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px">
<div style="text-align: right">
       <a href="listar_produtos.php" class="btn btn-primary btn-sm" >Voltar</a>
</div> 
<h4>Formulário de Cadastro</h4>

<form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
    <!--O CODIGO ABAIXO VAI EXIBIR OS CAMPOS NOVAMENTE PARA EDIÇÃO APÓS CLICAR NO BOTÃO "EDITAR" -->
    <?php

    $sql = "SELECT * FROM `estoque` WHERE id_estoque= $id";
    $buscar = mysqli_query($conexao,$sql);
    while ($array = mysqli_fetch_array($buscar)) {
        $id_estoque = $array['id_estoque'];
        $nroproduto = $array['nroproduto'];
        $nomeproduto = $array['nomeproduto'];
        $categoria = $array['categoria'];
        $fornecedor = $array['fornecedor'];
        $quantidade = $array['quantidade'];       
    ?>
    <div class="form-group">
        <label>Número do Produto: </label>
        <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
        <input type="number" class="form-control" name="id" value="<?php echo $id ?>"style="display: none">
    </div>

    <div class="form-group">
        <label>Nome do Produto: </label>
        <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
    </div>

    
    <div>
    <label>Categoria: </label>        
    <select class="form-group" name="categoria">
    </div>    
        <option selected>Selecione</option>
        <option value="Periféricos">Periféricos</option>
        <option value="Hardware">Hardware</option>
        <option value="Software">Software</option>
        <option value="Celulares">Celulares</option>
    </select>
    </div>

    <div style="margin-top: 10px"  class="mb-3">
        <label>Quantidade: </label>
        <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
    </div>

    
    <div>
    <label>Fornecedor: </label>  
    <select class="form-group" name="fornecedor">

    </div>
        <option selected>Selecione</option>
        <option value="Fornecedor A">Fornecedor A</option>
        <option value="Fornecedor B">Fornecedor B</option>
        <option value="Fornecedor C">Fornecedor C</option>
    </div>
    </div>
    </div>
    </select>
    <br>
    <div>
        <div class="botao" style="text-align: right">
        <button type="submit" id="botao" class="btn btn-primary btn-sm" >Atualizar</button>
        </div>
    </div>
    
<?php } ?>
</form>


 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>
