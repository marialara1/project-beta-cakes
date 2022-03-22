<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAKE · Tartas Veganas</title>
    <link rel="icon" type="image/x-icon" href="resources\images\_product-images\otaku-cake.png">
    <link rel="stylesheet" href="css\style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- LANDING PAGE -->
        <section class="section__landing">
                <!-- loop -->
            <?php
                include('php/loop-header.php');
            ?>
                <!-- header -->
            <?php
                include('php/header.php');
            ?>
                <!-- landing -->
            <?php
                include('php/landing.php');
            ?>
        </section>

                                    <!-- **SECTIONS** -->

    <!-- LO MÁS VENDIDO -->
        <section class="section__vendido paddings">
            <?php
                include('php/section__vendido.php');
            ?>
        </section>

    <!-- LOOP ENVIOS -->
        <?php
            include('php/loop-shipping.php');
        ?>

    <!-- TARTAS PARA -->
    <section class="section__vendido paddings">
            <?php
                include('php/section__otras-tartas.php');
            ?>
        </section>

    <!-- INSTAGRAM SLIDER -->


    <!-- POR QUÉ VEGANOS -->

    <!-- REVIEWS -->

    <!-- NEWSLETTER -->
    <?php
        include('php/newsletter.php');
    ?>

    <!-- FOOTER -->
    <?php
        include('php/footer.php');
    ?>
</body>
</html>
