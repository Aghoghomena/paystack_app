<?php

include_once "../setup/connect_heroku.php";
$functionID = $_POST['functionID'];
if ($functionID == 1){



    $query ="SELECT (SELECT COUNT(id) FROM suppliers where status = 1 ) AS suppliers, (SELECT COUNT(id) FROM supplies  ) AS supplies, (SELECT SUM(amount_payed) FROM supplies where payment_status =1) AS payed, (SELECT SUM(cost) FROM supplies where payment_status = 0) AS pending";

    //echo $query;
    if ($result=mysqli_query($connect,$query))
    {
        $row = mysqli_fetch_object($result);
        $response = array(
            'status' => true,
            'message' =>"data gotten",
            'count' => $row,
        );
        echo json_encode($response);
        return;

    }
    else{
        $response = array(
            'status' => false,
            'message' =>$connect->error,
        );
        echo json_encode($response);
        return;
    }
}

//get supplies
elseif ($functionID == 2){

    $data =[];
    $select = "select name, type_name, address, email, phone_no from suppliers s left join supplier_type st on s.type = st.id";
    $query = mysqli_query($connect,$select);
    while ($row= mysqli_fetch_assoc($query)){
        array_push($data, $row);
    }
    echo json_encode($data);
}