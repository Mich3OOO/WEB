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
        if(role=="etudiant"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<div id='more-menu'><ul><li><a href='./Profil.php'> Profil</a></li> \n <li><a href='./Wishlist.php'>Wish-list</a></li> \n <li><a href='#'>Offre postulé</a></li> \n <li><a href='../assets/phpScripts/desconexion.php'>Deconnexion</a></li></div>");
            return false;
        }
        if(role=="pilote"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<ul class='dropdown' id='more-menu'><li><a href='./Profil.php'>Mon Profil</a></li> \n <li class='dropbtn' id='more_entreprise'>  <p class='p_plus'> &#9668 Gerer Entreprise</p> <ul class='more_more' id='entreprise'><li><a href='./Ajout_Entreprise.php'>Ajouter Entreprise</a></li><li><a href=''>Modifier Entreprise</a></li></ul></li> \n <li class='dropbtn' id='more_stage'><p class='p_plus'>&#9668 Gerer un Stage </p> <ul  class='more_more' id='stage'><li><a href='#'>Ajouter Stage</a></li><li><a href='#'>Modifier Stage</a></li></ul></li>\n <li class='dropbtn' id='more_compte'><p class='p_plus'>&#9668 Rechercher un étudiant</p></li> \n <li><a href='../assets/phpScripts/desconexion.php'>Deconnexion</a></li></div>");
            return false;
        }
        if(role=="admin"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<ul class='dropdown' id='more-menu'><li><a href='./Profil.php'>Mon Profil</a></li> \n <li class='dropbtn' id='more_entreprise'>  <p class='p_plus'> &#9668 Gerer Entreprise</p> <ul class='more_more' id='entreprise'><li><a href='./Ajout_Entreoruse.php'>Ajouter Entreprise</a></li><li><a href='#'>Modifier Entreprise</a></li></ul></li> \n <li class='dropbtn' id='more_stage'><p class='p_plus'>&#9668 Gerer un Stage </p> <ul  class='more_more' id='stage'><li><a href='#'>Ajouter Stage</a></li><li><a href='#'>Modifier Stage</a></li></ul></li>\n <li class='dropbtn' id='more_compte'><p class='p_plus'>&#9668 Gerer les utilisateurs</p><ul  class='more_more' id='compte'><li><a href='#'>Creer un compte</a></li><li><a href='#'>Modifier un compte</a></li></ul></li> \n <li><a href='../assets/phpScripts/desconexion.php'>Deconnexion</a></li></div>");
            return false;
        }
    }
    else{
        document.getElementById("more-menu").remove();
        return false;
    }
    
   };

