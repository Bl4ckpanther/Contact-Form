<?php

$from = "Demo Contact Form <demo@dmoain.com>";
$sendTo = "Demo Contact Form <demo@dmoain.com>";
$subject = "New message from contact from";
$fields =  array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');
$okMessage = 'Contact form successfully submitted. I will get back to you!';
$errorMessage = 'There were errors while sending the email.';

error_reporting(E_ALL & -E_NOTICE);

try{
    if(count($_POST) == 0) throw new \Exception('Form is empty. ');
    $emailText = 'You have a new meesage from your demo contact form. \n';
    foreach ($_POST as $key => $value) {
        if(isset($fields[$key])){ 
            $emailText .= "$fields[$key] : $value\n";
        }
    }
        $headers = array('Content-Type: text/plain; charset="UTF-8";',
            'Form: ' . $from,
            'Reply-To: ' . $from,
            'Return-Path: ' . $from
        ); 
        mail($sendTo, $subject, $emailText, implode("\n", $headers));
        $responseArray = array("type" => 'danger', 'message' => $okMessage);
}catch(Exception $ex){
    $responseArray = array("type" => 'danger', 'message' => $errorMessage);
}

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 
'xmlhttprequest' ){
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');
    echo $encoded;
} else{
    echo $responseArray['message'];
}

?>