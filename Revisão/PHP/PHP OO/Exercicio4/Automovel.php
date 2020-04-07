<?php

  require_once('Veiculo.php');

  class Automovel extends Veiculo {

    public function ajustar(){
      print "Ajustar - Automovel";
      print "<br>";
    }

    public function limpar(){
      print "Limpar - Automovel";
      print "<br>";
    }

    public function listarVerificacoes(){
      print "Listar Verificações - Automovel";
      print "<br>";
    }

    public function mudarOleo(){
      print "Mudar Óleo - Automovel";
      print "<br>";
    }

  }

?>