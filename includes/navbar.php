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
        <img id='avatar' width='100px' height='100px'src='/IDEIAS/img/perfil/$reg->avatar'>
        <span>$reg->sobrenome</span>";
    }else{
  
    
    }
   ?>

</div>
<div class="meio">
<br><p><a href='/IDEIAS'><img id= 'avatar'width='100px' height='100px' src='/IDEIAS/img/icones/logo.png'></a></p>
</div>
<div class="direita">
<?php
if(logado()){
    echo "<br><br><br><p><a href='login/logout.php'><button class='botao'>
    Logout
    </button></a></p>";
}else{
    echo "<br><p><a href='/IDEIAS/login/cadastro_forms.php'>
    <button class='botao'> Cadastro </button></a></p><br><br>";
    echo "<p><a  id='icone' href='/IDEIAS/login/login_forms.php'>
    <button class='botao'>
    Login
    </button></a></p>";
}

?>
</div>

</div>
