<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
<h1>Ejercicio 3</h1>
<form method="post">
    <label for="txt">Introduce una cadena de texto: </label>
    <input type="text" name="texto" id="txt">
    <button type="submit">Contar vocales</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["texto"];
    $string = strtolower($texto);
    $letrasFrase = str_split($string);
    $vocales = ["a", "e", "i", "o", "u"];
    $contadorVocales = 0;

    foreach($letrasFrase as $letras) {
        foreach($vocales as $vocal) {
            if($letras === $vocal) {
                $contadorVocales++;
            }
        }
    }
    echo "<p>Hay " . $contadorVocales . " vocales</p>";
}
?>
</body>
</html>
