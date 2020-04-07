<?php
class Adulto {
  
  private $peso;

  public function engordar($peso_engordar) { 
    $this->peso = $this->peso + $peso;
  }
  
  public function emagrecer($peso){
    $this->peso = $this->peso - $peso;
  }
}

?>