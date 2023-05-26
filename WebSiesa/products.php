<?php include("template/head.php");

include("administrator/config/database.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<br />

<!--Filtro Web Inicio-->
<section class="filtro-producto" id="filtro">

    <ul class="principal">
        <li class="active">Todos</li>
        <li>Productos de Control</li>
        <li>Mando y Señalización</li>
        <li>Seccionadores y Transferencias</li>
        <li>Protecciones</li>
    </ul>

    <ul class="ProductosDeControl">
        <li>Todos</li>
        <li>Contadores</li>
        <li>Reles Térmicos</li>
        <li>Reles Enchufables</li>
        <li>Reles Temporizadores</li>
    </ul>

    <ul class="MandoSenalizacion">
        <li>Todos</li>
        <li>Selectores</li>
        <li>Botones</li>
        <li>Luces Piloto</li>
        <li>Joystics</li>
    </ul>

    <ul class="SeccionadoresTransferencias">
        <li>Todos</li>
        <li>Seccionadores Porta Fusibles</li>
        <li>Seccionadores Desconectadores</li>
        <li>Transferencias Manuales</li>
        <li>Transferencias Automáticas</li>
    </ul>

    <ul class="Protecciones">
        <li>Todos</li>
        <li>Interruptores en Caja Moldeada</li>
        <li>Interruptores Montaje en Riel</li>
        <li>Interruptores Abiertos</li>
        <li>Interruptores Diferenciales</li>
    </ul>

</section>
<!--Filtro Web Fin-->

<!--Filtro Responsive Inicio-->
<section class="filtro-pro">

    <div class="filtro-ca">
        <label>Categoría:</label>
        <select id="categoria" class="select">
        </select>
    </div>

    <div class="filtro-sub">
        <label>Subcategoría:</label>
        <select id="subcategoria" class="select">

        </select>
    </div>

</section>
<!--Filtro Responsive Inicio-->


<!--Tarjeta Productos Inicio-->
<div class="contenido-producto">
    <?php foreach ($listaProductos as $productos) { ?>
        <div class="card carta-poducto border border-dark" data-filter1="<?php echo $productos['categoria']; ?>" data-filter2="<?php echo $productos['subcategoria']; ?>">
            <img class="card-img-top rounded-top" src="./img/<?php echo $productos['imagen']; ?>">
            <div class="card-body">
                <h4 class="card-title fs-4 fw-bold"><?php echo $productos['nombre']; ?></h4>
                <p class="card-text mt-2"><?php echo $productos['descripcion']; ?></p>
                <button class="btn btn-primary mt-2 mb-2 fs-6 fw-bold border border-dark">Ver mas..</button>
            </div>
        </div>
    <?php } ?>
</div>
<!--Tarjeta Productos Fin-->

<br><br><br>

<!-- Paginator Inicio-->
<!-- <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled border border-dark">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item border border-dark"><a class="page-link" href="#">1</a></li>
        <li class="page-item border border-dark"><a class="page-link" href="#">2</a></li>
        <li class="page-item border border-dark"><a class="page-link" href="#">3</a></li>
        <li class="page-item border border-dark">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav> -->
<!-- Paginator Fin-->

<?php include("template/footer.php"); ?>