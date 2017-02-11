<?php
require_once 'class/autoload.php';
$data=Session::getInstance();
MakeHTML::html_start("Connexion");
printf( '<p>My name is %s</p>', $data->pseudo );
echo '<div class="Form">';

echo '<h2>Connectez vous</h2>';

Form_GEN::formuGen();

 echo'<div class="Lien_cnx"><a href="inscription.php">Inscription</a></div>';
 
 echo '</div>';


MakeHTML::html_end();