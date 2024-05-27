<?php
require_once "APP/model/cancionesModel.php";
require_once "APP/view/songsView.php";
class sonsgController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new cancionesModel();
        $this->view = new sonsgView();
    }
    function mostrarCanciones(){
       $cancion =  $this->model->getAllSongs();
        $this->view->showSongs($cancion);
    }
}


?>