<?php

  require_once('Automovel.php');
  require_once('Veiculo.php');
  require_once('Bicicleta.php');

  $oficina = new Oficina();

  $bike = new Bicicleta;
  $carro = new Automovel;

  $oficina->Manutencao($bike);

  $oficina->Manutencao($carro);

  class Oficina {

    public function Manutencao($veiculo){
      $veiculo->ajustar();
      $veiculo->limpar();
      $veiculo->listarVerificacoes();

      if($veiculo instanceof Automovel){
        $veiculo->mudarOleo();
      }      
    }

  }

?>