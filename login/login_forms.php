
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";?>
<html lang="pt-br">
<head>

<title>Perguntas do Quiz</title>
<meta charset="UTF-8">
<meta name="keywords" content="Ideias, idéias, projetos">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../dist/estilo.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="../dist/funcoes.dev.js"></script>

</head>

<body>    
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/includes/navbar.php";?>
<div class="body">
<table class="publicacoes">
    <tr>
  
    <td class="content">
       
 <form action='login.php' method='post'  id='formulario'>
 <div class='formulario'>
           <label for='email'>Email</label>
           <input type='email' name='email' id='email'><br><br>
           <label for='senha'>Senha</label>
           <input type='password' name='senha1' id='senha'><br><br><br>
           <button class='botao'> Login </button>
 </form>
 </div>
    </td>
    </tr>
</table>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/includes/footer.php";?>
</body>

</html>