<?php

function test($age,$genre){

if($age>17 && $genre=='homme'){
  echo "Vous êtes un homme et vous êtes majeur";  
}

elseif($age<18 && $genre=='homme'){
    echo "Vous êtes un homme et vous êtes mineur"; 

}

elseif($age>17 && $genre=='femme'){
    echo "Vous êtes un femme et vous êtes majeur";  
}
else{
    echo "Vous êtes un femme et vous êtes mineur";  
}
}
test("21","femme")
?>