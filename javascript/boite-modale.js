(function(){
    let boite__modale = document.querySelector(".boite__modale");
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');

    for(const bouton of cours__desc__ouvrir){
        bouton.addEventListener('mousedown',function(){
            console.log(this.parentNode.className);
            boite__modale.classList.add('ouvrir')
            //remove pour ferme la boite
        })
    }
})()