<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <?php
    session_start();

    $_SESSION['browser']= $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['ip']= $_SERVER['REMOTE_ADDR'];
    $_SESSION['time']= time();

    echo '<pre>';
    print_r  ($_SESSION);

    function findIni(){
      echo  php_ini_loaded_file();
    }

    findIni();
  ?>

  <a href="./index.php" class="btn btn-outline-primary">back</a>
</body>
</html>

