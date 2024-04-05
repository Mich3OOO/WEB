if (document.readyState !== 'loading') {
    init();
  }
  window.addEventListener("DOMContentLoaded",init)

function init()
{
    search();
}




document.getElementById("search").addEventListener("change",(event) =>{

    let container = document.getElementsByClassName("liste-deroulante2")[0];
    
    for (let i = container.children.length-1; i >=0 ; i--) {
        container.children[i].remove();
        console.log(i);
    }
    search(event);

})
function search(event)
{
    fetch("http://presquauchaud.ddns.net/assets/phpScripts/getWishlist.php?Nom="+document.getElementById("search").value,{method: 'GET'}).then(r=> r.json()).then(data =>{
        for(let i = 0;i<data.length;i++)
        {
            document.getElementsByClassName("liste-deroulante2")[0].insertAdjacentHTML("beforeend",getStaghtml(data[i].IDoffre,data[i].Poste,data[i].NomE,data[i].adresseA+","+data[i].ville));
            
        }
        console.log(data);
        if(data.length<1)
        {
            document.getElementsByClassName("liste-deroulante2")[0].insertAdjacentHTML("beforeend","<h2>Not Foud</h2>");
        }

    })
}

function getStaghtml(IDoffre,Poste,ENT,Lieu)
{
    return "<div class='compte' id='"+ IDoffre +"'><div class='droit-compte'><div class='haut-compte'><label class='NomPoste'>"+Poste+"</label></div><div class='bas-compte'><div class='gauche'><a class='Info' href='../'>"+ENT+"</a><p class='mail'>"+Lieu+"</p></div><div class='droite'><button onclick = 'removeFromWhishlist(event)' class='plus'>supprimer</button><button class='plus' onclick = 'plus(event)'>Plus d'information ⇓ </button></div></div></div></div>";
}

function removeFromWhishlist(event)
{
    let tmp = new FormData();
    let div = event.target.parentNode.parentNode.parentNode.parentNode
    
    tmp.append("IDo",div.id);
    fetch("http://presquauchaud.ddns.net/assets/phpScripts/removeFromWhislist.php",{method: 'POST',body: tmp});
    div.remove();
 
}

function plus(event){   
    let Parent = event.target.parentNode.parentNode.parentNode.parentNode;
    fetch("http://presquauchaud.ddns.net/assets/phpScripts/getWishlist.php?ID="+Parent.id,{method: 'GET'}).then(r=>r.json()).then(data =>{
        if(document.getElementById("ID_"+Parent.id) != null){
            document.getElementById("ID_"+Parent.id).remove();
        } else {
            event.target.parentNode.parentNode.parentNode.insertAdjacentHTML("beforeend","<div class='plusText' id='ID_"+Parent.id+"'><p class='mail'>Compétences :"+data[0].Competence+" </p><p class='mail'>Promotions concernées : "+data[0].Nom_du_Type+" </p><p class='mail'>Rémunération : "+data[0].remune+"€ </p></div>");
        }

    }
    )
    
    
}

/*let taille = document.getElementsByClassName("plus");

for(i=0;i<taille.length;i++){
    taille[i].addEventListener("click", function(event){
        let idParent = event.target.parentNode.parentNode.parentNode.parentNode.id;
        if(document.getElementById("ID_"+idParent) != null){
            document.getElementById("ID_"+idParent).remove();
        } else {
            event.target.parentNode.parentNode.parentNode.insertAdjacentHTML("beforeend","<div class='plusText' id='ID_"+idParent+"'><p class='mail'>Compétences : </p><p class='mail'>Promotions concernées : </p><p class='mail'>Rémunération : </p></div>");
        }
});
};

let suppression = document.getElementsByClassName("suppr");

for(i=0;i<suppression.length;i++){
    console.log(suppression.length);
    suppression[i].addEventListener("click",sup );
};

function sup(event){
    event.target.parentNode.parentNode.parentNode.parentNode.remove();
}*/