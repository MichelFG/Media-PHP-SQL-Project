<?php
     require_once 'class/autoload.php';
     $data = Session::getInstance();
     $data->pseudo = 'Ainsley';
     MakeHTML::html_start("Page d'accueil");
	 $cnx=base::connect();
     printf( '<div>My name is %s</div>' , $data->pseudo );
	 
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
				 echo '<div><img class="sli" id="'.$id[0].'" src="media/music.png"><span>'.$result->description.'</span></div>';
			}
		 
		 echo '</div>';
     echo '</div>';
	 
     echo '<div class="slide">';
		 echo '<div class="photos">';
		 $requete=base::pdo_query($cnx,"SELECT id_auto,description,nom_du_fichier FROM datas WHERE mime_type='image/jpeg' OR mime_type='image/jpg' OR mime_type='image/png' ORDER BY id_auto DESC");
		 while($result=$requete->fetch(PDO::FETCH_OBJ))
			{
				 $id=explode('.',$result->nom_du_fichier);
				 echo '<div><img class="sli" id="'.$id[0].'" src="media/'.$result->nom_du_fichier.'" style="cursor: pointer;"><span>'.$result->description.'</span></div>';
			}
		 
		 echo '</div>';
     echo '</div>';
	 
	 // Popup Overlay
	 echo '<div id="overlay3">';
	 echo '<div class="popup_block">';
	 echo '<a class="close" href="#noWhere"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="close_pop.png"></a>';
	 echo '<img style="float: right; margin: 0 0 0 20px;" alt="Lil bomb dude" src="bomber.gif">';
	 echo '<h2>Popup</h2>';
	 echo '<p>Aliquip transverbero loquor esse ille vulputate exerci veniam fatua eros similis illum valde. Praesent, venio conventio rusticus antehabeo lenis. Melior pertineo feugait, praesent hos rusticus et haero facilisis abluo. </p>';
	 echo '<p>Veniam tincidunt augue abluo vero, augue nisl melior quidem secundum nobis singularis eum eum.</p>';
	 echo '</div>';
	 echo '</div>';
	 // Fin popup Overlay
	 
	 echo '<script src="jquery-2.1.4.min.js"></Script>
		   <script src="jquery.bxslider/jquery.fitvids.js"></Script>
		   <script src="jquery.bxslider/jquery.bxslider.min.js"></Script>
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
			 $(".sli img").click(function(){
				 var id=$(this).attr("id");
				 alert("On a clique sur "+id); 
			 });
		 </script>';
	 
	 
     MakeHTML::html_end();