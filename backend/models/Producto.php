
<?php

class Producto
{
    
    protected $id;
    protected $categoria_id;
    protected $nombre;
    protected $descripcion;
    protected $precio;
    protected $imagen;
    protected $activo;
    public function __construct(
        $id = null,
        $categoria_id = null,
        $nombre = null,
        $descripcion = null,
        $precio = null,
        $imagen = null,
        $activo = null
    ) {
        if ($id !== null) {
            # code...
            $this->id = $id;
        }
        if ($categoria_id !== null) {
            $this->categoria_id = $categoria_id;
        }
        if ($nombre !== null) {
            # code...
            $this->nombre = $nombre;
        }
        if ($descripcion !== null) {
            $this->descripcion = $descripcion;
        }
        if ($precio !== null) {
            $this->precio = $precio;
        }
        if ($imagen !== null) {
            $this->imagen = $imagen;
        }
        if ($activo !== null ) {
            $this->activo = $activo;
        }
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCategoria_Id()
    {
        return $this->categoria_id;
    }

    public function setCategoria_Id($categoria_id)
    {
        $this->categoria_id = $categoria_id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function getActivo()
    {
        return $this->activo;
    }

    public function setActivo($activo)
    {
        $this->activo = $activo;
    }
}
