<?php include 'includes/header.php';

$varios = array('Lunes', 'Martes', 3, 7, true);

$animales = array("Gat"=>'Gato', 'Dog'=>'Perro', 'Bird'=>'Pajaro');
var_dump($animales);
echo "<br>";
echo($animales['Cat']);
echo "<br>";
echo($varios[3]);

// Arreglo multimesionales
$amigos = array(array('Juan', 35, 'Ingeniero de sistemas', '07/06/87', 3004040337),
                array('Pedro', 38, 'Ingeniero Industrial', '04/09/85', 3028589869),
                array('Maria', 34 ,'Abogado', '12/04/90', 3002759613),
                array('Luis', 'Cra 1 No 98-90 Sur', 'O+', array(300456787,301234356))
);

echo "<br>";
echo ('La profesion de '.$amigos[0][0].' es:'.$amigos[0][2]);
echo "<br>";
echo ('El numero 1 de telefono de '.$amigos[3][0].' es: '.$amigos[3][3][0]);
$cant = count($amigos);
echo ('Total de amigos es: '.$cant);
echo "<br>";
echo ('Nombre del ultimo amigo es: '.$amigos[$cant-1][0]);

// Ejercicio practico (Arreglos)
$letters = array('¡','H','o','l','a',',',' ','M','u','n','d','o','!');
foreach($letters as $word) {
    echo $word;
}

include 'includes/footer.php';
?>