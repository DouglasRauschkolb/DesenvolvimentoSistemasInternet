<?php
    $ginastas[0]["nome"] = "Jade";
    $ginastas[0]["nota"] = 12.95;
    $ginastas[0]["pais"] = "Brasil";
    $ginastas[1]["nome"] = "Shawn";
    $ginastas[1]["nota"] = 13.50;
    $ginastas[1]["pais"] = "EUA";
    $ginastas[2]["nome"] = "Daiane";
    $ginastas[2]["nota"] = 14.35;
    $ginastas[2]["pais"] = "Brasil";
    $ginastas[3]["nome"] = "Nadia";
    $ginastas[3]["nota"] = 12.90;
    $ginastas[3]["pais"] = "Romênia";

    //Lista de atletas
    echo "<h3>Nome das Atletas: </h3>";
    foreach($ginastas as $key => $value) {
        echo $value["nome"] . "<br>";
    }
    //Média das notas
    echo "<h3>Média das Notas: </h3>";
    foreach($ginastas as $key => $value) {
        $soma = $soma + $value["nota"];
    }
    echo $soma / count($ginastas);

    //Atletas com nota maior que 13
    echo "<h3>Atletas com nota acima de 13:</h3>";
    foreach($ginastas as $key => $value) {
        if($value["nota"] > 13.00){
            echo "Atleta: " . $value["nome"] . " - Nota: " . $value["nota"] . "<br>" ;
        }
    }

    //Numero de atletas por pais
    echo "<h3>Número de atletas por país:</h3>";
    $contagem = array();
    foreach($ginastas as $key => $value) {
        $contagem[$value["pais"]]["numero"] = array_count_values(array_column($ginastas, 'pais'))[$value["pais"]];
    }

    foreach($contagem as $key => $value){
        echo $key . " possui " . $value["numero"] . " atletas <br>";
    }

    //Atleta com maior nota
    echo "<h3>Ginasta com a maior nota:</h3>";
    $maior_nota = $ginastas[0]["nota"];
    foreach($ginastas as $key => $value) {
        if($value["nota"] > $maior_nota){
            $maior_nota = $value["nota"];
            $nome_atleta = $value["nome"];
        }
    }

    echo "Atleta " . $nome_atleta . " com a nota " . $maior_nota;
    //funçao da documentação do php

?>