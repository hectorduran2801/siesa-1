<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location:../login.php");
} else {
    if ($_SESSION['usuario'] == "ok") {
        $nombreUsuario = $_SESSION["nombreUsuario"];
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>SIESA | Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <link href="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
</head>

<body>


    <?php $url = "http://" . $_SERVER['HTTP_HOST']   . "/WebSiesa" ?>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrator/indexAdm.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrator/section/products.php">Productos</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrator/section/projects.php">Proyectos</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>">Pagina SIESA Web</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/administrator/section/logout.php">Cerrar</a>
        </div>
    </nav>

    <br>

    <div class="container">
        <div class="row">