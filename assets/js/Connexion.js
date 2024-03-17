window.addEventListener("DOMContentLoaded", ()=>{
    let inputs = document.getElementsByClassName("MChoise");

    for(let i = 0 ; i< inputs.length;i++)
    {
        inputs[i].addEventListener("select",addFiltre);
        inputs[i].addEventListener("submit",addFiltre); 
    
    }



    document.getElementById("Département").addEventListener("input",(event)=>{ updateDL(event,"https://geo.api.gouv.fr/departements?nom=")});

    document.getElementById("search").addEventListener("change",search);

    document.getElementById("Ville").addEventListener("input",(event)=>{ updateDL(event,"https://geo.api.gouv.fr/communes?nom=") });

})

function updateDL(event,api)
{
    let Opt= document.getElementById("DL" + event.target.id);
        

    for(let i = Opt.children.length-1;i>=0;i--)
    {
        Opt.children[i].remove();

    }
    
    if(event.target.value.length >= 3)
    {
        fetch(api+event.target.value).then(r=> r.json()).then(data =>{
        
        console.log(data);

        for(let i =0 ; i< data.length;i++)
        {   
            Opt.insertAdjacentHTML("beforeend","<option value= '"+data[i].nom+"'></option>")    ;
        }
        addFiltre(event);
        } );

    }    
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
    return "<div id='BGPopup'></div><div id = 'StagePopUp'><div class = 'scrollContainer'><button id = 'Close'>x</button><input class= 'StarButon' type='checkbox'><div id='infostage'><h2>"+NomPoste+"</h2><article><h3>Résumé</h3><p>"+SumUp+"</p></article><article><h3>compétences</h3><p>"+Comp+"</p></article><p><strong>promotions concernées:</strong>"+Prom+"</p><p><strong>rémunération:</strong>"+EUR+"</p><div class = 'flexContainer'><div id='PopUpTimeInfo'><strong>Date de publication:</strong><p>"+PubDate+"</p><strong>durée:</strong><p>"+ duree+ "</p></div><div id = 'PopUpSpotsInfo'><strong>nombre de places:</strong><p>"+places+"</p><strong>élèves postulés :</strong><p> "+Postule+"</p></div></div></div><div id='infoEntreprise'><h3>"+NameEnt+"</h3><h4>"+Location+"</h4><p>"+SumUpEnt+"</p><button id = 'Postuler'>Postuler</button></div></div></div>";
}


function addFiltre(event)
{
    
    let DL = document.getElementById("DL"+event.target.id);
    
    for( let i = 0 ; i < DL.children.length ; i++ )
    {
        if (document.getElementById("tag"+ DL.children[i].value) == null && DL.children[i].value.toUpperCase() == event.target.value.toUpperCase()) 
        {
            document.getElementById(event.target.id + "List").insertAdjacentHTML("beforeend",getTagHtml(DL.children[i].value));
            document.getElementById("tag"+ DL.children[i].value).children[0].addEventListener("click",removeFiltre);
            event.target.value = "";
            break;
            
        }
    }    
}

function getTagHtml(name)
{
    return "<div id = 'tag"+ name +"' class='tag'><button>x</button><p>"+ name + "</p></div>";
}

function removeFiltre(event)
{
    document.getElementById( "DL" + event.target.parentNode.parentNode.id.replace("List","")).insertAdjacentHTML("beforeend","<option value="+event.target.parentNode.id.replace("tag","")+"></option>");
    event.target.parentNode.remove();
}

function search(event)
{
    let stagesDisp = [1,2,3,4,5,6,7,8,9,11,22,33,44,55,66,77,88,99,111,222,333,444,555,666,777,888,999]
    let OffreCon = document.getElementById("offres");

    for(let i = OffreCon.children.length-1; i>=0; i--)
    {
        OffreCon.children[i].remove();

    }

    if(stagesDisp.length>0)
    {
        
        for(let i = 0 ; i<stagesDisp.length;i++)
        {
            OffreCon.insertAdjacentHTML("beforeend",getStageHtml(stagesDisp[i],"Poste","ent","Pau"))
            let Offre = document.getElementById(stagesDisp[i]);
            Offre.children[0].children[0].addEventListener("click",ShowOffre);
            Offre.children[0].children[1].addEventListener("click",addToWishList);
        }
    }
    else
    {
        OffreCon.insertAdjacentHTML("beforeend","<h2>Pas de offres pour le moment </h2>");
    }


}

function getStageHtml(StageId,Poste,Ent,Ville)
{
    return "<div class='Offre' id ="+StageId+"><div><button><ul class='liste'><li>"+Poste+"</li><li>"+Ent+"</li><li>"+ Ville +"</li> </ul></button><input class='StarButon' type='checkbox'></div></div>" ; 

}
