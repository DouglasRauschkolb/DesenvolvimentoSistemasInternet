<?php

    $ConversaoFahreinheitCelsius = function($tempraturaFahreinheit) {
        $temperatura = ($tempraturaFahreinheit - 32) / 18;
        return $temperatura;
    };

    echo  "Fahreinheit = 90 -> Celsius = " . $ConversaoFahreinheitCelsius(90) . "<br>";
    echo  "Fahreinheit = 77 -> Celsius = " . $ConversaoFahreinheitCelsius(77) . "<br>";
    echo  "Fahreinheit = 52 -> Celsius = " . $ConversaoFahreinheitCelsius(52) . "<br>";
    echo  "Fahreinheit = 12 -> Celsius = " . $ConversaoFahreinheitCelsius(12) . "<br>";

?>