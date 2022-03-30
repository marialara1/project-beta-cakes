<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="resources\images\_product-images\otaku-cake.png">
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
            
            <h2 class="info-title paddings marginauto">¿Necesitas ayuda?</h2>

            <p class="info-p"> 
            Lollipop jelly shortbread candy canes oat cake gummies cake. Dessert brownie dessert biscuit danish pie gummies. Gingerbread cheesecake pudding bonbon ice cream jelly-o. Lemon drops apple pie macaroon cupcake donut marzipan croissant. Jujubes pastry sugar plum tiramisu toffee cake muffin. Danish powder marshmallow biscuit gummies candy canes. Danish muffin.
            </p>

            <?php
                include('contact.php');
            ?>

    <!--  -->
    <!--  -->
    <!--  -->



    <div class="container">
    <h2>Preguntas frecuentes</h2>
    <div class="accordion">
        <div class="accordion-item">
        <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Cuándo llega mi pedido? </span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p> La entrega se hará de 1 a 2 días laborables si realizas el pedido antes de las 16:00h. Todo los pedidos realizados después de las 16:00h los viernes serán entregados el lunes o martes.
</p>
        </div>
        </div>
        <div class="accordion-item">
        <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">¿Puedo personalizar una tarta?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>¡Sí! Cuando vayas a tramitar el pedido de la cesta te pediremos que rellenes un formulario donde puedes indicarnos qué quieres poner en la tarta.</p>
        </div>
        </div>
        <div class="accordion-item">
        <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">¿Hacéis envíos fuera de la península? </span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>Sí, realizamos envíos a toda España. Si quieres saber más información sobre los envíos fuera del territorio peninsular pulsa <a class="aquilink" href="\projectbetacakes\php\pages\shipping_page.php"> aquí </a></p>
        </div>
        </div>
        <div class="accordion-item">
        <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">¿Cómo se fabrican los productos?</span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>Todos nuestros productos son fabricados con mucho amor y sin contaminación cruzada de origen animal. Sólo trabajamos con ingredientes de calidad para hacer las mejores tartas veganas.</p>
        </div>
        </div>
        <div class="accordion-item">
        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">¿Cuánto puedo conservar una tarta en la nevera? </span><span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content">
            <p>Si el pastel lleva algún tipo de buttercream podría mantenerse en el frigorífico unos tres o cuatro días. Sin embargo, si lleva crema vegana o fruta fresca, no habría que mantenerlos más de dos días.</p>
        </div>
        </div>
    </div>
    </div>



    <style>

    </style>









    <script>

    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');
    
    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }
    
    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));

    </script>

    </main>

    <footer>
        <?php
            include('../footer.php');
        ?>
    </footer>
</body>
<!-- filter -->
<script src="./index.js"></script>
</html>