<?php

$messageSent = false;

if(isset($_POST['messageSubmit'])) {

  if(isset($_POST['userEmail']) && $_POST['userEmail'] != ''){

    if(filter_var($_POST['userEmail'], filter_validate_email)) {
  
      $firstName = $_POST['first'];
      $lastName = $_POST['last'];
      $userEmail = $_POST['userEmail'];
      $message = $_POST['message'];
  
      $to = 'tboneisdabomb25@aol.com';
      $messageSubject = "You have received a message from the website!";
      $body = "";
  
      $body .= "From: ".$firstName." ".$lastName. "\n\n";
      $body .= "Email: ".$userEmail. "\n\n";
      $body .= "Message: ".$message. "\n\n";
  
      mail($to,$messageSubject,$body);
  
      $messageSent = true;
      
    }
  
  }

}
if($messageSent = true) {
  $successfulForm_class_name = form-success;
}
