(function(){
    let boite__modale = document.querySelector(".boite__modale");
    let boite__modale__texte = document.querySelector(".boite__modale__texte");
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');
    let boutonFerme = document.querySelector(".boite__modale__fermeture");

    let galerie_img = document.querySelectorAll('.galerie img')
    consol.log( galerie_img.length)
    let elmImg = document.createElement('img')

    // Dans l'article de la boite modale on ajoute la balise IMG
    boite__modale__texte.appendChild(elmImg)
    
    for(const img of galerie_img){
        img.addEventListener('mousedown',function(){
            console.log(this.tagName);
            boite__modale.classList.add('ouvrir');
            boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;
            console.log(this.getAttribute('src'))
            elmImg.setAttribute('src', this.getAttribute('src'))
            //remove pour ferme la boite
        })
    }
    boutonFerme.addEventListener('mousedown',function(){
        boite__modale.classList.remove('ouvrir'); 
    })
})()