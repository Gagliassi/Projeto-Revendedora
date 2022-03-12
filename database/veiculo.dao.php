<?php
include_once 'conn.php';

function salvar_veiculos($marca,$modelo,$cor,$ano,$valor)
{
     $conn = conectar();

     $sql = "INSERT INTO veiculos_tb (marca, modelo, cor, ano, valor)
     VALUES('$marca','$modelo','$cor','$ano','$valor')";

     $result = mysqli_query($conn, $sql);

     if(mysqli_affected_rows($conn) > 0)
     {
         return true;
     }

     return false;
}
function buscar_veiculos()
{
    $conn = conectar();

        $sql = "SELECT * FROM veiculos_tb";

        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0)
        {
            return $result;
        }

    return null;
}

function exibir_veiculos()
{
    $result = buscar_veiculos();

    if ($result == null)
    {
        $retorno = '<h3> Não há veiculos cadastrados! </h3> ';
    }
    else
    {
        $retorno = '<div class="col-6">';
        $retorno .= '<table class="table table-bordered table-hover bordered-primary">';
        $retorno .= '<tr>';
        $retorno .= '<th>ID #</th>';
        $retorno .= '<th>Marca</th>';
        $retorno .= '<th>Modelo</th>';
        $retorno .= '<th>Cor</th>';
        $retorno .= '<th>Ano</th>';
        $retorno .= '<th>Valor</th>';
        $retorno .= '<th>Deletar</th>';
        $retorno .= '<th>Editar</th>';
        $retorno .= '</tr>';

        while($veiculo = mysqli_fetch_assoc($result))
        
        {
            $retorno .= '<tr>';

            $retorno .= "<td>"  . $veiculo['id_veiculo']  . "</td>";
            $retorno .= "<td>"  . $veiculo['marca']       . "</td>";
            $retorno .= "<td>"  . $veiculo['modelo']      . "</td>";
            $retorno .= "<td>"  . $veiculo['cor']         . "</td>";
            $retorno .= "<td>"  . $veiculo['ano']         . "</td>";
            $retorno .= "<td>"  . $veiculo['valor']       . "</td>"; 
            $retorno .= "<td>"  .link_deletar($veiculo['id_veiculo']) . "</td>"; 
            $retorno .= "<td>"  .link_editar($veiculo['id_veiculo']) . "</td>"; 

            $retorno .= '</tr>';
        }
            $retorno .= '</table>';
            $retorno .= '<div>';
    }
    return $retorno;
}

function link_deletar($id_veiculo)
{
    $link = '<a href="deletar.php?id_veiculo='.$id_veiculo.'"onclick="return confirm(\' Tem certeza que deseja excluir este veiculo\')"class ="btn btn-danger">Deletar</a>';

    return $link;
}

function link_editar($id_veiculo)
{
    $link = '<a href="editar.php?id_veiculo='.$id_veiculo.'" class ="btn btn-warning">Editar</a>';
    return $link;
}

function deletar_veiculo($id_veiculo)
{
    $conn = conectar();

    $sql = "DELETE FROM veiculos_tb WHERE id_veiculo = $id_veiculo";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {
        return true;
    }

    return false;
}

function buscar_veiculo($id_veiculo)
{
    $conn = conectar();
    
    $sql = "SELECT * FROM veiculos_tb WHERE id_veiculo = $id_veiculo";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {
        return $result;
    }

    return null;
}    

function editar_veiculo($id_veiculo, $marca, $modelo, $cor, $ano, $valor)
{
    $conn = conectar();

    $sql = "UPDATE veiculos_tb SET marca ='$marca', modelo = '$modelo', cor = '$cor', ano = '$ano', valor = '$valor' WHERE id_veiculo = $id_veiculo";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {
        return true;
    }

    return false;
}
?>