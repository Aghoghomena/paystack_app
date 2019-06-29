<?php

session_name("bakerypay");
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] == '' || $_SESSION['id'] == 0 || $_SESSION['id'] == null) {
    echo "505";
} else {
    require_once "../setup/connect_heroku.php";
    $functionID = $_POST['functionID'];
//get suppliers
    if ($functionID == 1) {
        $supplier = $_POST['supplier'];
        $desc = str_replace("'", "''", $_POST['desc']);
        $qty = $_POST['qty'];
        $cost = $_POST['price'];
        //Connect to the database
        $sql = "insert into supplies (supplied_by, description, cost, qtygg)
            VALUES ('$supplier','$desc', '$cost', '$qty')";
        if (mysqli_query($connect, $sql)) {
            echo "1001";
        } else {
            echo $connect->error;
        }
    }
//get suppliers
    elseif ($functionID == 2){

        $data =[];
        $select = "select name, id from suppliers where status = '1'";
        $query = mysqli_query($connect,$select);
        while ($row= mysqli_fetch_assoc($query)){

            $dropdown .= "<option value=" . $row['id'] . ">";
            $dropdown .= $row['name'];
            $dropdown .= "</option>";

        }
        echo $dropdown;
    }

//get supplies
    elseif ($functionID == 3){

        $data =[];
        $select = "select description, cost, qty, name, s.id, payment_status from supplies s left join suppliers sp on s.supplied_by = sp.id";
        $query = mysqli_query($connect,$select);
        while ($row= mysqli_fetch_assoc($query)){
            array_push($data, $row);
        }
        echo json_encode($data);
    }
    //get payments
    elseif ($functionID == 4){

        $data =[];
        $select = "select description, cost, qty, name, s.id, payment_status, amount_payed, reference,date_paid, firstname, lastname from supplies s left join suppliers sp on s.supplied_by = sp.id left join users u on s.payed_by = u.id where payment_status = 1";
        $query = mysqli_query($connect,$select);
        while ($row= mysqli_fetch_assoc($query)){
            array_push($data, $row);
        }
        echo json_encode($data);
    }

}
