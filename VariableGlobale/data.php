<?php
session_start();
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];


?>