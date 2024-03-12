let taille = document.getElementsByClassName("plus");

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
}