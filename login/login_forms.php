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
<form action='login.php' method="post">

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="senha1">Senha</label>
    <input type="password" name='senha1' class="form-control" id="senha1" placeholder="Senha">
  </div>
  <button type="submit" class="btn btn-primary" id='botao' >Submit</button>
  
</form>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/includes/footer.php";
?>
<script type="text/javascript">


</script>
</body>
</html>
