window.addEventListener("DOMContentLoaded", ()=>{
    let inputs = document.getElementsByClassName("MChoise");

    for(let i = 0 ; i< inputs.length;i++)
    {

        inputs[i].addEventListener("submit",addFiltre); 
    
    }



    document.getElementById("Département").addEventListener("input",(event)=>{ updateDL(true,event,"https://geo.api.gouv.fr/departements?nom=")});
    document.getElementById("search").addEventListener("change",(event)=>{search();});
    document.getElementById("Ville").addEventListener("input",(event)=>{ updateDL(true,event,"https://geo.api.gouv.fr/communes?nom=") });
    document.getElementById("SécteurA").addEventListener("input",(event)=>{ updateDL(true,event,"http://localhost/assets/phpscripts/secteurAct.php?secteur=") });
    document.getElementById("Prom").addEventListener("input",(event)=>{ updateDL(true,event,"http://localhost/assets/phpscripts/TypePromotion.php?TypePromotion=") });
    

    document.getElementById("durée").addEventListener("change",search);
    search();
})

function updateDL(MFiltre,event,api)
{
    let Opt= document.getElementById("DL" + event.target.id);
        

    for(let i = Opt.children.length-1;i>=0;i--)
    {
        Opt.children[i].remove();

    }
    
    if(event.target.value.length >= 2)
    {
        fetch(api+event.target.value).then(r=> r.json()).then(data =>{
        


        for(let i =0 ; i< data.length;i++)
        {   
            Opt.insertAdjacentHTML("beforeend","<option value= '"+data[i].nom+"'></option>")    ;
        }
        if (MFiltre)
        {
            addFiltre(event);
        }
        
        } );    

    }
}

function ShowOffre(event)
{
    let tmp =event.target.parentNode;
    while(tmp.classList[0]!="Offre")
    {
        tmp = tmp.parentNode;
        
    }
       
    fetch("http://localhost/assets/phpScripts/search.php?ID="+tmp.id,{method: 'GET'}).then(r=> r.json()).then(data =>{
        
        document.body.insertAdjacentHTML("beforeend",getPopupHtml(tmp.id,data[0].Poste,data[0].Descr,data[0].Competence,data[0].Nom_du_Type,data[0].remune,data[0].Date_Stage,data[0].Duree,data[0].Nb_place,data[0].post,data[0].NomE,data[0].Site,data[0].descr,data[0].TelE));
        document.getElementById("BGPopup").addEventListener("click",closePopup);
        document.getElementById("Close").addEventListener("click",closePopup);

    })
}

function closePopup()
{
    document.getElementById("BGPopup").remove();
    document.getElementById("StagePopUp").remove();
}
function WishList(event)
{
    let tmp = new FormData();
    tmp.append("IDo",event.target.parentNode.parentNode.id)
    if (event.target.checked == 1)
    {
        
        fetch("http://localhost/assets/phpScripts/AddToWhislist.php",{method: 'POST',body: tmp });
    }
    else 
    {
        fetch("http://localhost/assets/phpScripts/removeFromWhislist.php",{method: 'POST',body: tmp});
    }
}

function getPopupHtml(IDoffre,NomPoste,SumUp,Comp,Prom,EUR,PubDate,duree,places,Postule,NameEnt,Location,SumUpEnt,tel)
{
    return "<div id='BGPopup'></div><div id = 'StagePopUp'><div class = 'scrollContainer'><button id = 'Close'>x</button><div id='infostage'><h2>"+NomPoste+"</h2><article><h3>Résumé</h3><p>"+SumUp+"</p></article><article><h3>compétences</h3><p>"+Comp+"</p></article><p><strong>promotions concernées:</strong>"+Prom+"</p><p><strong>rémunération:</strong>"+EUR+"</p><div class = 'flexContainer'><div id='PopUpTimeInfo'><strong>Date de publication:</strong><p>"+PubDate+"</p><strong>durée:</strong><p>"+ duree+ "</p></div><div id = 'PopUpSpotsInfo'><strong>nombre de places:</strong><p>"+places+"</p><strong>élèves postulés :</strong><p> "+Postule+"</p></div></div></div><div id='infoEntreprise'><h3>"+NameEnt+"</h3><h4>"+Location+"</h4><p>"+SumUpEnt+"</p><p>Tel: "+tel+"</p><a href = '../postuler/?IDoffre="+IDoffre+"'><button id = 'Postuler'>Postuler</button></a></div></div></div>";
}   


function addFiltre(event)     
{
    
    if (document.getElementById(event.target.id + "List")!="" )
    {
    let DL = document.getElementById("DL"+event.target.id);
    
        for( let i = 0 ; i < DL.children.length ; i++ )
        {
            if (document.getElementById("tag"+ DL.children[i].value) == null && DL.children[i].value.toUpperCase() == event.target.value.toUpperCase()) 
            {
                document.getElementById(event.target.id + "List").insertAdjacentHTML("beforeend",getTagHtml(DL.children[i].value));
                document.getElementById("tag"+ DL.children[i].value).children[0].addEventListener("click",removeFiltre);
                event.target.value = "";
                search();
                break;
                
            }
        }    
    }
}

function getTagHtml(name)
{
    return "<div id = 'tag"+ name +"' class='tag'><button>x</button><p>"+ name + "</p></div>";
}

function removeFiltre(event)
{
    event.target.parentNode.remove();
    search();
}

function search(event)
{
     fetch("http://localhost/assets/phpScripts/search.php"+getfiltres(),{method: 'GET'}).then(r=> r.json()).then(data =>{

        let OffreCon = document.getElementById("offres");

        for(let i = OffreCon.children.length-1; i>=0; i--)
        {
            OffreCon.children[i].remove();

        }

        if(data.length>0)
        {   
            
            for(let i = 0 ; i<data.length;i++)
            {
                OffreCon.insertAdjacentHTML("beforeend",getStageHtml(data[i].IDoffre,data[i].Poste,data[i].NomE,data[i].Ville))
                let Offre = document.getElementById(data[i].IDoffre);
                Offre.children[0].children[0].onclick = ShowOffre;
                Offre.children[0].children[1].addEventListener("click",WishList);
                if (data[i].IDu != null)
                {
                    Offre.children[0].children[1].checked =true;
                }
            }
        }
        else
        {
            OffreCon.insertAdjacentHTML("beforeend","<h2>Pas de offres pour le moment </h2>");
        }

     
     });
    

}

function getfiltres()
{
    r ="?ville[]"
    
    let tmp = document.getElementById("VilleList").children
    if(tmp.length>0)
    {
        r+="="+ tmp[0].id.replace("tag","");
    }
    for (let i = 1; i < tmp.length; i++) {
        r+= "&ville[]="+ tmp[i].id.replace("tag","");
    }

    r+= "&reg[]";
    tmp = document.getElementById("DépartementList").children
    if(tmp.length>0)
    {
        r+="="+ tmp[0].id.replace("tag","");
    }
    for (let i = 1; i < tmp.length; i++) {
        r+= "&reg[]="+ tmp[i].id.replace("tag","");
    }
    
    r+= "&Secteur[]";
    tmp = document.getElementById("SécteurAList").children
    if(tmp.length>0)
    {
        r+="="+ tmp[0].id.replace("tag","");
    }
    for (let i = 1; i < tmp.length; i++) {
        r+= "&Secteur[]="+ tmp[i].id.replace("tag","");
    }

    r+= "&Prom[]";
    tmp = document.getElementById("PromList").children
    if(tmp.length>0)
    {
        r+="="+ tmp[0].id.replace("tag","");
    }
    for (let i = 1; i < tmp.length; i++) {  
        r+= "&Prom[]="+ tmp[i].id.replace("tag","");
    }

    r+="&Duree";

    tmp = document.getElementById("durée").value;
    if(tmp != "")
    {
        r+= "="+tmp;
    }

    r+="&Date";

    tmp = document.getElementById("Date_début").value;
    if(tmp != "")
    {
        r+= "="+tmp;
    }

    r+="&Poste";
    tmp = document.getElementById("search").value;

    if(tmp != "")
    {
        r+= "="+tmp;
    }
    return r;

}

function getStageHtml(StageId,Poste,Ent,Ville)
{
    return "<div class='Offre' id ="+StageId+"><div><button><ul class='liste'><li>"+Poste+"</li><li>"+Ent+"</li><li>"+ Ville +"</li> </ul></button><input class='StarButon' type='checkbox'></div></div>" ; 

}
