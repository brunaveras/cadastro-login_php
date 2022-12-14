<?php
    session_start();
    
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)){

        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../work_OkVirtual/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>

    <div>
        <a class="back" href="index.php">
            <i class="ri-arrow-left-line"></i>Voltar ao início
        </a>
    </div>
    <section class="section">
        <div class="dashboard">

            <h1 class="dash__title">
                Logado com sucesso!
            </h1>

            <img src="./img/hero.png" alt="hero-img">

            <h1 class="dash__title">
                Vai um cafézinho?
            </h1>

        </div>
    </section>
</body>
</html>