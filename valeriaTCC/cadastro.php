<?php
 include("conexao.php");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO usuarios(nome,email,numero,senha) 
        VALUES('$nome','$email', '$numero', '$senha')";
    
if(mysqli_query($conexao, $sql)){
    echo "Usuario cadastrado com sucesso";
}
else{
    
    echo "Erro".mysqli_connect_error($conexao);
}
    mysqli_close($conexao);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="javascript" href="cadastro.js">
    
    <title>Formulário</title>
</head>
<header>
    <a href="index.html">  <img src="logo.png" alt="" id="logo">    </a> 
    <a href="carrinho.html"> <img src="carrinho1.png" alt="" id="carrinho"></a>
    <a href="cadastro.html"> <img src="icon1.png" id="icon"></a>
    <a href=""><img src="zape1.png" id="zape1"></a>
</header>  


<body>
    <div class="cadastro">
   <h2>cadastro</h2><br><br>
    <form method="post"action="cadastro.php">
    <label for="name">nome</label>
    <input type="text"id="nome"name="nome" placeholder="coloque seu nome aqui"><br>
<br>
<label for="email">email</label>
    <input type="email"id="email"name="email" placeholder="coloque seu email aqui"><br>
<br>
    
    <label for="fone">celular </label>
    <input type="tell"id="fone" name="numero" placeholder="11 99999-9999" ><br>
<br>
    <label for="senha">senha</label>
    <input type="password"id="senha" name="senha"placeholder=" coloque sua senha aqui">
    

<br>
    
    <button type="submit">Enviar</button>
    
</form>
<hr class="break">

<h2 id="Login">Login</h2><br><br>
<form method="post"action="recebe-dados.php">
<label for="email">email</label>
<input type="email"id="email"name="email"required placeholder="coloque seu email aqui" id="email.log"><br>
<br>
<label for="senha">senha </label>   <input type="password"id="senha" name="senha"placeholder=" coloque sua senha aqui" id="senha.log">
<img src="olho fechado.png" class="senhaInput" id="olho" onclick="alternarVisibilidadeSenha()">


<script>
var senhaInput = document.getElementById('senhaInput');
    var olho= document.getElementById('olho');
    

    function alternarVisibilidadeSenha() {
        if (senhaInput.type === 'password'){
            senhaInput.type = 'text';
            olho.src = 'olho aberto.png';
        } else {
            senhaInput.type = 'password';
            olho.src = 'olho fechado.png';
        }
    }

</script>
<div>

<br>

<br>

<button type="submit">Enviar</button>
</form></div>


        </button>
    </div>
</div>

<footer>
   
    <p>&copy; 2023 Kanequinha's<br>
        Nos siga no instagram!</p>
</footer>

