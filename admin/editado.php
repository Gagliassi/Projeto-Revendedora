<?php include_once 'lock.php'; 

if (!isset($_POST['salvar']) || empty($_POST['marca']) || empty($_POST['modelo']) || empty($_POST['cor']) || empty($_POST['ano']) || empty($_POST['valor']))
{
    header('location:index.php?msg=ediçãoembranco');
}
else 
{
    $id_veiculo = $_POST['id_veiculo'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $cor = $_POST['cor'];
    $ano = $_POST['ano'];
    $valor = $_POST['valor'];

    include_once '../database/veiculo.dao.php';

    $result = editar_veiculo ($id_veiculo, $marca, $modelo, $cor, $ano, $valor);

    if ($result)
    {
        header('location:index.php?msg=editado');
    }
    
    else
    {
        header('location:index.php?msg=erroeditar');
    }
}

?>