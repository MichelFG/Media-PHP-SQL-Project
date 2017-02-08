<?Php
	 class base
		{
			 
			 static function connect()
				{
					 try 
						{
							 $cnx=new PDO('mysql:host=127.0.0.1;dbname=projet_poo;charset=utf8','projet_amt','1234512345');
							 $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
							 return $cnx;
						}
					 catch (PDOException $ex)
						{
							 die('Erreur de connexion au serveur '.$ex->getMessage());
						}
				}
			 
			 static function pdo_exec($cnx,$req)
				{
					 try
						{
							 $cnx->exec($req);
						}
					 catch (PDOException $ex)
						{
							 die('Exception PDO_Exec : '.$ex->getMessage());
						}
				}
			 
			 static function pdo_query($cnx,$req)
				{
					 try
						{
							 return $cnx->query($req);
						}
					 catch (PDOException $ex)
						{
							 die('Exception PDO_Query : '.$ex->getMessage());
						}
				}
			 
		}
	 
	 