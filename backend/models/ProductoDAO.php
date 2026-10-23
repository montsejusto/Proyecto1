<?php

include_once("config/dataBase.php");
include_once("models/Productos.php");

class ProductosDAO
{
    public static function getAll()
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("SELECT * FROM productos");
        $stmt->execute();
        $result = $stmt->get_result();

        $productos = [];

        while ($producto = $result->fetch_object("Productos")) {
            $productos[] = $producto;
        }

        $stmt->close();
        $con->close();

        return $productos;
    }

    public static function getById($id)
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $producto = $result->fetch_object("Productos");

        $stmt->close();
        $con->close();

        return $producto ?: null;
    }

    public static function store($producto)
    {
        $con = DataBase::connect();

        $stmt = $con->prepare(
            "INSERT INTO productos (categoria_id, nombre, descripcion, precio, imagen, activo)
            VALUES (?, ?, ?, ?, ?, ?)"
        );

        $categoriaId = $producto->getCategoriaId();
        $nombre = $producto->getNombre();
        $descripcion = $producto->getDescripcion();
        $precio = $producto->getPrecio();
        $imagen = $producto->getImagen();
        $activo = $producto->getActivo();

        $stmt->bind_param(
            "issdsi",
            $categoriaId,
            $nombre,
            $descripcion,
            $precio,
            $imagen,
            $activo
        );

        $stmt->execute();

        $stmt->close();
        $con->close();
    }

    public static function destroy($id)
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("DELETE FROM productos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $stmt->close();
        $con->close();
    }
}