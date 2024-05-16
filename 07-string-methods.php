<?php include 'includes/header.php';

// Funciones utilizaas en los string
$nombreCliente = "   Nicolas Paulo Vega    ";
echo($nombreCliente);

// Conoce la cantidad de caracteres
var_dump($nombreCliente);
echo(strlen($nombreCliente));

// Elimina los espacios en blanco
$texto = trim($nombreCliente);
echo($texto);
echo(strlen($texto));

// Convertir mayusculas un cadena
echo(strtoupper($nombreCliente));

// Convertir en minusculas en caden
echo(strtolower($nombreCliente));

$correo1 = "nicolas.paulo.vega06@gmail.com";
$correo2 = "nicolas.paulo@soy.sena.edu.co";

var_dump(strtolower($correo1) == strtolower($correo2));

// Remplazar un caracter o caracteres
$nombreCliente = str_replace('Nicolas Paulo', 'Felipe Andres', $nombreCliente);
echo($nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Felipe');

// Para concatenar cadenas de texto
$tipoCliente = "Premium";
echo "el cielnte" . $nombreCliente . "es" . $tipoCliente;
echo "El nombre {$nombreCliente} es {$tipoCliente}";

// Funcion para extraer una parte de una cadena
echo substr($correo1,0,1);

include 'includes/footer.php';
?>