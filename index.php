<!DOCTYPE html>
<html>
<head>
    <meta charset="utd-8">
    <meta nome="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> Revendendora de carro -Home </title>
</head>
<body class ="container-fluid">

        <div class="conteiner rounded my-4">
        <div class="alert alert-primary" role="alert " >
        <h1> <center> Projeto revendedora de carros. </center></h1>
        </div>

    <?php
    if(isset($_GET['msg']))
    {
        include_once 'util.php';
        echo validar_msg($_GET['msg']);
    }
    ?>

        <h3> <br> </br> <center> Utilize o formulário abaixo para acessar o sistema. </center><br></br> </h3>

        <form action="validar.php" method="post">

        <p>
            <center> 
            <label>Usuário:</label><br>
            <input type="text" name="usuario" required>
            </center>
        </p>    

        <p>
            <center> 
            <label>Senha:</label><br>
            <input type="password" name="senha" require>
            </center>
        </p>

        <p>
            <center> 
            <button type="submit" name='entrar' class ="btn btn-outline-primary">Entrar</button>
            </center>
        </p>
    </body>
</html>