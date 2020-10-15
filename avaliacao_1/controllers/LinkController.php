<?php

namespace Controller;

use Controller\Controller;

use Model\LinkModel;
use Model\VO\LinkVO;

final class LinkController extends Controller {

    public function selectAll() {
        $model = new LinkModel();
        $data = $model->selectAll();

        $this->loadView("listaLinks", [
            "links" => $data
        ]);
    }

    public function selectOne() {
        $id = $_GET["id"] ?? 0;

        if(empty($id)) {
            $vo = new LinkVO();
        } else {
            $model = new LinkModel();
            $vo = $model->selectOne($id);
        }

        if(!isset($vo)) {
            die("Registro não existe!");
        }

        $this->loadView("formLink", [
            "link" => $vo
        ]);
    }

    public function save() {
        $id = $_POST["id"];
        $model = new LinkModel();
        //$vo = new LinkVO($_POST["id"], $_POST["nome"], $_POST["posicao"] ,$_POST["overall"], $_POST["time"]);

        if(empty($id)) {
            $return = $model->insert($vo);
        } else {
            $return = $model->update($vo);
        }

        $this->redirect("links.php");
    }

    public function delete() {
        if(empty($_GET["id"])) {
            die("Necessário passar o ID!");
        } 

        $model = new LinkModel();
        $return = $model->delete($_GET["id"]);

        $this->redirect("links.php");
    }

}