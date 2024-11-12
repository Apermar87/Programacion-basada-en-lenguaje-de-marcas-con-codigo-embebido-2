<?php

$usuario = $_GET["usuario"];
$contraseña = $_GET["password"];

if ($usuario == "User 1"){
    if ($contraseña == 1234){
    echo "Genial, puedes pasar";}
 else { echo "Lo siento, el usuario es correcto, pero la contraseña no";}}

if ($usuario != "User 1"){
    if ($contraseña == 1234){
        echo "Lo siento, este usuario no es valido";
    } else { echo "No has acertado ninguna";} 
}


?>