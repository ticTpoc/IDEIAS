<?php

/* banco precisa disso ai
$banco = new mysqli(host,usuario,senha,banco)
*/

//iniciar a session
session_start();

// deixar a sessão vazia
if(!isset($_SESSION['email'])){
    $_SESSION['email']='';
    $_SESSION['nome']='';
    $_SESSION['sobrenome']='';

}


//funcões minhas
include_once "funcoes.php";

$banco = new mysqli("localhost","root","","IDEIAS");

if($banco->connect_errno){
    die();
    echo "banco de dados MORTO";
}

/* transformar em portugues*/
$banco->query("SET NAMES 'utf8'");

$banco->query("SET character_set_cliente = utf8");

$banco->query("SET CHARACTER_SET_CONNECTION = utf8");

$banco->query("SET character_set_results = utf8");





?>