<?php
  class Adulto {
    
    private $peso;

    public function getPeso() {
      return $this->peso;
    }

    public function setPeso($peso) {
      $this->peso = $peso;
    }

    public function engordar($peso_engordar) { 
      $this->peso = $this->peso + $peso;
    }
    
    public function emagrecer($peso){
      $this->peso = $this->peso - $peso;
    }

  }

?>