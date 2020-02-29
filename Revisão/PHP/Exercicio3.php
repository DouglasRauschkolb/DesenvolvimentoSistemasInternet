<?php

    $numero = rand(1, 15);

    echo "Número sorteado: " . $numero . "<br><br>";

    while ($numero%7 <> 0) {
        $numero++;
        echo $numero . "<br>";
    }

?>