let but = document.getElementById("upbutton");
but.addEventListener("click",GoUp);
document.addEventListener("scroll", (event) => {
    if (window.scrollY != 0) {
        but.style.visibility = "visible";
    }
    
    
})


function GoUp()
{
    window.scroll(0, 0);
    but.style.visibility = "hidden";
    console.log("no");
}
