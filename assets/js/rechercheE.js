var role = "";
if (document.readyState !== 'loading') {
    init();
}
window.addEventListener("DOMContentLoaded",init)
 
function init()
{
    role =document.cookie.split(";")[0].split("=")[1];

    document.getElementById("reg").addEventListener("input",(event)=>{ updateDL(event,"https://geo.api.gouv.fr/regions?nom=")});
    document.getElementById("Ville").addEventListener("input",(event)=>{ updateDL(event,"https://geo.api.gouv.fr/communes?nom=") });
    document.getElementById("secteur").addEventListener("input",(event)=>{ updateDL(event,"http://localhost/assets/phpscripts/secteurAct.php?secteur=") });
    document.getElementById("reg").addEventListener("change",(event => {addFiltre(event,"https://geo.api.gouv.fr/regions?nom=")}));
    document.getElementById("Ville").addEventListener("change",(event => {addFiltre(event,"https://geo.api.gouv.fr/communes?nom=")}));
    document.getElementById("secteur").addEventListener("change",(event => {addFiltre(event,"http://localhost/assets/phpscripts/secteurAct.php?secteur=")}));

    search("http://localhost/assets/phpScripts/searchEnt.php");
}

function Noter(event,IDE)
{
    checkStars(event.target.value);
    //fetch()

    let tmp = new FormData();
    tmp.append("Note",event.target.value)
    tmp.append("IDE",IDE);
    
    fetch("http://localhost/assets/phpScripts/noter.php",{method: 'POST',body: tmp });
    

    closePopup();
    search("http://localhost/assets/phpScripts/searchEnt.php");
    fetch('http://localhost/assets/phpScripts/searchEnt.php?ID='+IDE,{method: 'GET'}).then(r=> r.json()).then(data =>{
        console.log(data);

        document.body.insertAdjacentHTML("beforeend",getPopupHtml(data));

    });
}

function checkStars(val)
{
    let starts = document.getElementsByClassName("StartNote");
    for (let i = 0; i < starts.length; i++) {
        
        if(val>= starts[i].value)
        {
            starts[i].checked = true;
        }
        else
        {
            starts[i].checked = false;
        }
        
    }

}


function getPopupHtml(data)
{
    console.log(data);
    r = "<div id='BGPopup' onclick = 'closePopup()'></div><div id = 'MainPopUp'><div class = 'scrollContainer'><button id = 'Close' onclick = 'closePopup()'>x</button><div id='infostage'><h2>"+data[0].NomE+" "+ data[0].NomU+"</h2><article><h3>numéro Siret :</h3><p>"+data[0].N_siret+"</p></article><article><h3>Description</h3><p>"+data[0].descr+"</p></article><p><strong>Adresse :</strong>"+data[0].adresseA+","+data[0].ville+","+data[0].Code_Post+"</p><div id='noter' >";//"

    for (let i = 0; i < 6; i++) {
        r+="<input class ='StartNote' type='checkbox'  onclick = 'Noter(event,"+data[0].IDE+")' value = "+i;
        if(data[0].MyNote >= i )
        {
          r+=" checked";  
        }
        r+=">"
    }
    r+="</div>";
    

    r+="</div><div id='infoEntreprise'><p><strong>numéro de téléphone :</strong>"+data[0].TelE+"</p><a href='"+data[0].site+"' >Site Web</a><p><strong>E-Mail :</strong>"+data[0].MailE+"</p>"
    if(role!="Etudiant")
    {
        r+="<a href='../modifier_entreprise/?ID="+data.IDE+"'><button id = 'Postuler'>Modiffier</button></a>"
        
    }
    r+="</div></div></div>";

    return r;
} 

function GetBlock(data)
{
    
    r = "<div class='Block' id ="+data.IDE+"><div><button onclick = \"ShowPopUp(event,'http://localhost/assets/phpScripts/searchEnt.php?ID=')\"><ul class='liste'><li>"+data.NomE+"</li><li>"+data.Site.replace("https://www.","")+"</li>";

    if(data.avg == null)
    {
       r+="<li>non noté</li> </ul></button>";
    }
    else
    {
        r+="<li>Note: "+ data.avg +"/5</li> </ul></button>";
    }
    if(role!="Etudiant")
    {
        r+= "<a  class='edit' href='../modifier_entreprise/?ID="+data.IDE+"'>edit</a></div></div>";
    }
    
    return r;
}

  

