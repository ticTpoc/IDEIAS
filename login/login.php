<?php


include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";

$email= $_POST['email'];
$senha1= $_POST['senha1'];


//query para selecionar o usuário pelo email
$q = "select email,nome,sobrenome,senha from usuarios where email='$email'";

$busca = $banco->query($q);
$reg= $busca->fetch_object();

if(!$busca){
    
}else{
    if(testarhash(enigma($senha1),$reg->senha)==false){
   
    }else{
        $_SESSION['nome']= $reg->nome;
        $_SESSION['sobrenome']= $reg->sobrenome;
        $_SESSION['email']= $reg->email;


    }
}



?>
<script type="text/javascript">
window.location.href="../index.php";
</script>