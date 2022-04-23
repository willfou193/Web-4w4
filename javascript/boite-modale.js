(function(){
    let boite__modale = document.querySelector(".boite__modale");
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');
    let boutonFerme = document.querySelector(".boite__modale__fermeture");

    for(const bouton of cours__desc__ouvrir){
        bouton.addEventListener('mousedown',function(){
            console.log(this.parentNode.className);
            boite__modale.classList.add('ouvrir')
            //remove pour ferme la boite
        })
    }
    boutonFerme.addEventListener('mousedown',function(){
        boite__modale.classList.remove('ouvrir'); 
    })
})()