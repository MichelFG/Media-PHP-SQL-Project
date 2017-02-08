<?php

	 require_once 'class/autoload.php';
	 
	 MakeHTML::html_start("Page d'accueil");

	 echo'<div class="Lien_upld"><a href="upload.php">Charger un fichier</a></div>';

	 MakeHTML::html_end();