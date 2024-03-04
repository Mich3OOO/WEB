let Offres = document.getElementsByClassName("Offre");


for(let i = 0 ; i< Offres.length;i++)
{
    console.log( Offres[i].id)
    Offres[i].children[0].children[0].addEventListener("click",ShowOffre);
    Offres[i].children[0].children[1].addEventListener("click",addToWishList);
 
}

console.log("b");
function ShowOffre(id)
{
    console.log(id);
    document.body.insertAdjacentHTML("beforeend","<div id='BGPopup'></div><div id = 'StagePopUp'><button>x</button><div id='infostage'><h2>Nom du poste</h2><p>Résumé stage</p></div><div id='infoEntreprise'><h3>Nom Entreprise</h3><h4>Ville</h4><p>Résumé Entreprise</p></div></div>");
    document.getElementById("BGPopup").addEventListener("click",closePopup);
    document.getElementById("StagePopUp").children[0].addEventListener("click",closePopup);
}

function closePopup()
{
    document.getElementById("BGPopup").remove();
    document.getElementById("StagePopUp").remove();
}
function addToWishList()
{
    console.log("element");
}