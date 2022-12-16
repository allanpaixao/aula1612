<?php

if(isset($_post['submit'])){

    include_once('config.php');
    
    $nome = $_POST('Nome');
    $email = $_POST('email');
    $telefone = $_POST('telefone');
    $endereco =$_POST('endereco');

    $resultado  = mysqli_query($conexao, "INSERT INTO usúarios(email, Nome, telefone, endereco) values ('$email', '$nome', '$telefone', '$endereco')" );
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadstro de usuarios</title>
</head>
<style>
    body{
        margin-top: 300px;
        display: flex;
        align-items:center;
        margin:auto;
    }

    .form{
        background-color :red;
        color:white;
        align-items:center;
        justify-content:center;
        display:flex;
        width:250px;
        height: 120;
        padding:25px;
        border-radius:25px;

    }
</style>
<body>
    <div class="form">
        <form>
            <div>
      <label>nome</label>
      <input type="text" Name="Nome">
</div>
    <br>
    <div>
    <label>email</label>
      <input type="text" name="email">
</div>
<br>
<div>
<label>telefone</label>
      <input type="number" name="telefone">
</div>
<br>
<div>
<label>endereço</label>
      <input type="text" name="endereco">
</div>
</div>
</form>
</body>
</html>

