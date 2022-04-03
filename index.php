<?php 
$path = "resources/images/instagram/";
?>

<?php 
$pathlogo = "resources/logo/";
?>
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
        <link href="https://api.fontshare.com/css?f[]=clash-grotesk@400,500&display=swap" rel="stylesheet">

        <!-- swipper -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>

    <body>
            <!---------- HOME ----------->      
                <!-- loop -->
                <?php
                    include('php/loop-header.php');
                ?>
        <!-- header (nav)-->
        <header> 
                    <?php
                        include('php/header.php');
                    ?>
        </header>

        <!-- landing -->
        <main>
                <section class="section__landing">
                    <?php
                        include('php/landing.php');
                    ?>
                </section>

                            <!-- !!**SECTIONS**!! -->

                <!-- LO MÁS VENDIDO -->
                <section class="section__home paddings">
                    <?php
                        include('php/section__vendido.php');
                    ?>
                </section>

                <!-- LOOP ENVIOS -->
                <div class="paddings">
                <?php
                    include('php/loop-shipping.php');
                ?>
                </div>

                <!-- TARTAS PARA -->
            <section class="section__home paddings">
                    <?php
                        include('php/section__otras-tartas.php');
                    ?>
                </section>

                <!-- INSTAGRAM SLIDER -->
            <section class="section__home paddings">
                    <?php
                        include('php/section__instagram.php');
                    ?>
                </section>

                <!-- POR QUÉ VEGANOS -->
            <section class="section__home paddings">
                    <?php
                        include('php/section__vegan.php');
                    ?>
                </section>

                <!-- REVIEWS -->
            <section class="section__home">
                    <?php
                        include('php/section__reviews.php');
                    ?>
            </section>

            <!-- NEWSLETTER -->
                <section class="section__home paddings">
            <?php
                include('php/newsletter.php');
            ?>
                        </section>
        </main>
        <!-- FOOTER -->
        <footer >
            <?php
                include('php/footer.php');
            ?>
        </footer>
    </body>
</html>



<!-- notas:
flex: 1 se va el elemento al final
flex: 0 0 50vw;
margin 0 auto se centra
 -->