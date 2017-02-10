<?php
    require_once 'class/autoload.php';
    $data = Session::getInstance();
    $data->pseudo = 'Ainsley';
    printf( '<p>My name is %s</p>' , $data->pseudo );
    
    MakeHTML::html_start("Page d'accueil");

    echo'<div class="Lien_upld"><a href="upload.php">Charger un fichier</a></div>';

    echo '<div class="slide">';
    echo '</div>';

    echo '<div class="slide">';
    echo '</div>';

    echo '<div class="slide">';
    echo '</div>';

    MakeHTML::html_end();