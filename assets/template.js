
document.addEventListener("DOMContentLoaded", function(){
  

  let includes = document.getElementsByTagName('include');
  for(var i=0; i<includes.length; i++)
  {
    let include = includes[i];
    
    fetch("Footer")
    .then((res) => res.text())
    .then((text) => {
      console.log(text);// do something with "text"
    })
    
    include.insertAdjacentHTML('afterend', "");
    include.remove();
        
    }});