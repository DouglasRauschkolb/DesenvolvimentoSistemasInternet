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

    public function selectOne($id) {
        $db = new Database();
        $query = "SELECT links.*, categorias.nome AS nome_categoria 
                    FROM links  
                    LEFT JOIN categorias ON links.id_categoria = categorias.id 
                   WHERE links.id = :id";

        // Array de valores variáveis da query para o bind
        $binds = [":id" => $id];
        $data = $db->select($query, $binds);

        if(count($data) == 0) {
            return null;
        }

        $link = new LinkVO($row["id"], $row["link"], $row["titulo"], $row["descricao"], $row["palavras_chaves"], $row["imagem"], $row["id_categoria"], $row["nome_categoria"]);
        return $link;
    }

    public function insert($vo) {
        $db = new Database();
        $query = "INSERT INTO links (link, titulo, descricao, palavras_chaves, imagem, id_categoria) 
                             VALUES (:link, :titulo, :descricao, :palavras_chaves, :imagem, :id_categoria)";
        $binds = [
            ":link" => $vo->getLink(), 
            ":titulo" => $vo->getTitulo(), 
            ":descricao" => $vo->getDescricao(),
            ":palavras_chaves" => $vo->getPalavrasChaves(),
            ":imagem" => $vo->getImagem(),
            ":id_categoria" => $vo->getIdCategoria()
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
        $query = "UPDATE links 
                     SET link = :link, 
                         titulo = :titulo, 
                         descricao = :descricao, 
                         palavras_chaves = :palavras_chaves, 
                         imagem = :imagem, 
                         id_categoria = :id_categoria 
                   WHERE id = :id";
        $binds = [
            ":link" => $vo->getLink(), 
            ":titulo" => $vo->getTitulo(), 
            ":descricao" => $vo->getDescricao(),
            ":palavras_chaves" => $vo->getPalavrasChaves(),
            ":imagem" => $vo->getImagem(),
            ":id_categoria" => $vo->getIdCategoria(),
            ":id" => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($id) {
        $db = new Database();
        $query = "DELETE FROM links WHERE id = :id";
        $binds = [":id" => $id];

        return $db->execute($query, $binds);
    }

}