<?php
$mensagem = "tudo certo";

include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";


$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$assunto = $_POST['assunto'];
$data = date('Y-m-d');
$usuario = $_SESSION['email'];

$q= " INSERT INTO PUBLICACOES(TITULO,TEXTO,ASSUNTO,DIA,USUARIO,LIKES) VALUES
('$titulo','$texto','$assunto','$data','$usuario',1);";

$banco->query($q);



?>
<script type="text/javascript">
window.location.href="/IDEIAS/index.php";
</script>