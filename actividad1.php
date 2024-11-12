<!-- localhost/Tema4/actividad1.php -->

<?php

$login=$_POST["login"];
$password=$_POST["password"];

function validarLogin ($login){
    $patron = '/^[a-z0-9]{6,15}$/i';
    return preg_match($patron,$login);
}

function validarContraseña($password){
    $patron = '/^[a-z]{7}$/i';
    return preg_match($patron,$password);
}

if (isset ($login) && isset ($password) && (validarLogin ($login)) && validarContraseña ( $password )) {
        if ($login != $password) {
            echo "Usuario correcto";}
        else { echo "El usuario y la contraseña no pueden ser iguales "; header("Location: http://localhost/Tema4/actividad1.html");}
} else { echo "Usuario incorrecto";}




?>