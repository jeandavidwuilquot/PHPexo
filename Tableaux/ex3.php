<?php

$tab=[
    01=>"Ain",
    03=>"Allier",
    07=>"Ardèche",
    15=>"Cantal",
    26=>"Drôme",
    38=>"Isère",
    42=>"Loire",
    43=>"Haute-Loire",
    63=>"Puy-de-Dôme",
    69=>"Rhône",
    73=>"Savoie",
    74=>"Haute-Savoie"
];


// echo $tab[69];

// $tab[57]="Lorraine";
// echo $tab[57];


forEach($tab as $key =>$value){
    echo "Le département $value a le numéro $key \n";
}




?>