<?php
require_once 'class/autoload.php';
    
MakeHTML::html_start("Connexion");
	 if(isset($_GET['valid']))
	 {
		 // Ici on fait les test de validation avec la récup des valeurs sur les champs du formulaire
		 //
		 
		 
		 
	 }
	 else
	 {
			 echo '<div class="form_upload">';
			 echo '<h2>Envoyer des fichiers</h2>';
			 echo '<form action="upload.php?valid" method="post" enctype="multipart/form-data" id="upload">';
			 echo '<div class="upload_form">';
			 echo '<input type="hidden" name="MAX_FILE_SIZE" value="100000" />';
			 echo '<input type="file" name="files" id="file" title="Message d\'erreur" />';
			 echo '<div class="txtarea">';
			 echo 'Description du fichier :<br>';
			 echo '<textarea cols="30" rows="4" name="txtarea"></textarea>';
			 echo '</div></div>';
			 echo '<input type="submit" class="Lien_cnx" name="submit" value="Envoyer" />';
			 echo '</form>';
			 echo '</div>';
	 }
MakeHTML::html_end();