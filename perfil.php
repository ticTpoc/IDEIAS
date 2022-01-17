
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";

$usuario = $_SESSION['user']??null;
$user = $_GET['user']??null;

?>
<html lang="pt-br">
<head>

<title>Perfil</title>
<meta charset="UTF-8">
<meta name="keywords" content="Ideias, idéias, projetos">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="dist/estilo.css">

<script src="/IDEIAS/dist/funcoes.dev.js"></script>
<style>
 
  
   
    </style>
</head>

<body>

<?php include_once "includes/navbar.php" ?>
<div class="body">
<table class="publicacoes">
    <tr>
        <?php
        $q= "select count(l.publicacao) as contagem, u.email,u.avatar, u.nome from likes as l join publicacoes as p on l.publicacao=p.id join
        usuarios as u on l.usuario=u.email where l.usuario='$user'";
        $busca = $banco->query($q);
        $reg = $busca->fetch_object();
        
        ?>
    <td class="content">
    <?php
        echo "<table id='usuario' >";
        echo " <tr><td id='avatarperfil'><img width='100%' height='100%' src='/IDEIAS/img/perfil/$reg->avatar'>
        <td id='nomeperfil'>$reg->nome</td></tr>";            
        echo "</table>";
        ?>
    </td>
    </tr>

    <tr>
    
        <td class="content">
        <h1>Publicações</h1>
        <?php
$q = "select p.id,u.avatar,u.nome,u.sobrenome,p.titulo,p.dia,p.texto,p.assunto, u.email ,count(l.publicacao) as contagem from publicacoes as p join usuarios as u on p.usuario=u.email join likes as l on 
l.publicacao=p.id where u.email='$user' group by l.publicacao;";
        $busca = $banco->query($q);
     
             while ($reg=$busca->fetch_object()){
               
                echo "<div class='metade'>";
                echo "<table class='publicacao'>
                <tr><td class='publicacao' id='titulinho' colspan='3'>
                <a href='/IDEIAS/perfil.php?user=$reg->email'><img id='avatar' alt='$reg->nome $reg->sobrenome' width='50px' height='50px' src='/IDEIAS/img/perfil/$reg->avatar'></a> 
                $reg->titulo
                <tr><td class='publicacao' colspan='3'>$reg->texto
                <tr><td class='publicacao'>$reg->assunto<td class='publicacao'>$reg->dia<td class='publicacao'>";
        
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