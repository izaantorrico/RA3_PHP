<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    
    
</head>
<body>

<?php
echo "<h1>Ejercicio 1</h1>";
$contador = 1;
$persona = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => "23", "ciudad" => "Barcelona");
foreach($persona as $value){
    echo "Dato " .$contador . "ª: $value <br>";
    $contador++; 
}

echo"<h1>Ejercicio 2</h1>";
foreach ($persona as $key => $value){
    echo "$key : $value <br>";
}

echo "<h1>Ejercicio 3</h1>";
$contador = 1;
$persona = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => "24", "ciudad" => "Barcelona");
foreach($persona as $value){
    echo "Dato " .$contador . "ª: $value <br>";
    $contador++; 
}
echo "<h1>Ejercicio 4</h1>";
$persona = array(
    array("nombre" => "Sara"),
    array( "apellido" => "Martínez"),
    array ("edad" => "23")
);
var_dump(value:$persona);

echo "<h1>Ejercicio 5</h1>";
$letras = array("a","b","c","d","e","f");
//explode



?>

    
</body>
</html>