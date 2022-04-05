<?php 
$pathlogo = "../../resources/logo/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todas las tartas · VAKE</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="icon" type="image/x-icon" href="../../resources/images/_product-images/otaku-cake.png">
</head>
<body>
    <!-- loop -->
    <?php
        include('../loop-header.php');
    ?>
        <!-- header (nav)-->
        <header> 
            <?php
                include('../header.php');
            ?>
        </header>

        <h2 class="section__title">Todos los productos</h2>

       
        <footer class="filter__container">
            <p class="bold p-large">Filtros:</p>
    </footer>


    <main class="main-grid">
        

    </main>

                    <!-- LOOP ENVIOS -->
                    <?php
                    include('../loop-shipping.php');
                ?>

            <p class="newsletter__p paddings p-large">¡Puedes personalizar el texto de la tarta que quieras!</p>

                        <!-- NEWSLETTER -->
                        <section class="section__homes newsletter_allcakes">
            <?php
                include('../newsletter.php');
            ?>
                        </section>





    <?php
        include('../footer.php');
    ?>


</body>
<!-- filter -->
<script src="../../index.js"></script>
</html>