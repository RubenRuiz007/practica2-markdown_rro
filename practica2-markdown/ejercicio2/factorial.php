<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<h1>Ejercicio 2</h1>
<form method="post">
    <label for="fact">Introduce el número: </label>
    <input type="number" name="factorial" id="fact">
    <button type="submit">Factorizar</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $factorial = $_POST["factorial"];
    $contadorFactorial = 1;
    if($factorial < 0){
        echo "<p>El número es negativo.</p>";
    } else if ($factorial === 0) {
        echo "<p>".$factorial = 1+"</p>";
    } else {
        for($i=1; $i<=$factorial; $i++) {
            $contadorFactorial *= $i;
        }
        echo "<p>"."El factorial es: ".$contadorFactorial."</p>";
    }
}
?>
</body>
</html>