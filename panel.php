<?php
session_start();
if(!($_SESSION["email"]) || !($_SESSION["pass"])){
   header("Location:./index.php?$notLoged=true");
   $_SESSION["notAllowed"]="You can't access here without login";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Congrats <?php echo $_SESSION["email"]?> you arrive here</h1> 
   <a href="./logout.php"> logOut</a>
</body>
</html>