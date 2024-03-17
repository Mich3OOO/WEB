<link rel="stylesheet" href="assets/css/menu.css">

<header>
    <nav>
        <div id="flex">
            <div id="block2">
                <div class="Barre">
                  <img class="NavImage" src="image/logo.png" href="...">
                  <ul>
                    <li><a href="#">Stage</a></li>&nbsp;&nbsp;
                    <li><a href="#">Entreprise</a></li>&nbsp;&nbsp;
                    <li><a href="#">Mentions</a></li>&nbsp;&nbsp;
                    <li><a href="#">F.A.Q</a></li>&nbsp;&nbsp;
                  </ul>
                </div>
            </div>
            <div id="block1">
                <h>Nom | Prénom</h>
                <div class="navbar" id="nav">
                    <div class="more">
                        <button class="btn">▽</button>
                        <div class="more-menu">
                            <a>Mon Profile</a>
                          <?php
                            session_start();
                            if($_SESSION[session_id()]["role"] == "Administrateur" or $_SESSION[session_id()]["role"]=="pilote" )
                            {
                                echo "<a>Ajout entreprise</a>";
                                echo "<a>Gérer les entreprise</a>";
                            }
                            if($_SESSION[session_id()]["role"] == "Administrateur")
                            {
                                
                                echo "<a>Gérer utilisateur</a>";
                            }
                            if($_SESSION[session_id()]["role"] == "pilote")
                            {
                                
                                echo "<a>Gérer étudiant</a>";
                            }
                            
                          ?>
                          <a>Statistiques</a>
                          <a>Déconexion3</a>
                        </div>
                    </div>
                </div>
            </div>                          
        </div>
    </nav>
</header>
