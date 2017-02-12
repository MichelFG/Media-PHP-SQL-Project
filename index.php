<?php
	 require_once 'class/autoload.php';
     $data = Session::getInstance();
     //$session->pseudo = 'Ainsley';
     MakeHTML::html_start("Page d'accueil");
	 $cnx=base::connect();
     //printf( '<div>My name is %s</div>' , $data->pseudo );
	 
     Recherche::rechercheGen();

	 
	 
     echo '<div class="slide">';
		 echo '<div class="films">';

		 $requete=base::pdo_query($cnx,"SELECT description,nom_du_fichier FROM datas WHERE mime_type='video/webm' ORDER BY id_auto DESC");
		 while($result=$requete->fetch(PDO::FETCH_OBJ))
			{
				 echo '<div><video width="420" height="240" controls><source src="media/'.$result->nom_du_fichier.'"></video><span>'.$result->description.'</span></div>';
			}
		 
	 echo '</div>';
		 
     echo '</div>';
	 
     echo '<div class="slide">';
		 echo '<div class="musics">';
		 $requete=base::pdo_query($cnx,"SELECT id_auto,description,nom_du_fichier FROM datas WHERE mime_type='video/ogg' ORDER BY id_auto DESC");
		 while($result=$requete->fetch(PDO::FETCH_OBJ))
			{
				 $id=explode('.',$result->nom_du_fichier);
				 echo '<div><img class="sli" id="'.$id[0].'" src="media/music.png" alt="'.$id[0].'"><span>'.$result->description.'</span></div>';
			}
		 
		 echo '</div>';
     echo '</div>';
	 
     echo '<div class="slide">';
		 echo '<div class="photos">';
		 $requete=base::pdo_query($cnx,"SELECT id_auto,description,nom_du_fichier FROM datas WHERE mime_type='image/jpeg' OR mime_type='image/jpg' OR mime_type='image/png' ORDER BY id_auto DESC");
		 while($result=$requete->fetch(PDO::FETCH_OBJ))
			{
				 $id=explode('.',$result->nom_du_fichier);
				 echo '<div><img class="sli" id="'.$id[0].'" src="media/'.$result->nom_du_fichier.'" alt="'.$id[0].'"><span>'.$result->description.'</span></div>';
			}
		 
		 echo '</div>';
     echo '</div>';
	 
	 // Popup Overlay
	 echo '<div id="overlay3">';
	 echo '		<div class="popup_block">';
	 echo '			<a class="close" href="#noWhere"><img alt="Fermer" id="btn_close" title="Fermer la fenêtre" class="btn_close" src="img/close_pop.png"></a>';
	 echo '			<div id="cont_popup">';
	 echo '			</div>';
	 echo '		</div>';
	 echo '</div>';
	 // Fin popup Overlay
	 
	 echo '<script src="jquery-2.1.4.min.js"></script>
		   <script src="jquery.bxslider/jquery.fitvids.js"></script>
		   <script src="jquery.bxslider/jquery.bxslider.min.js"></script>
		   <script>
		   $(".films").bxSlider({
				  minSlides: 1,
				  maxSlides: 1,
				  slideWidth: 420,
				  slideMargin: 0
				});
		   $(".musics").bxSlider({
				  minSlides: 4,
				  maxSlides: 4,
				  slideWidth: 102,
				  slideMargin: 0
				});
		   $(".photos").bxSlider({
				  minSlides: 4,
				  maxSlides: 4,
				  slideWidth: 102,
				  slideMargin: 0
				});
			 $("img.sli").click(function(){
				 document.location.href="#overlay3";
				 var id=$(this).attr("id");
				 //console.log("On a clique sur "+id); 
				 
				 // Routine Ajax pour récup les données de la balise à mettre en place (video, audio, img etc ...)
				 
					 $.ajax({
						 url: "media.php?media="+id,
						 type: "GET",
						 dataType: "html",
						 success: function(code_html,statut){ 
							 $("#cont_popup").html(code_html);
						 },
						 
						 error: function(resultat, statut,erreur){ 
							 $("cont_popup").html(resultat+statut+erreur);
						 },
						 complete: function(resultat,statut){ 
							 $("cont_popup").html(resultat+statut);
						 }				 
					 });
			 });
				 $("#btn_close").click(function()
										{
											 if(document.getElementById("myaudio"))
												 {
													 player=document.getElementById("myaudio");
													 player.pause();
												 }
										});
			</script>';
	 
     MakeHTML::html_end();