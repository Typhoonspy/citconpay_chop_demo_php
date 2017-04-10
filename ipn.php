<?php
// get parameters from POST
// process them in local systems
// return ok

// customize the token below
$token="1234567890abcdef1234567890abcdeq";

// below is a demonstration on how ipn receive, validate data
function update_order($reference, $status, $time, $id, $notify_id) {
    //TODO
    error_log("in ipn, update_order with $reference, $status, $time, $id, $notify_id");
}
function start_fulfillment($reference) {
    //TODO
    error_log("in ipn, start_fulfillment with $reference");
}
function sign_ipn($reply, $token) {
    ksort($reply);
    $flat_reply = "";
    foreach ($reply as $key=>$value) {
        $flat_reply = $flat_reply."$key=$value&";
    }
    $flat_reply = $flat_reply."token=$token";
    //error_log(">>>>> flat_reply in ipn is $flat_reply");
    return md5($flat_reply);
}
$notify_status = $_POST['notify_status'];
$reference = $_POST['reference'];
$id = $_POST['id'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$time = $_POST['time'];
$notify_id = $_POST['notify_id'];
$partner_id = $_POST['partner_id'];
$sign = $_POST['sign'];

error_log(">>>>> in chopdemo ipn receiver >>>>>");
foreach ($_POST as $key=>$value) {
    error_log("$key=$value");
}
error_log(">>>>> end of chopdemo ipn");

$fields = $_POST['fields'];
$data['fields'] = $fields;
$tok = strtok($fields, ",");
while ($tok !== false) {
    $data[$tok] = $_POST[$tok];
    $tok = strtok(",");
}
$mysign = sign_ipn($data, $token);
foreach ($data as $key => $value) {
    $flat_message = $flat_message . "$key=$value&";
}
error_log(">>>> flat_message in ipn receiver >>> $flat_message");
error_log(">>>> sign=$sign, mysign=$mysign");
if ($sign === $mysign) {
    update_order($reference, $notify_status, $time, $id, $notify_id);
    start_fulfillment($reference);
}
echo "ok";
?>
