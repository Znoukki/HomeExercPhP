<?php 
	spl_autoload_register(function ($class_name) {
	    include $class_name . '.php';
    });
    
$Opp = new Student ("Otto", "Muusikko", 1993, "Math", 3);
$Op = new Teacher ("Kimmo","Merkuri", 1980,"Physics","Science");
$St = new Staff ("Julius", "Cesar",1976,"Cleaner");
$St1 = new Staff ("Ville", "Valo", 1990,"Caretaker");

$Opp->allData();
$Op->allData();
$St->allData();
$St1->allData();

?>