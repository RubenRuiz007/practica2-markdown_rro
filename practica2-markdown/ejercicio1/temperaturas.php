<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<h1>Ejercicio 1</h1>
<form method="post">
    <label for="tempt">Introduce la temperatura en Celsius: </label>
    <input type="text" name="temperatura" id="tempt">
    <button type="submit">Convertir</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $celsius = $_POST["temperatura"];
    if(is_numeric($celsius)){
        echo "<p>Sus conversiones a Kelvin y Farenheit son las siguientes: <p>";
        echo "<p>".$far = (($celsius * 9/5)+32)." F "."</p>";
        echo "<p>".$kelvin = ($celsius * 273.15)." K "."</p>";
    } else {
        echo "<p>Error. EL valor introducido no es numérico</p>";
    }
}
?>
</body>
</html>