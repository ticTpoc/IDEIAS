<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";

 echo $nome= $_POST['nome'];
 p();
echo $sobrenome= $_POST['sobrenome'];
p();
echo $senha1= $_POST['senha1'];
p();
 echo $senha2= $_POST['senha2'];
 p();
 echo $email= $_POST['email'];
 p();
echo $avatar= $_POST['avatar'];
p();


//checagem se da confirmação de senha
if($senha1 !== $senha2){
    //mensagem de erro
    //trocar por uma função no futuro
echo "Deu coisa errada ai amigo";
}else{
    //colocar um if pra checar a extensão de arquivo do avatar
 // guardar em uma variável a extensão de um arquivo que esteja na pasta IDEIAS/img
 echo $parseAvatar= str_replace("<br>", "",pathinfo($_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/img/$avatar",PATHINFO_EXTENSION));

p();

    if(($parseAvatar=='png')||($parseAvatar=='jpg')||($parseAvatar=='jpeg')){

        $hash = gerarhash($senha2);
        $q = "INSERT INTO USUARIOS(NOME,SOBRENOME,SENHA,EMAIL,AVATAR) VALUES
        ('$nome','$sobrenome','$hash','$email','$avatar');";
        $banco->query($q);

        


    }else{
        echo "tipo de imagem não suportado ";
    }

}

?>
<script type="text/javascript">
     window.location.href="../index.php";
    </script>