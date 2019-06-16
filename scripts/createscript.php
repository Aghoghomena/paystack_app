<?php

require_once "../setup/connect_heroku.php";
$functionID = $_POST['functionID'];
//create supplier
if ($functionID == 1) {

    $type = $_POST['type'];
    $name = str_replace("'", "''", $_POST['name']);
    $address = str_replace("'", "''", $_POST['address']);
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    //Connect to the database
    $sql = "insert into suppliers (name, type, address, email, phone_no)
            VALUES ('$name','$type', '$address', '$email', '$mobile')";
    if (mysqli_query($connect, $sql)) {
        echo "1001";
    } else {
        echo $connect->error;
    }
}
//get suppliers
elseif ($functionID == 2){

    $data =[];
    $select = "select name, address, email, phone_no, type_name from suppliers s left join supplier_type  st on s.type = st.id";
    $query = mysqli_query($connect,$select);
    while ($row= mysqli_fetch_assoc($query)){
        array_push($data, $row);
    }
    echo json_encode($data);
}
