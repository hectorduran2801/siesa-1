<?php
session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Slick's CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.6.6/glider.min.css" />

    <!--Glider-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



    <link rel="icon" type="image/png" href="./img/logo1.png">
    <title>SIESA</title>

</head>

<body>

    <!--Encabezado-->
    <div class="cabeza">
        <div class="titulo">
            <img src="./img/logo1.png" alt="">
            <h1>Soluciones e Integraciones Eléctricas, S.A.</h1>
        </div>
    </div>
    <!--Encabezado Fin-->

    <!--Barra de navegacion-->
    <header class="header">

        <img src="./img/logo1.png" class="logo" alt="">

        <input type="checkbox" id="check">
        <label for="check" class="mostrar-menu">
            &#8801
        </label>

        <!-- Probando nueva cosa Inicio-->

        <nav class="menu">


            <div class="subnav">
                <a href="#"><i class="fas fa-bars"></i> Productos por Categorias</a>
                <a href="index.php">Inicio</a>
                <a href="index.php#services">Servicios</a>
                <a href="index.php#about">Nosotros</a>
                <a href="products.php" class="producto">Productos</a>
                <a href="projects.php">Proyectos</a>
                <a href="contact_us.php">Contacto</a>
                <a href="administrator/login.php"><i class="fas fa-user" id="login-btn"></i></a>


                <label for="check" class="esconder-menu">
                    &#215
                </label>
        </nav>

    </header>


    <!--Barra de navegacion Fin-->