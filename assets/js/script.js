


document.getElementById("avatar").addEventListener("click",open_image());

document.getElementById("test").addEventListener("input",check_test);

function check_test(){
    if ((data(/^[A-Za-z]+$/,0,document.getElementById('test').value))==false){
        document.getElementById("test").insertAdjacentHTML("afterend","<p id='testmsg'>Ce champs ne doit contenir uniquement que des lettres</p>");
    }
    return true;
}

function data(cond,longueur,valeur){
    if(longueur!=0)
    {
        if(valeur.length == longueur){
            for(i=0;i<longueur;i++){
                if(!(cond.exec(valeur.charAt(i))!=null)){
                    alert("caractère invalide");
                    return false;
                }
            }
        }
        else{
            alert("Champs incorrect");
            return false;
        }
    }    
    else{
        for(i=0;i<valeur.length;i++){
            if(!(cond.exec(valeur.charAt(i))!=null)){
                alert("caractère invalide");
                return false;
            }
        }
    }
    
}

function open_image(){
    alert("yo bg")
}