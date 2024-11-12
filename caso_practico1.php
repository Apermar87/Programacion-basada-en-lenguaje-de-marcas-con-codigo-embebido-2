
<!-- localhost/Tema4/caso_practico1.php -->

<?php

$valorMinimo= $_GET["minimo"];
$valorMaximo=$_GET["maximo"];

//Bucle for y funcion que no devuelve nada al no tener return
function minmax ($valorMinimo,$valorMaximo){
for ($var1=$valorMinimo; $var1<=$valorMaximo; $var1++) {
    echo $var1."</br>";
}
}

//Llamada a como si fuera un procedimiento al no tener return
minmax($valorMinimo,$valorMaximo);
    



echo "</br>";

//Bucle while y funcion que no devuelve un resultado al no tener return
function minimaxi ($valorMinimo,$valorMaximo){
while( $valorMinimo<=$valorMaximo ) {
    echo $valorMinimo."</br>";
    $valorMinimo++;
}
}

//Llamada a como si fuera un procedimiento al no tener return
minimaxi($valorMinimo,$valorMaximo);



?>