<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/Drewm/MailChimp.php";

$response = array(
    "success" => true,
    "message" => ""
);

$listId = isset($_REQUEST['list_id']) ? $_REQUEST['list_id'] : "";
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";

try {
    
    if(!$listId){
        throw new Exception("List ID is required");
    }

    if(!$email){
        throw new Exception("Please enter your email address!");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        throw new Exception("Please enter a valid email address!");   
    }

    $MailChimp = new \Drewm\MailChimp($MAILCHIMP_API_KEY);
    $result = $MailChimp->call('lists/subscribe', array(
        'id' => $listId,
        'email' => array('email' => $email),
        'double_optin' => false,
        'update_existing' => true,
        'replace_interests' => false,
        'send_welcome' => false
    ));

    $response["message"] = "Email address {$email} successfuly subscribed!";
    $response['result'] = $result;

} catch (Exception $e) {
    $response["success"] = false;
    $response["message"] = $e->getMessage();
}

header('Content-Type: application/json');
echo json_encode($response);
