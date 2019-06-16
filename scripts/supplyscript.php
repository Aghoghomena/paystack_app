<?php

require_once "../setup/connect_heroku.php";
$functionID = $_POST['functionID'];
//get suppliers
if ($functionID == 1) {
    $supplier = $_POST['supplier'];
    $desc = str_replace("'", "''", $_POST['desc']);
    $qty = $_POST['qty'];
    $cost = $_POST['price'];
    //Connect to the database
    $sql = "insert into supplies (supplied_by, description, cost, qty)
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
    $select = "select description, cost, qty, name, s.id from supplies s left join suppliers sp on s.supplied_by = sp.id";
    $query = mysqli_query($connect,$select);
    while ($row= mysqli_fetch_assoc($query)){
        array_push($data, $row);
    }
    echo json_encode($data);
}
