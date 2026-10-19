<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $operaciones = $_POST["operacion"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if($operaciones == "suma") {
        $suma = $num1 + $num2;
        echo "<p>La suma es: ". $suma ."</p>";
    } else if($operaciones === "resta") {
        $resta = $num1 - $num2;
        echo "<p>La resta es: ". $resta ."</p>";
    } else if($operaciones === "multiplicacion") {
        $multiplicacion = $num1 * $num2;
        echo "<p>La multiplicación es: ". $multiplicacion ."</p>";
    } else {
        $division = $num1 / $num2;
        echo "<p>La división es: ". $division ."</p>";
    }
}
