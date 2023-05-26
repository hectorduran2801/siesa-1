<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>

    <?php

    include("administrator/config/database.php");

    $con = mysqli_connect($host, $user, $pass, $db) or die($con);

    if (isset($_POST['proyid'])) {
        $proyid = $_POST['proyid'];

        $sql = "select * from proyectos where id=" .  $proyid;
        $result = mysqli_query($con, $sql);

        while ($proyecto = mysqli_fetch_array($result)) {
    ?>

            <div class="row justify-content-center align-items-center h-100">
                <div class="col-sm-5 p-1" align=" center">
                    <img style="width: 360px;height: 400px;" src="./img/<?php echo $proyecto['imagen']; ?>">
                </div>

                <div class="col-sm-3 p-2">
                    Descripción:
                    <br> <?php echo $proyecto['descripcion']; ?>
                </div>


                <div class="col-sm-4 p-1" align="center">

                    <div id="floating-panel" style="display: none;">
                        <input id="address" type="text" value="<?php echo $proyecto['ubicacion']; ?>" readonly />
                        <input id="nombre" type="text" value="<?php echo $proyecto['nombre']; ?>" readonly />
                    </div>
                    <div id="map"> </div>
                </div>

            </div>


    <?php }
    } ?>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3s4qggPjZw1eMtlm_Bnj6p5Tst_RTopw&libraries=places&callback=iniciarMap" async>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>