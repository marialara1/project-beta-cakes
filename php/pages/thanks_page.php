<?php 
$pathlogo = "../../resources/logo/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Checkout (3/3) · VAKE</title>
    <link rel="icon" type="image/x-icon" href="../../resources/images/_product-images/otaku-cake.png">
</head>
<body>
    <!-- loop -->
    <?php
        include('../loop-header.php');
    ?>
    <!-- header (nav)-->
    <header class="cart__header"> 
        <?php
            include('../header.php');
        ?>
    </header>

        <div class="thanks__container marginauto">



            <h2 class="thanks-title marginauto">¡Gracias por tu compra!</h2>
            <img class="thanks-pic marginauto" src="../../resources/images/instagram/gatotarta.jpg" alt="">
            <p class="thankstext marginauto">Estamos preparando tu pedido. <br>
            Te enviaremos un email cuando esté de camino. Lo recibirás en 24-48h.
            <br> Tu número de pedido es <br>
            <strong> #63J4B9</strong>
            </p>
            <div class="check-text marginauto">
                <a class="cta-comprar p-large marginmed cta-purple" href="../../index.php" alt="continuar"> Seguir comprando </a>
            </div>
            
        </div>

    <!-- FOOTER -->
    <footer class="cart__footer"></footer>

</body>
</html>