<?php
/*
* Take transaction_id, amount, and payment_method, call /chop to get URL, then redirect to that URL
*/
    // change the following 2 parameters to suit your deployment
    $baseurl = "http://dev.citconpay.com/citconpay_chop_demo_php/";
    $token = "1234567890abcdef1234567890abcdeq";
    // you are welcome to change the parameters below, but shouldn't need to
    $amount = 1; // hardcode to 1 cent for testing
    $payment_method = $_POST["payment_method"];
    $currency = "USD";
    $reference = $_POST["transaction_id"];
    $callback_url_success = $baseurl."receipt_success";
    $ipn_url = $baseurl."ipn";
    $mobile_result_url = $baseurl."receipt_success?reference=$reference";
    $callback_url_fail = "";
    // no need to change below this line
    $params = "payment_method=".urlencode($payment_method).
              "&currency=".urlencode($currency).
              "&amount=$amount".
              "&reference=".urlencode($reference).
              "&ipn_url=".urlencode($ipn_url).
              "&mobile_result_url=".urlencode($mobile_result_url).
              "&callback_url_success=".urlencode($callback_url_success).
              "&callback_url_fail=".urlencode($callback_url_fail);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://dev.citconpay.com/chop/chop");
    curl_setopt($curl, CURLOPT_POST, 8);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$token
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl,CURLOPT_POSTFIELDS, $params);
    $result = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($result);
    if ($response->{'result'} == 'success') {
       header("Location: ".$response->{'url'});
       exit();
    } else {
       echo $response->{'error'};
    }
?>
