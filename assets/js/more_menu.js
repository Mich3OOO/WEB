// window.onload(()=>{
//     // statut==eleve
//     document.getElementById("more-menu").insertAdjacentHTML("afterbegin","<a href='Profil.html'>Mon Profil</a> \n <a href='Wishlist.html'>Wish-list</a> \n <a href='#'>Offre postulé</a> \n <a href='Authentification.htlm'>Deconnexion</a>")
// })

// window.addEventListener('DOMContentLoaded',()=>{

//     document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<a href='Profil.html'>Mon Profil</a> \n <a href='Wishlist.html'>Wish-list</a> \n <a href='#'>Offre postulé</a> \n <a href='Authentification.htlm'>Deconnexion</a>");
//     console.log("no");
// })

function btn_plus(role) {
    if(document.getElementById("more-menu")==null){
        // if(role=="étudiant"){
            // document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<div id='more-menu'><ul><li><a href='./Profil.php'> Profil</a></li> \n <li><a href='./Wishlist.php'>Wish-list</a></li> \n <li><p>Offre postulé</p></li> \n <li><a href='./assets/phpScripts/desconexion.php'>Deconnexion</a></li></div>");
            // return false;
    //  }
    //  if(role=="pilote"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<ul class='dropdown' id='more-menu'><li><a href='./Profil.php'>Mon Profil</a></li> \n <li class='dropbtn' id='more_entreprise'>  <p> &#9668 Gerer Entreprise</p> <ul class='more_more' id='entreprise'><li><a href='./Ajout_Entreprise.php'>Ajouter Entreprise</a></li><li><a href=''>Modifier Entreprise</a></li></ul></li> \n <li class='dropbtn' id='more_stage'><a href='#'>&#9668 Gerer un Stage </a> <ul  class='more_more' id='stage'><li><a href='#'>Ajouter Stage</a></li><li><a href='#'>Modifier Stage</a></li></ul></li>\n <li class='dropbtn' id='more_compte'><a href='#'>&#9668 Rechercher un étudiant</a></li> \n <li><a href='./assets/phpScripts/desconexion.php'>Deconnexion</a></li></div>");
            return false;
    //  }
     //  if(role=="admin"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<ul class='dropdown' id='more-menu'><li><a href='./Profil.php'>Mon Profil</a></li> \n <li class='dropbtn' id='more_entreprise'>  <p> &#9668 Gerer Entreprise</p> <ul class='more_more' id='entreprise'><li><a href='./Ajout_Entreoruse.php'>Ajouter Entreprise</a></li><li><a href='#'>Modifier Entreprise</a></li></ul></li> \n <li class='dropbtn' id='more_stage'><a href='#'>&#9668 Gerer un Stage </a> <ul  class='more_more' id='stage'><li><a href='#'>Ajouter Stage</a></li><li><a href='#'>Modifier Stage</a></li></ul></li>\n <li class='dropbtn' id='more_compte'><a href='#'>&#9668 Gerer les utilisateurs</a><ul  class='more_more' id='compte'><li><a href='#'>Creer un compte</a></li><li><a href='#'>Modifier un compte</a></li></ul></li> \n <li><a href='./assets/phpScripts/desconexion.php'>Deconnexion</a></li></div>");
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