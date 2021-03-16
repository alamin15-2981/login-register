<?php 

require_once("database.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $viewDataQuery = "SELECT * FROM users WHERE email = '$email' AND password = '$password';";
    $runViewQuery = mysqli_query($connect,$viewDataQuery);

    $count = mysqli_num_rows($runViewQuery);

    if($count === 1) {
        header("location: home.php");
    }else {
        header("location: login.php?data_not_match");
    }
}


?>