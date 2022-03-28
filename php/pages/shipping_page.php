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
        
        <h2 class="info-title paddings marginauto">Sobre los envíos y pagos</h2>

        <h4>ENVÍOS</h4>
        <p class="info-p"> 
            La entrega se hará en 1-2 días laborables. Por favor realice el pedido antes de las 16:00 hr.

            Los pedidos realizados después de las 16:00 hr en viernes serán entregados el lunes o martes.

            Los pedidos realizados con este servicio de entrega en el fin de semana, serán entregados el martes o miércoles.

            No se realizan entregas en días festivos.

            Durante los períodos de mucha actividad, es posible que algunos servicios de entrega Premium / Express tarden más 
        </p>

        <h4>PAGOS</h4>
        <p class="info-p"> 
            Ofrecemos una variedad de métodos de pago en línea para asegurarnos que nuestros clientes pueden acceder a los mejores productos de belleza con facilidad.

            Puedes seleccionar tu método de pago preferido. 
            Visa, Visa Debit, Mastercard, PayPal

            Nos tomamos el fraude muy en serio, por lo que los titulares de las tarjetas están sujetos a la comprobación por parte nuestra y del emisor de la tarjeta.

            Estas comprobaciones las realizamos siempre por la seguridad de nuestros clientes.
        </p>

        <h4>CÓDIGO DE DESCUENTO</h4>
        <p class="info-p">
            Nos gusta que las cosas te resulten fáciles y sencillas, en esto incluimos canjear códigos descuento en tus productos favoritos.

            Una vez que tengas todos los artículos en la cesta, añade el código en la casilla marcada con '¿Tienes un código descuento?' . Al hacer clic en 'AÑADIR' se aplicará el descuento.

            Si el código no funciona comprueba que no estés usando más de un código en un mismo pedido, solo se puede usar uno por pedido. Por favor, consulta los Términos y Condiciones de una oferta.

            ¿Sigues teniendo problemas? Ponte en contacto con nuestro servicio de Atención al Cliente desde tu cuenta.
        </p>


        <a class="info-link marginauto paddings" href="\projectbetacakes\php\pages\help_page.php">AYUDA Y PREGUNTAS FRECUENTES</a>


        <?php
            include('contact.php');
        ?>

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