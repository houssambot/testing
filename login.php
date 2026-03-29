<?php
require 'connexion.php';
//-----------Connexion-----------------------------------
$username = $_POST['username'];
$password = $_POST['pass'];
//----------recuperer les variables inputs----------------
$sql = "SELECT * FROM users WHERE username = '$username'";

$result = $con->query($sql);
if ($result-> num_rows > 0 ) {
     $result= $result->fetch_assoc();
     if ($result['password']=== $password){
            echo "<script>
            window.alert('Login successful!');
            window.location='dashboard.php';
            </script>";
     }
            else {
                echo "<script>
                window.alert('Invalid password. try again.');
                window.location='index.php';
                </script>";
            }
        }
else {
    echo "<script>
    window.alert('Invalid username');
    window.location='index.php';
    </script>";
}


?>

