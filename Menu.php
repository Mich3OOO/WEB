<link rel="stylesheet" href="assets/css/menu.css">
<script src="assets/js/more_menu.js"></script>
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
                        <button class="btn_more" onclick=<?php
                            
                        
                            if($_SESSION[session_id()]["role"] == "Administrateur" )
                            {
                                echo "btn_plus('admin')";
                            }
                            if($_SESSION[session_id()]["role"] == "Pilote")
                            {
                                
                                echo "btn_plus('pilote')";
                            }
                            if($_SESSION[session_id()]["role"] == "Etudiant")
                            {
                                echo "btn_plus('etudiant')";  
                            }
                            
                          ?>>▽</button>
                        <div class="more-menu">
                          
                        </div>
                    </div>
                </div>
            </div>                          
        </div>
    </nav>
</header>
