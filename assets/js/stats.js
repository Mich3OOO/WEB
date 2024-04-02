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

/*
CentresEtudiant:
PromotionsEtudiant:SELECT Promotion,COUNT(etudiant.IDu) from promotion INNER join etudiant on etudiant.IDProm =Promotion.IDProm GROUP by promotion;
Competences: 
Localitee:SELECT COUNT(IDoffre),ville from offre INNER join entreprise on entreprise.IDE = offre.IDE INNER join adresse on entreprise.ID_adresse = adresse.ID_adresse INNER join ville on ville.idv = adresse.idv GROUP by ville.idv;
TopWhishList: SELECT offre.IDoffre, count(IDu) as nb from offre INNER JOIN interesser on offre.IDoffre = interesser.IDoffre GROUP by offre.IDoffre LIMIT 5;
PromotionsConcernees:
DureeStage: SELECT duree ,COUNT(IDoffre) from offre GROUP by duree;
LocaliteeEnt: SELECT COUNT(IDE),ville from entreprise INNER join adresse on entreprise.ID_adresse = adresse.ID_adresse INNER join ville on ville.idv = adresse.idv GROUP by ville.idv;
SecteurAct:SELECT secteur_Act ,COUNT(IDE) from secteur_activite INNER join entreprise on entreprise.IdSec = secteur_activite.IdSec GROUP by secteur_Act;
TopAnnonces: SELECT offre.IDoffre, count(IDu) as nb from offre INNER JOIN postuler on offre.IDoffre = postuler.IDoffre GROUP by offre.IDoffre LIMIT 5;





*/





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