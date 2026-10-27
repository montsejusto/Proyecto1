<?php

include_once("models/Producto.php");
include_once("models/ProductoDAO.php");

class productoController
{
    private const CATEGORIAS = [1,2,3];

    public function index()
    {
        $productos = ProductoDAO::getAll();
        $view = "views/productos/listado.php";
        include_once 'views/main.php';
    }
//USAR clases abstractas
    //mostrar detalles del producto al seleccionarlo
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
    //funcionpara crear productos
    public function create()
    {
        $view = "views/productos/create.php";
        include_once 'views/main.php';
    }
    //guardar el producto
    public function store()
    {
        $cat =(int) $_POST['categoria_seleccionada'];
        $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
        $descripcion = isset($_POST['desc']) ? $_POST['desc'] : '';
        $precio = isset($_POST['precio']) ? $_POST['precio'] : '';
        //var_dump($cat, $nombre, $precio, self::CATEGORIAS); die;   
        if ($nombre === '' || !in_array($cat, self::CATEGORIAS, true) || !is_numeric($precio) ||(float)$precio < 0) {
            header('Location:?controller=producto&action=create');
            exit;
        }

        $producto = new Producto(null, $cat, $nombre, $descripcion, (float) $precio, null, null);
        ProductoDAO::store($producto);

        header('Location:?controller=producto');
        exit;
    }
    public function edit()
    {
        if (isset($_GET['id'])) {

        }
        $producto = ProductoDAO::getById((int) $_GET['id']);
        ProductoDAO::update($producto);
        $view = "views/productos/edit.php";
        include_once 'views/main.php'; 
    }
    public function destroy()
    {
        if (!isset($_GET['id']) || !ctype_digit((string) $_GET['id'])) {
            header('Location:?controller=producto');
            exit;
        }

        ProductoDAO::destroy((int) $_GET['id']);
        header('Location:?controller=producto');
        exit;
    }
}