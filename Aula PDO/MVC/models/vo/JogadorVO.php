<?php

    require_once("models/vo/VO.php");

    final class JogadorVO extends VO{

        private $nome;
        private $posicao;
        private $overall;

        public function __construct($id = 0, $nome = "", $posicao = "", $overall = 0){
            parent::__construct($id);
            $this->nome = $nome;
            $this->posicao = $posicao;
            $this->overall = $overall;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getPosicao(){
            return $this->posicao;
        }

        public function setPosicao($posicao){
            $this->posicao = $posicao;
        }

        public function getOverall(){
            return $this->overall;
        }

        public function setOverall($overall){
            $this->overall = $overall;
        }

    }

?>