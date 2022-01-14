
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";?>
<html lang="pt-br">
<head>

<title>Perguntas do Quiz</title>
<meta charset="UTF-8">
<meta name="keywords" content="Ideias, idéias, projetos">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="dist/estilo.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>    
<?php include_once "includes/navbar.php" ?>
<div class="body">
<table class="publicacoes">
    <tr>
    <td class="navleft">

    </td>
    <td class="content">
    <?php 
    

    $q = "select usuario,titulo,texto,assunto,dia from publicacoes";
    $busca = $banco->query($q);
    while ($reg=$busca->fetch_object()){
        echo "<div class='metade'>";
        echo "<table class='publicacoes'>
        <tr><td class='publicacao'>$reg->usuario <td class='publicacao'>$reg->titulo
        <tr><td class='publicacao' colspan='2'>$reg->texto
        <tr><td class='publicacao'>$reg->assunto<td class='publicacao'>$reg->dia";
        echo "</table>";
        echo "</div>";
    }
    ?>
  
    </td>
    </tr>
</table>
</div>
<?php include_once "includes/footer.php"?>
</body>

</html>