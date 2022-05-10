(function(){
    let boite__carrousel = document.querySelector(".boite__carrousel");
    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation");
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');
    let boutonFerme = document.querySelector(".boite__carrousel__fermeture");

    let galerie_img = document.querySelectorAll('.galerie img')
    let elmImg = document.createElement('img')
    let index = 0;

    // Dans l'article de la boite carrousel on ajoute la balise IMG
    boite__carrousel.appendChild(elmImg)
    
    for(const img of galerie_img){
        let bouton = document.createElement('button')
        bouton.dataset.index = index++
        boite__carrousel__navigation.append(bouton)
        bouton.addEventListener('mousedown', function(){
            elmImg.setAttribute('src', galerie_img[this.dataset.index].getAttribute('src'))
        })

        console.log(img.tagName)
        img.addEventListener('mousedown',function(){
            console.log(this.getAttribute);

            boite__carrousel.classList.add('ouvrir');
            console.log(this.getAttribute('src'))
            elmImg.setAttribute('src', this.getAttribute('src'))
            //remove pour ferme la boite
        })
    }
    boutonFerme.addEventListener('mousedown',function(){
        boite__carrousel.classList.remove('ouvrir'); 
    })
})()