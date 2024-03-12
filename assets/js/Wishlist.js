let taille = document.getElementsByClassName("plus");
for(i=0;i<taille.length;i++){
taille[i].addEventListener("click", function(event){
    event.target.parentNode.parentNode.parentNode.innerHTML += "<div class='plus'><p>Info supplémentaires</p></div>";
});
};