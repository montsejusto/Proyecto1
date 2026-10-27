<h1>Listado de Productos</h1>
<p><a href="?controller=producto&action=create">Crear producto</a></p>

<table>
    <tr>
        <th>Id</th>
        <th>Categoria ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Activo</th>
        <th>Acciones</th>
    </tr>
    <?php if (empty($productos)) { ?>
        <tr>
            <td colspan="7">No hay productos todavía.</td>
        </tr>
    <?php } ?>
    <?php foreach ($productos as $producto) { ?>
        <tr>
            <td><?= (int)$producto->getId() ?></td>   
            <td><?= (int)$producto->getCategoria_Id()?></td>
            <td><?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= htmlspecialchars($producto->getDescripcion(), ENT_QUOTES, 'UTF-8') ?></td>
            <td><?= number_format((float) $producto->getPrecio(), 2, ',', '.') ?> €</td>
            <td><?= htmlspecialchars($producto->getImagen(),ENT_QUOTES, 'UTF-8')?> </td>
            <td><?= htmlspecialchars($producto->getActivo(),ENT_QUOTES, '')?></td>

            <td>
                <a href="?controller=producto&action=show&id=<?= (int) $producto->getId() ?>">Ver</a>
                <a href="?controller=producto&action=destroy&id=<?= (int) $producto->getId() ?>">Eliminar</a>
            </td>
        </tr>
    <?php } ?>
</table>
