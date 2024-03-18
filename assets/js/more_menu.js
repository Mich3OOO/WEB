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
        // if(statut=="étudiant"){
            // document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<div id='more-menu'><ul><li><a href='Profil.html'> Profil</a></li> \n <li><a href='Wishlist.html'>Wish-list</a></li> \n <li><a href='#'>Offre postulé</a></li> \n <li><a href='Authentification.htlm'>Deconnexion</a></li></div>");
            // return false;
    //  }
    //  if(statut=="pilote"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<ul class='dropdown' id='more-menu'><li><a href='Profil.html'>Mon Profil</a></li> \n <li class='dropbtn' id='more_entreprise'>  <a href='#' > &#9668 Gerer Entreprise</a> <ul class='dropdown-content' id='more_more'><li><a href='#'>Ajouter Entreprise</a></li><li><a href='#'>Modifier Entreprise</a></li></ul></li> \n <a href='#'>Gerer un Stage </a> \n <a href='#'>Gerer un étudiant</a> \n <a href='Authentification.htlm'>Deconnexion</a></div>");
            return false;
    //  }
     //  if(statut=="admin"){
        document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<div id='more-menu'><a href='Profil.html'>Mon Profil</a> \n <a href='#'>Gerer Entreprise</a> \n <a href='#'>Gerer un Stage </a> \n <a href='#'>Gerer un étudiant</a> \n <a href='Authentification.htlm'>Deconnexion</a></div>");
        return false;
    //  }
    }
    document.getElementById("more-menu").remove();
    return false;
   };

function btn_more_more(){
    if(document.getElementById("more-more")==null){
        document.getElementById('more_entreprise').insertAdjacentHTML("beforeend","<ul id='more-more'><li><a href='#'>Ajouter Entreprise</a></li><li><a href='#'>Modifier Entreprise</a></li></ul>");
        return false;
    }
    document.getElementById("more-more").remove();
}
/* <button  id='btn_more_more' on='btn_more_more()'> </button> */