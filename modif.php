<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Ajout d'un Atelier</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

  <h1> Modifier un atelier</h1> 

<?php
$db = mysql_connect('localhost', 'root', 'root'); 
mysql_select_db('CdP',$db); 
//$id  = $_GET["idAtelier"] ;
 $id=4;
  $sql = "SELECT * FROM Atelier WHERE ID = ".$id ;
  $requete = mysql_query( $sql,$db) ;

echo '<table>';
while($data = mysql_fetch_assoc($sql)) 
    {   
     
    echo '<tr><td>'.$data['ID'].' </td><td>'.$data['Titre'].' </td><td>'.$data['Type'].'</td></tr>';
 
    } 
echo '</table>';

  if( $result = mysql_fetch_object( $requete ) )
  {

  ?>
  
    <FORM name="update" method="POST" action="update.php">
        <input type="hidden" name="ID" value="<?php echo($id) ;?>">
        Titre* :   <INPUT type=text size=60 name=titre value="<?php echo($result->titre) ;?>"> <BR>
        Type* :  <INPUT type=text size=30 name=type value="<?php echo($result->type) ;?>"><BR>
        Durée* :   <INPUT type=text size=2 name=duree value="<?php echo($result->duree) ;?>"><BR>
        Capacité :   <INPUT type=text size=2 name=capacite value="<?php echo($result->capacite) ;?>"><BR>
        Thèmes disciplinaire* :   <textarea type=textarea  name=theme rows="10" cols="60" value="<?php echo($result->theme) ;?>"> </textarea>
        <BR><br>
        <INPUT type=submit value=Modifier>
        <INPUT type=hidden name=afficher value="list-atelier.php">
    </FORM>
<?php
}
mysql_close(); 
?>
</body>
</html>