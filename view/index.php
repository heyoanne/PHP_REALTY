<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Imobiliária WSBrasil</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>

#logout{
    background-color: red;
}

#msn{
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


    <main>
    


        <!-- Banner -->
        <section class="position-relative h-25 d-flex align-items-center justify-content-center pt-5">
            <img src="assets/img/Condominios.png" class="w-100 mh-100 object-fit-cover" alt="">
            <div class="position-absolute d-flex flex-column gap-4 align-items-center">
                <h1 class="alternative-font bg-blur fw-bold text-white px-5 py-4 bg-dark bg-opacity-50 rounded-bottom-left rounded-top-right" style="font-size: 4rem">Encontre o Lugar ideal</h1>
                <div class="d-flex align-items-center w-75 px-5 fs-3 py-4 overflow-hidden justify-content-between bg-dark bg-opacity-50 rounded-bottom-left rounded-top-right bg-blur">
                    <a class="text-decoration-none text-white px-3 w-50 h-100 d-flex align-items-center justify-content-center" href="">Comprar</a>
                    <div class="vl bg-white"></div>
                    <a class="text-decoration-none text-white px-3 w-50 h-100 d-flex align-items-center justify-content-center" href="">Alugar</a>
                </div>
            </div>
        </section>

    <!-- Destaques -->
        <section class="mt-5">
            <div class="bg-primary fs-1 py-4 pe-5 d-flex align-items-center justify-content-end text-white w-25 m-0 rounded-bottom-right">
                Destaques
            </div>
            <div class="container d-flex align-items-center justify-content-between mt-4">
                <!-- Card : Início -->
                <div class="realty-card d-flex align-items-center justify-content-center position-relative card">
                    <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa1.png" alt="" />
                    <div class="d-flex align-items-end justify-content-end position-absolute flex-column realty-card-data">
                        <span class="bg-primary rounded-top-right rounded-bottom-left text-light px-5 py-2 position-absolute price-tag">R$3.000/Mês</span>
                        <div class="realty-card-data-info p-4 bg-white rounded-top-right rounded-bottom-right rounded-bottom-left rounded-top-left border-dark-subtle border">
                            <span>Casa</span>
                            <h3 class="fw-normal fs-5">Rua París, Jardins SP</h3>
                            <hr class="w-100 bg-dark-subtle">
                            <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/door_icon.svg" alt="">
                                    <span>3 Vagas</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/area_icon.svg" alt="">
                                    <span>60 m<sup>2</sup></span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bathroom_icon.svg" alt="">
                                    <span>3 Bnh.</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bed_icon.svg" alt="">
                                    <span>3 Dorms.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card : Fim -->
                <!-- Card : Início -->
                <div class="realty-card d-flex align-items-center justify-content-center position-relativ card">
                    <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa1.png" alt="" />
                    <div class="d-flex align-items-end justify-content-end position-absolute flex-column realty-card-data">
                        <span class="bg-primary rounded-top-right rounded-bottom-left text-light px-5 py-2 position-absolute price-tag">R$3.000/Mês</span>
                        <div class="realty-card-data-info p-4 bg-white rounded-top-right rounded-bottom-right rounded-bottom-left rounded-top-left border-dark-subtle border">
                            <span>Casa</span>
                            <h3 class="fw-normal fs-5">Rua París, Jardins SP</h3>
                            <hr class="w-100 bg-dark-subtle">
                            <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/door_icon.svg" alt="">
                                    <span>3 Vagas</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/area_icon.svg" alt="">
                                    <span>60 m<sup>2</sup></span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bathroom_icon.svg" alt="">
                                    <span>3 Bnh.</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bed_icon.svg" alt="">
                                    <span>3 Dorms.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card : Fim -->
                <!-- Card : Início -->
                <div class="realty-card d-flex align-items-center justify-content-center position-relative card">
                    <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa1.png" alt="" />
                    <div class="d-flex align-items-end justify-content-end position-absolute flex-column realty-card-data">
                        <span class="bg-primary rounded-top-right rounded-bottom-left text-light px-5 py-2 position-absolute price-tag">R$3.000/Mês</span>
                        <div class="realty-card-data-info p-4 bg-white rounded-top-right rounded-bottom-right rounded-bottom-left rounded-top-left border-dark-subtle border">
                            <span>Casa</span>
                            <h3 class="fw-normal fs-5">Rua París, Jardins SP</h3>
                            <hr class="w-100 bg-dark-subtle">
                            <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/door_icon.svg" alt="">
                                    <span>3 Vagas</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/area_icon.svg" alt="">
                                    <span>60 m<sup>2</sup></span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bathroom_icon.svg" alt="">
                                    <span>3 Bnh.</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bed_icon.svg" alt="">
                                    <span>3 Dorms.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card : Fim -->
            </div>
        </section>
        <!-- Alugar -->
        <section class="mt-5">
            <div class="bg-primary fs-1 py-4 pe-5 d-flex align-items-center justify-content-end text-white w-25 m-0 rounded-bottom-right">
                Alugar
            </div>
            <div class="container d-flex align-items-center justify-content-between mt-4">
                <!-- Card : Início -->
                <div class="realty-card d-flex align-items-center justify-content-center position-relative card">
                    <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa2.png" alt="" />
                    <div class="d-flex align-items-end justify-content-end position-absolute flex-column realty-card-data">
                        <span class="bg-primary rounded-top-right rounded-bottom-left text-light px-5 py-2 position-absolute price-tag">R$3.000/Mês</span>
                        <div class="realty-card-data-info p-4 bg-white rounded-top-right rounded-bottom-right rounded-bottom-left rounded-top-left border-dark-subtle border">
                            <span>Casa</span>
                            <h3 class="fw-normal fs-5">Rua Niterói, Centro - SCS</h3>
                            <hr class="w-100 bg-dark-subtle">
                            <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/door_icon.svg" alt="">
                                    <span>3 Vagas</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/area_icon.svg" alt="">
                                    <span>60 m<sup>2</sup></span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bathroom_icon.svg" alt="">
                                    <span>3 Bnh.</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bed_icon.svg" alt="">
                                    <span>3 Dorms.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card : Fim -->
                <!-- Card : Início -->
                <div class="realty-card d-flex align-items-center justify-content-center position-relative card">
                    <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa2.png" alt="" />
                    <div class="d-flex align-items-end justify-content-end position-absolute flex-column realty-card-data">
                        <span class="bg-primary rounded-top-right rounded-bottom-left text-light px-5 py-2 position-absolute price-tag">R$3.000/Mês</span>
                        <div class="realty-card-data-info p-4 bg-white rounded-top-right rounded-bottom-right rounded-bottom-left rounded-top-left border-dark-subtle border">
                            <span>Casa</span>
                            <h3 class="fw-normal fs-5">Rua Niterói, Centro - SCS</h3>
                            <hr class="w-100 bg-dark-subtle">
                            <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/door_icon.svg" alt="">
                                    <span>3 Vagas</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/area_icon.svg" alt="">
                                    <span>60 m<sup>2</sup></span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bathroom_icon.svg" alt="">
                                    <span>3 Bnh.</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bed_icon.svg" alt="">
                                    <span>3 Dorms.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card : Fim -->
                <!-- Card : Início -->
                <div class="realty-card d-flex align-items-center justify-content-center position-relative card">
                    <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa2.png" alt="" />
                    <div class="d-flex align-items-end justify-content-end position-absolute flex-column realty-card-data">
                        <span class="bg-primary rounded-top-right rounded-bottom-left text-light px-5 py-2 position-absolute price-tag">R$3.000/Mês</span>
                        <div class="realty-card-data-info p-4 bg-white rounded-top-right rounded-bottom-right rounded-bottom-left rounded-top-left border-dark-subtle border">
                            <span>Casa</span>
                            <h3 class="fw-normal fs-5">Rua Niterói, Centro - SCS</h3>
                            <hr class="w-100 bg-dark-subtle">
                            <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/door_icon.svg" alt="">
                                    <span>3 Vagas</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/area_icon.svg" alt="">
                                    <span>60 m<sup>2</sup></span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bathroom_icon.svg" alt="">
                                    <span>3 Bnh.</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bed_icon.svg" alt="">
                                    <span>3 Dorms.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card : Fim -->
            </div>
        </section>
        <!-- Comprar -->
        <section class="mt-5">
            <div class="bg-primary fs-1 py-4 pe-5 d-flex align-items-center justify-content-end text-white w-25 m-0 rounded-bottom-right">
                Comprar
            </div>
            <div class="container d-flex align-items-center justify-content-between mt-4">
                <!-- Card : Início -->
                <div class="realty-card d-flex align-items-center justify-content-center position-relative card">
                    <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa3.png" alt="" />
                    <div class="d-flex align-items-end justify-content-end position-absolute flex-column realty-card-data">
                        <span class="bg-primary rounded-top-right rounded-bottom-left text-light px-5 py-2 position-absolute price-tag">R$3.000/Mês</span>
                        <div class="realty-card-data-info p-4 bg-white rounded-top-right rounded-bottom-right rounded-bottom-left rounded-top-left border-dark-subtle border">
                            <span>Casa</span>
                            <h3 class="fw-normal fs-5">Rua São Carlos, Morumbi - SP</h3>
                            <hr class="w-100 bg-dark-subtle">
                            <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/door_icon.svg" alt="">
                                    <span>3 Vagas</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/area_icon.svg" alt="">
                                    <span>60 m<sup>2</sup></span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bathroom_icon.svg" alt="">
                                    <span>3 Bnh.</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bed_icon.svg" alt="">
                                    <span>3 Dorms.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card : Fim -->
                <!-- Card : Início -->
                <div class="realty-card d-flex align-items-center justify-content-center position-relative card">
                    <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa3.png" alt="" />
                    <div class="d-flex align-items-end justify-content-end position-absolute flex-column realty-card-data">
                        <span class="bg-primary rounded-top-right rounded-bottom-left text-light px-5 py-2 position-absolute price-tag">R$3.000/Mês</span>
                        <div class="realty-card-data-info p-4 bg-white rounded-top-right rounded-bottom-right rounded-bottom-left rounded-top-left border-dark-subtle border">
                            <span>Casa</span>
                            <h3 class="fw-normal fs-5">Rua São Carlos, Morumbi - SP</h3>
                            <hr class="w-100 bg-dark-subtle">
                            <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/door_icon.svg" alt="">
                                    <span>3 Vagas</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/area_icon.svg" alt="">
                                    <span>60 m<sup>2</sup></span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bathroom_icon.svg" alt="">
                                    <span>3 Bnh.</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bed_icon.svg" alt="">
                                    <span>3 Dorms.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card : Fim -->
                <!-- Card : Início -->
                <div class="realty-card d-flex align-items-center justify-content-center position-relative card">
                    <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa3.png" alt="" />
                    <div class="d-flex align-items-end justify-content-end position-absolute flex-column realty-card-data">
                        <span class="bg-primary rounded-top-right rounded-bottom-left text-light px-5 py-2 position-absolute price-tag">R$3.000/Mês</span>
                        <div class="realty-card-data-info p-4 bg-white rounded-top-right rounded-bottom-right rounded-bottom-left rounded-top-left border-dark-subtle border">
                            <span>Casa</span>
                            <h3 class="fw-normal fs-5">Rua São Carlos, Morumbi - SP</h3>
                            <hr class="w-100 bg-dark-subtle">
                            <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/door_icon.svg" alt="">
                                    <span>3 Vagas</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/area_icon.svg" alt="">
                                    <span>60 m<sup>2</sup></span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bathroom_icon.svg" alt="">
                                    <span>3 Bnh.</span>
                                </div>
                                <div class="d-flex align-items-center w-50 mb-2 gap-1">
                                    <img src="assets/img/bed_icon.svg" alt="">
                                    <span>3 Dorms.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card : Fim -->
            </div>
        </section>
        <!-- Contato -->
        <section class="mt-5 pt-5">
            <div class="container mt-5 pt-5">
                <div class="contato-container d-flex align-items-end bg-primary position-relative rounded rounded-5 justify-content-between">
                    <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        <div class="d-flex text-white align-items-center flex-column  justify-content-center gap-5">
                            <h2 style="font-size: 4rem">Entre em contato</h2>
                            <h3>Sabemos o que precisa</h3>
                            <a class="py-3 px-2 text-decoration-none text-dark btn btn-light" href="">Envie uma mensagem</a>
                        </div>
                    </div>
                    <img src="assets/img/contato_1.png" alt="">
                    <img src="assets/img/contato_2.png" alt="">
                </div>
            </div>
        </section>
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