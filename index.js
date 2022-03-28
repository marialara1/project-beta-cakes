const tagsTotales = ['gluten', 'sugar'];
tagsTotales.forEach(function(tag) {
    document.querySelector('footer').innerHTML += `<button class="filter ${tag}">${tag}</button>`;
})

fetch('../../data.json')
    .then(function(response) { return response.json()})
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
            const isSelectedGluten = document.querySelector('.gluten').classList.contains('active');
            const isSelectedSugar = document.querySelector('.sugar').classList.contains('active');
            
            const botonOrdenarActivo = true;
            const orderedTartas = tartas.sort(function(tarta1, tarta2) { 
                if (botonOrdenarActivo) {
                    return tarta2.price - tarta1.price
                } else {
                    return tarta1.price - tarta2.price
                }
            })

            orderedTartas.forEach(function(tarta) {
                const shouldPaintSugar = isSelectedSugar === false || isSelectedSugar === true && tarta.sugar;
                const shouldPaintGluten = isSelectedGluten === false || isSelectedGluten === true && tarta.gluten;

                if (shouldPaintSugar && shouldPaintGluten) {
                    document.querySelector('main').innerHTML += `<h1>${tarta.name}</h1>`;
                }
            })

        }

    });
