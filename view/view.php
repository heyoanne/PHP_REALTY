<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Imobiliária WSBrasil - Pesquisar</title>
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

    
<main class="mt-5 pt-5">
    <!-- Seção de listagem das informações do imóvel-->
    <section class="container mt-5 pt-5 d-flex align-items-start gap-5">
        <div class="w-50 d-flex flex-column align-items-start gap-4">
            <div class="w-100 position-relative" style="height: 50vh">
                <!-- Preço -->
                <span class="bg-primary rounded-bottom-left fs-2 text-white top-0 end-0 position-absolute z-2 px-4 py-2">
                    R$3.000/Mês
                </span>
                <!-- Carrossel da galeria de imagens-->
                <div id="carousel-gallery" class="carousel slide w-100 h-100 bg-dark-subtle">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="assets/img/casa1.png" class="d-block w-100 h-100 object-fit-contain" alt="...">
                        </div>
                        <div class="carousel-item h-100">
                            <img src="assets/img/casa2.png" class="d-block w-100 h-100 object-fit-contain" alt="...">
                        </div>
                        <div class="carousel-item h-100">
                            <img src="assets/img/casa3.png" class="d-block w-100 h-100 object-fit-contain" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-gallery"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-primary rounded-circle" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-gallery"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-primary rounded-circle" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Observaçoes -->
            <div class="d-flex flex-column align-items-start w-100">
                <h3 class="fw-normal text-primary">Observaçoes</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus libero gravida, interdum nisi
                    ut, viverra arcu. Etiam vulputate facilisis felis, ac auctor elit vestibulum at. Ut suscipit urna
                    nec odio elementum, eu sodales dolor tincidunt. Etiam a finibus arcu. Phasellus sollicitudin quis
                    massa in maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                    curae; Mauris gravida fringilla bibendum.
                </p>
            </div>
        </div>
        <div class="w-50 d-flex flex-column align-items-start gap-4">
            <div class="d-flex flex-column align-items-start w-100">
                <!-- Endereço -->
                <h1 class="text-primary">Rua São Carlos</h1>
                <!-- Cidade - Estado (sigla) & bairro -->
                <h2 class="fw-normal">São Paulo - SP <span class="text-muted ps-3">Morumbi</span></h2>
            </div>
            <div class="w-100 d-flex gap-3 flex-column align-items-start view-realty-data">
                <div class="w-100 d-flex align-items-center justify-content-center gap-2">
                    <!-- Vagas -->
                    <div class="w-50 d-flex align-items-center gap-1">
                        <img src="assets/img/door_icon.svg" alt="">
                        <span class="fs-5">3 Vagas</span>
                    </div>
                    <!-- Área -->
                    <div class="w-50 d-flex align-items-center gap-1">
                        <img src="assets/img/area_icon.svg" alt="">
                        <span class="fs-5">62 m<sup>2</sup></span>
                    </div>
                </div>
                <div class="w-100 d-flex align-items-center justify-content-center gap-2">
                    <!-- Banheiros -->
                    <div class="w-50 d-flex align-items-center gap-1">
                        <img src="assets/img/bathroom_icon.svg" alt="">
                        <span class="fs-5">3 Banheiros</span>
                    </div>
                    <!-- Dormitórios -->
                    <div class="w-50 d-flex align-items-center gap-1">
                        <img src="assets/img/bed_icon.svg" alt="">
                        <span class="fs-5">3 Quartos</span>
                    </div>
                </div>
                <!-- Suítes -->
                <span class="fs-5 text-info">*2 Suítes</span>
            </div>
            <div class="d-flex gap-3 flex-column align-items-start">
                <!-- Comodidades -->
                <h3 class="fw-normal text-primary">Comodidades</h3>
                <div class="d-flex flex-column align-items-start gap-2 ps-3 fs-5">
                    <span>Piscina? <strong class="text-primary fw-normal">Sim</strong></span>
                    <span>Quintal? <strong class="text-primary fw-normal">Sim</strong></span>
                    <span>Mobiliado? <strong class="text-muted fw-normal">Não</strong></span>
                </div>
            </div>
        </div>
    </section>
    <!-- Seção Contato -->
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
                    <p style="line-height: 1" class="alternative-font fs-2 fw-bold m-0">Imobiliária <br/> WSBrasil
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