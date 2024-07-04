<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Imobiliária WSBrasil - Entrar</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        #logout {
            background-color: red;
        }

        #msn {
            background-color: red;
            color: white;
            padding: 30px;
            position: absolute;

        }
    </style>
</head>

<body>
    <?php

    // require '../model/connect.php';

    ?>

    <!-- Aqui vouuu  fazer as mudanças -->

    <header class="position-fixed top-0 z-3 w-100">
        <!-- Menu de contato do Header -->
        <section class="py-1 bg-dark">
            <div class="container d-flex align-items-center justify-content-end gap-5 text-light">
                <span>+55 11 9999 88888</span>
                <span>nfo@wsbrasil.com.br</span>
                <span><img style="height: 20px" src="assets/img/facebook.png" alt="Logo facebook"></span>
                <span><img style="height: 20px" src="assets/img/instagram.png" alt="Logo instagram"></span>
                <span><img style="height: 20px" src="assets/img/linkedin.png" alt="Logo linkedin"></span>
            </div>
        </section>
        <!-- Menu de navegação do Header -->
        <section class="py-3 bg-light border-bottom border-primary-subtle">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-1">
                    <img class="h-100 invert-1" src="assets/img/logo.svg" alt="">
                    <p style="line-height: 1" class="alternative-font fs-2 fw-bold m-0">Imobiliária <br /> WSBrasil
                    </p>
                </div>
                <nav class="d-flex align-items-center gap-5">
                    <a class="text-decoration-none text-dark" href="search.php">Locação</a>
                    <a class="text-decoration-none text-dark" href="search.php">>Alugar</a>
                    <a class="text-decoration-none text-dark" href="">Equipe</a>
                    <div class="d-flex align-items-center gap-3">
                        <a class="text-decoration-none text-white btn px-3 py-2 btn-primary rounded-0 rounded-bottom-right rounded-top-left" href="contact.php">
                            Contato
                        </a>

                        <?php

                        require '../model/connect.php';

                        if (isset($_SESSION['user']) && $_SESSION['user'] === "competidor") {
                            echo '<a class="text-decoration-none text-white btn px-4 py-2 btn-primary rounded-0 rounded-bottom-right rounded-top-left" href="../controller/logout.php" id="logout">
    Logout
    </a>';
                            echo '<a class="text-decoration-none text-white btn px-4 py-2 btn-primary rounded-0 rounded-bottom-right rounded-top-left" href="adm.php">
        adm
        </a>';
                        } else {
                            echo '<a class="text-decoration-none text-white btn px-4 py-2 btn-primary rounded-0 rounded-bottom-right rounded-top-left" href="login.php">
    Login
</a>';
                        }
                        ?>

                    </div>
                </nav>
            </div>
        </section>

        <?php
        if (isset($_SESSION['user']) && $_SESSION['user'] === "competidor") {
            echo ' <h1 id="msn"> Seja bem vindo </h1>
';
        }
        ?>
    </header>
    <main class="mt-5 pt-5">
        <div class="container mt-5 pt-5">
            <h1 class="text-primary mb-5">Autenticação</h1>
            <div class="w-100 d-flex align-items-center justify-content-center">
                <!-- Formulário de Login -->
                <form class="border-dark-subtle border w-50 p-5 d-flex flex-column align-items-center justify-content-center gap-5 rounded rounded-3" method="post" action="../controller/controller.php">
                    <!-- Aqui fica a direção -->
                    <span class="fs-1 fw-bold text-info">LOGIN</span>
                    <div class="d-flex flex-column w-100 gap-3">
                        <!-- Inserir Email -->
                        <div class="form-floating w-100">
                            <input type="text" class="form-control" id="user" placeholder="user" name="user">
                            <label>Email</label>
                        </div>
                        <!-- Inserir Senha -->
                        <div class="form-floating w-100">
                            <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
                            <label>Senha</label>
                        </div>
                    </div>

                    <!-- CAPTCHA -->

                    <div class="math">
                        <p id="valor1"></p>
                        <p> + </p>
                        <p id="valor2"></p>
                        <p> =</p>
                        <input id="totalvalores" type="text" name="totalvalores" required="">
                    </div>
                    <p id="aviso"></p>
                    <!-- <button id="enviar" type="submit">Entrar</button> -->



                    <button type="submit"  id="enviar" class="mt-5 btn btn-info text-light px-5 py-3 fs-5">Entrar</button>
                </form>



                <!-- Aqui ta o script  -->

                <script>
                    var valor1 = Math.floor((Math.random() * 10) + 1);
                    var valor2 = Math.floor((Math.random() * 10) + 1);


                    document.getElementById("valor1").innerHTML = valor1;
                    document.getElementById("valor2").innerHTML = valor2;
                    document.getElementById("enviar").setAttribute("disabled", "");
                    document.getElementById('totalvalores').onchange = function() {
                        validar()
                    }

                    function validar() {
                        var totalvalores = document.getElementById("totalvalores").value;
                        if (totalvalores == valor1 + valor2) {
                            document.getElementById('aviso').innerHTML = "reCAPTCHA válido";
                            document.getElementById("enviar").removeAttribute("disabled");
                        } else {

                            document.getElementById('aviso').innerHTML = "reCAPTCHA inválido";
                            document.getElementById("enviar").setAttribute("disabled", "");
                        }

                    }
                </script>


            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-black text-light pb-3 pt-4 mt-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between gap-5">
                <div class="d-flex flex-column align-items-start gap-3 w-50">
                    <div class="d-flex align-items-center gap-1">
                        <img class="h-100" src="assets/img/logo.svg" alt="">
                        <p style="line-height: 1" class="alternative-font fs-2 fw-bold m-0">Imobiliária <br /> WSBrasil
                        </p>
                    </div>
                    <p class="w-50">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s
                    </p>
                    <div class="d-flex gap-5 align-items-center">
                        <span><img style="height: 20px" src="assets/img/facebook.png" alt="Logo facebook"></span>
                        <span><img style="height: 20px" src="assets/img/instagram.png" alt="Logo instagram"></span>
                        <span><img style="height: 20px" src="assets/img/linkedin.png" alt="Logo linkedin"></span>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-between w-75">
                    <div class="d-flex flex-column align-items-start gap-4 w-25">
                        <h5>Nossos Serviços</h5>
                        <a class="text-decoration-none text-light" href="">Transações</a>
                        <a class="text-decoration-none text-light" href="">Compras</a>
                        <a class="text-decoration-none text-light" href="">Locações</a>
                        <a class="text-decoration-none text-light" href="">Vendas</a>
                    </div>
                    <div class="d-flex flex-column align-items-start gap-4 w-25">
                        <h5>Recursos</h5>
                        <a class="text-decoration-none text-light" href="">Perguntas Frequentes</a>
                        <a class="text-decoration-none text-light" href="">Sobre Nós</a>
                        <a class="text-decoration-none text-light" href="">Novidades</a>
                        <a class="text-decoration-none text-light" href="">Políticas de Privacidade</a>
                    </div>
                    <div class="d-flex flex-column align-items-start gap-4 w-25">
                        <h5>Suporte</h5>
                        <a class="text-decoration-none text-light" href="">Email</a>
                        <a class="text-decoration-none text-light" href="">Contatos</a>
                        <a class="text-decoration-none text-light" href="">Central de Suporte</a>
                        <a class="text-decoration-none text-light" href="">Termos de Serviços</a>
                    </div>
                </div>
            </div>
            <hr class="text-light w-100 bg-light">
            <span>Copyright 2023, Imobiliaria WSBrasil. Todos os direitos reservados</span>
        </div>
    </footer>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>