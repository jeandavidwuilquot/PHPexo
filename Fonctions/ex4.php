<?php

function calcul($a,$b){

    if($a>$b){
echo "Le premier nombre est plus grand";
    }
elseif($a<$b){
    echo "Le premier nombre est plus petit";
}
elseif($a==$b){
    echo "Les deux nombres sont identiques";
}
}
echo calcul(10,100)
?>