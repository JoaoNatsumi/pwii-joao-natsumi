<?php
    $n = 6;

    if($n >= 4) {
        echo $n, " é maior ou igual a 4 ";
        echo "<br>";
    }

    $n1 = 21;
    $n2 = 12;

    $result = ($n1 + $n2) % 2;

    if($result == 1) {
        echo $result, " quociente impar";
        return;
    }

    echo $result, " quociente par";
?>