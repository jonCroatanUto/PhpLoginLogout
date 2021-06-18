<?php

session_start();
unset($_SESSION);
session_destroy();
function goBack(){
    header("Location:./index.php");
}
goBack();