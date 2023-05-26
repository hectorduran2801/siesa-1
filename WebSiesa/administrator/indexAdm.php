<?php include('templateAdm/head.php'); ?>

<div class="col-md-12">
    <div class="jumbotron">
        <h1 class="display-3">Usuario: <?php echo $nombreUsuario; ?></h1>
        <hr class="my-2">
        <p>A continuacion tendras los accesos a la edición de Proyectos y Productos:</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg mb-2" href="section/products.php" role="button">Editar Productos</a><br>
            <a class="btn btn-primary btn-lg" href="section/projects.php" role="button">Editar Proyectos</a>
        </p>
    </div>
</div>

<?php include('templateAdm/footer.php'); ?>