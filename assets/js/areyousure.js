

function sure(){

    document.getElementsByClassName("filtre-element")[0].insertAdjacentHTML("beforebegin","<div id='BGPopup'>Voulez-vous vraiment supprimer ce compte?</div><div id = 'StagePopUp'><form action='../assets/phpScripts/delteUser.php' method='get'><button type='submit' id ='Oui'>Oui</button></form><form action='../modifier_compte/' ><button type='submit' id ='Annuler'>Annuler</button></div>");

    return false;
}

