<?php

function gerarhash($senha){

    $texto= enigma($senha);
    $hash= password_hash($texto,PASSWORD_DEFAULT);
    return $hash;
}
function testarhash($senha,$hash){
    $ok = password_verify($senha,$hash);
    return $ok;
}
function enigma($senha){
    $c=null;
    for($pos=0; $pos < strlen($senha);$pos++){
           $letra=ord($senha[$pos])+2;
           $c.=chr($letra);
    }
    return $c;
}

?>