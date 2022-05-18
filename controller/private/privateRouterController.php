<?php

use NewsWeb\Manager\theuserManager;

if (isset($_GET["disconnect"]) || $_SESSION["idSession"] !== session_id()) {
    theuserManager::disconnect();
    header("Location: ./");
    die();
} else {
    echo $twig->render('private/homepage.html.twig');
    var_dump($_SESSION);
    echo "</pre><p><a href='?disconnect'>Logout?</a></p>";
    // ici l'appel de la vue Twig (private homepage)
}