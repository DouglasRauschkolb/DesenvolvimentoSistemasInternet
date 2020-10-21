<?php

namespace Model\VO;

final class LinkVO extends VO {

    private $link;
    private $titulo;
    private $descricao;
    private $palavras_chaves;
    private $imagem;
    private $id_categoria;
    private $nome_categoria;

    public function __construct($id = 0, $link = "", $titulo = "", $descricao = "", $palavras_chaves = "", $imagem = "", $id_categoria = 0, $nome_categoria = "") {
        parent::__construct($id);
        $this->link = $link;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->palavras_chaves = $palavras_chaves;
        $this->imagem = $imagem;
        $this->id_categoria = $id_categoria;
        $this->nome_categoria = $nome_categoria;
    }

    public function getLink() {
        return $this->link;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getPalavrasChaves() {
        return $this->palavras_chaves;
    }

    public function setPalavrasChaves($palavras_chaves) {
        $this->palavras_chaves = $palavras_chaves;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public function getIdCategoria() {
        return $this->id_categoria;
    }

    public function setIdCategoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    public function getNomeCategoria() {
        return $this->nome_categoria;
    }

    public function setNomeCategoria($nome_categoria) {
        $this->nome_categoria = $nome_categoria;
    }

}