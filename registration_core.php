<?php 

    require_once("database.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['password']) && isset($_REQUEST['gender']) && isset($_REQUEST['country']) && isset($_FILES['photo'])) {

            function data($data) {
                $data = htmlspecialchars($data);
                $data = ltrim($data);
                $data = stripslashes($data);
                return $data;
            }

            $name = data($_REQUEST['name']);
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];

            $gender = $_REQUEST['gender'];
            $country = $_REQUEST['country'];

            $file = $_FILES['photo'];
            $file_name = uniqid().$file['name'];
            $tmp_name = $file['tmp_name'];
            move_uploaded_file($tmp_name,"images/$file_name");

            $showQuery = "SELECT * FROM users WHERE email = '$email';";
            $showRunQuery = mysqli_query($connect,$showQuery);

            $count = mysqli_num_rows($showRunQuery);

            if($count === 0) {
                $insertQuery = "INSERT INTO users (name,email,password,gender,country,photo)VALUES('$name','$email','$password','$gender','$country','$file_name');";
                $insertRunQuery = mysqli_query($connect,$insertQuery);

                if($insertRunQuery == true) {
                    header("location: registration.php?data_insert");
                }else {
                    header("location: registration.php?data_not_insert");
                }
            }else {
                header("location: registration.php?same_email");
            }
        }else {
            header("location: registration.php?empty_data");
        }
    }



?>