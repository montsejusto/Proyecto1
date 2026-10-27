<?php

include_once("config/dataBase.php");
include_once("models/Producto.php");

class ProductoDAO
{
    public static function getAll()
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("SELECT * FROM productos");
        $stmt->execute();
        $result = $stmt->get_result();

        $productos = [];

        while ($producto = $result->fetch_object("Producto")) {
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

        $producto = $result->fetch_object("Producto");

        $stmt->close();
        $con->close();

        return $producto ?: null;
    }

    public static function store($producto)
    {
        $con = DataBase::connect();

        $stmt = $con->prepare(
            "INSERT INTO productos (categoria_id, nombre, descripcion, precio)
            VALUES (?, ?, ?, ?)"
        );

        $categoriaId = $producto->getCategoria_Id();
        $nombre = $producto->getNombre();
        $descripcion = $producto->getDescripcion();
        $precio = $producto->getPrecio();
      
        $stmt->bind_param(
            "issd",
            $categoriaId,
            $nombre,
            $descripcion,
            $precio
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
    public static function update($producto)
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("UPDATE productos SET categoria_id = ?, nombre = ?, descripcion =?, precio=? WHERE id = ?");
        $categoriaId = $producto->getCategoria_Id();
        $nombre = $producto->getNombre();
        $descripcion = $producto->getDescripcion();
        $precio = $producto->getPrecio();
        $id = $producto->getId();
        $stmt->bind_param(
            "issdi",
            $categoriaId,
            $nombre,
            $descripcion,
            $precio,
            $id
        );
        $stmt->execute();
        $stmt->close();
        $con->close();
    }
}