<div class="container my-5">
    <div class="row g-4">
        <div class="col-sm-4 col-md-3">
            <h2>Filtrar</h2>
            <div class="dropdown">
                <button class="btn dropdown-toggle momento-btn" 
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#filtrosMomento"
                    aria-expanded="false"
                    aria-controls="filtrosMomento">
                    Momento
                    <i class="bi bi-chevron-down"></i>
                </button>
                <div class="collapse" id="filtrosMomento">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="momento1" value="amanecer">
                        <label class="form-check-label" for="momento1">
                            Amanece en Twogether
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="momento2" value="tarde">
                        <label class="form-check-label" for="momento2">
                            La Hora Social
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="momento3" value="noche">
                        <label class="form-check-label" for="momento3">
                            Galeria de medianoche
                        </label>
                    </div>   
                </div>
            </div>                
            <div class="dropdown">
                <button class="btn dropdown-toggle momento-btn" 
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#filtrosEstilo"
                    aria-expanded="false"
                    aria-controls="filtrosEstilo">
                    Estilo de vida
                    <i class="bi bi-chevron-down"></i>
                </button>
                <div class="collapse" id="filtrosEstilo">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sg" value="sg">
                        <label class="form-check-label" for="sg">
                            Sin gluten (SG) 
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="v" value="v">
                        <label class="form-check-label" for="v">
                            Basado en plantas (V)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sl" value="sl">
                        <label class="form-check-label" for="sl">
                            Sin lácteos (SL)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rt" value="rt">
                        <label class="form-check-label" for="rt">
                            Receta Tradicional (RT)
                        </label>
                    </div>                     
                </div>
            </div>
            <div class="dropdown">
                <button class="btn dropdown-toggle momento-btn" 
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#filtrosNoche"
                    aria-expanded="false"
                    aria-controls="filtrosNoche">
                    Mood
                    <i class="bi bi-chevron-down"></i>
                </button>
                <div class="collapse" id="filtrosNoche">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="noche1" value="compartir">
                        <label class="form-check-label" for="noche1">
                            Para Compartir
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="noche2" value="individual">
                        <label class="form-check-label" for="noche2">
                            Edición Individual
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="noche3" value="dulce">
                        <label class="form-check-label" for="noche3">
                            Toque Dulce
                        </label>
                    </div>                   
                </div>                
            </div>
            
        </div>
    <div class="col-12 col-md-9">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($platos as $plato): ?>
                <div class="col">
                    <div class="card h-100 shadow p-2   ">
                        <img src="<?= htmlspecialchars($plato->getImagen()) ?>" class="card-img-top" alt="<?= htmlspecialchars($plato->getNombre()) ?>">
                        <div class="card-body d-flex flex-column p-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">
                                    <?= htmlspecialchars($plato->getNombre()) ?>
                                </h5>
                                <span class="fw-bold text-nowrap">
                                    <?= number_format($plato->getPrecio(), 2) ?> €
                                </span>

                            </div>
                            <div class="mt-auto mt-3">
                                <a href="?controller=carta&action=detalle&id=<?= $plato->getId() ?>"
                                class="botonComprar">
                                    Comprar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<style>
    .botonComprar{
        background-color: white;
        color: #D21008;
        text-decoration: none;
        border: 1px solid #D21008;
        border-radius: 3px;
        padding: 9px; 
    }
    .botonComprar:hover{
        background-color: #D21008;
        color: #FFFFFF !important;
    }
</style>