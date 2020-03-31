<?php

    Class User
    {

        public function LoggoutUser() {
            session_destroy();
            header('Location: index.php');
            die();
        }

        public function LoginUser() {
            if(isset($_POST['acao'])) {
                $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                $sql = MySql::Connect()->prepare("SELECT * FROM `users` WHERE name = ? AND email = ? AND password = ?");
                $sql->execute(array($name, $email, $password));
                if($sql->rowCount() == 1) {
                    $_SESSION['name'] = $name;
                    $_SESSION['password'] = $password;
                    $_SESSION['email'] = $email;
                    header('Location: user.php');
                    die();
                }else {
                    echo '<div class="error"><i class="fa fa-times"></i> Incorrect data</div>'.'<br>';
                }
            }
        }
    }

?>