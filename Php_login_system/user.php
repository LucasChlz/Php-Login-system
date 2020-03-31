<?php

    session_start();

    include_once('Classes/User.php');

    if(isset($_GET['loggout'])) {
        $User = new User();
        $User->LoggoutUser();
    }


?>
<h1>Welcome <?php echo $_SESSION['name']; ?></h1>
<a href="http://localhost/Php_login_system/user.php?loggout"> Loggout</a>