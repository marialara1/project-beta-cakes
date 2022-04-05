
<div class="header__links">
    <!-- dropup menu ((hidden in desktop)) -->
    <!-- <a class="menu__mobile" href="">
        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="17.0535" y1="17.5" x2="34.5001" y2="17.5" stroke="black" stroke-linecap="round"/>
            <line x1="10.5" y1="27.5" x2="27.9466" y2="27.5" stroke="black" stroke-linecap="round"/>
        </svg>
    </a> -->



<input  class="inputcheck" type="checkbox" id="overlay-input" />
<label class="menu__mobile" for="overlay-input" id="overlay-button">
    <span></span>
</label>
  <div id="overlay" class="menu__mobile">
    <ul class="ul-mobile menu__mobile">
      <li><a href="\projectbetacakes\php\pages\all_cakes_page.php"> <strong> COMPRAR TARTAS</strong></a></li>
      <li><a href="\projectbetacakes\php\pages\shipping_page.php">ENVÍOS</a></li>
      <li><a href="\projectbetacakes\php\pages\conocenos_page.php">CONÓCENOS</a></li>
      <li><a href="\projectbetacakes\php\pages\help_page.php">FAQ</a></li>
    </ul>
  </div>


  <!-- <script>

function disableScroll(){  
  window.scrollTo(0, 0);
}

window.addEventListener('scroll', disableScroll);
window.removeEventListener('scroll', disableScroll); 

const button = document.querySelector('.menu__mobile');

button.addEventListener('click', function disableScroll()) {
    window.scrollTo(0, 0);
}
  </script> -->











    
    <!-- home/logo -->
    <a href="\projectbetacakes\index.php" alt="home">
        <img src="<?php echo $pathlogo; ?>/_logoSVG.svg" class="vake-logo" alt="vake logo">
    </a>
        <!-- nav -->
    <nav class="nav-desktop">
        <li>
            <a href="\projectbetacakes\php\pages\all_cakes_page.php">
                <strong>COMPRAR TARTAS</strong> 
            </a>
        </li>
        <li>
            <a href="\projectbetacakes\php\pages\shipping_page.php">
                ENVÍOS
            </a>
        </li>
        <li>
            <a href="\projectbetacakes\php\pages\conocenos_page.php">
                CONÓCENOS
            </a>
        </li>
        <li>
            <a href="\projectbetacakes\php\pages\help_page.php">
                FAQ
            </a>
        </li>
    </nav>
        <!-- cart -->
        <a class="cart" href="\projectbetacakes\php\pages\cart_page.php">
            <!-- <img src="resources\icons\cart-icon.svg" alt="cesta"> -->
            <svg alt="cesta" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="22.5" cy="22.5" r="19" stroke="black"/>
                <path d="M14.4286 20.7144L17.4447 30.4286H28.4125L31.4286 20.7144H14.4286Z" stroke="black" stroke-miterlimit="10" stroke-linejoin="round"/>
                <path d="M28.4319 20.4128L25.824 13.8779" stroke="black" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M17.892 20.4784L20.4999 13.9436" stroke="black" stroke-miterlimit="10" stroke-linecap="round"/>
            </svg>

        </a>
</div>
