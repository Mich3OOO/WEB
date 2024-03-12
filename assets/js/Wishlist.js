let taille = document.getElementsByClassName("plus");

for(i=0;i<taille.length;i++){
    taille[i].addEventListener("click", function(event){
        if(document.getElementById("ID_"+i) != null){
            document.getElementById("ID_"+i).remove();
        } else {
            event.target.parentNode.parentNode.parentNode.insertAdjacentHTML("beforeend","<div class='plusText' id='ID_"+i+"'><p>Info supplémentaires</p></div>");
        }
});
};