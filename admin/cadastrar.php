<?php include_once 'lock.php';
if (!isset($_POST['salvar']) || empty($_POST['marca']) || empty($_POST['modelo']) || empty($_POST['cor']) || empty($_POST['ano']) || empty($_POST['valor']))
{
    header('location:index.php?msg=cadembranco');
}
else
{
    $marca  = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $cor    = $_POST['cor'];
    $ano    = $_POST['ano'];
    $valor  = $_POST['valor'];

    include_once '../database/veiculo.dao.php';

    $result = salvar_veiculos($marca, $modelo, $cor, $ano, $valor);

    if ($result)

    {
        header('location:index.php?msg=cadastrado');
    }
    else
    {
        header('location:index.php?msg=errocadastro');
    }
}
?>