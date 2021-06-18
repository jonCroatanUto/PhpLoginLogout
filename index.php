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
    <form method="post" action="login.php">
        <input name="email" type="text" required>
        <input name="password" type="text" required>
        <input type="submit" >
        
    </form>
    <div>
        <?php
        require("./functions.php");
        
        switch(true){

            case (isset($_SESSION["notAllowed"])):
                notAllow();
                break;

            case(isset($_SESSION["nothingMatch"])):
                nothtinMatch();
                break;

            case(isset($_SESSION["notEmailMatch"])):
                notEmailMatch();
                break;

            case(isset($_SESSION["notPassMatch"])):
                notPassMatch();
                break;

            default:
                break;

        }
      
        ?>
    </div>

</body>
</html>


