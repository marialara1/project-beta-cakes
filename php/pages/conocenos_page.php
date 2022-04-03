<?php 
$path = "../../resources/images/instagram/";
?>

<?php 
$pathlogo = "../../resources/logo/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotras! · VAKE</title>
    <link rel="icon" type="image/x-icon" href="../../resources/images/_product-images/otaku-cake.png">
    <link rel="stylesheet" href="../../css/style.css">
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
    <main class="info-main marginauto">
        
        <h2 class="info-title paddings marginauto">SOBRE NOSOTRAS!</h2>

        <h4>Cómo nació VAKE</h4>
        <p class="info-p"> 
        Lollipop jelly shortbread candy canes oat cake gummies cake. Dessert brownie dessert biscuit danish pie gummies. Gingerbread cheesecake pudding bonbon ice cream jelly-o. Lemon drops apple pie macaroon cupcake donut marzipan croissant. Jujubes pastry sugar plum tiramisu toffee cake muffin. Danish powder marshmallow biscuit gummies candy canes. Danish muffin dessert jelly chocolate cake liquorice. Caramels sesame snaps gummies tiramisu cake sesame snaps. Cotton candy gummi bears powder cookie lemon drops.  Lollipop jelly shortbread candy canes oat cake gummies cake. Dessert brownie dessert biscuit danish pie gummies. Gingerbread cheesecake pudding bonbon ice cream jelly-o. Lemon drops apple pie macaroon cupcake donut marzipan croissant. Jujubes pastry sugar plum tiramisu toffee cake muffin. Danish powder marshmallow biscuit gummies candy canes. Danish muffin dessert jelly chocolate cake liquorice. Caramels sesame snaps gummies tiramisu cake sesame snaps. Cotton candy gummi bears powder cookie lemon drops. 
        </p>

        <img class="imgsmall marginauto paddings cursor" src="..\..\resources\images\instagram\tartaoveja.jpg" alt="imagen tarta">
        <h4>¿Por qué hacemos tartas veganas?</h4>
        <p class="info-p"> 
        Lollipop jelly shortbread candy canes oat cake gummies cake. Dessert brownie dessert biscuit danish pie gummies. Gingerbread cheesecake pudding bonbon ice cream jelly-o. Lemon drops apple pie macaroon cupcake donut marzipan croissant. Jujubes pastry sugar plum tiramisu toffee cake muffin. Danish powder marshmallow biscuit gummies candy canes. Danish muffin dessert jelly chocolate cake liquorice. Caramels sesame snaps gummies tiramisu cake sesame snaps. Cotton candy gummi bears powder cookie lemon drops. Lollipop jelly shortbread candy canes oat cake gummies cake. Dessert brownie dessert biscuit danish pie gummies. Gingerbread cheesecake pudding bonbon ice cream jelly-o. Lemon drops apple pie macaroon cupcake donut marzipan croissant. Jujubes pastry sugar plum tiramisu toffee cake muffin. Danish powder marshmallow biscuit gummies candy canes. Danish muffin dessert jelly chocolate cake liquorice. Caramels sesame snaps gummies tiramisu cake sesame snaps. Cotton candy gummi bears powder cookie lemon drops.
        </p>

        <p class="info-p">
        Lollipop jelly shortbread candy canes oat cake gummies cake. Dessert brownie dessert biscuit danish pie gummies. Gingerbread cheesecake pudding bonbon ice cream jelly-o. Lemon drops apple pie macaroon cupcake donut marzipan croissant. Jujubes pastry sugar plum tiramisu toffee cake muffin. Danish powder marshmallow biscuit gummies candy canes. Danish muffin dessert jelly chocolate cake liquorice. Caramels sesame snaps gummies tiramisu cake sesame snaps. Cotton candy gummi bears powder cookie lemon drops. Lollipop jelly shortbread candy canes oat cake gummies cake. Dessert brownie dessert biscuit danish pie gummies. Gingerbread cheesecake pudding bonbon ice cream jelly-o. Lemon drops apple pie macaroon cupcake donut marzipan croissant. Jujubes pastry sugar plum tiramisu toffee cake muffin. Danish powder marshmallow biscuit gummies candy canes. Danish muffin dessert jelly chocolate cake liquorice. Caramels sesame snaps gummies tiramisu cake sesame snaps. Cotton candy gummi bears powder cookie lemon drops.
        </p>


        <a class="info-link marginauto paddings" href="\projectbetacakes\php\pages\all_cakes_page.php">AYUDA Y PREGUNTAS FRECUENTES</a>

        <?php
            include('contact.php');
        ?>
        
        <?php
            include('../newsletter.php');
        ?>



    </main>
                        <!-- INSTAGRAM SLIDER -->
                        <section class="section__home conocenos-slider">
                    <?php
                        include('../section__instagram.php');
                    ?>
                </section>
    <footer>
        <?php
            include('../footer.php');
        ?>
    </footer>
</body>
<!-- filter -->
<script src="./index.js"></script>
</html>