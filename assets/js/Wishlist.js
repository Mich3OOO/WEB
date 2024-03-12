let taille = document.getElementsByClassName("plus");

for(i=0;i<taille.length;i++){
    
    taille[i].addEventListener("click", function(event){
        let idParent = event.target.parentNode.parentNode.parentNode.parentNode.id;
        if(document.getElementById("ID_"+idParent) != null){
            document.getElementById("ID_"+idParent).remove();
        } else {
            
            event.target.parentNode.parentNode.parentNode.insertAdjacentHTML("beforeend","<div class='plusText' id='ID_"+idParent+"'><p>Info supplémentaires</p></div>");
        }
});
};