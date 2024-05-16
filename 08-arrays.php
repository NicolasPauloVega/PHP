<?php include 'includes/header.php';

$carrito = [];
$carrito = ['Uno', 'Dos', 'Tres'];

// Otra manera de crear arreglo
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

echo "<pre>";

echo($semana[0]."<br>");
echo($semana[1]."<br>");
echo($semana[2]."<br>");
echo($semana[3]."<br>");
echo($semana[4]."<br>");
echo($semana[5]."<br>");
echo($semana[6]."<br>");

echo "</pre>";

// Remplazar un elemento del array
$carrito[3] = 'Four';

echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Agregar un elemento al funal del arreglo
array_push($carrito, 'Five');
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Agregar un elemento al principio del arreglo
array_unshift($carrito, 'Numbers');
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Loop para recorrer un array
foreach ($carrito as $elemento){
    echo ('<li>'.$elemento.'</li>');
}

include 'includes/footer.php';
?>