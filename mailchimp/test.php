<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/Drewm/MailChimp.php";

$MailChimp = new \Drewm\MailChimp($MAILCHIMP_API_KEY);

$listId = "6dc40f9c5d";
$email = "vavramishin@brightgrove.com";

$result = $MailChimp->call('lists/subscribe', array(
    'id' => $listId,
    'email' => array('email' => $email),
    'double_optin' => false,
    'update_existing' => true,
    'replace_interests' => false,
    'send_welcome' => false
));

print_r($result);
print_r($MailChimp->call('lists/list'));


exit();


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

