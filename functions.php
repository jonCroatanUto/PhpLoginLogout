<?php

// message SESSIONS

    function notAllow(){
        echo "<div class='alert alert-warning d-flex align-items-center' role='alert'>";
        echo " <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Warning:'><use xlink:href='#exclamation-triangle-fill'/></svg>";

        echo $_SESSION["notAllowed"];

        echo "</div>";
        unset ($_SESSION["notAllowed"]);
    }
    function nothtinMatch(){
        echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
        echo " <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>";

        echo $_SESSION["nothingMatch"];

        echo "</div>";
        unset ($_SESSION["email"]);
        unset ($_SESSION["nothingMatch"]);
    }

    function notEmailMatch(){
        echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
        echo "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>";

        echo $_SESSION["notEmailMatch"];

        echo "</div>";
        
        unset ($_SESSION["notEmailMatch"]);
        unset ($_SESSION["email"]);
    }

    function notPassMatch(){
        echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
        echo " <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>";

        echo $_SESSION["notPassMatch"];

        echo "</div>";
        unset ($_SESSION["notPassMatch"]);
        unset ($_SESSION["email"]);
       
    }

    function allow(){
        echo "<div class='alert alert-success d-flex align-items-center' role='alert'>";
        echo " <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>";

        echo $_SESSION["allowed"];

        echo "</div>";
        unset($_SESSION["allowed"]);
    }

// validation  SESSIONS

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
    function notAllowed(){
        if(!isset($_SESSION["email"])){
            header("Location:./index.php");
            $_SESSION["notAllowed"]="You can't access here without login";
        }
    }
    function allowed(){
        $_SESSION["allowed"]="Welcome !!!"; 
        header("Location:./panel.php");
    }

// logOut  SESSIONS    

    function logOut(){
        unset($_SESSION);
        setcookie(session_name(),"",time() - 3600);
        session_destroy();
        header("Location:./index.php?logout=true");
    }
    function logoutMessatge(){
        echo "<div class='alert alert-success d-flex align-items-center' role='alert'>";
        echo "You just logOUt I hope to see you soon";
        echo "</div>";
       
     
    }