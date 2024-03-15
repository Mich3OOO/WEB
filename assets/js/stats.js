const xArray = ["Italy", "France", "Spain", "USA", "Argentina"];
const yArray = [55, 49, 44, 24, 15];

const data = [{
  x:xArray,
  y:yArray,
  type:"bar",//pie
  orientation:"v",
  marker: {color:"rgba(0,0,255,0.6)"}
}];

const layout = {title:"World Wide Wine Production",
autosize: true
};

Plotly.newPlot("CentresEtudiant", data, layout);
Plotly.newPlot("PromotionsEtudiant", data, layout);
Plotly.newPlot("Competences", data, layout);
Plotly.newPlot("Localitee", data, layout);
Plotly.newPlot("TopWhishList", data, layout);
Plotly.newPlot("PromotionsConcernees", data, layout);
Plotly.newPlot("DureeStage", data, layout);
Plotly.newPlot("LocaliteeEnt", data, layout);
Plotly.newPlot("SecteurAct", data, layout);
Plotly.newPlot("TopAnnonces", data, layout);