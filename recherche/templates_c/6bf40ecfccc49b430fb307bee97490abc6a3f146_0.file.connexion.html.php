<?php
/* Smarty version 4.5.1, created on 2024-03-30 13:28:37
  from 'C:\Users\Utilisateur\OneDrive - Association Cesi Viacesi mail\CESI\CPI-A2\BLOC 4\PROJET\site web\WEB\assets\html\connexion.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660805756a3f88_10069990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bf40ecfccc49b430fb307bee97490abc6a3f146' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\OneDrive - Association Cesi Viacesi mail\\CESI\\CPI-A2\\BLOC 4\\PROJET\\site web\\WEB\\assets\\html\\connexion.html',
      1 => 1711707240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660805756a3f88_10069990 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main>
    <div class = "flexContainer">              
        <ul class="liste" id ="Filtres">
            <li><label for="Filtres">Filtres:</label></li>
            <li>
                <label for="Ville">Ville</label>
            </li>
            <li>
                <input id = "Ville" type="text" list="DLVille" class="MChoise">
                <datalist id = "DLVille">
                </datalist>
                <div id = "VilleList" class="tagcontent">
                </div>
            </li>
            <li>
                <label for="Département">Département</label>
            </li>
            <li>
                <input id = "Département" list="DLDépartement" class="MChoise">
                <datalist id = "DLDépartement">
                    
                </datalist>
                <div id = "DépartementList" class="tagcontent">
                </div>
            </li>
            <li>
                <label for="SécteurA">Sécteur d'activité</label>
            </li>
            <li>
                <input id = "SécteurA" list="DLSécteurA" class="MChoise">
                <datalist id = "DLSécteurA">
                    <!--PHp-->
                </datalist>
                <div id = "SécteurAList" class="tagcontent">
                </div>
            </li>

            <li>
                <label for="Date_début">Date début</label>
            </li>
            <li>
                <input type="date" id="Date_début">
            </li>

            <li>
                <label for="durée">durée (en mois)</label>
            </li>
            <li>
                <input type = "number" id="durée">
            </li>

            
            <li>
                <label for="TypeContrat">Type de contrat</label>
            </li>
            <li>
                <input id = "TypeContrat" list="DLTypeContrat" class="MChoise">
                <datalist id = "DLTypeContrat">
                    <option value="CDD"></option>
                    <option value="CDI"></option>
                    <option value="Stage"></option>
                    <option value="Alternance"></option>
                </datalist>
                <div id = "TypeContratList" class="tagcontent">
                </div>
            </li>
            
        </ul>
        <div id = "RechercheOffre">
            <input list="Stages" id="search" placeholder="🔎︎ search">

            <datalist id = "Stages">

            </datalist>

            <div id="offres">
                
                
            </div>
        </div>
        
    </div>
    
</main>

<?php }
}
