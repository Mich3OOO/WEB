

function btn_plus(role) {
    if(document.getElementById("more-menu")==null){
        if(role=="etudiant"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<div id='more-menu'><ul><li><a href='http://presquauchaud.ddns.net/profil/'> Profil</a></li> \n <li><a href='http://presquauchaud.ddns.net/wishlist/'>Wish-list</a></li> \n <li><a href='http://presquauchaud.ddns.net/stats/'>Statistique</a></li> \n <li><a href='http://presquauchaud.ddns.net/postule/'>Offre postulé</a></li> \n <li><a href='http://presquauchaud.ddns.net/assets/phpScripts/deconnexion.php'>Deconnexion</a></li></div>");
            return false;   
        }
        if(role=="pilote"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<ul class='dropdown' id='more-menu'><li><a href='http://presquauchaud.ddns.net/profil/'>Mon Profil</a></li> \n <li class='dropbtn' id='more_entreprise'>  <p class='p_plus'> &#9668 Gerer Entreprise</p> <ul class='more_more' id='entreprise'><li><a href='http://presquauchaud.ddns.net/Ajout_Entreprise/'>Ajouter Entreprise</a></li><li><a href='http://presquauchaud.ddns.net/recherche_entreprise/'>Chercher une Entreprise</a></li></ul></li> \n <li class='dropbtn' id='more_stage'><p class='p_plus'>&#9668 Gerer un Stage </p> <ul  class='more_more' id='stage'><li><a href='http://presquauchaud.ddns.net/ajout_Stage/'>Ajouter Stage</a></li><li><a href='http://presquauchaud.ddns.net/recherche/'>Chercher un Stage</a></li></ul></li>\n <li class='dropbtn' id='more_compte'><a href='http://presquauchaud.ddns.net/recherche_user/'>Rechercher un étudiant</p></li> \n <li><a href='http://presquauchaud.ddns.net/stats/'>Statistique</a></li>\n <li><a href='http://presquauchaud.ddns.net/wishlist/'>Wish-list</a></li>\n <li><a href='http://presquauchaud.ddns.net/assets/phpScripts/deconnexion.php'>Deconnexion</a></li></div>");
            return false;
        }
        if(role=="admin"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<ul class='dropdown' id='more-menu'><li><a href='./Profil.php'>Mon Profil</a></li> \n <li class='dropbtn' id='more_entreprise'>  <p class='p_plus'> &#9668 Gerer Entreprise</p> <ul class='more_more' id='entreprise'><li><a href='http://presquauchaud.ddns.net/Ajout_Entreprise/'>Ajouter Entreprise</a></li><li><a href='http://presquauchaud.ddns.net/recherche_entreprise/'>Chercher une Entreprise</a></li></ul></li> \n <li class='dropbtn' id='more_stage'><p class='p_plus'>&#9668 Gerer un Stage </p> <ul  class='more_more' id='stage'><li><a href='http://presquauchaud.ddns.net/ajout_Stage/'>Ajouter Stage</a></li><li><a href='http://presquauchaud.ddns.net/recherche/'>Chercher un Stage</a></li></ul></li>\n <li class='dropbtn' id='more_compte'><p class='p_plus'>&#9668 Gerer les utilisateurs</p><ul  class='more_more' id='compte'><li><a href='http://presquauchaud.ddns.net/ajouter_compte/'>Creer un compte</a></li><li><a href='http://presquauchaud.ddns.net/recherche_user/'>Chercher un compte</a></li></ul></li>\n <li><a href='http://presquauchaud.ddns.net/stats/'>Statistique</a></li>\n <li><a href='http://presquauchaud.ddns.net/wishlist/'>Wish-list</a></li> \n <li><a href='http://presquauchaud.ddns.net/assets/phpScripts/deconnexion.php'>Deconnexion</a></li></div>");
            return false;
        }
        else{
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<div id='more-menu'><ul><li><a href='http://presquauchaud.ddns.net/profil/'> Profil</a></li> \n <li><a href='http://presquauchaud.ddns.net/wishlist/'>Wish-list</a></li> \n <li><a href='http://presquauchaud.ddns.net/postule/'>Offre postulé</a></li>\n <li><a href='http://presquauchaud.ddns.net/stats/'>Statistique</a></li> \n <li><a href='http://presquauchaud.ddns.net/wishlist/'>Wish-list</a></li> \n  <li><a href='http://presquauchaud.ddns.net/assets/phpScripts/desconexion.php'>Deconnexion</a></li></div>");
            return false;
        }
    }
    else{
        document.getElementById("more-menu").remove();
        return false;
    }
    
   };

