<?Php
	 function __autoload($class)
		{
			 $nom=$class.'.class.php';
			 require_once $nom;
		}
	 