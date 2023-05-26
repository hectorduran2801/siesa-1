<?php include('../templateAdm/head.php'); ?>

<?php

//Guardamos los valores que se introducen en el formulario n variables

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtDes = (isset($_POST['txtDes'])) ? $_POST['txtDes'] : "";
$txtCategoria = (isset($_POST['txtCategoria'])) ? $_POST['txtCategoria'] : "";
$txtSubcategoria = (isset($_POST['txtSubcategoria'])) ? $_POST['txtSubcategoria'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen']['name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


include("../config/database.php"); //Incluimos la conexion a BD desde el archivo donde se encuentra

switch ($accion) {

    case "Agregar":
        //Llamamos a la conexion e insertamos en la bd 

        $sentenciaSQL = $conexion->prepare("INSERT INTO productos (nombre, descripcion, categoria, subcategoria, imagen) VALUES (:nombre, :descripcion, :categoria, :subcategoria, :imagen);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':descripcion', $txtDes);
        $sentenciaSQL->bindParam(':categoria', $txtCategoria);
        $sentenciaSQL->bindParam(':subcategoria', $txtSubcategoria);

        //Generar una fecha
        $fecha = new DateTime();
        //Revisamos si hay una imagen y le concatenamos la fecha
        $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.webp";
        //Almacenamos la imagen en una variable temporal hora + nombre archivo
        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];
        //Si esta ocupada por algo
        if ($tmpImagen != "") {
            //Moverla a la carpeta del sistema img
            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);
        }

        $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
        $sentenciaSQL->execute();

        header("Location:products.php");
        break;

    case "Modificar":
        //Llamamos a la conexion y modificamoss en la bd 
        $sentenciaSQL = $conexion->prepare("UPDATE productos set nombre=:nombre, descripcion=:descripcion, categoria=:categoria, subcategoria=:subcategoria WHERE id=:id");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':descripcion', $txtDes);
        $sentenciaSQL->bindParam(':categoria', $txtCategoria);
        $sentenciaSQL->bindParam(':subcategoria', $txtSubcategoria);
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();

        if ($txtImagen != "") {

            //V0lvemos a buscar l iamgen con la fecha y nombre
            $fecha = new DateTime();

            $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.webp";

            $tmpImagen = $_FILES["txtImagen"]["tmp_name"];

            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);

            $sentenciaSQL = $conexion->prepare("SELECT imagen FROM productos WHERE id=:id");
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
            $producto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if (isset($producto["imagen"]) && ($producto["imagen"] != "imagen.webp")) {
                if (file_exists("../../img/" . $producto["imagen"])) {
                    unlink("../../img/" . $producto["imagen"]);
                }
            }

            $sentenciaSQL = $conexion->prepare("UPDATE productos set imagen=:imagen WHERE id=:id");
            $sentenciaSQL->bindParam(':imagen', $nombreArchivo);
            $sentenciaSQL->bindParam(':id', $txtID);
            $sentenciaSQL->execute();
        }
        header("Location:products.php");
        break;

    case "Cancelar":
        header("Location:products.php");
        break;

    case "Seleccionar":

        $sentenciaSQL = $conexion->prepare("SELECT * FROM productos WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $producto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre = $producto['nombre'];
        $txtDes = $producto['descripcion'];
        $txtCategoria = $producto['categoria'];
        $txtSubcategoria = $producto['subcategoria'];
        $txtImagen = $producto['imagen'];

        break;

    case "Borrar":

        $sentenciaSQL = $conexion->prepare("SELECT imagen FROM productos WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();
        $producto = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if (isset($producto["imagen"]) && ($producto["imagen"] != "imagen.webp")) {
            if (file_exists("../../img/" . $producto["imagen"])) {
                unlink("../../img/" . $producto["imagen"]);
            }
        }

        $sentenciaSQL = $conexion->prepare("DELETE FROM productos WHERE id=:id");
        $sentenciaSQL->bindParam(':id', $txtID);
        $sentenciaSQL->execute();

        header("Location:products.php");
        break;
}

//Senetencia para llamar a todos los datos de la tabla produtos
$sentenciaSQL = $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="col-md-12 bg-dark">

    <div class="card">

        <div class="card-header font-weight-bolder d-flex justify-content-center">
            PRODUCTOS
        </div>

        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">

                <div class=" d-none form-group mb-3">
                    <label for="txtID">PRODUCTO ID:</label>
                    <input type="text" readonly required class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="PRODUCTO ID">
                </div>

                <div class="form-group mb-3">
                    <label for="txtNombre" class="font-weight-bolder">NOMBRE DEL PRODUCTO:</label>
                    <input type="text" maxlength="30" required class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="NOMBRE DEL PRODUCTO">
                </div>

                <div class="form-group mb-3">
                    <label for="txtDes" class="font-weight-bolder">DESCRIPCIÓN DEL PRODUCTO:</label>
                    <textarea type="text" maxlength="80" class="form-control rounded-0" name="txtDes" id="txtDes" rows="3" placeholder="ESCRIBA LA DESCRIPCIÓN BREVE DEL PRODUCTO" required><?php echo $txtDes; ?></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="txtTipo" class="font-weight-bolder">CATEGORIA DEL PRODUCTO:</label>

                    <select name="txtCategoria" id="categoria" class="custom-select" required>

                    </select>

                </div>

                <div class="form-group mb-3">
                    <label for="txtSub" class="font-weight-bolder">SUBCATEGORIA DEL PRODUCTO:</label>

                    <select name="txtSubcategoria" id="subcategoria" class="custom-select">

                    </select>
                </div>

                <?php
                if ($txtImagen != "") {
                ?>
                    <img class="img-thumbnail rounded" src="../../img/<?php echo $txtImagen; ?>" width="100" />
                <?php } ?>


                <div class="form-group mb-3">
                    <label for="txtImagen" class="font-weight-bolder">IMAGEN DEL PRODUCTO:</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen">
                </div>

                <div class="btn-group mx-4 fw-bold" role="group" aria-label="">
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
                <th>NOMBRE</th>
                <th>DESCRIPCIÓN</th>
                <th>CATEGORIA</th>
                <th>SUBCATEGORIA</th>
                <th>IMAGEN</th>
                <th>ACCIONES</th>

            </tr>
        </thead>

        <tbody>
            <?php foreach ($listaProductos as $producto) { ?>
                <tr>
                    <td><?php echo $producto['nombre']; ?></td>
                    <td><?php echo $producto['descripcion']; ?></td>
                    <td><?php echo $producto['categoria']; ?></td>
                    <td><?php echo $producto['subcategoria']; ?></td>
                    <td><img src="../../img/<?php echo $producto['imagen']; ?>" width="100" alt=""></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="txtID" id="txtID" value="<?php echo $producto['id'] ?>" />
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