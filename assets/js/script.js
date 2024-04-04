




function data(cond,longueur,valeur,id,commentaire){
    if(longueur!=0)
    {
        if(valeur.length == longueur){
            if(cond.test(valeur)==false){
                if(document.getElementById("cond_"+id)!=null){
                    return false;
                }
                document.getElementById(id).insertAdjacentHTML("beforebegin","<div class='cond_commentaire' id=cond_"+id+">"+"⚠️"+commentaire+"⚠️"+cond+"</div>");
                    
                return false;
        }
        }
        else{
            document.getElementById(id).insertAdjacentHTML("beforebegin","<div class='cond_commentaire' id=cond_"+id+">"+"⚠️"+commentaire+"⚠️"+"</div>");("Ce champs doit contenir : "+ longuer + "termes");
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
    alert("yo ")
}