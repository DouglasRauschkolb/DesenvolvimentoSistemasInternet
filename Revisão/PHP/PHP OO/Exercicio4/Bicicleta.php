<?php

  require_once('Veiculo.php');

  class Bicicleta extends Veiculo {

    public function ajustar(){
      print "Ajustar - Bicicleta";
      print "<br>";
    }

    public function limpar(){
      print "Limpar - Bicicleta";
      print "<br>";
    }

    public function listarVerificacoes(){
      print "Listar Verificações - Bicicleta";
      print "<br>";
    }

  }

?>