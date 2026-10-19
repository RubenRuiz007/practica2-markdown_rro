<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
<h1>Ejercicio 5</h1>
<?php
    $personas = [
        "Manuel" => new DateTime("01-01-2000"),
        "Carlos" => new DateTime("15-04-1995"),
        "Sofía" => new DateTime("23-11-2001"),
        "Andrés" => new DateTime("05-08-1988"),
        "Elena" => new DateTime("14-02-2005"),
    ];
    $fechaHoy = new DateTime("today");
    foreach ($personas as $nombre => $cumple) {
        $cumpleProximo= clone $cumple;
        $cumpleProximo->setDate(
            $fechaHoy->format("Y"),
            $cumple->format("m"),
            $cumple->format("d")
        );
        if ($cumple<$fechaHoy) {
            $cumpleProximo->modify("+1 year");
        }
        $diferenciaDias = $cumpleProximo->diff($fechaHoy)->days;
        echo "<p>"."Nombre: ".$nombre." "." Cumpleaños: ".$cumple->format("Y-m-d")." quedan hasta su cumpleaños ".$diferenciaDias."días</p>";
    }
?>
</body>
</html>
