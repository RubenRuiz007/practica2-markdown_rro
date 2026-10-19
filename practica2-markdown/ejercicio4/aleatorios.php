<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
<h1>Ejercicio 4</h1>
<?php
    $numeros = [];
    $sumarTodos=0;
    $promedio=0;
    for ($i = 0; $i < 10; $i++) {
        $numeros[$i] = rand(0, 100);
        echo "<p>".$numeros[$i] . "</p>"."\n";
        $sumarTodos += $numeros[$i];
    }
    $menor=$numeros[0];
    $mayor=$numeros[0];
    for ($i = 0; $i < 10; $i++) {
        if($numeros[$i]<$menor) {
            $menor=$numeros[$i];
        }
        if($numeros[$i]>$mayor) {
            $mayor=$numeros[$i];
        }
    }
    echo "<p>"."Menor: ".$menor . " y " ." Mayor: ". $mayor."</p>";
    $promedio=$sumarTodos/10;
    echo "<p>"."Promedio: ".$promedio."</p>";
?>
</body>
</html>
