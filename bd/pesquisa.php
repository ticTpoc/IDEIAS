
<?php

//chamada do BD
require_once "bd.php";
// variavel de array que vai guardar os nomes
$nomes = array();
$emails = array();
//query
$q = "select email,nome from usuarios;";
$busca = $banco->query($q);

//loop dos nomes
while($reg = $busca->fetch_object()){
    $emails[] = $reg->email;
    $nomes[] = $reg->nome;
}




?>