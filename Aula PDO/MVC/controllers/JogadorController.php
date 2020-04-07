<?php

    require_once("controllers/Controller.php");
    require_once("models/JogadorModel.php");

    final class JogadorController extends Controller{

        public function selectAll(){
            $model = new JogadorModel();
            $data = $model->selectAll();

            $this->loadView("listaJogadores", [ "jogadores" => $data]);
        }

    }

?>