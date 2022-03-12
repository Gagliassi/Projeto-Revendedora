<?php include_once 'lock.php'; 
include_once '../database/veiculo.dao.php';?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Revendendora de carro -Area Restrita. </title>
</head>
<body class ="container-fluid">
    
    <div class="alert alert-primary" role="alert " >
    <div class="conteiner rounded my-4">
    <h1> <center> Projeto revendedora de carros - Area Restrita. </center> </h1>
    </div>

    <p>
        <a href="logout.php" class = "btn btn-primary btn-sm"> Sair do sistema</a>
    </p>

    <?php
    if(isset($_GET['msg']))
    {
        include_once '../util.php';
        echo validar_msg($_GET['msg']);
    }
    ?>

    <h3>Cadastro de carro:</h3>

    <div class="col-5"> 
        <form action="cadastrar.php" method="post">
            <p>
                <label class ="form-label">Marca</label><br>
                <input type="text" name="marca" required class="form-control">
            </p>

            <p>
                <label class ="form-label">Modelo</label><br>
                <input type="text" name="modelo" required class="form-control">
            </p>

            <p>
                <label class ="form-label">Cor</label><br>
                <input type="text" name="cor" required class="form-control">
            </p>
            
            <p>
                <label class ="form-label">Ano</label><br>
                <input type="text" name="ano" required class="form-control">
            </p>

            <p>
                <label class ="form-label">Valor</label><br>
                <input type="text" name="valor" required class="form-control">
            </p>

            <p>
            <button type="submit" name="salvar" class ="btn btn-outline-primary">SALVAR</button>
            </p>
        </form>
    </div>

    <h2>Veiculos já cadastrados:</h2>
 
    <?php
         
     echo exibir_veiculos();
    ?>

</body>
</html>