<?php

    require_once("models/Model.php");
    require_once("classes/Database.php");
    require_once("models/vo/JogadorVO.php");

    final class JogadorModel {

        public function selectAll(){
            $db = new Database();
            $query = "SELECT * FROM jogadores";
            $data = $db->select($query);

            $arrJogadores = [];

            foreach($data as $row){
                $vo = new JogadorVO($row["id"], $row["nome"], $row["posicao"], $row["overall"]);
                array_push($arrJogadores, $vo);
            }

            return $arrJogadores;

        }

        public function selectOne($id){

        }

        public function insert($vo){

        }

        public function update($vo){

        }

        public function delete($id){

        }


    }


?>