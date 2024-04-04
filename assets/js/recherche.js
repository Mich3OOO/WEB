function updateDL(event,api)
{
    let Opt= document.getElementById("DL" + event.target.id);
        

    for(let i = Opt.children.length-1;i>=0;i--)
    {
        Opt.children[i].remove();

    }
    
    if(event.target.value.length >= 2)
    {
        fetch(api+event.target.value).then(r=> r.json()).then(data =>{
        


        for(let i =0 ; i< data.length;i++)
        {   
            Opt.insertAdjacentHTML("beforeend","<option value= '"+data[i].nom+"'></option>")    ;
        }
        
        } );    

    }
}

function getfiltres()
{
    r ="";
    let Mchoise = document.getElementsByClassName("MChoise");
    for(let i = 0; i<Mchoise.length;i++)
    {

        r +="&"+Mchoise[i].id+"[]"
    
        let tmp = document.getElementById(Mchoise[i].id+"List").children
        if(tmp.length>0)
        {
            r+="="+ tmp[0].id.replace("tag","");
        }
        for (let i = 1; i < tmp.length; i++) {
            r+= "&"+Mchoise[i].id+"[]="+ tmp[i].id.replace("tag","");
        }

    }

    let Uchoise = document.getElementsByClassName("UChoise");
    for(let i = 0; i<Uchoise.length;i++)
    {

        r +="&"+Uchoise[i].id


        tmp = Uchoise[i].value;
        if(tmp != "")
        {
            r+= "="+tmp;
        }

    }



    return "?" +r.slice(1);
    

}
function closePopup()
{
    document.getElementById("BGPopup").remove();
    document.getElementById("MainPopUp").remove();
}
function getTagHtml(name)
{
    return "<div id = 'tag"+ name +"' class='tag'><button onclick= 'removeFiltre(event)'>x</button><p>"+ name + "</p></div>";
}

function removeFiltre(event)
{
    event.target.parentNode.remove();
    search();
}

function addFiltre(event,api)     
{
    
    if (document.getElementById(event.target.id + "List")!="" )
    {
    let DL = document.getElementById("DL"+event.target.id);

        

    fetch(api+event.target.value).then(r=> r.json()).then(data =>{
        

        for(let i =0 ; i< data.length;i++)
        {   
            
            if (document.getElementById("tag"+ data[i].nom) == null && data[i].nom.toUpperCase() == event.target.value.toUpperCase()) 
            {
                document.getElementById(event.target.id + "List").insertAdjacentHTML("beforeend",getTagHtml(data[i].nom));
                
                event.target.value = "";
                search();
                break;
                
            }
        }
        
        } ); 
    }
}
function ShowPopUp(event,searchApi)
{
    let tmp =event.target.parentNode;
    while(tmp.classList[0]!="Block")
    {
        tmp = tmp.parentNode;
    }
       
    fetch(searchApi+tmp.id,{method: 'GET'}).then(r=> r.json()).then(data =>{

        document.body.insertAdjacentHTML("beforeend",getPopupHtml(data));

    });
}

function search(searchApi)
{
     fetch(searchApi+getfiltres(),{method: 'GET'}).then(r=> r.json()).then(data =>{

        let OffreCon = document.getElementById("Blocs");

        for(let i = OffreCon.children.length-1; i>=0; i--)
        {
            OffreCon.children[i].remove();

        }
        

        if(data.length>0)
        {   
            
            for(let i = 0 ; i<data.length;i++)
            {
                OffreCon.insertAdjacentHTML("beforeend",GetBlock(data[i])); 
            }
        }
        else
        {
            OffreCon.insertAdjacentHTML("beforeend","<h2> Pas de résultats pour le moment </h2>");
        }

     
     });
    

}
