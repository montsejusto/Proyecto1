<?php

include_once("models/Producto.php");
include_once("models/ProductoDAO.php");

class productoController
{

    public function index()
    {
        $productos = ProductoDAO::getAll();
        $view = "views/productos/listado.php";
        include_once 'views/main.php';
    }
//USAR clases abstractas
    public function show()
    {
        if (!isset($_GET['id']) || !ctype_digit((string) $_GET['id'])) {
            header('Location:?controller=producto');
            exit;
        }

        $producto = ProductoDAO::getById((int) $_GET['id']);
        if ($producto === null) {
            header('Location:?controller=producto');
            exit;
        }

        $view = "views/productos/show.php";
        include_once 'views/main.php';
    }
}
