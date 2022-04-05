const tagsTotales = ['GLUTEN', 'AZUCAR'];
tagsTotales.forEach(function(tag) {
    document.querySelector('footer').innerHTML += `<button class="filter ${tag}">SIN ${tag}</button>`;
})


fetch('../../data.json')
    .then(function(response) {return response.json()})
    .then(function(tartas) {
        console.log(tartas);
        
        document.querySelectorAll('.filter').forEach(function(button) {
            button.addEventListener('click', function() {
                button.classList.toggle('active');

                const list = [];
                document.querySelectorAll('.active').forEach(function(buttonActive) {
                    list.push(buttonActive.textContent)
                });
                paintProducts(list)
            })
        })

        paintProducts();

        function paintProducts() {
            document.querySelector('main').innerHTML = '';
            const isSelectedGluten = document.querySelector('.GLUTEN').classList.contains('active');
            const isSelectedSugar = document.querySelector('.AZUCAR').classList.contains('active');
            
            const botonOrdenarActivo = true;
            const orderedTartas = tartas.sort(function(tarta1, tarta2) { 
                if (botonOrdenarActivo) {
                    return tarta2.price - tarta1.price
                } else {
                    return tarta1.price - tarta2.price
                }
            })

            orderedTartas.forEach(function(tarta) {
                const shouldPaintSugar = isSelectedSugar === false || isSelectedSugar === true && tarta.AZUCAR;
                const shouldPaintGluten = isSelectedGluten === false || isSelectedGluten === true && tarta.GLUTEN;

                if (shouldPaintSugar && shouldPaintGluten) {
                    document.querySelector('main').innerHTML +=
                    `
                   
                    <div class="items__grid">
                            <div class="item__container">
                            <a class="item__link" href="product-info.php">
                                <img src="${tarta.img}" alt="" class= "tartapic">
                                </a>
                                <div class="item__sub">
                                    <div class="product-subtext">
                                        <p class="item-name"> ${tarta.name}</p>
                                        <p class="item-price bold">${tarta.price}</p>
                                    </div>
                                    <div class= "add-cart-button small">
                                        <span  class= "add-cart-btn small">+</span>
                                    </div>
                                </div>
                            </div>
                    </div>

                    `;
                }
            })

        }

    });



    