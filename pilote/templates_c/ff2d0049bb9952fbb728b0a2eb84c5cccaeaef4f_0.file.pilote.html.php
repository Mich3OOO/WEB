<?php
/* Smarty version 4.5.1, created on 2024-04-03 14:25:57
  from 'C:\Users\fabie\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\html\pilote.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660d4ad572b9f1_21585345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff2d0049bb9952fbb728b0a2eb84c5cccaeaef4f' => 
    array (
      0 => 'C:\\Users\\fabie\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\html\\pilote.html',
      1 => 1712133659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d4ad572b9f1_21585345 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="FormeH">Recherche d'offre de stage</h2>
<input list="Satages" id="search" placeholder="🔎︎ search">
<div id="flex-mere">
    <div id="flex-filtres">
        <h4>Filtre : </h4>
        <label for="Ville">Ville</label><br>
        <select name="Ville" id="Ville" class="selection">
            <option value="Ville1">Ville 1</option>
            <option value="Ville2">Ville 2</option>
            <option value="Ville3">Ville 3</option>
        </select><br><br>
        <label for="Dep">Département</label><br>
        <select name="Dep" id="Dep" class="selection">
            <option value="Departement1">Département 1</option>
            <option value="Departement2">Département 2</option>
            <option value="Departement3">Département 3</option>
        </select><br><br>
        <label for="SectAct">Secteur d'activité</label><br>
        <select name="SectAct" id="SectAct" class="selection">
            <option value="SectAct1">Secteur d'activité 1</option>
            <option value="SectAct2">Secteur d'activité 2</option>
            <option value="SectAct3">Secteur d'activité 3</option>
        </select><br><br>
        <label for="Comp">Compétences</label><br>
        <select name="Comp" id="Comp" class="selection">
            <option value="Comp1">Compétence 1</option>
            <option value="Comp2">Compétence 2</option>
            <option value="Comp3">Compétence 3</option>
        </select><br><br>
        <label for="Date">Date</label><br>
        <input type="date"><br><br>
        <label for="Duree">Durée (en semaine)</label><br>
        <input id="Duree" type="text"><br><br>
        <label for="">Type de contrat</label><br>
        <select name="Contrat" id="Contrat" class="selection">
            <option value="Contrat1">Stage</option>
            <option value="Contrat2">CDD</option>
            <option value="Contrat3">CDI</option>
        </select><br>
    </div>
    <div id="flex-recherche">
        <div id="offres">
            <div class="Offre" id ="1">
                <div>
                    <button >
                        <ul class="liste">
                            <li>Nom du poste</li>
                            <li>Nom Entreprise</li>
                            <li>Ville</li>
                        </ul>
                    </button>
                    <input class="StarButon" type="checkbox">
                    <button  class="modif">✎</button>
                </div>
            </div>
            <div class="Offre" id ="2">
                <div>
                    <button >
                        <ul class="liste">
                            <li>Nom du poste</li>
                            <li>Nom Entreprise</li>
                            <li>Ville</li>
                        </ul>
                    </button>
                    <input class="StarButon" type="checkbox">
                    <button  class="modif">✎</button>
                </div>
            </div>  
            <div class="Offre" id ="3">
                <div>
                    <button >
                        <ul class="liste">
                            <li>Nom du poste</li>
                            <li>Nom Entreprise</li>
                            <li>Ville</li>
                        </ul>
                    </button>
                    <input class="StarButon" type="checkbox">
                    <button  class="modif">✎</button>
                </div>
            </div>
            <div class="Offre" id ="4">
                <div>
                    <button >
                        <ul class="liste">
                            <li>Nom du poste</li>
                            <li>Nom Entreprise</li>
                            <li>Ville</li>
                        </ul>
                    </button>
                    <input class="StarButon" type="checkbox">
                    <button  class="modif">✎</button>
                </div>
            </div>  
        </div>
    </div>

</div><?php }
}
