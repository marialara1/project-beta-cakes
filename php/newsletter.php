
<div>
<h2 class="newsletter__title">NEWSLETTER</h2>
<p class="newsletter__p">Si quieres enterarte de noticias y recibir descuentos suscríbete ahora a <br class="espacio-enter"> nuestra newsletter y recibe un 10% el día de tu cumpleaños :)</p>

<label class="newsletter__label" for="email">
    <input class="newsletter__input bordersolid" type="email" id="email" placeholder="Introduce tu email<3">
</label>

<button class="newsletter__button cta-comprar p-large marginmed cursor" id="send" href=""> Enviar! </button>

<script>
const container = document.querySelector(".newsletter__button");
container.addEventListener("click", (event) => {
  swal ("¡Gracias por suscribirte!") })
</script>
</div>