
<h1>Profil </h1>
<form>
  <div class="flex-container" >
    <div class="flex-gauche">
      <center><img class="image-profil" src="image/persov5.jpg" alt="image profil"></center>
      
      <label for="Role">Statut : {$_SESSION["role"]}</label>
      
      <label for="Promotion">Promotion :</label>

      <label for="Campus">Campus :</label>
    </div>
    <div class="flex-droit">
        
      <label for="Nom">Nom : {$_SESSION["Nom"]}</label>
      <label for="Prenom">Prenom : {$_SESSION["Prenom"]}</label>
      <label for="Mail">Mail : {$_SESSION["Mail"]}</label>
      <label for="Date-naissance">Date de naissance : {$_SESSION["Date_Nais"]}</label>
      <label for="Adresse">Adresse :{$_SESSION["Adresse"]}</label>
        
    </div>
      
  </div>  
</form>

