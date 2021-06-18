<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="login.php">
        <input name="email" type="text">
        <input name="password" type="text">
        <input type="submit" >
        
    </form>
    <div>
        <?php
        session_start();
        
        if(isset($_SESSION["loginPlease"])){
            echo $_SESSION["loginPlease"];
            unset ($_SESSION["loginPlease"]);

        }else if(isset($_SESSION["notAllowed"])){
            echo $_SESSION["notAllowed"];
            unset ($_SESSION["notAllowed"]);
        };
        ?>
    </div>

</body>
</html>


