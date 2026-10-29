async function obtenerLista() {
    const buscar = await fetch(`/P1_mj/backend/?controller=producto&action=list`)
    if (!buscar.ok) {
        if (buscar.status === 404) {
            throw new Error('Productos no encontrados')
        } else {
            throw new Error('No hay productos')
        }
    }
    const res = await buscar.json();
    return res;
}
function crearTabla (productos){
    const tbody = document.querySelector('#table tbody');
    tbody.innerHTML = '';
    productos.forEach(p => {
        const tr = document.createElement('tr');
        const tdId = document.createElement('td');
        tdId.textContent = p.id;
        const tdNom = document.createElement('td');
        tdNom.textContent=p.nombre;
        const tdPRecio = document.createElement('td');
        tdPRecio.textContent = p.precio;
        tr.append(tdId, tdNom, tdPRecio);
        tbody.appendChild(tr);
    }); 
}
async function inicio() {
    try {
        const prod = await obtenerLista();
        crearTabla(prod);
    } catch (error) {
        console.log(error.message);
    }
}
inicio();
