// window.onload(()=>{
//     // statut==eleve
//     document.getElementById("more-menu").insertAdjacentHTML("afterbegin","<a href='Profil.html'>Mon Profil</a> \n <a href='Wishlist.html'>Wish-list</a> \n <a href='#'>Offre postulé</a> \n <a href='Authentification.htlm'>Deconnexion</a>")
// })

// window.addEventListener('DOMContentLoaded',()=>{

//     document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<a href='Profil.html'>Mon Profil</a> \n <a href='Wishlist.html'>Wish-list</a> \n <a href='#'>Offre postulé</a> \n <a href='Authentification.htlm'>Deconnexion</a>");
//     console.log("no");
// })

function btn_plus() {
    if(document.getElementById("more-menu")==null){
        document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<div id='more-menu'><a href='Profil.html'>Mon Profil</a> \n <a href='Wishlist.html'>Wish-list</a> \n <a href='#'>Offre postulé</a> \n <a href='Authentification.htlm'>Deconnexion</a></div>");
        return false;
    }
    document.getElementById("more-menu").remove();  
   };

