<?php
$mensagem = "tudo certo";

include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";

 echo $email= $_POST['email'];
 p();
echo $senha1= $_POST['senha1'];
p();

//query para selecionar o usuário pelo email
$q = "select email,nome,sobrenome,senha from usuarios where email='$email'";

$busca = $banco->query($q);
$reg= $busca->fetch_object();
echo "$reg->email";

if(!$busca){
    $mensagem = "erro na busca";
}else{
    if(testarhash(enigma($senha1),$reg->senha)==false){
        $mensagem = "senha incorreta";
    }else{
        $_SESSION['nome']= $reg->nome;
        $_SESSION['sobrenome']= $reg->sobrenome;
        $_SESSION['email']= $reg->email;
        
      
    }
}



echo $mensagem;

?>
<script type="text/javascript">
window.location.href="../index.php";
</script>