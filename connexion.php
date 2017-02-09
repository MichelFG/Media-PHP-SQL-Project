<?php
require_once 'class/autoload.php';
$data=Session::getInstance();
printf( '<p>My name is %s</p>', $data->pseudo );
    
MakeHTML::html_start("Connexion");

echo '<div class="Form">';

echo '<h2>Connectez vous</h2>';

Form_GEN::formuGen();

echo '<h2>Inscrivez vous</h2>';

Form_GEN::formuGen();

echo '</div>';

MakeHTML::html_end();