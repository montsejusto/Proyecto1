<div class="container my-5">
    <div class="row g-4">
        <?php foreach ($platos as $plato): ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="<?= htmlspecialchars($plato->getImagen()) ?>" class="card-img-top" alt="<?= htmlspecialchars($plato->getNombre()) ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= htmlspecialchars($plato->getNombre()) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($plato->getDescripcion()) ?></p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="fw-bold"><?= number_format($plato->getPrecio(), 2) ?> €</span>
                            <a href="?controller=carta&action=detalle&id=<?= $plato->getId() ?>" class="btn btn-dark">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>