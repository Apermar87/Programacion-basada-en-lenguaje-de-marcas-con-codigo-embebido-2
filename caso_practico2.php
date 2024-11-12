<!-- localhost/Tema4/caso_practico1.php -->

<?php

$login = $_POST["login"];
$password = $_POST["password"];

validar($login, $password); 
function validar($login,$password){
    if ($login == "Antonio"){
        if ($password == 1234 ){
            echo "Identidad autenticada";
        } else{ echo "Contraseña incorrecta";}
    } 
   
    if ($login != "Antonio"){
       if ($password != "1234"){
         echo "Usuario y contraseña incorrecta";
        } else {echo "Usuario incorrecto";}
    } 
}

?>