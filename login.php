<?php

 session_start();

$_SESSION["email"]=$_POST["email"];
$_SESSION["pass"]=$_POST["password"];
if(($_SESSION["email"]) && ($_SESSION["pass"])){
        header("Location:./panel.php");
}else if(!($_SESSION["email"]) || !($_SESSION["pass"])){
        header("Location:./index.php"); 
        $_SESSION["loginPlease"]="logeate antes primo";
};


        