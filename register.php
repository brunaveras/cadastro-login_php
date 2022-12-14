<?php

    if(isset($_POST['submit'])){

        include_once('./config.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password =$_POST['password'];

        $result = mysqli_query($conn, "INSERT INTO tb_users (name,email,pass) VALUES('$name','$email', '$password')");

        header('Location: login.php');

        // if($result){
        //     echo "Dados inseridos com sucesso!";
        // } else {
        //     echo "Erro ao inserir dados!";
        // }

        // print_r($_POST['email']);
        // print_r($_POST['password']);

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscreva-se</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

    <div>
        <a class="back" href="index.php">
            <i class="ri-arrow-left-line"></i>Voltar ao início
        </a>
    </div>
    
    <div class="login">
        <div class="login__content">

            <div class="login__form">
                <h1 class="login__title">
                    Inscreva-se
                </h1>

                <form action="register.php" method="POST" class="login__form-1" id="login-form">

                    <div class="login__form-div">
                        <label for="name" class="login__form-tag">Nome</label>
                        <input type="name" name="name" placeholder="Digite seu nome" class="login__form-input" required>
                    </div>

                    <div class="login__form-div">
                        <label for="email" class="login__form-tag">E-mail</label>
                        <input type="email" name="email" placeholder="Digite seu e-mail" class="login__form-input" required>
                    </div>
        
                    <div class="login__form-div">
                        <label for="password" class="login__form-tag">Senha</label>
                        <input type="password" name="password" placeholder="Senha" class="login__form-input" required>
                    </div>
        
                    <button name="submit" value="1" type="submit" class="login__button">
                        Enviar <i class="ri-arrow-right-up-line"></i>
                    </button>
          
                </form>

                <div class="login__register">
                    <a href="login.php" class="login__register-link">Já possui uma conta? Faça login.</a>
                </div>

            </div>
        </div>
    </div>

<script src="./js/script.js"></script>
</body>
</html>