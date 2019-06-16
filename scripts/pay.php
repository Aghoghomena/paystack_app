<?php

function initiate($email, $sent_amount){
    $curl = curl_init();

    $amount = $sent_amount * 100;  //the amount in kobo. This value is actually NGN 300

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
            'amount'=>$amount,
            'email'=>$email,
        ]),
        CURLOPT_HTTPHEADER => [
            "authorization: Bearer sk_test_ca534fcc6b6b25df29d2f2048942f919fffcb15c", //replace this with your own test key
            "content-type: application/json",
            "cache-control: no-cache"
        ],
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    if($err){
        // there was an error contacting the Paystack API
        die('Curl returned error: ' . $err);
    }

    $tranx = json_decode($response, true);

    if(!$tranx['status']){
        // there was an error from the API
        return ['status'=> 0, 'message'=>$tranx['message']];
        //print_r('API returned error: ' . $tranx['message']);
    }
    else{
        //header('Location: ' . $tranx['data']['authorization_url']);
        return['status'=> 1, 'data'=>$tranx['data']];
    }

// comment out this line if you want to redirect the user to the payment page
 //   print_r($tranx);


// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page

}
