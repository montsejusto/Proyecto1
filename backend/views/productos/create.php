<h1>Crear producto</h1>
<p><a href="?controller=producto">Volver al listado</a></p>

<form action="?controller=producto&action=store" method="POST">
    <label>
        Nombre
        <input type="text" name="nombre" id="nombre" required maxlength="100">
    </label>
    <label>
        Categoria
        <select name="categoria_seleccionada" required>
            <option value="1" selected>The sun rises</option>
            <option value="2">The social hour</option>
            <option value="3">The midnight gallery</option>
        </select>
    </label>
    <label>
        Descripcion
        <input type="text" name="desc" id="desc">
    </label>
    

    <label>
        Precio
        <input type="number" name="precio" id="precio" step="0.01" min="0" required>
    </label>

    <button type="submit">Guardar</button>
</form>
