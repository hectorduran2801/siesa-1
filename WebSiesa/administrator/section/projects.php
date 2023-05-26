<?php include('../templateAdm/head.php'); ?>

<?php

//Guardamos los valores que se introducen en el formulario n variables

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtEmpresa = (isset($_POST['txtEmpresa'])) ? $_POST['txtEmpresa'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtDes = (isset($_POST['list'])) ? $_POST['list'] : "";
$txtImagen =  (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$txtEstado = (isset($_POST['txtEstado'])) ? $_POST['txtEstado'] : "";
$txtUbi = (isset($_POST['txtUbi'])) ? $_POST['txtUbi'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

include("../config/database.php"); //Incluimos la conexion a BD desde el archivo donde se encuentra

switch ($accion) {

    case "Agregar":
        //Llamamos a la conexion e insertamos en la bd 

        $sentenciaSQL = $conexion->prepare("INSERT INTO proyectos (nombre, empresa, descripcion, imagen, estado, ubicacion) VALUES (:nombre, :empresa, :descripcion, :imagen, :estado, :ubicacion);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':empresa', $txtEmpresa);
        $sentenciaSQL->bindParam(':descripcion', $txtDes);
        $sentenciaSQL->bindParam(':estado', $txtEstado);
        $sentenciaSQL->bindParam(':ubicacion', $txtUbi);


        //Generar una fecha
        $fecha = new DateTime();
        //Revisamos si hay una imagen y le concatenamos la fecha
        $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
        //Almacenamos la imagen en una variable temporal hora + nombre archivo
        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];
        //Si esta ocupada por algo
        if ($tmpImagen != "") {
            //Moverla a la carpeta del sistema img
            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);
        }

        $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
        $sentenciaSQL->execute();

        header("Location:projects.php");
        break;

    case "Modificar":
        //Llamamos a la conexion y modificamoss en la bd 
        $sentenciaSQL = $conexion->prepare("UPDATE proyectos set nombre=:nombre, empresa=:empresa, descripcion=:descripcion, estado=:estado, ubicacion=:ubicacion WHERE id=:id");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':empresa', $txtEmpresa);
        $sentenciaSQL->bindParam(':descripcion', $txtDes);
        $sentenciaSQL->bindParam(':estado', $txtEstado);
        $sentenciaSQL->bindParam(':ubicacion', $txtUbi);
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();

        if ($txtImagen != "") {

            //V0lvemos a buscar l iamgen con la fecha y nombre
            $fecha = new DateTime();

            $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";

            $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);

            $sentenciaSQL = $conexion->prepare("SELECT imagen FROM proyectos WHERE id=:id");
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
            $proyecto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if (isset($proyecto["imagen"]) && ($proyecto["imagen"] != "imagen.jpg")) {
                if (file_exists("../../img/" . $proyecto["imagen"])) {
                    unlink("../../img/" . $proyecto["imagen"]);
                }
            }

            $sentenciaSQL = $conexion->prepare("UPDATE proyectos set imagen=:imagen WHERE id=:id");
            $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
        }
        header("Location:projects.php");
        break;

    case "Cancelar":
        header("Location:projects.php");
        break;

    case "Seleccionar":

        $sentenciaSQL = $conexion->prepare("SELECT * FROM proyectos WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $proyecto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre = $proyecto['nombre'];
        $txtEmpresa = $proyecto['empresa'];
        $txtDes = $proyecto['descripcion'];
        $txtImagen = $proyecto['imagen'];
        $txtEstado = $proyecto['estado'];
        $txtUbi = $proyecto['ubicacion'];

        break;

    case "Borrar":

        $sentenciaSQL = $conexion->prepare("SELECT imagen FROM proyectos WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $proyecto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if (isset($proyecto["imagen"]) && ($proyecto["imagen"] != "imagen.jpg")) {
            if (file_exists("../../img/" . $proyecto["imagen"])) {
                unlink("../../img/" . $proyecto["imagen"]);
            }
        }

        $sentenciaSQL = $conexion->prepare("DELETE FROM proyectos WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();

        header("Location:projects.php");
        break;
}

//Senetencia para llamar a todos los datos de la tabla produtos
$sentenciaSQL = $conexion->prepare("SELECT * FROM proyectos");
$sentenciaSQL->execute();
$listaProyecto  = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>




<div class="col-md-12 bg-dark">

    <div class="card">

        <div class="card-header font-weight-bolder d-flex justify-content-center">
            PROYECTOS
        </div>

        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">

                <div class="d-none form-group mb-3">
                    <label for="txtID">PROYECTO ID:</label>
                    <input type="text" readonly required class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="PROYECTO ID">
                </div>

                <div class="form-group mb-3">
                    <label for="txtEmpresa" class="font-weight-bolder">EMPRESA:</label>

                    <select name="txtEmpresa" id="empresa" class="custom-select">

                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="txtNombre" class=" font-weight-bolder">NOMBRE DEL PROYECTO:</label>
                    <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="NOMBRE DEL PROYECTO">
                </div>

                <div class="form-group mb-3">
                    <label for="txtDes" class=" font-weight-bolder">DESCRIPCIÓN DEL PROYECTO:</label>
                    <textarea type="text" class="form-control rounded-0" name="txtDes" id="txtDes" rows="3" placeholder="ESCRIBA LA DESCRIPCIÓN BREVE DEL PROYECTO"><?php echo $txtDes; ?></textarea>
                    <a class="enlace" id="agregar">Agregar</a>

                    <ul id="miLista">
                    </ul>

                </div>

                <div class="form-group mb-2">
                    <label for="txtEstado" class=" font-weight-bolder">ESTADO DEL PROYECTO:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="txtEstado" value="En Proceso" checked>
                        <label class="form-check-label font-weight-bolder">
                            En Proceso
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="txtEstado" value="Finalizado">
                        <label class="form-check-label font-weight-bolder">
                            Finalizado
                        </label>
                    </div>
                </div>

                <?php
                if ($txtImagen != "") {
                ?>
                    <img class="img-thumbnail rounded" src="../../img/<?php echo $txtImagen; ?>" width="100" />
                <?php } ?>


                <div class="form-group mb-3">
                    <label for="txtImagen" class="font-weight-bolder">IMAGEN DEL PROYECTO:</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen" multiple="multiple">
                    <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                </div>

                <div class="form-group mb-3">
                    <label for="txtUbi" class=" font-weight-bolder">UBICACIÓN DEL PROYECTO:</label>
                    <input type="text" required class="form-control" value="" name="txtUbi" id="txtUbi" placeholder="UBICACIÓN DEL PROYECTO">
                </div>

                <div class="btn-group mx-4" role="group" aria-label="">
                    <button type="submit" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?> name="accion" value="Agregar" class="btn btn-primary font-weight-bolder border border-dark mr-2">Agregar</button>
                    <button type="submit" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> name="accion" value="Modificar" class="btn btn-success font-weight-bolder border border-dark mr-2">Modificar</button>
                    <button type="submit" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> name="accion" value="Cancelar" class="btn btn-warning font-weight-bolder border border-dark mr-2">Cancelar</button>
                </div>

            </form>

        </div>

    </div>

</div>

<div class="col-md-12">

    <table class="table table-bordered" id="tabla">

        <thead class="table-success">
            <tr>

                <th>EMPRESA</th>
                <th>NOMBRE</th>
                <th>DESCRIPCIÓN</th>
                <th>IMAGEN</th>
                <th>ESTADO</th>
                <th>UBICACIÓN</th>
                <th>ACCIONES</th>

            </tr>
        </thead>

        <tbody>
            <?php foreach ($listaProyecto as $proyecto) { ?>
                <tr>
                    <td><?php echo $proyecto['empresa']; ?></td>
                    <td><?php echo $proyecto['nombre']; ?></td>
                    <td><?php echo $proyecto['descripcion']; ?></td>
                    <td><img src="../../img/<?php echo $proyecto['imagen']; ?>" width="100" alt=""></td>
                    <td><?php echo $proyecto['estado']; ?></td>
                    <td><?php echo $proyecto['ubicacion']; ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="txtID" id="txtID" value="<?php echo $proyecto['id'] ?>" />
                            <input type="submit" name="accion" value="Seleccionar" class="btn btn-info font-weight-bolder border border-dark mb-2" />
                            <input type="submit" name="accion" value="Borrar" class="btn btn-danger font-weight-bolder border border-dark" />
                        </form>
                    </td>

                </tr>
            <?php } ?>
        </tbody>

    </table>

</div>


<?php include('../templateAdm/footer.php'); ?>