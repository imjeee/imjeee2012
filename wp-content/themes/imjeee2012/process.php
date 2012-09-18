<?php

   $name = $_GET["name"];
   $email = $_GET["email"];
   $message = $_GET[ "message" ];
   
   mail ( 'imjeee@gmail.com' , $email, "from: " . $name . "\n" . "message: " . $message ); 

?>
