
<h1>Modifier un compte </h1>
<form action="../assets/phpScripts/updateUser.php" methode="get">
<div class="flex-container">
<div class="flex-gauche">
    <img class="image-profil" src="image/persov5.jpg" alt="image profil">
    <button type="submit" class="Importation" >Importer un image</button>
    <label for="Role">Role:</label>
    <input type="text" id="Role" name="Role" value={$usermodif["role"]}>
    <label for="Promotion">Promotions:</label>
    <input type="text" id="Promotions" name="Promotions" value={$usermodif["promotion"]}>
    <label for="Campus">Campus</label>
    <input type="text" required="required" id="Campus" name="Campus" value={$usermodif["campus"]}>
    
</div>
<div class="flex-droit">
    
    <label for="Nom">Nom</label>
    <input type="text" required="required" id="Nom" name="Nom" value={$usermodif["Nom"]}>
    <label for="Prenom">Prenom</label>
    <input type="text" required="required" id="Prenom" name="Prenom" value={$usermodif["Prenom"]}>
    <label for="Mot-de-passe">Changer le mot de passe</label>
    <input type="text"  id="Mot-de-passe" name="Mot-de-passe" placeholder="Mot de passe">
    <label for="Mail">Mail</label>
    <input type="email" required="required" id="Mail" name="Mail" value={$usermodif["Mail"]}>
    <label for="Date-naissance">Date de naissance</label>
    <input type="text" required="required" id="Date-naissance" name="Date-naissance" value={$usermodif["Date_Nais"]}>
    <label for="Adresse">Adresse</label>
    <input type="text" required="required" id="Adresse" name="Adresse" value="{$usermodif["Adresse"]}">
    
</div>
    
</div>
<div class="flex-bas">
    <button type="submit" class="Valider">Valider</button>
    <form action="../assets/phpScripts/deleteUser.php" methode="get">
        <button type="submit" class="Reinitialiser">Supprimer</button> 
    </form>

</div>
</form>
