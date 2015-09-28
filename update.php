<?php
// on se connecte à notre base
$base = mysql_connect ('localhost', 'root', 'root');
mysql_select_db ('CdP', $base) ;
?>
<html>
<head>
<title>Modification d'un atelier</title>
</head>
<body>
	
<?php

if (isset($_POST['titre']) && isset($_POST['type']) && isset($_POST['duree']) && isset($_POST['capacite']) && isset($_POST['theme'])) {
// lancement de la requête
$sql ='UPDATE Atelier SET titre=$_POST['titre'], type=$_POST['type'], duree=$_POST['duree'], capacite=$_POST['capacite'], theme=$_POST['theme']';

// on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

// on ferme la connexion à la base
mysql_close();
?>
L'atelier viennent d'être modifiés.
</body>
</html>