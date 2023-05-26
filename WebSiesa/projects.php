<?php include("template/head.php");

include("administrator/config/database.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM proyectos");
$sentenciaSQL->execute();
$listaProyectos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<br />

<!--Slide Empresas Inicio-->
<div class="contenedor">
    <br /><br />
    <div class="carousel">
        <div class="carousel__contenedor">
            <button aria-label="Anterior" class="carousel__anterior">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div class="carousel__lista">

                <div class="carousel__elemento">
                    <a href="https://acetioxigeno.com.pa/"><img src="./img/waoxi.webp" alt=""></a>
                </div>

                <div class="carousel__elemento">
                    <a href="https://www.ppc.com.pa/"><img src="./img/wppp.webp" alt=""></a>
                </div>

                <div class="carousel__elemento">
                    <a href="https://estrellaazul.com/"><img src="./img/weazul.webp" alt=""></a>
                </div>

                <div class="carousel__elemento">
                    <a href="#"><img src="./img/wopenb.webp" alt=""></a>
                </div>

                <div class="carousel__elemento">
                    <a href="#"><img src="./img/wnestle.webp" alt=""></a>
                </div>

                <div class="carousel__elemento">
                    <a href="#"><img src="./img/wcemex.webp" alt=""></a>
                </div>

            </div>

            <button aria-label="Siguiente" class="carousel__siguiente">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

    </div>
</div>
<!--Slide Empresas Fin-->

<br />

<!--Filtro Empresas Inicio-->
<section class="filtro-projects">

    <div class="filtro-emp">
        <label>Empresa:</label>
        <select id="empresa">
        </select>
    </div>

</section>
<!--Filtro Empresas Fin-->


<!--Tarjeta Proyectos Inicio-->
<div class="container mt-4 ">
    <?php foreach ($listaProyectos as $proyectos) { ?>
        <div class="card mt-5 contenidoProyecto border border-2 border-dark" style="max-width: 90rem;" data-filter="<?php echo $proyectos['empresa']; ?>">
            <div class="row">
                <div class="col-md-4">
                    <img src="./img/<?php echo $proyectos['imagen']; ?>" alt="" class="img-fluid h-100 w-100 rounded-start">
                </div>
                <div class="col-md-8">
                    <h2 class="card-title mt-3 mb-3 ms-4 fs-1 fw-bold"><?php echo $proyectos['nombre']; ?></h2>
                    <p class="card-text ms-4 fs-5"><i class="fas fa-building"></i> <?php echo $proyectos['empresa']; ?></p>
                    <p class="card-text ms-4 fs-5"><i class='fas fa-search-location'></i> <?php echo $proyectos['ubicacion']; ?>
                    </p>
                    <p class="card-text ms-4 fs-5"><i class="fas fa-exclamation"></i> <?php echo $proyectos['estado']; ?></p>
                    <button data-id='<?php echo $proyectos['id']; ?>' class="proyinfo btn btn-warning ms-4 mt-4 mb-4 fs-6 fw-bold border border-dark">Ver mas..</button>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<!--Tarjeta Proyectos Fin-->


<!-- Modal Inicio-->
<div class="modal fade" id="empModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class=" modal-content">

            <div class="modal-header">
                <h5 class="modal-title c-black">Información del Proyecto</h5>
                <button>X</button>
            </div>

            <div class="modal-body">

            </div>

        </div>
    </div>
</div>
<!-- Modal Fin-->

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