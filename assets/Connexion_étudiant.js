let Offres = document.getElementsByClassName("Offre");


for(let i = 0 ; i< Offres.length;i++)
{
    Offres[i].children[0].addEventListener("click",ShowOffre);
}



console.log("b");
function ShowOffre()
{
    console.log("a");

}