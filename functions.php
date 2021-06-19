<?php
session_start();

function notAllow(){
    echo "<div>";
    echo $_SESSION["notAllowed"];
    echo "</div>";

    unset ($_SESSION["notAllowed"]);
}
function nothtinMatch(){
    echo $_SESSION["nothingMatch"];
    unset ($_SESSION["nothingMatch"]);
}

function notEmailMatch(){
    echo $_SESSION["notEmailMatch"];
    unset ($_SESSION["notEmailMatch"]);
}

function notPassMatch(){
    echo $_SESSION["notPassMatch"];
    unset ($_SESSION["notPassMatch"]);
}

function wrongPassEmail(){
    header("Location:./index.php"); 
    $_SESSION["nothingMatch"]="Wrong password and wrong email";

}
function wrongEmail(){
    header("Location:./index.php"); 
    $_SESSION["notEmailMatch"]="wrong email"; 
}
function wrongPass(){
    header("Location:./index.php"); 
    $_SESSION["notPassMatch"]="wrong pass";   
    
}
function logOut(){
    unset($_SESSION);
    setcookie(session_name(),"",time() - 3600);
    session_destroy();
    header("Location:./index.php");
}
function notAllowed(){
    if(!isset($_SESSION["allowed"])){
        header("Location:./index.php?$notLoged=true");
        $_SESSION["notAllowed"]="You can't access here without login";
     }
}
function allowed(){
    $_SESSION["allowed"]="Welcome !!!"; 
    header("Location:./panel.php");
}