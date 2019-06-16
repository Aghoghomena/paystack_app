<?php

session_name("bakerypay");
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] == '' || $_SESSION['id'] == 0 || $_SESSION['id'] == null) {
    echo "505";
} else {
    require_once "../setup/connect_heroku.php";
    require_once  "../scripts/pay.php";
    $functionID = $_POST['functionID'];
    //settle item
    if ($functionID == 1) {
        $id = $_POST['id'];
        $user_id =$_SESSION['id'];
        $cost = $_POST['price'];
        //Connect to the database
        $sql = "select email from users where id ='$user_id'";
        if ($query = mysqli_query($connect, $sql)) {

            $row = mysqli_fetch_row($query);
            $email = $row[0];
            $pay = initiate($email, $cost);
            if($pay['status'] == 1){

                header('Location: ' . $pay['data']['authorization_url']);
            }
            else{
               echo $pay['message'] ;
            }
        } else {
            echo $connect->error;
        }
    }
}


