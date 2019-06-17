<?php

session_name("bakerypay");
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] == '' || $_SESSION['id'] == 0 || $_SESSION['id'] == null) {
    echo "505";
} else {
    require_once "../setup/connect_heroku.php";
    $functionID = $_POST['functionID'];
    //settle item
    if ($functionID == 1) {
        $id = $_POST['id'];
        $user_id =$_SESSION['id'];
        $cost = $_POST['price'];
        $reference = $_POST['reference'];
        $ddate= date("d-m-Y H:i:s");
        //Connect to the database

        $update = "update supplies set payment_status =1, amount_payed= '$cost', payed_by = '$id', reference = '$reference', date_paid = '$ddate' where id='$id'";
        //echo $update;
        if(mysqli_query($connect,$update)){
            echo "1001";
        }
        else{
            echo $connect->error;
        }

    }
    //get supplies
    elseif ($functionID == 2){

        $data =[];
        $select = "select description, cost, qty, name, s.id from supplies s left join suppliers sp on s.supplied_by = sp.id where payment_status = 0";
        $query = mysqli_query($connect,$select);
        while ($row= mysqli_fetch_assoc($query)){
            array_push($data, $row);
        }
        echo json_encode($data);
    }
}


