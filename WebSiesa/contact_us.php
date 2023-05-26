<?php include("template/head.php");

$mss = "";

if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['msg']) && !empty($_POST['email']) && !empty($_POST['telefono'])) {
        $name = $_POST['name'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = "\nMensaje: " . $msg . "\n\nDe: " . $name . "\nEmail: " . $email . "\nTelefono: " . $telefono . "\n\nEste mensaje es enviado desde siesa.com.pa";
        $to = "gerenciaventas@siesa.com.pa, gerenciageneral@siesa.com.pa, hduranc24@gmail.com";
        $subject = "Información";
        $header = "From: " . $email;
        $mail = @mail($to, $subject, $mensaje, $header);
        if ($mail) {
            $mss =  " Mensaje enviado correctamente.";
        } else {
            $mss =  " El Mensaje no se pudo enviar.";
        }
    }
}

?>

<br><br>

<!--Formulario contacto inicio-->
<section class="contacto-container">

    <div class="contacto-formulario">

        <form class="form" method="POST">

            <h2>Déjanos un mensaje</h2>
            <p type="Nombre:"><input type="text" placeholder="Nombre" name="name" required></input></p>
            <p type="Email:"><input type="email" placeholder="Correo" name="email" required></input></p>
            <p type="Numero:"><input type="text" placeholder="Telefono" name="telefono" required></input></p>
            <p type="Mensaje:"><input type="text" placeholder="¿Qué te gustaría decirnos?" name="msg" required></input></p>

            <button type="submit" name="enviar">ENVIAR MENSAJE</button>
            <?php if (isset($mss) && $mss == " Mensaje enviado correctamente.") { ?>
                <p class="mensajeB"><i class="fa fa-check" aria-hidden="true"></i> <?php echo $mss; ?> </p>
            <?php } else if (isset($mss) && $mss == " El Mensaje no se pudo enviar.") { ?>
                <p class="mensajeM"><i class="fa fa-times" aria-hidden="true"></i> <?php echo $mss; ?> </p>
            <?php } ?>

            <div>
                <span class="fa fa-phone"></span>+507 6822-6048
                <span class="fa fa-envelope"></span> gerenciaventas@siesa.com.pa
            </div>
        </form>



    </div>

</section>
<!--Formulario contacto fin-->

<br /><br />

<?php include("template/footer.php"); ?>