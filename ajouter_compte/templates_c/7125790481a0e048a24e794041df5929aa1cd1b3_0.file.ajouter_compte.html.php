<?php
/* Smarty version 4.5.1, created on 2024-04-03 12:22:12
  from 'C:\Users\Utilisateur\Desktop\CPI A2\Cours\WEB\Projet\WEB\assets\html\ajouter_compte.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660d2dd45d70c1_23953866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7125790481a0e048a24e794041df5929aa1cd1b3' => 
    array (
      0 => 'C:\\Users\\Utilisateur\\Desktop\\CPI A2\\Cours\\WEB\\Projet\\WEB\\assets\\html\\ajouter_compte.html',
      1 => 1712135997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d2dd45d70c1_23953866 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="../assets/phpScripts/AjoutCompte.php" method="get">
    <div class="test">
    <div class="flex-container">
    <div class="flex-gauche">
        <img class="image-profil" src="../../image/persov5.jpg" alt="image profil">
        <button type="submit" class="Importation" >Importer une image</button>
        <input class="custom-file-label" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"/>
        

        <select name="Promotion" id="Promotion" required="required" multiple>
            <option value="A1">A1</option>
            <option value="A2-Info">A2 Info</option>
            <option value="A2-Géné">A2-Géné</option>
            <option value="A3-Info">A3-Info</option>
            <option value="A3-Géné">A2 Info</option>
            <option value="A4-Info">A4-Info</option>
            <option value="A4-Géné">A4-Géné</option>
            
        </select>
        <label for="Campus">Campus</label>
        <input type="text" required="required" id="Campus" name="Campus" placeholder="Campus" onblur="data(/^[A-Z]+[A-Za-z'-]/,0,value,id,'Ce champs ne doit que contenir des lettres')" >
        <label for="Role">Choisir le rôle:</label>
        <select name="Role" id="Role" required="required" multiple>
            <option value="Pilote">Pilote</option>
            <option value="Admin">Admin</option>
            <option value="Etudiant">Etudiant</option>
            
        </select>
    </div>
    <div class="flex-droit">
        
        <label for="Nom">Nom</label>
        <input type="text" required="required" id="Nom" name="Nom" placeholder="Nom" onblur="data(/^[A-Z]+[A-Za-z'-]/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        <label for="Prenom">Prénom</label>
        <input type="text" required="required" id="Prenom" name="Prenom" placeholder="Prenom" onblur="data(/^[A-Z]+[A-Za-z'-]/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        <label for="Mot-de-passe">Mot de passe</label>
        <input type="text" required="required" id="Mot-de-passe" name="Mot-de-passe" placeholder="Mot de passe">
        <label for="Confirmation-MDP">Confirmation mot de passe</label>
        <input type="text" required="required" id="Confirmation-MDP" name="Confirmation-MDP" placeholder="Confirmation mot de passe">
        <label for="Mail">Mail</label>
        <input type="email" required="required" id="Mail" name="Mail" placeholder="Mail" onblur="data(/^[A-Za-z' - 0-9]+@+[A-Za-z' - 0-9]/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        <label for="Date-naissance">Date de naissance</label>
        <input type="text" required="required" id="Date-naissance" name="Date-naissance" placeholder="Date-naissance">
        <label for="Adresse">Adresse</label>
        <input type="text" required="required" id="Adresse" name="Adresse" placeholder="Adresse" onblur="data(/^[A-Za-z' - 0-9]+$/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        <label for="CP">Code Postal</label>
        <input type="text" required="required" id="CP" name="CP" placeholder="CP" onblur="data(/^[A-Za-z' - 0-9]+$/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        <label for="Ville">Ville</label>
        <input type="text" required="required" id="Ville" name="Ville" placeholder="Ville" onblur="data(/^[A-Za-z' -]+$/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        <label for="Region">Region</label>
        <input type="text" required="required" id="Region" name="Region" placeholder="Region" onblur="data(/^[A-Za-z' -]+$/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        
    </div>
        
    </div>
    </div>
    <div class="flex-bas">
        <button type="submit" class="button" value="Envoyer">Envoyer</button>
        <button type="reset" class="button" value="Reset">Reset</button>
    </div>

</form>
<?php }
}
