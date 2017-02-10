<?php
require_once 'class/autoload.php';
    
MakeHTML::html_start("Connexion");
    	 if(isset($_GET['valid']))
	 {
		 // Ici on fait les test de validation avec la récup des valeurs sur les champs du formulaire
		 //
        
		  if(isset($_FILES["files"]['type'])) {
             $type = strtolower($_FILES["files"]['type']);
         
              if ($type== "image/png" OR $type== "image/jpeg" OR $type== "image/jpg" OR $type== "video/webm" OR $type== "video/ogg"){
                  
                      
                  echo $type;
                  echo '<div class="form_upload">';
                  echo 'Merci pour l\'ajout de votre fichier : '.$_FILES['files']['name'];
                  echo '<br><br>';
                  echo 'Retour a la page d\'accueil';
                  echo '<div class="Lien_cnx"><a href="index.php">MEDIA FACTORY</a></div>';
                  echo '</div>';
                  
              } 
              else {
       
                  
             echo '<div class="form_upload">';
			 echo '<span class="grostitre">Envoyer des fichiers</span>';
             echo '<div class="errorMSG">Le format du fichier n\'est pas conforme</div><br>';
             echo '<div class="FormatMSG">Les formats accéptés sont :<br><br>
                   Vidéo : .webm<br>
                   Audio : .ogg<br>
                   Image : .png ou .jpg/.jpeg</div>';
			 echo '<form action="upload.php?valid" method="post" enctype="multipart/form-data" id="upload">';
			 echo '<div class="upload_form">';
             echo '<span class="titref">Titre du fichier<br>';
			 echo '<input type="text" name="titremed" class="titremed" maxlength="50"></span>';
			 echo '<input type="hidden" name="MAX_FILE_SIZE" value="" />';
			 echo '<input type="file" name="files" class="file" title="Message d\'erreur" />';
			 echo '</div>';
			 echo '<input type="submit" class="Lien_cnx" name="submit" value="Envoyer" />';
			 echo '</form>';
			 echo '</div>';
              }
          }
	 }
	 else
	 {
	      echo '<div class="form_upload">';
			 echo '<span class="grostitre">Envoyer des fichiers</span>';
             echo '<div class="FormatMSG">Les formats accéptés sont :<br><br>
                   Vidéo : .webm<br>
                   Audio : .ogg<br>
                   Image : .png ou .jpg/.jpeg</div>';
			 echo '<form action="upload.php?valid" method="post" enctype="multipart/form-data" id="upload">';
			 echo '<div class="upload_form">';
             echo '<span class="titref">Titre du fichier<br>';
			 echo '<input type="text" name="titremed" class="titremed" maxlength="50"></span>';
			 echo '<input type="hidden" name="MAX_FILE_SIZE" value="" />';
			 echo '<input type="file" name="files" class="file" title="Message d\'erreur" />';
			 echo '</div>';
			 echo '<input type="submit" class="Lien_cnx" name="submit" value="Envoyer" />';
			 echo '</form>';
			 echo '</div>';
	 }

MakeHTML::html_end();