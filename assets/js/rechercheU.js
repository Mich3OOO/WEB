var role = "";
if (document.readyState !== 'loading') {
    init();
}
window.addEventListener("DOMContentLoaded",init)
 
function init()
{
    role =document.cookie.split(";")[0].split("=")[1];

    if(document.getElementById("Admin") != null)
    {
        document.getElementById("Admin").value = 1
        document.getElementById("Pilote").value = 1
        document.getElementById("etudiant").value = 1
        document.getElementById("Admin").checked = true;
        document.getElementById("Pilote").checked = true;
        document.getElementById("etudiant").checked = true;
        document.getElementById("Admin").addEventListener("change",checkedvalues);
        document.getElementById("Pilote").addEventListener("change",checkedvalues);
        document.getElementById("etudiant").addEventListener("change",checkedvalues);

    }
    


    document.getElementById("Promotion").addEventListener("input",(event)=>{ updateDL(event,"http://presquauchaud.ddns.net/assets/phpscripts/getpromotion.php?Promotion=")});
    document.getElementById("Campus").addEventListener("input",(event)=>{ updateDL(event,"https://geo.api.gouv.fr/communes?nom=") });

    document.getElementById("Promotion").addEventListener("change",(event => {addFiltre(event,"http://presquauchaud.ddns.net/assets/phpscripts/getpromotion.php?Promotion=")}));
    document.getElementById("Campus").addEventListener("change",(event => {addFiltre(event,"https://geo.api.gouv.fr/communes?nom=")}));


    search("http://presquauchaud.ddns.net/assets/phpScripts/searchuser.php");
}

function checkedvalues(event)
{
    if(event.target.checked)
    {
        event.target.value = 1;
    }
    else
    {
        event.target.value = 0;
    }

    search("http://presquauchaud.ddns.net/assets/phpScripts/searchuser.php")
}

function getPopupHtml(data)
{
    console.log(data);
    r = "<div id='BGPopup' onclick = 'closePopup()'></div><div id = 'MainPopUp'><div class = 'scrollContainer'><button id = 'Close' onclick = 'closePopup()'>x</button><div id='infostage'><h2>"+data[0].PrenomU+" "+ data[0].NomU+"</h2><article><h3>E-Mail</h3><p>"+data[0].MailU+"</p></article><article><h3>Date de naissance</h3><p>"+data[0].Date_NaisU+"</p></article><p><strong>Rôle :</strong>"+data[0].role+"</p>"
    if(data[0].role=="Etudiant")
    {
        r+="<p><strong>Promotion :</strong>"+data[0].Promotion+"</p><p><strong>campus:</strong>"+ data[0].ville+ "</p>"
        
    }

    r+="</div><div id='infoEntreprise'><img id = 'ImgProf' src= '../image/persov5.jpg'/><a href='../modifier_compte/?Mail="+data.IDoffre+"'><button id = 'Postuler'>Modiffier</button></a>"
    r+="</div></div></div>";

    return r;
} 

function GetBlock(data)
{
    console.log(data);
    r = "<div class='Block' id ="+data.IDu+"><div><button onclick = \"ShowPopUp(event,'http://presquauchaud.ddns.net/assets/phpScripts/searchuser.php?ID=')\"><ul class='liste'><li>"+data.prenomU+" "+ data.NomU+"</li><li>"+data.role+"</li><li>"+ data.MailU +"</li> </ul></button>";
    
    
    r+= "<a  class='edit' href='../modifier_compte/?email="+data.MailU+"'>edit</a>";
    r += "</div></div>" ; 
    return r;
}

  

