<?php include_once 'lock.php';

if (!isset($_GET['id_veiculo']))
{
    header('location:index.php?msg=idinvalido');
}
else
{
    $id_veiculo = $_GET['id_veiculo'];

    include_once '../database/veiculo.dao.php';

    $result = deletar_veiculo($id_veiculo);

    if($result)
    {
        header('location:index.php?msg=veiculodeletado');
    }
    else
    {
        header('location:index.php?msg=errodeletar');
    }
}
?>