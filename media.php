<?Php
	 //
	 // Gestion des medias, appel ajax
	 //
	 
	 require_once 'class/autoload.php';
	 
	 $cnx=base::connect();
	 if(isset($_GET['media']))
		{
			 if(is_numeric($_GET['media']))
				{
					 $id=$_GET['media'];
					 //echo '<h1>id='.$id.'</h1>';
					 $requete=base::pdo_query($cnx,"SELECT description,nom_du_fichier,mime_type FROM datas WHERE id_auto=".$id." LIMIT 1");
					 //$nbr=$requete->fetchAll();
					 $nbr=$requete->rowCount();
					 if($nbr>0)
						{
							 $result=$requete->fetch(PDO::FETCH_OBJ);
							 $nfile=$result->nom_du_fichier;
							 $type=$result->mime_type;
							 if($type=="video/ogg")
								{
									 echo '<h3>'.$result->description.'</h3>';
									 echo '<p class="cont_vign"><audio id="myaudio" src="media/'.$nfile.'" controls></audio></p>';
								}
							 else if(substr($type,0,5)=="image")
								{
									 echo '<h3>'.$result->description.'</h3>';
									 echo '<span class="cont_vign"><img class="vignette" src="media/'.$nfile.'">';
								}
						}
						else
						{
							 echo '<img src="media/houston_problem.jpg">';
						}
					 
				}
			 else
				{
					 echo '<img src="media/houston_problem.jpg">';
				}
		}
	 