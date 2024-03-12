let moree = document.getElementsByClassName("More");


moree[0].addEventListener("click",ShowMore);

function ShowMore()
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

function getPopupHtml(AdresseMail,SiteWeb,Secteur,NumeroTel,Direction,Description)
{
    return "<div id='BGPopup'></div><div id = 'StagePopUp'><div class = 'scrollContainer'><button id = 'Close'>x</button><div id='infostage'><h2>"+AdresseMail+"</h2><article><p>"+SiteWeb+"</p></article><article><p>"+Secteur+"</p></article>"+NumeroTel+"</p>"+Direction+"</p><div class = 'flexContainer'><div id='PopUpTimeInfo'><p>"+Description+"</p></div>"
}