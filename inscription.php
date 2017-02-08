<?php

require_once 'class/autoload.php';
    
MakeHTML::html_start("Inscription");

echo '<div class="Form">';

echo '<h2>Inscrivez vous</h2>';

Form_GEN::formuGen();

echo '</div>';

MakeHTML::html_end();