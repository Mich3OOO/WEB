    <?php
        session_start();
        if (!isset($_SESSION["Con"])) {
            header('Location: ./Authentification.php');
        }
    ?>