<?php

if($_GET['prenom'] || $_GET['nom'])
{
echo $_GET['nom'];
echo $_GET['prenom'];

}
// php -S localhost:8080 index.php
// localhost:8080/?nom=Nemare&prenom=Jean





?>