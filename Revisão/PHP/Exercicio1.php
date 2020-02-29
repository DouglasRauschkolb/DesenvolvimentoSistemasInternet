<?php

    $hora = date("H:i:s");

    if($hora < "12:00:00"){
        echo "<h1 style= color:green >Boa Dia!</h1>";
    }

    if($hora >= "12:00:00" && $hora < "18:00:00"){
        echo "<h1 style= color:red >Boa Tarde!</h1>";
    }

    if($hora >= "18:00:00"){
        echo "<h1 style= color:blue >Boa Noite!</h1>";
    }

?>