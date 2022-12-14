<?php
    session_start();
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){

        //acessa
        include_once('./config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        // print_r('Email: ' . $email);
        // print_r('Senha: ' . $password);

        $sql = "SELECT * FROM tb_users WHERE email = '$email' AND pass = '$password'";

        $result = $conn->query($sql);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: login.php');
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: dashboard.php');
        }
    }
    else{
        //não acessa
        header('Location: index.php');
    }
?>