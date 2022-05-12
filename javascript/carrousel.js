(function(){
    let boite__carrousel = document.querySelector(".boite__carrousel");
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation");
    let boutonFerme = document.querySelector(".boite__carrousel__fermeture");

    //conteneur d'img
    let boite__carrousel__img = document.querySelector(".boite__carrousel__img");

    let galerie_img = document.querySelectorAll('.galerie img')
    let index = 0;

    // Dans l'article de la boite carrousel on ajoute la balise IMG
    
    
    for(const img of galerie_img){
        let elmImg = document.createElement('img')
        console.log(img.getAttribute('src'))
        boite__carrousel__img.appendChild(elmImg)
        img.dataset.index = index
        elmImg.setAttribute('src', img.getAttribute('src'))

        let bouton = document.createElement('input')
        bouton.checked = false
        bouton.type = "radio"
        bouton.class="bouton"
        bouton.name="bouton"
        bouton.dataset.index = index
        bouton.dataset.index = index++
        boite__carrousel__navigation.append(bouton)
        bouton.addEventListener('mousedown', function(){
            // elmImg.setAttribute('src', galerie_img[this.dataset.index].getAttribute('src'))
            boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')
        })

        console.log(img.tagName)
        img.addEventListener('mousedown',function(){
            for(const img of galerie_img){
                boite__carrousel__img.children.classList.remove('img--ouvrir')
            }
            // console.log(this.getAttribute);
            // boite__carrousel__img.forEach( boite__carrousel__img.children[img.dataset.index].classList.remove('img--ouvrir'))
            boite__carrousel.classList.add('ouvrir');
            // console.log(this.getAttribute('src'))
            boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')
            // elmImg.setAttribute('src', this.getAttribute('src'))
            //remove pour ferme la boite
        })
    }
    boutonFerme.addEventListener('mousedown',function(){
        boite__carrousel.classList.remove('ouvrir'); 
    })
})()