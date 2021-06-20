<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <style>
    form{
        margin:100px 25%;
    }
    .btn{
        margin-top:25px;
    }
    </style>
    <title>Document</title>
</head>
    <body class="text-center">
        <main class="form-signin">
            <form method="post" action="login.php">
                    <img class="mb-4" src="./images/logo.png" alt width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <div class="form-floating">
                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Write your email</label>
                    </div>
                    <div class="form-floating">   
                        <input name="password"  type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword" >Password</label>
                    </div>
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

                                case(isset($_SESSION["allowed"])):
                                    allow();
                                    break;

                                default:
                                    break;
                            }
                        
                        ?>
                    </div>
                    <button type="submit" class="btn btn-outline-success">submit</button>   
            </form>
        </main>
    </body>
</html>


