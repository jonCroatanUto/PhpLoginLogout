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
    <section class="container">
        <div class="row align-items-center">
            <form method="post" action="login.php" class="row g-3 needs-validation">
                <div class="col-mb-3">
                    <label for="emailInput" class="form-label">Write your email</label>
                    <input name="email" type="email" class="form-control" id="emailInput" required>
                    <div class="valid-feedback">
                    Great!!
                    </div>
                </div>
                <div class="col-mb-3">
                    <label for="passInput" class="form-label">Password</label>
                    <input name="password"  type="text" class="form-control" id="passInput" required>
                    <button type="submit" class="btn btn-outline-success">submit</button>
                </div>    
            </form>
        </div> 
    </section>
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


