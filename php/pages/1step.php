<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Cesta · Tramitar pedido</title>
    <link rel="icon" type="image/x-icon" href="resources\images\_product-images\otaku-cake.png">
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

        <svg class="stepsvg marginauto" width="282" height="34" viewBox="0 0 282 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="17" cy="17" r="17" fill="#232323"/>
<path d="M16.9834 11.9922V22H15.7188V13.5713L13.1689 14.501V13.3594L16.7852 11.9922H16.9834Z" fill="white"/>
<circle cx="141" cy="17" r="16.5" stroke="#232323"/>
<path d="M144.349 20.9609V22H137.834V21.0908L141.095 17.4609C141.496 17.0143 141.806 16.6361 142.024 16.3262C142.248 16.0117 142.403 15.7314 142.489 15.4854C142.58 15.2347 142.626 14.9795 142.626 14.7197C142.626 14.3916 142.558 14.0954 142.421 13.8311C142.289 13.5622 142.093 13.348 141.833 13.1885C141.573 13.029 141.259 12.9492 140.89 12.9492C140.448 12.9492 140.078 13.0358 139.782 13.209C139.491 13.3776 139.272 13.6146 139.126 13.9199C138.98 14.2253 138.907 14.5762 138.907 14.9727H137.643C137.643 14.4121 137.766 13.8994 138.012 13.4346C138.258 12.9697 138.622 12.6006 139.105 12.3271C139.589 12.0492 140.183 11.9102 140.89 11.9102C141.519 11.9102 142.056 12.0218 142.503 12.2451C142.95 12.4639 143.291 12.7738 143.528 13.1748C143.77 13.5713 143.891 14.0361 143.891 14.5693C143.891 14.861 143.84 15.1572 143.74 15.458C143.645 15.7542 143.51 16.0505 143.337 16.3467C143.168 16.6429 142.97 16.9346 142.742 17.2217C142.519 17.5088 142.28 17.7913 142.024 18.0693L139.358 20.9609H144.349Z" fill="#232323"/>
<circle cx="265" cy="17" r="16.5" stroke="#232323"/>
<path d="M263.673 16.4014H264.575C265.017 16.4014 265.382 16.3285 265.669 16.1826C265.961 16.0322 266.177 15.8294 266.318 15.5742C266.464 15.3145 266.537 15.0228 266.537 14.6992C266.537 14.3164 266.473 13.9951 266.346 13.7354C266.218 13.4756 266.027 13.2796 265.771 13.1475C265.516 13.0153 265.193 12.9492 264.801 12.9492C264.445 12.9492 264.131 13.0199 263.857 13.1611C263.589 13.2979 263.377 13.4938 263.222 13.749C263.071 14.0042 262.996 14.305 262.996 14.6514H261.731C261.731 14.1455 261.859 13.6852 262.114 13.2705C262.369 12.8558 262.727 12.5254 263.188 12.2793C263.652 12.0332 264.19 11.9102 264.801 11.9102C265.402 11.9102 265.929 12.0173 266.38 12.2314C266.831 12.4411 267.182 12.7555 267.433 13.1748C267.683 13.5895 267.809 14.1068 267.809 14.7266C267.809 14.9772 267.749 15.2461 267.631 15.5332C267.517 15.8158 267.337 16.0801 267.091 16.3262C266.849 16.5723 266.535 16.7751 266.147 16.9346C265.76 17.0895 265.295 17.167 264.753 17.167H263.673V16.4014ZM263.673 17.4404V16.6816H264.753C265.386 16.6816 265.91 16.7568 266.325 16.9072C266.74 17.0576 267.066 17.2581 267.303 17.5088C267.544 17.7594 267.713 18.0352 267.809 18.3359C267.909 18.6322 267.959 18.9284 267.959 19.2246C267.959 19.6895 267.879 20.1019 267.72 20.4619C267.565 20.8219 267.344 21.1273 267.057 21.3779C266.774 21.6286 266.441 21.8177 266.059 21.9453C265.676 22.0729 265.259 22.1367 264.808 22.1367C264.375 22.1367 263.967 22.0752 263.584 21.9521C263.206 21.8291 262.871 21.6514 262.579 21.4189C262.287 21.182 262.06 20.8926 261.896 20.5508C261.731 20.2044 261.649 19.8102 261.649 19.3682H262.914C262.914 19.7145 262.989 20.0176 263.14 20.2773C263.295 20.5371 263.513 20.7399 263.796 20.8857C264.083 21.027 264.42 21.0977 264.808 21.0977C265.195 21.0977 265.528 21.0316 265.806 20.8994C266.088 20.7627 266.305 20.5576 266.455 20.2842C266.61 20.0107 266.688 19.6667 266.688 19.252C266.688 18.8372 266.601 18.4977 266.428 18.2334C266.255 17.9645 266.008 17.7663 265.689 17.6387C265.375 17.5065 265.004 17.4404 264.575 17.4404H263.673Z" fill="#232323"/>
<line x1="34" y1="15.5" x2="124" y2="15.5" stroke="#232323" stroke-width="3"/>
<line x1="158" y1="15.5" x2="248" y2="15.5" stroke="#232323" stroke-width="3"/>
</svg>


            <h2 class="step-title marginauto">Rellena tus datos</h2>

            <form class="form__container" action="">

                <label class="form__label" for="name">
                    <input class="bordersolid form__input" type="text" id="name" placeholder="Nombre completo">
                </label>

                
                <label class="form__label" for="email">
                    <input class="bordersolid form__input" type="email" id="email" placeholder="e-mail">
                </label>

                <div class="form__div">
                    <label class= "cptel" for="tel">
                        <input class="bordersolid form__input" type="tel" placeholder="Teléfono">
                    </label>

                    <label class= "cptel" for="cp">
                        <input class="bordersolid form__input" type="text" id="cp" placeholder="CP">
                    </label>
                </div>
                
                <label class="form__label" for="street-address">
                    <input class="bordersolid form__input" type="text" id="street-address" placeholder="Dirección">
                </label>

            </form>
            <div class="check-text marginauto">
                <p>
                He podido leer y entiendo la información sobre el uso de mis datos personales explicada en la <a href="" class="info-link"> Política de Privacidad</a>.
                </p>
                <input class="checkbox" type="checkbox">

                <a class="cta-comprar p-large marginmed cta-black" href="2step.php" alt="continuar"> Continuar </a>
            </div>
            
        </div>

    <!-- FOOTER -->
    <footer class="cart__footer"></footer>

</body>
</html>