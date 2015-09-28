<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Ajout d'un Atelier</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<table border="1">
<tr>
<th>ID</th>	
<th>Titre</th>
<th>Type</th>
</tr>
<?php
include("connexion.php"); 
 
$sql = 'SELECT * FROM Atelier'; 

$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

while($data = mysql_fetch_assoc($req)) 
    { 	
     
    echo '<tr><td>'.$data['ID'].' </td><td>'.$data['Titre'].' </td><td>'.$data['Type'].'</td></tr>';
 
    } 
include("deconnexion.php"); 
?>


</table>

</body>
</html>