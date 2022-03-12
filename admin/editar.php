<?php include_once 'lock.php'; 
include_once '../database/veiculo.dao.php';

if (!isset($_GET['id_veiculo']))
{
    header('location:index.php?msg=idinvalido');
}
else
{
    $result = buscar_veiculo($_GET['id_veiculo']);

    if($result == null)
    {
        header('location:index.php?msg=idinvalido');
    }
    else 
    {
        $veiculo = mysqli_fetch_assoc($result);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Revendendora de carro -Editar Veiculo.</title>
</head>
<body class ="container-fluid">
    
    <div class="alert alert-primary" role="alert " >
    <div class="conteiner rounded my-4">
    <h1> <center> Revendedora de carros - Edição de Veiculo. </center></h1>
    </div>

    <p>
        <a href="index.php" class="btn btn-primary btn-sm"> Cancelar Edição</a>
    </p>

    <h3>Editar cadastro de carro:</h3>
    <div class="col-5">
        <form action="editado.php" method="post">
            <p>
                <label class ="form-label">Marca</label><br>
                <input type="text" name="marca" required value="<?= $veiculo['marca'] ?>" class="form-control" >
            </p>

            <p>
                <label class ="form-label">Modelo</label><br>
                <input type="text" name="modelo" required value="<?= $veiculo['modelo'] ?>" class="form-control" > 
            </p>

            <p>
                <label class ="form-label">Cor</label><br>
                <input type="text" name="cor" required value="<?= $veiculo['cor'] ?>" class="form-control" >
            </p>
            
            <p>
                <label class ="form-label">Ano</label><br>
                <input type="text" name="ano" required value="<?= $veiculo['ano'] ?>" class="form-control" >
            </p>

            <p>
                <label class ="form-label" >Valor</label><br>
                <input type="text" name="valor" required value="<?= $veiculo['valor'] ?>" class="form-control" >
            </p>

            <p>
                <button type="submit" name="salvar" class ="btn btn-outline-primary" >SALVAR ALTERAÇÕES </button>
            </p>

            <input type="hidden" name="id_veiculo" value="<?= $veiculo['id_veiculo']?>">
        </form>
        </div>
</body>
</html>
