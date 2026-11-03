<?php
include_once("config/dataBase.php");
include_once("models/Producto.php");

class PlatoDAO{
    public static function getAll(){
    $con = DataBase::connect();
    $stmt = $con->prepare("SELECT * FROM productos");
    $stmt->execute();
    $result = $stmt->get_result();

    $platos = [];

    while ($plato = $result->fetch_object("Producto")) {
        $platos[] = $plato;
    }
    $stmt->close();
    $con->close();
    return $platos;
    }
}
?>