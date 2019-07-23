<?php

//Exercice 1
echo date("m/d/y")."\n";

//Exercice 2
echo date("m-d-y")."\n";

//Exercice 3
$date1=date("l j F o");
setlocale(LC_TIME, "fr_FR");
echo strftime("%A %d %B %G", strtotime($date1))."\n";

//Exercice 4
$date1 = new DateTime();
echo $date1->getTimestamp()."\n";


$date1 = new DateTime('2016-08-02 15:00');
echo $date1->getTimestamp()."\n";

//Exercice 5

$date1= date_create("2016-05-16");
$date2 = date_create("2019-07-22");
$dateDifference = date_diff($date1, $date2)->format('%y years, %m months and %d days');
echo $dateDifference."\n";

// Exercice 6
$jTenPoseDesQuestions = cal_days_in_month(CAL_GREGORIAN, 2, 2017); 
echo "Il y a {$jTenPoseDesQuestions} jours en fevrier 2017"."\n";



// Exercice 7
$date = new DateTime();
$date->modify("+20 day"); 
echo "Si nous nous déplacons de 20 jours dans le futur nous serons le {$date->format('d-m-y')}"."\n";

// Exercice 8
$date2 = new DateTime();
$date2->modify("-22 day"); 
echo "Si nous nous déplacons de 22 jours dans le passé nous serons le {$date2->format('d-m-y')}"."\n";
?>




?>