<!DOCTYPE html>

<html lang="fr">
  <head>
    <meta charset="utf-8" >
    <link href="assets/css/login.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width" >
    <title>Authentification Presqu'auChaud Mage</title>
  </head>
  
  <body>
    <?= include "./Menu.php"?>

    <section>
        <form>
            <div class="login">
                <label for="Email">Email</label>
                <input type="text" required="required" id="Email" name="Email" placeholder="Email">
                <label for="Mot-de-passe">Mot de passe</label>
                <input type="text" required="required" id="Mot-de-passe" name="Mot-de-passe" placeholder="Mot de passe">
                <a href="" > Mot de passe oublié ?</a>
                <button type="submit" class="Connexion">Connexion</button> 
            </div>
        </form>
    </section>
    <?= include "./Footer.html"?>

  </body>
  
</html>
