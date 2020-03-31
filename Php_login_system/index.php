<?php 
    session_start(); 
    include_once('Classes/MySql.php');
    include_once('Classes/User.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" ?>
  <title>Login System with PHP</title>
</head>
<body>
    <div class="container">
        <h1>Enter your details to login</h1>
        <div class="form">
            <?php 
                $User = new User();
                $User->LoginUser();
            ?>
            <form method="post">
                <div class="input-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" placeholder="Enter your name">
                </div><!--input-group-->

                <div class="input-group">
                    <label for="email">E-mail: </label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div><!--input-group-->

                <div class="input-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" placeholder="Enter your password">
                </div><!--input-group-->

                <input type="submit" name="acao" value="Submit">
            </form>
        </div><!--form-->
    </div><!--container-->
    <script src="js/main.js"></script>
</body> 
</html>