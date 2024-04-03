
if (document.readyState !== 'loading') {
  init();
}
window.addEventListener("DOMContentLoaded",init)

function init()
{
  fetch("http://localhost/assets/phpScripts/GetStats.php",{method:"GET"}).then(r => r.json()).then(data => {

  console.log(JSON.stringify(data.PromotionsEtudiant.x));


  dataGraph =data;  

  


  for(let i in data)
  {
    
    if(i=="TopAnnonces" || i=="TopWhishList" )
    {
      
      Plotly.newPlot(i, [{x:data[i].data.x, y:data[i].data.y , type:"bar"}], {title:data[i].Title,autosize: true});
    }
    else
    {
      Plotly.newPlot(i, [{labels:data[i].data.x, values:data[i].data.y , type:"pie"}], {title:data[i].Title,autosize: true});
    }
  }



  


  });
}






// Plotly.newPlot("PromotionsEtudiant", data, layout);
// Plotly.newPlot("Competences", data, layout);
// Plotly.newPlot("Localitee", data, layout);
// Plotly.newPlot("TopWhishList", data, layout);
// Plotly.newPlot("PromotionsConcernees", data, layout);
// Plotly.newPlot("DureeStage", data, layout);
// Plotly.newPlot("LocaliteeEnt", data, layout);
// Plotly.newPlot("SecteurAct", data, layout);
// Plotly.newPlot("TopAnnonces", data, layout);