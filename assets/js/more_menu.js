

function btn_plus(role) {
    if(document.getElementById("more-menu")==null){
        if(role=="etudiant"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<div id='more-menu'><ul><li><a href='../profil/'> Profil</a></li> \n <li><a href='../wishlist/'>Wish-list</a></li> \n <li><a href='#'>Offre postulé</a></li> \n <li><a href='../assets/phpScripts/deconnexion.php'>Deconnexion</a></li></div>");
            return false;
        }
        if(role=="pilote"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<ul class='dropdown' id='more-menu'><li><a href='../profil/'>Mon Profil</a></li> \n <li class='dropbtn' id='more_entreprise'>  <p class='p_plus'> &#9668 Gerer Entreprise</p> <ul class='more_more' id='entreprise'><li><a href='../Ajout_Entreprise/'>Ajouter Entreprise</a></li><li><a href='../recherche_entreprise/'>Chercher une Entreprise</a></li></ul></li> \n <li class='dropbtn' id='more_stage'><p class='p_plus'>&#9668 Gerer un Stage </p> <ul  class='more_more' id='stage'><li><a href='../ajout_Stage/'>Ajouter Stage</a></li><li><a href='./recherche/'>Chercher un Stage</a></li></ul></li>\n <li class='dropbtn' id='more_compte'><a href='../recherche_user/'>Rechercher un étudiant</p></li> \n <li><a href='../assets/phpScripts/deconnexion.php'>Deconnexion</a></li></div>");
            return false;
        }
        if(role=="admin"){
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<ul class='dropdown' id='more-menu'><li><a href='./Profil.php'>Mon Profil</a></li> \n <li class='dropbtn' id='more_entreprise'>  <p class='p_plus'> &#9668 Gerer Entreprise</p> <ul class='more_more' id='entreprise'><li><a href='../Ajout_Entreprise/'>Ajouter Entreprise</a></li><li><a href='../recherche_entreprise/'>Chercher une Entreprise</a></li></ul></li> \n <li class='dropbtn' id='more_stage'><p class='p_plus'>&#9668 Gerer un Stage </p> <ul  class='more_more' id='stage'><li><a href='../ajout_Stage/'>Ajouter Stage</a></li><li><a href='../recherche/'>Chercher un Stage</a></li></ul></li>\n <li class='dropbtn' id='more_compte'><p class='p_plus'>&#9668 Gerer les utilisateurs</p><ul  class='more_more' id='compte'><li><a href='../ajouter_compte/'>Creer un compte</a></li><li><a href='../recherche_user/'>Chercher un compte</a></li></ul></li> \n <li><a href='../assets/phpScripts/deconnexion.php'>Deconnexion</a></li></div>");
            return false;
        }
        else{
            document.getElementsByClassName("more-menu")[0].insertAdjacentHTML("afterbegin","<div id='more-menu'><ul><li><a href='../profil/'> Profil</a></li> \n <li><a href='../wishlist/'>Wish-list</a></li> \n <li><a href='#'>Offre postulé</a></li> \n <li><a href='../wishlist/'>Wish-list</a></li> \n  <li><a href='../assets/phpScripts/desconexion.php'>Deconnexion</a></li></div>");
            return false;
        }
    }
    else{
        document.getElementById("more-menu").remove();
        return false;
    }
    
   };

