<?php 

$host = "localhost";
$dbUserName = "md shovon";
$dbPwd = "1213646441";
$dbName = "login_registration_0.1";

$connect = mysqli_connect($host,$dbUserName,$dbPwd,$dbName);

if($connect == false) {
    echo "<font color='red'>Conection problem with mysqli database system !</font>";
}

?>