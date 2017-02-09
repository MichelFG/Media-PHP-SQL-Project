<?php
require_once 'class/autoload.php';
$data=Session::getInstance();
printf( '<p>My name is %s</p>', $data->pseudo );
    
MakeHTML::html_start("Connexion");

echo '<div class="Form">';

echo '<h2>Connectez vous</h2>';

Form_GEN::formuGen();

 echo'<div class="Lien_cnx"><a href="inscription.php">Inscription</a></div>';

MakeHTML::html_end();