<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>La liste des ateliers</title>
         <link rel="stylesheet" href="main.css">
    </head>
        
    <body>
        <h1>La liste des ateliers </h1>
        <p>Les ateliers sont classé en ordre alphabétique</p>
 
            
<?php 
include("list-atelier.php"); 
?>
<a href="add.php"> ajout d'un atelier</a>
<br>
<a href="modif.php"> modification </a>

</body>
</html>