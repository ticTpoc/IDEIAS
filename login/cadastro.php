
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";?>
<html lang="pt-br">
<head>

<title>Perguntas do Quiz</title>
<meta charset="UTF-8">
<meta name="keywords" content="Ideias, idéias, projetos">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../dist/estilo.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="../dist/funcoes.js"></script>

</head>

<body>    
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/includes/navbar.php";?>
<div class="body">
<table class="publicacoes">
    <tr>
  
    <td class="content">
 <form>
     <label for='nome'>Nome</label>
     <input type='text' name='nome' id='nome'>
     <label for='sobrenome'>Sobrenome</label>
     <input type='text' name='sobrenome' id='sobrenome'><br><br><br>
     <label for='senha'>Senha</label>
     <input type='text' name='senha' id='senha'>
     <label for='senha2'>Confirmar Senha</label>
     <input type='text' name='senha2' id='senha2'><br><br>
     <label for='perfil'> Foto de Perfil</label>
     <input onchange='mostrarImagem()' type='file' name='perfil' id='perfil'>
<div id='mostrador'>
</div>
 </form>
    </td>
    </tr>
</table>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/includes/footer.php";?>
</body>

</html>