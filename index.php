<?php

require_once('./write_html.class.php');
require_once('./functions.php');

html_start("Page d'accueil",'./style.css');
echo'<div class="Lien_cnx"><a href="connexion.php">Connexion</a></div>';


html_end();