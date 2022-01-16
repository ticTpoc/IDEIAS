
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
<?php

$q = "select distinct assunto from publicacoes limit 5";
$busca = $banco->query($q);
echo "<ul id='listaleft'>";
while ($reg=$busca->fetch_object()){
    echo "
    <li>$reg->assunto</li>
    ";
}
echo "</ul>";
?>
    </td>
    <td class="content">
    <?php 
    

    $q = "select p.usuario,p.titulo,p.texto,p.assunto,p.dia,u.avatar from publicacoes as p join usuarios as u on p.usuario=u.email";
    $busca = $banco->query($q);
    while ($reg=$busca->fetch_object()){
        echo "<div class='metade'>";
        echo "<table class='publicacoes'>
        <tr><td class='publicacao'><img width='50px' height='50px' src='/IDEIAS/img/perfil/$reg->avatar'> <td class='publicacao'>$reg->titulo
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
<?php
if(logado()){echo "<a href='/IDEIAS/forms/publicar_forms.php'><img width='50px' height='50px' src='/IDEIAS/img/icones/mais.png' id='icon'></a>";}
 ?>
</body>

</html>