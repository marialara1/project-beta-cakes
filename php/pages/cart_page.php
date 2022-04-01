<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Cesta</title>
</head>
<body class="body__cart">
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

        <div class="cart__container marginauto">

            <h2 class="cart__item__container">CESTA</h2>

            <div class="cart__item__container marginauto">
                <img class="tartapic" src="../../resources/images/_product-images/sugar-cake.png" alt="sugar cake">
                <div class="product-subtext">
                    <div class="cart_namedelete">
                        <p class="cart__item-name"> Tarta Azúcar</p>
                        <svg class="cart__delete cursor" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32 41.5L14 41.5C12.067 41.5 10.5 39.933 10.5 38L10.5 8.5L35.5 8.5L35.5 38C35.5 39.933 33.933 41.5 32 41.5Z" stroke="black"/>
                            <path d="M21 3.5L25 3.5C26.933 3.5 28.5 5.067 28.5 7L28.5 8.5L17.5 8.5L17.5 7C17.5 5.067 19.067 3.5 21 3.5Z" stroke="black"/>
                            <line x1="8.5" y1="8.5" x2="37.5" y2="8.5" stroke="black" stroke-linecap="round"/>
                            <line x1="16.7738" y1="18.6001" x2="28.2" y2="30.0263" stroke="black" stroke-linecap="round"/>
                            <line x1="0.5" y1="-0.5" x2="16.6591" y2="-0.5" transform="matrix(-0.707107 0.707107 0.707107 0.707107 29.1333 18.6001)" stroke="black" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="item-price bold">40€</p>
                    <div class="cart__addmore bordersolid cursor">
                        -  1  +
                    </div>

                </div>
            </div>


            <p class="p-large bold cart__envio">¡Envío gratis!</p>

            <div class="cart__total">
                <span class="p-large bold">TOTAL</span>
                <span class="p-large bold">40€</span>
            </div>
            <p class="cart__iva">Impuestos incluidos</p>

            <a class="cart__tramitar cta-comprar p-large marginmed" href="1step.php"> Tramitar pedido</a>
        </div>

                <!-- FOOTER -->
                <footer class="cart__footer">

        </footer>
</body>
</html>