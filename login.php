<!-- <?php
    $base_project_name = '/projeto_historia';
    $root_folder = $_SERVER['DOCUMENT_ROOT'] . $base_project_name;
    $root_folder_link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_project_name;
    include $root_folder . '/php/functions.php';
    include $root_folder . '/php/connection.php';
    session_start();

    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
        header('Location: home.php');
    }
?> -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
        <!-- <?php include $root_folder . '/html/links.php'; ?> -->
        <link rel="stylesheet" href="./css/login.css">
        <title>Formulário</title>
    </head>
    <body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- Formulário de Login -->
                <form action="./php/login.php" method="post" class="sign-in-form">
                    <h2 class="title">Entrar</h2>
                    <a href="./home.php">Início</a>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="input-email" name="email" placeholder="E-mail">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="input-password" name="password" placeholder="Senha">
                    </div>
                    <input type="submit" value="Enviar" class="btn solid">
                </form>
                
                <!-- Formulário de Cadastro -->
                <form action="./php/registro.php" method="post" class="sign-up-form">
                    <h2 class="title">Cadastre-se</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Nome de usuário">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Senha">
                    </div>
                    <input type="submit" value="Cadastre-se" class="btn solid">
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Novo por aqui?</h3>
                    <p>Cadastre-se para acessar nossos conteúdos.</p>
                    <button class="btn transparent" id="sign-up-btn">Cadastre-se</button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Já é membro?</h3>
                    <p>Faça o login para continuar navegando no site.</p>
                    <button class="btn transparent" id="sign-in-btn">Login</button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <script src="./js/login.js"></script>
    </body>
</html>
