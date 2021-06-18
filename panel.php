<?php
require("./functions.php");
notAllowed();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
   <h1>Congrats <?php echo $_SESSION["email"]?> you arrive here</h1> 
   <a class="btn btn-primary " href="./logout.php"> logOut</a>
</body>
</html>