<?php
session_start();
echo $_SESSION["name"];
echo $_SESSION["prenom"];
echo $_SESSION["age"];
echo $_POST['login'];
echo "<br>";
echo $_COOKIE["Login"];
echo $_COOKIE["Password"];


?>