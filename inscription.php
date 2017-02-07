<?php

require_once('./write_html.class.php');
require_once('./functions.php');

html_start("Page d'accueil",'./style.css');

inputGen('Name','Nom','Votre nom','');


html_end();