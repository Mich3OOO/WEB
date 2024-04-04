var role = "";
if (document.readyState !== 'loading') {
    init();
}
window.addEventListener("DOMContentLoaded",init)
 
function init()
{
    role =document.cookie.split(";")[0].split("=")[1];

    //document.getElementById("KeyWord").addEventListener("change",() =>search("http://localhost/assets/phpScripts/search.php"));

    // document.getElementById("Département").addEventListener("input",(event)=>{ updateDL(event,"https://geo.api.gouv.fr/regions?nom=")});
    // document.getElementById("Ville").addEventListener("input",(event)=>{ updateDL(event,"https://geo.api.gouv.fr/communes?nom=") });
    // document.getElementById("SécteurA").addEventListener("input",(event)=>{ updateDL(event,"http://localhost/assets/phpscripts/secteurAct.php?secteur=") });
    // document.getElementById("Prom").addEventListener("input",(event)=>{ updateDL(event,"http://localhost/assets/phpscripts/TypePromotion.php?TypePromotion=") });

    // document.getElementById("Département").addEventListener("change",(event => {addFiltre(event,"https://geo.api.gouv.fr/regions?nom=")}));
    // document.getElementById("Ville").addEventListener("change",(event => {addFiltre(event,"https://geo.api.gouv.fr/communes?nom=")}));
    // document.getElementById("SécteurA").addEventListener("change",(event => {addFiltre(event,"http://localhost/assets/phpscripts/secteurAct.php?secteur=")}));
    // document.getElementById("Prom").addEventListener("change",(event => {addFiltre(event,"http://localhost/assets/phpscripts/TypePromotion.php?TypePromotion=")}));

    // document.getElementById("Date_début").addEventListener("change",() =>search("http://localhost/assets/phpScripts/search.php"));
    // document.getElementById("durée").addEventListener("change",() =>search("http://localhost/assets/phpScripts/search.php"));
    // search("http://localhost/assets/phpScripts/search.php");
}