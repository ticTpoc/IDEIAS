<?php

/* banco precisa disso ai
$banco = new mysqli(host,usuario,senha,banco)
*/


$banco = new mysqli("localhost","root","","IDEIAS");

if($banco->connect_errno){
    die();
}

/* transformar em portugues*/
$banco->query("SET NAMES 'utf8'");

$banco->query("SET character_set_cliente = utf8");

$banco->query("SET CHARACTER_SET_CONNECTION = utf8");

$banco->query("SET character_set_results = utf8");





?>