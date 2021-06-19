<?php

session_start();

$recivedEmail=$_SESSION["email"]=$_POST["email"];
$recivedPass=$_POST["password"];
$foundedPass="1233";
$existingPassword=password_hash($foundedPass,PASSWORD_DEFAULT);
$existingEmail="jon.garciaorad.asencor@gmail.com";
require("./functions.php");
notAllowed();
switch (true) {
        case (($recivedEmail==$existingEmail) && password_verify($recivedPass,$existingPassword)):
                allowed();
                break;
        case (($recivedEmail!=$existingEmail) && !password_verify($recivedPass,$existingPassword)):
                wrongPassEmail();
                break;
        case (($recivedEmail!=$existingEmail)):
                wrongEmail();           
                break;
        case (!password_verify($recivedPass,$existingPassword)):
                wrongPass();                
                break; 
        default:
                break;
}



        