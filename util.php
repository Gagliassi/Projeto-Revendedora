<?php

function validar_msg($msg)
{
    switch ($msg)
    {
        case 'embranco' :
        $retorno = '<h3 class="alert alert-warnig"> <center> Informe todos o dados para efutar seu login! </center> </h3>';
        break;

        case 'invalido' :
        $retorno = '<h3 class="alert alert-danger"> <center> Atenção: usuário ou senha incorretos! </center> </h3>';
        break;

        case 'cadembranco' :
        $retorno = '<h3 class="alert alert-warning"> <center> Preencha todos os dados do veículo para cadastrar! </center> </h3>';
        break;

        case 'ediçãoembranco' :
        $retorno = '<h3 class="alert alert-warning"> <center> Preencha todos os dados do veículo para editar! </center> </h3>';
        break;

        case 'cadastrado' :
        $retorno = '<h3 class="alert alert-success"> <center> Veículo cadastrado com sucesso! </center> </h3>';
        break;

        case 'errocadastro' :
        $retorno = '<h3 class="alert alert-danger"> <center> O veículo não foi cadastrado. Tente novamente! </center> </h3>';
        break;   
        
        case 'idinvalido' :
        $retorno = '<h3 class="alert alert-warning"> <center> Atenção: veículo invalido. Por favor, repita a operação! </center> </h3>';
        break;   
        
        case 'veiculodeletado' :
        $retorno = '<h3 class="alert alert-success"> <center> O Veículo foi excluido com sucesso! </center> </h3>';
        break;  
        
        case 'errodeletar' :
        $retorno = '<h3 class="alert alert-danger"> <center> Não foi possível excluir o veículo. Tente novamente. </center> </h3>';
        break;  

        case 'editado' :
        $retorno = '<h3 class="alert alert-success"> <center> Veículo editado com sucesso! </center> </h3>';
        break;  

        case 'erroeditar' :
        $retorno = '<h3 class="alert alert-danger"> <center> Não foi possível editar os dados do veículo. Tente novamente.! </center> </h3>';
        break;  

        default:
            $retorno = '';
            break;
    }
        return $retorno;
}
?>