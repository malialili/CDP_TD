
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Ajout d'un Atelier</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<?php
$db = mysql_connect('localhost', 'root', 'root'); 
mysql_select_db('CdP',$db); 

if (isset($_POST['titre']) AND isset($_POST['type']) AND isset($_POST['duree']) AND isset($_POST['capacite']) AND isset($_POST['theme']))
 {
 $titre = $_POST['titre'];
 $type = $_POST['type'];
 $theme =$_POST['theme'];
 $duree=$_POST['duree'];
 $capacite=$_POST['capacite'];
  
 if (empty($titre))
 {
  echo ("Saisissez votre titre");
  exit();
 }
 
  $sql = "INSERT  INTO Atelier (ID, Titre, Type, Duree, Capacite, Themes) VALUES ("5",$titre', '$type', '$duree', '$capacite', '$theme')"; 
      

  $requete= mysql_query ($sql,$db) or die(mysql_error()); 
 
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }

 }
 mysql_close(); 
?>

</body>
</html>