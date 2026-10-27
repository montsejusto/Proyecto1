<h1>Detalle del producto</h1>
<p><a href="?controller=producto">Volver al listado</a></p>

<p><strong>ID del producto: </strong><?= (int)$producto->getId() ?></p>   
<p><strong>Categoria: </strong><?= (int)$producto->getCategoria_Id()?></p>
<p><strong>Nombre: </strong><?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8') ?></p>
<p><strong>Descripcion: </strong><?= htmlspecialchars($producto->getDescripcion(), ENT_QUOTES, 'UTF-8') ?></p>
<p><strong>Precio: </strong><?= number_format((float) $producto->getPrecio(), 2, ',', '.') ?> €</p>
<p><strong>Imagen:</strong><?= htmlspecialchars($producto->getImagen(),ENT_QUOTES, 'UTF-8')?> </p>
<p><strong>Activo:</strong><?= htmlspecialchars($producto->getActivo(),ENT_QUOTES, '')?></p>


<p>
    <a href="?controller=producto&action=destroy&id=<?= (int) $producto->getId() ?>">Eliminar</a>
</p>
