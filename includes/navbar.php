<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";
$email = $_SESSION['email'];
$q= "select avatar,nome,sobrenome from usuarios where email='$email'";
$busca = $banco->query($q);
$reg= $busca->fetch_object();
?>

<div class='header'>
<div class="esquerda">
   <?php 
    if(logado()){

        echo "<br><span>$reg->nome</span>
        <img id='perfil' width='100px' height='100px'src='/IDEIAS/img/perfil/$reg->avatar'>
        <span>$reg->sobrenome</span>";
    }else{
  
    
    }
   ?>

</div>
<div class="meio">
<br><br><br><p><a href='/IDEIAS'>Logo</a></p>
</div>
<div class="direita">
<?php
if(logado()){
    echo "<br><br><br><p><a href='login/logout.php'>LOGOUT</a></p>";
}else{
    echo "<br><p><a href='/IDEIAS/login/cadastro_forms.php'>CADASTRO</a></p><br><br>";
    echo "<p><a href='/IDEIAS/login/login_forms.php'>LOGIN</a></p>";
}

?>
</div>

</div>
