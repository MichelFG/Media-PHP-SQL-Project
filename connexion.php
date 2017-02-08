<?php

require_once 'class/autoload.php';
    
MakeHTML::html_start("Connexion");

echo '<div class="Form">';

echo '<h2>Connectez vous</h2>';

Form_GEN::formuGen();

echo '<h2>Inscrivez vous</h2>';

echo'<div class ="Lien_cnx"><a href="inscription.php">Inscription</a></div>';

echo '</div>';

MakeHTML::html_end();