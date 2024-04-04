
<article id="RappelOffre">
    <div id = 'StagePopUp'>
        <div class = 'scrollContainer'>
            <div id='infostage'>
                <h2>{$Data["Poste"]}</h2>
                <article>
                    <h3>Résumé</h3>
                    <p>{$Data["Descr"]}</p>
                </article>
                <article>
                    <h3>compétences</h3>
                    <p>{$Data["Competence"]}</p>
                </article>
                <p><strong>promotions concernées:</strong>{$Data["Nom_du_Type"]}</p>
                <p><strong>rémunération:</strong>{$Data["remune"]}€</p>
                <div class = 'flexContainer'><div id='PopUpTimeInfo'>
                    <p><strong>Date de publication:</strong>{$Data["Date_Stage"]}</p>
                    <p><strong>durée:</strong>{$Data["Duree"]} mois </p>
                </div>
                <div id = 'PopUpSpotsInfo'>
                    <p><strong>nombre de places:</strong>{$Data["Nb_place"]}</p>
                    <p><strong>élèves postulés :</strong>{$Data["post"]} </p>
                </div>
            </div>
        </div>
        <div id='infoEntreprise'>
            <h3>{$Data["NomE"]}</h3>
            <h4>{$Data["adresseA"]},{$Data["ville"]}</h4>
            <p>{$Data["descr"]}</p>
            <p>Tel: {$Data["TelE"]} </p>
        </div>
    </div>
</article>
<p id="msg">Entrer ici un message : </p>
<form method="post" action= "../assets/phpScripts/postuler.php">
    <input type="hidden" value={$IDoffre} name="IDoffre">
    <div class="flex-mere">
        <textarea rows="8" cols="50" class="flex-child" id="TextMail"></textarea>
        <div class="flex-child">
            <div class="CVLM">
                <label for="myCV">Déposer un CV :</label><br>
                <input type="file" id="CV" name="myCV">
            </div>
            <br><br>
            <div class="CVLM">
                <label for="myLM">Déposer une lettre de motivation :</label><br>
                <input type="file" id="LM" name="myLM">
            </div>
        </div>
    </div>
    <button type="submit" id="Post">Je postule</button>
</form>
