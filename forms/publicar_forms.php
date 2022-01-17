
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";?>
<html lang="pt-br">
<head>

<title>Perguntas do Quiz</title>
<meta charset="UTF-8">
<meta name="keywords" content="Ideias, idéias, projetos">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/IDEIAS/dist/estilo.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
   
    </style>
</head>

<body>    
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/includes/navbar.php";?>
<div class="body">
<table class="publicacoes">
<tr>
    <td class="content">
     <div class='formulario'>
        <form action='/IDEIAS/scripts/publicar.php' method='post'>

        <br><!--label for='titulo' >Titulo</label-->
        <input type='text' name='titulo' id='titulo'  placeholder='TITULO' required><br>
        <br><label for='texto' id='labelcomentario'>Ideia </label>
        <br><textarea  id="texto" name="texto" rows="10" cols="70"  required> </textarea><br>
          <!--label for='assunto'>Assunto </label-->
          <br><input type='text' name='assunto' id='assunto' placeholder='ASSUNTO' required><br><br>
          <button class='botao'> Publicar </button>

        </form>
     </div>
    </td>
</tr>
</table>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/includes/footer.php";?>

</body>

</html>