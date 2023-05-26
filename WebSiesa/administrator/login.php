<?php
session_start();

$txtUsuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "";
$txtContrasena = (isset($_POST['contrasena'])) ? $_POST['contrasena'] : "";

include("config/database.php");

if ($_POST) {

    $sentenciaSQL = $conexion->prepare("SELECT * FROM usuarios WHERE usuario=:usuario and contrasena=:contrasena");
    $sentenciaSQL->bindParam(':usuario', $txtUsuario);
    $sentenciaSQL->bindParam(':contrasena', $txtContrasena);
    $sentenciaSQL->execute();
    $usuario = $sentenciaSQL->fetch(PDO::FETCH_LAZY);


    $txtUsuario = $usuario['usuario'];
    $txtContrasena = $usuario['contrasena'];
    $txtNomUser = $usuario['nombre'];
    $txtApeUser = $usuario['apellido'];


    if (($_POST['usuario'] == $txtUsuario) && ($_POST['contrasena'] == $txtContrasena)) {
        $_SESSION['usuario'] = "ok";
        $_SESSION['nombreUsuario'] = $txtNomUser . " " . $txtApeUser;

        header("Location:indexAdm.php");
    } else {
        $mensaje = "Error: El usuario o contraseña son incorrectos";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style_login.css" />

    <link rel="icon" type="image/png" href="../img/logo1.png">
    <title>SIESA | Login</title>
</head>

<body>


    <div class="container">
        <div class="card card-container">

            <img class="profile-img-card" src="../img/logo1.png" />

            <?php if (isset($mensaje)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $mensaje; ?>
                </div>
            <?php } ?>

            <form class="form-signin" method="POST">

                <input type="text" id="inputUser" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" id="inputPassword" name="contrasena" class="form-control" placeholder="Contraseña" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar sesión</button>
                <br>
                <a href="../index.php">Regresar a Siesa Web</a>
            </form>

        </div>
    </div>


</body>

</html>