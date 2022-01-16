<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/IDEIAS/bd/pesquisa.php";

$usuario = $_SESSION['email'];
$publicacao = $_POST['publicacao']; 

 $q= "INSERT INTO likes(usuario, publicacao) VALUES
 ('$usuario','$publicacao');";
 global $banco;
 $banco->query($q);

 echo "pub: $publicacao";
 echo "user: $usuario";
?>