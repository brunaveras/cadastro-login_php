<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../work_OkVirtual/css/style.css">
</head>
<body>

    <div>
        <a class="back" href="index.php">
            <i class="ri-arrow-left-line"></i>Voltar ao início
        </a>
    </div>

    <section class="section">

        <div class="login">
            <div class="login__content">
                <div class="login__form">

                    <h1 class="login__title">
                        Login
                    </h1>

                    <form action="value-login.php" method="POST" class="login__form-1">

                        <div class="login__form-div">
                            <label for="email" class="login__form-tag">E-mail</label>
                            <input type="email" name="email" placeholder="Digite seu e-mail" class="login__form-input" required>
                        </div>
            
                        <div class="login__form-div">
                            <label for="password" class="login__form-tag">Senha</label>
                            <input type="password" name="password" placeholder="Senha" class="login__form-input" required>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6Lc9dXwjAAAAACZlJZ6oep2L707l0IJjqp_2gx_v"></div>
            
                        <input class="login__button" type="submit" name="submit" value="Acessar">
            
                    </form>

                    <div class="login__register">
                        <a href="register.php" class="login__register-link">Ainda não tem uma conta? Inscreva-se</a>
                    </div>

                </div>
            </div>
        </div>
    </section>    
</body>
</html>