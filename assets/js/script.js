


document.getElementById("avatar").addEventListener("click",open_image());

document.getElementById("test").addEventListener("input",check_test);

function check_test(){
    if ((data(/^[A-Za-z]+$/,0,document.getElementById('test').value))==false){
        document.getElementById("test").insertAdjacentHTML("afterend","<p id='testmsg'>Ce champs ne doit contenir uniquement que des lettres</p>");
    }
    return true;
}

function data(cond,longueur,valeur,id,commentaire){
    if(longueur!=0)
    {
        if(valeur.length == longueur){
            if(cond.test(valeur)==false){
                if(document.getElementById("cond_"+id)!=null){
                    return false;
                }
                document.getElementById(id).insertAdjacentHTML("beforebegin","<div class='cond_commentaire' id=cond_"+id+">"+"⚠️"+commentaire+"⚠️"+"</div>");
                    
                return false;
        }
        }
        else{
            alert("Champs incorrect");
            return false;
        }
    }    
    else{

        if(cond.test(valeur)==false){
            if(document.getElementById("cond_"+id)!=null){
                return false;
            }
            document.getElementById(id).insertAdjacentHTML("beforebegin","<div class='cond_commentaire' id=cond_"+id+">"+"⚠️"+commentaire+"⚠️"+"</div>");
                
            return false;
    }
    retrait("cond_"+id)
    
    }
}   

function retrait(id){
    document.getElementById(id).remove();
}
function open_image(){
    alert("yo bg")
}