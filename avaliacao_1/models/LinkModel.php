<?php

namespace Model;

use Utils\Database;
use Model\VO\LinkVO;

final class LinkModel extends Model {

    public function selectAll() {
        $db = new Database();
        $query = "SELECT links.*, categorias.nome AS nome_categoria
                    FROM links 
                    LEFT JOIN categorias 
                      ON links.id_categoria = categorias.id";
        $data = $db->select($query);

        $arrLinks = [];

        foreach($data as $row) {
            array_push($arrLinks, new LinkVO($row["id"], $row["link"], $row["titulo"], $row["descricao"], $row["palavras_chaves"], $row["imagem"], $row["id_categoria"], $row["nome_categoria"]));
        }

        return $arrLinks;
    }

    /*public function selectOne($id) {
        $db = new Database();
        $query = "SELECT jogadores.*, times.nome AS nome_time 
                    FROM jogadores  
                    LEFT JOIN times ON jogadores.id_time = times.id 
                   WHERE jogadores.id = :id";

        // Array de valores variáveis da query para o bind
        $binds = [":id" => $id];
        $data = $db->select($query, $binds);

        if(count($data) == 0) {
            return null;
        }

        $jogador = new JogadorVO($data[0]["id"], $data[0]["nome"], $data[0]["posicao"], $data[0]["overall"], $data[0]["id_time"], $data[0]["nome_time"]);
        return $jogador;
    }

    public function insert($vo) {
        $db = new Database();
        $query = "INSERT INTO jogadores (nome, posicao, overall, id_time) VALUES (:nome, :posicao, :overall, :id_time)";
        $binds = [
            ":nome" => $vo->getNome(), 
            ":posicao" => $vo->getPosicao(), 
            ":overall" => $vo->getOverall(),
            ":id_time" => $vo->getIdTime()
        ];

        $success = $db->execute($query, $binds);

        if($success) {
            return $db->getLastInsertedId();
        } else {
            return null;
        }
    }

    public function update($vo) {
        $db = new Database();
        $query = "UPDATE jogadores SET nome = :nome, posicao = :posicao, overall = :overall, id_time = :id_time WHERE id = :id";
        $binds = [
            ":nome" => $vo->getNome(), 
            ":posicao" => $vo->getPosicao(), 
            ":overall" => $vo->getOverall(),
            ":id_time" => $vo->getIdTime(),
            ":id" => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($id) {
        $db = new Database();
        $query = "DELETE FROM jogadores WHERE id = :id";
        $binds = [":id" => $id];

        return $db->execute($query, $binds);
    }*/

}