<?php

require_once "../setup/connect_heroku.php";
//require_once "../setup/connect.php";
$functionID = $_POST['functionID'];
//user login
if ($functionID == 1) {

    $password = (mysqli_real_escape_string($connect, $_POST['password']));
    $username = str_replace("'", "''", $_POST['username']);
    //Connect to the database
    $sql = "SELECT id,firstname, lastname, email FROM users WHERE email = '$username' AND password='$password' AND status ='1'";
    if($result = mysqli_query($connect, $sql)){
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $row = mysqli_fetch_array($result);
            session_name('bakerypay');
            SESSION_START();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $username;
            $_SESSION['fname'] = $row['firstname'];
            $_SESSION['lname'] = $row['lastname'];
            $_SESSION['email'] = $row['email'];
            $id = $row['id'];
            $sql1 = "UPDATE users SET last_login = now() WHERE id = '$id'";
            //echo $sql1;
            mysqli_query($connect, $sql1);
            echo "1001";
        } else {
            $status = "Incorrect Username or Password";
            echo $status;
        }
    }
    else{
        echo $connect->error;
    }
}