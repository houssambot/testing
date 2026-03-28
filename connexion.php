<?php
$servername = 'localhost';
$username = 'root';
$password = '' ;
$dbname = 'learning';

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    echo"erreur de connexion";
}
else {
    echo"✅ ";
}
?>