<?php
class Atelier {
 // Déclarations des données membres
 var $_title;
 var $_type;
 var $_theme[];
 var $_time;
 var $_capacity;
 var $_desc;
 var $_animator;
 var $_target[];
 var $_com;
 var $_addr;
 var $_acces;
 
 
 // Déclarations des méthodes
 function add() {
	$at= new Atelier;
	$at ->_title=$title;
	$at ->_type=$type;
	$at ->_time=$time;
	$at ->_capacity=$capacity;
	$at ->_desc=$desc;
	$at ->_animator=$animator;
	$at ->_com=$com;
	$at ->_acces=$acces;
	$at ->_addr=$addr;
	
	$at ->_theme[]=$computScience;
	$at ->_theme[]=$chemestry;
	$at ->_theme[]=$history;
	$at ->_theme[]=$othertheme;
	
	$at ->_public[]=$primary
	$at ->_public[]=$class6
	$at ->_public[]=$class5
	$at ->_public[]=$class4
	$at ->_public[]=$class3
	$at ->_public[]=$class2
	$at ->_public[]=$class1
	$at ->_public[]=$endclass
	$at ->_public[]=$prepa
	$at ->_public[]=$university
	
	}

}
function test() { 
	print("it's seems to work just fine ");
}
?>