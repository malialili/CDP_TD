<?php
include("connexion.php"); 

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Ajout d'un Atelier</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

  <h1> Ajouter un atelier</h1> 
    
    <P>
    Les champs (*) sont obligatoir
    </P>
<FORM name="insertion" method="POST" action="atelier.php">

    Titre* :   <INPUT type=text size=60 name=titre><BR>
    Type* :  <INPUT type=text size=30 name=type><BR>
    Durée* :   <INPUT type=text size=2 name=duree><BR>
    Capacité :   <INPUT type=text size=2 name=capacite><BR>
    Thèmes disciplinaire* :   <textarea type=textarea  name=theme rows="10" cols="60"> </textarea>
    
    <BR><br>

    <INPUT type=submit value=Ajouter>
     <INPUT type=hidden name=afficher value=ok>

</FORM>

</body>
</html>