let Offres = document.getElementsByClassName("Offre");
let inputs = document.getElementsByClassName("MChoise");

for(let i = 0 ; i< Offres.length;i++)
{
    Offres[i].children[0].children[0].addEventListener("click",ShowOffre);
    Offres[i].children[0].children[1].addEventListener("click",addToWishList);
}

for(let i = 0 ; i< inputs.length;i++)
{
    inputs[i].addEventListener("change",addFiltre);
 
}

function ShowOffre(id)
{
    document.body.insertAdjacentHTML("beforeend",getPopupHtml("test","test","test","test","test","test","test","test","test","test","test","test"));
    document.getElementById("BGPopup").addEventListener("click",closePopup);
    document.getElementById("Close").addEventListener("click",closePopup);
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

function getPopupHtml(NomPoste,SumUp,Comp,Prom,EUR,PubDate,duree,places,Postule,NameEnt,Location,SumUpEnt)
{
    return "<div id='BGPopup'></div><div id = 'StagePopUp'><div class = 'scrollContainer'><button id = 'Close'>x</button><input class= 'StarButon' type='checkbox'><div id='infostage'><h2>"+NomPoste+"</h2><article><h3>Résumé</h3><p>"+SumUp+"</p></article><article><h3>compétences</h3><p>"+Comp+"</p></article><p><strong>promotions concernées:</strong>"+Prom+"</p><p><strong>rémunération:</strong>"+EUR+"</p><div class = 'flexContainer'><div id='PopUpTimeInfo'><strong>Date de publication:</strong><p>"+PubDate+"</p><strong>durée:</strong><p>"+ duree+ "</p></div><div id = 'PopUpSpotsInfo'><strong>nombre de places:</strong><p>"+places+"</p><strong>élèves postulés :</strong><p> "+Postule+"</p></div></div></div><div id='infoEntreprise'><h3>"+NameEnt+"</h3><h4>"+Location+"</h4><p>"+SumUpEnt+"</p><button id = 'Postuler'>Postuler</button></div></div></div>"
}

function addFiltre(event)
{
    let DL = document.getElementById("DL"+event.target.id);
    
    for( let i = 0 ; i < DL.children.length ; i++ )
    {
        
        if (DL.children[i].value == event.target.value ) 
        {
            
            document.getElementById(event.target.id + "List").insertAdjacentHTML("beforeend",getTagHtml(event.target.value));
            document.getElementById("tag"+ event.target.value).children[0].addEventListener("click",removeFiltre);
            DL.children[i].remove();
            event.target.value = "";

            break;
        }
    }
    
}

function getTagHtml(name)
{
    return "<div id = 'tag"+ name +"' class='tag'><button>x</button><p>"+ name + "</p></div>"
}

function removeFiltre(event)
{
    document.getElementById( "DL" + event.target.parentNode.parentNode.id.replace("List","")).insertAdjacentHTML("beforeend","<option value="+event.target.parentNode.id.replace("tag","")+"></option>");
    event.target.parentNode.remove();
}