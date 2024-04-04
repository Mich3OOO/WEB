var role = "";
if (document.readyState !== 'loading') {
    init();
}
window.addEventListener("DOMContentLoaded",init)
 
function init()
{
    role =document.cookie.split(";")[0].split("=")[1];

    document.getElementById("KeyWord").addEventListener("change",() =>search("http://localhost/assets/phpScripts/search.php"));

    document.getElementById("Département").addEventListener("input",(event)=>{ updateDL(event,"https://geo.api.gouv.fr/regions?nom=")});
    document.getElementById("Ville").addEventListener("input",(event)=>{ updateDL(event,"https://geo.api.gouv.fr/communes?nom=") });
    document.getElementById("SécteurA").addEventListener("input",(event)=>{ updateDL(event,"http://localhost/assets/phpscripts/secteurAct.php?secteur=") });
    document.getElementById("Prom").addEventListener("input",(event)=>{ updateDL(event,"http://localhost/assets/phpscripts/TypePromotion.php?TypePromotion=") });

    document.getElementById("Département").addEventListener("change",(event => {addFiltre(event,"https://geo.api.gouv.fr/regions?nom=")}));
    document.getElementById("Ville").addEventListener("change",(event => {addFiltre(event,"https://geo.api.gouv.fr/communes?nom=")}));
    document.getElementById("SécteurA").addEventListener("change",(event => {addFiltre(event,"http://localhost/assets/phpscripts/secteurAct.php?secteur=")}));
    document.getElementById("Prom").addEventListener("change",(event => {addFiltre(event,"http://localhost/assets/phpscripts/TypePromotion.php?TypePromotion=")}));

    document.getElementById("Date_début").addEventListener("change",() =>search("http://localhost/assets/phpScripts/search.php"));
    document.getElementById("durée").addEventListener("change",() =>search("http://localhost/assets/phpScripts/search.php"));
    search("http://localhost/assets/phpScripts/search.php");
}


// to define : getPopupHtml GetBlock, search
//specific
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
function getPopupHtml(data)
{
    r = "<div id='BGPopup' onclick = 'closePopup()'></div><div id = 'MainPopUp'><div class = 'scrollContainer'><button id = 'Close' onclick = 'closePopup()'>x</button><div id='infostage'><h2>"+data[0].Poste+"</h2><article><h3>Résumé</h3><p>"+data[0].Descr+"</p></article><article><h3>compétences</h3><p>"+data[0].Competence+"</p></article><p><strong>promotions concernées:</strong>"+data[0].Nom_du_Type+"</p><p><strong>rémunération:</strong>"+data[0].remune+"€</p><div class = 'flexContainer'><div id='PopUpTimeInfo'><strong>Date de publication:</strong><p>"+data[0].Date_Stage+"</p><strong>durée:</strong><p>"+ data[0].Duree+ " mois</p></div><div id = 'PopUpSpotsInfo'><strong>nombre de places:</strong><p>"+data[0].Nb_place+"</p><strong>élèves postulés :</strong><p> "+data[0].post+"</p></div></div></div><div id='infoEntreprise'><h3>"+data[0].NomE+"</h3><h4>"+data[0].Site+"</h4><p>"+data[0].descr+"</p><p>Tel: "+data[0].TelE+"</p>";
    if(role!="Pilote" && data[0].canpost==null)
    {
        r+="<a href = '../postuler/?IDoffre="+data.IDoffre+"'><button id = 'Postuler'>Postuler</button></a>"
    }
    
    r+="</div></div></div>";

    return r;
} 

function GetBlock(data)
{
    
    
    r = "<div class='Block' id ="+data.IDoffre+"><div><button onclick = \"ShowPopUp(event,'http://localhost/assets/phpScripts/search.php?ID=')\"><ul class='liste'><li>"+data.Poste+"</li><li>"+data.NomE+"</li><li>"+ data.Ville +"</li> </ul></button>";
    if(role != "Pilote")
    {
        r+= "<input class='StarButon' type='checkbox' onclick = 'WishList(event)' ";
        if(data.IDu != null)
        {
            r+= "checked";
        }
        r+= ">";
    }
    if(role != "Etudiant")
    {
        r+= "<a class='edit' href='../modifier_Stage/?ID="+data.IDoffre+"' type='checkbox'>edit</a>"; 
    }
    
    r += "</div></div>" ; 
    return r;
}

  

