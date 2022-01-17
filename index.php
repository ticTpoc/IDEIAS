
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";

$usuario = $_SESSION['email'] ?? null;
$key = $_GET['key'] ?? null;


?>
<html lang="pt-br">
<head>

<title>Perguntas do Quiz</title>
<meta charset="UTF-8">
<meta name="keywords" content="Ideias, idéias, projetos">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="dist/estilo.css">

<script src="/IDEIAS/dist/funcoes.dev.js"></script>
<style>
    #titulinho{
        text-align: center;
    }
    #reset{
        margin-bottom: 40px;
    }
   
  
   
    </style>
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
echo "<table class='lista'><tr><td class='lista'><a  href='/IDEIAS/index.php?key=' >Reset</a></td></tr>";

while ($reg=$busca->fetch_object()){
    echo "
    <tr><td class='lista'><a href='/IDEIAS/index.php?key=$reg->assunto'>$reg->assunto</a></td>
    ";
}
echo "</table>";
?>
    </td>
    <td class="content">
    <?php 

    //select count(l.publicacao) as contagem, p.texto, u.email from likes as l join publicacoes as p on p.id=l.publicacao join usuarios 
    //as u on u.email=l.usuario group by l.publicacao order by contagem desc;
      $q = "select count(l.publicacao) as contagem,p.id, p.likes,p.usuario,p.titulo,p.texto,p.assunto,p.dia,u.avatar,u.email 
      from likes as l join publicacoes as p on p.id=l.publicacao join usuarios as u on l.usuario=u.email";
    if(!empty($key)){
        $q .= " where p.assunto like '%$key%'";
    }else{
    }
    $q.=" group by l.publicacao order by contagem desc";

    $busca = $banco->query($q);
    while ($reg=$busca->fetch_object()){
        echo "<div class='metade'>";
        echo "<table class='publicacao'>
        <tr><td class='publicacao' id='titulinho' colspan='3'><img id='perfil' width='50px' height='50px' src='/IDEIAS/img/perfil/$reg->avatar'> $reg->titulo
        <tr><td class='publicacao' colspan='3'>$reg->texto
        <tr><td class='publicacao'>$reg->assunto<td class='publicacao'>$reg->dia<td class='publicacao'>";

        $k = "select usuario, publicacao from likes where likes.usuario='$usuario' and likes.publicacao='$reg->id'";
        $busca2 = $banco->query($k);
        
        $j = "SELECT COUNT(publicacao) as contagem FROM likes where publicacao='$reg->id';";
        $busca3= $banco->query($j);
        $reg3 = $busca3->fetch_object(); 

        if(logado()){
            if ($busca2->num_rows==1){
                echo "<a id='likeado' href='/IDEIAS/index.php'><span id='likeado' class='material-icons'>thumb_up</span></a>
                <span id='likes'>
                $reg3->contagem
                </span>";
            }else{
                echo "<a  href='/IDEIAS/index.php'><span id='like' class='material-icons' onclick=\"like('$reg->id')\" >thumb_up</span></a>
                <span id='likes'>
                $reg3->contagem
                </span>";
            }
        }else{
               echo "<span id='likes'>
               $reg3->contagem
               </span>";
        }
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
if(logado()){echo "<a href='/IDEIAS/forms/publicar_forms.php'><img  src='/IDEIAS/img/icones/mais.png' id='icon'></a>";}
 ?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type='text/javascript'>
    function like(pub){
        var publicacao= new FormData();
    publicacao.append('publicacao',pub);
   $.ajax({
           url:'/IDEIAS/scripts/like.php',
           method: 'post',
           data: publicacao,
           processData: false,
           contentType:false,
           success: function(resposta){

           }
   });
  }
    </script>

</html>