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
			 echo '<h2>Envoyer des fichiers</h2>';
             echo '<div class="errorMSG">Le format du fichier n\'est pas conforme</div>';
             echo '<div class="FormatMSG">Les formats accéptés sont :<br>
                   Vidéo : .webm<br>
                   Audio : .ogg<br>
                   Image : .png ou .jpg/.jpeg</div>';
			 echo '<form action="upload.php?valid" method="post" enctype="multipart/form-data" id="upload">';
			 echo '<div class="upload_form">';
			 echo '<input type="hidden" name="MAX_FILE_SIZE" value="" />';
			 echo '<input type="file" name="files" id="file" title="Message d\'erreur" />';
			 echo '<div class="txtarea">';
			 echo 'Description du fichier :<br>';
			 echo '<textarea cols="30" rows="4" name="txtarea"></textarea>';
			 echo '</div></div>';
			 echo '<input type="submit" class="Lien_cnx" name="submit" value="Envoyer" />';
			 echo '</form>';
			 echo '</div>';
              }
          }
	 }
	 else
	 {
			 echo '<div class="form_upload">';
			 echo '<h2>Envoyer des fichiers</h2>';
             echo '<div class="FormatMSG">Les formats accéptés sont :<br>
                   Vidéo : .webm<br>
                   Audio : .ogg<br>
                   Image : .png ou .jpg/.jpeg</div>';
			 echo '<form action="upload.php?valid" method="post" enctype="multipart/form-data" id="upload">';
			 echo '<div class="upload_form">';
			 echo '<input type="hidden" name="MAX_FILE_SIZE" value="" />';
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