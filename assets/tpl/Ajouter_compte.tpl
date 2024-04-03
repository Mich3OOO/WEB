<h1>Creer un compte</h1>
<form action="../assets/phpScripts/AjoutCompte.php" method="get">
    <div class="test">
    <div class="flex-container">
    <div class="flex-gauche">
        <img class="image-profil" src="../../image/persov5.jpg" alt="image profil">
        <button type="submit" class="Importation" >Importer une image</button>
        <input class="custom-file-label" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"/>
        
        <label for="Promotion">Promotion</label>
        <select name="Promotion" id="Promotion" required="required" multiple>
            {foreach from=$allpromotion item=promotion}
                <option>{$promotion.promotion}</option>
            {/foreach}
        </select>
        <label for="Typepromo">Type promotion</label>
        <select name="Typepromo" id="Typepromo" required="required">
            {foreach from=$alltypepromo item=typepromo}
                <option>{$typepromo.Nom_du_Type}</option>
            {/foreach}
        </select>

        <label for="Campus">Campus</label>
        <select name="Campus" id="Campus" required="required">
            {foreach from=$allcampus item=campus}
                <option>{$campus.ville}</option>
            {/foreach}
        </select>

        <label for="Role">Role</label>
        <select name="Role" id="Role" required="required">
            {foreach from=$allRole item=role}
                <option>{$role.role}</option>
            {/foreach}
        </select>
        <label for="Adresse">Adresse</label>
        <input type="text" required="required" id="Adresse" name="Adresse" placeholder="Adresse" onblur="data(/^[A-Za-z' - 0-9]+$/,0,value,id,'Ce champs ne doit que contenir des lettres')">
        

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
