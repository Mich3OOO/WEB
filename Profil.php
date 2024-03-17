<!DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="utf-8" >
    <link href="assets/css/profil.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width" >
    
    <title>Profil </title>
  </head>
  <body>
    <?= include "./Menu.php"?>
      <h1>Profil </h1>
      <form>
      <div class="flex-container" >
      <div class="flex-gauche">
          <center><img class="image-profil" src="image/persov5.jpg" alt="image profil"></center>
          
          <label for="Role">Statut :</label>
          
          <label for="Promotion">Promotion :</label>

          <label for="Campus">Campus :</label>
      </div>
      <div class="flex-droit">
          
          <label for="Nom">Nom :</label>
          <label for="Prenom">Prenom :</label>
          <label for="Mot-de-passe">Mot de passe :</label>
          <label for="Mail">Mail :</label>
          <label for="Date-naissance">Date de naissance :</label>
          <label for="Adresse">Adresse :</label>
          
      </div>
        
    </div>  
    </form>
    <section>

    </section>
    <?= include "./Footer.html"?>
  </body>
 

</html>
