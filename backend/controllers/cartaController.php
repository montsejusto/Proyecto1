<?php
include_once("models/PlatoDAO.php");
class CartaController{
 public function index()
    {           
        $platos = PlatoDAO::getAll();
        $view = "views/carta.php";
        require 'views/main.php';
    }
}
?>