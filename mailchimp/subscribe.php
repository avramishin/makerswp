<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/Drewm/MailChimp.php";

$listId = $_REQUEST['list_id'];
$email = $_REQUEST['email'];
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];

try {
    $MailChimp = new \Drewm\MailChimp($MAILCHIMP_API_KEY);
    $result = $MailChimp->call('lists/subscribe', array(
        'id' => $listId,
        'email' => array('email' => $email),
        'merge_vars' => array('FNAME' => $firstname, 'LNAME' => $lastname),
        'double_optin' => false,
        'update_existing' => true,
        'replace_interests' => false,
        'send_welcome' => false
    ));

} catch (Exception $e) {

}

