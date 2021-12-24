<?php


include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";

?>
<html lang="pt-br">
<head>
<title>Ideias</title>
<meta charset="UTF-8">
<meta name="keywords" content="Ideias, idéias, projetos">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/includes/navbar.php";

?>
<form action='cadastro.php' method="post">
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name='nome'  placeholder="José">
  </div>
  <div class="form-group">
    <label for="sobrenome">Sobrenome</label>
    <input type="text" class="form-control" id="sobrenome" name='sobrenome'  placeholder="Silva">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="senha1">Senha</label>
    <input type="password" name='senha1' class="form-control" id="senha1" placeholder="Senha">
  </div>
  <div class="form-group">
    <label for="senha2">Confirmar senha</label>
    <input type="password" class="form-control" name='senha2' id="senha2" placeholder="Confirmar Senha">
  </div>
  <div class="form-group">
  <label for="avatar" class="form-label">Avatar</label>
  <input class="form-control" name='avatar' type="file" id="avatar">
</div>
  <div class="form-check">
    <input type="checkbox" name='confirmacao' onclick="checar()" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Aceito a vida</label>
  </div>

  <button type="submit" class="btn btn-primary" id='botao' onclick="aviso()" >Submit</button>
  
</form>
<a href='login_forms.php'><p>já possuo uma Conta</p></a>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/includes/footer.php";
?>
<script type="text/javascript">
// constantes dos elementos 
const enviar = document.getElementById('botao');
const checagem= document.getElementById('exampleCheck1');

//deixar o botão de cadastro desabilitado de começo
enviar.style.pointerEvents = 'none';


function checar(){

    if(checagem.checked==true){
      // deixar o botão clicavél de a caixa de checagem estiver selecionada
    enviar.style.pointerEvents = 'auto';
    }else{
    enviar.style.pointerEvents = 'none';
    }
}

//projetinho aqui deixo pra depois
/*
function aviso(){
  if(checagem.checked==false){
    //criar um aviso caso o usuário tente apertar o botão 
    ideia = document.createElement('small');

  }
}
*/


</script>
</body>
</html>
