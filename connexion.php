<?php
require_once 'class/autoload.php';
$data=Session::getInstance();
printf( '<p>My name is %s</p>', $data->pseudo );
    
MakeHTML::html_start("Connexion");

Form_GEN::formuGen();

MakeHTML::html_end();