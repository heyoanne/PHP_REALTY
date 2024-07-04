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
    <div class="container mt-5 pt-5">
        <h1 class="text-primary">Pesquisar</h1>
        <div class="d-flex align-items-start gap-3 mt-4">
            <!-- Formulário Filtros -->
            <form class="d-flex flex-column align-items-start gap-4 w-25 border-end border-dark-subtle pe-3">
                <div class="input-group w-100">
                    <div class="form-floating w-30">
                        <!-- Selecionar Estado -->
                        <select class="form-select form-control" id="estado">
                            <option selected disabled></option>
                            <option value="1">SP</option>
                            <option value="2">AL</option>
                            <option value="3">DF</option>
                            <option value="3">BA</option>
                        </select>
                        <label for="estado">Estado</label>
                    </div>
                    <!-- Inserir Endereço -->
                    <div class="form-floating w-70">
                        <input type="text" class="form-control" id="search-query" placeholder="Endereço"
                               name="search-query">
                        <label>Endereço</label>
                    </div>
                </div>
                <!-- Checar tipos -->
                <div class="w-100 d-flex flex-column align-items-start gap-2">
                    <button type="button"
                            class="collapse-btn border-0 w-100 fs-5 bg-transparent d-flex justify-content-between align-items-center"
                            data-bs-toggle="collapse" href="#collapse-tipo" role="button">
                        Tipo
                        <img src="assets/img/seta_cima.png" alt=""/>
                    </button>
                    <!-- Tipos -->
                    <div class="collapse show collapse-data" id="collapse-tipo">
                        <div class="d-flex flex-column gap-1 ps-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="switch-tipo-alugar" name="switch-tipo-comprar" checked>
                                <label class="form-check-label" for="switch-tipo-alugar">
                                    Alugar
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="switch-tipo-comprar" name="switch-tipo-comprar">
                                <label class="form-check-label" for="switch-tipo-comprar">
                                    Comprar
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Checar Categorias -->
                <div class="w-100 d-flex flex-column align-items-start gap-2">
                    <button type="button"
                            class="collapse-btn border-0 w-100 fs-5 bg-transparent d-flex justify-content-between align-items-center"
                            data-bs-toggle="collapse" href="#collapse-categoria" role="button">
                        Categoria
                        <img src="assets/img/seta_cima.png" alt=""/>
                    </button>
                    <!-- Categorias -->
                    <div class="collapse show collapse-data" id="collapse-categoria">
                        <div class="d-flex flex-column gap-1 ps-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="switch-categoria-apat" name="switch-categoria-apat" checked>
                                <label class="form-check-label" for="switch-categoria-apat">
                                    Apartamento
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="switch-categoria-casa" name="switch-categoria-casa">
                                <label class="form-check-label" for="switch-categoria-casa">
                                    Casa
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Checar Cidades -->
                <div class="w-100 d-flex flex-column align-items-start gap-2">
                    <button type="button"
                            class="collapse-btn border-0 w-100 fs-5 bg-transparent d-flex justify-content-between align-items-center"
                            data-bs-toggle="collapse" href="#collapse-cidade" role="button">
                        Cidade
                        <img src="assets/img/seta_cima.png" alt=""/>
                    </button>
                    <!-- Cidades -->
                    <div class="collapse show collapse-data" id="collapse-cidade">
                        <div class="d-flex flex-column gap-1 ps-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="switch-cidade-cidade1" name="switch-cidade-cidade1" checked>
                                <label class="form-check-label" for="switch-cidade-cidade1">
                                    Cidade1
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="switch-cidade-cidade2" name="switch-cidade-cidade2">
                                <label class="form-check-label" for="switch-cidade-cidade2">
                                    Cidade2
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="switch-cidade-cidade3" name="switch-cidade-cidade3">
                                <label class="form-check-label" for="switch-cidade-cidade3">
                                    Cidade3
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Checar Bairros -->
                <div class="w-100 d-flex flex-column align-items-start gap-2">
                    <button type="button"
                            class="collapse-btn border-0 w-100 fs-5 bg-transparent d-flex justify-content-between align-items-center"
                            data-bs-toggle="collapse" href="#collapse-bairro" role="button">
                        Bairro
                        <img src="assets/img/seta_cima.png" alt=""/>
                    </button>
                    <!-- Bairros -->
                    <div class="collapse show collapse-data" id="collapse-bairro">
                        <div class="d-flex flex-column gap-1 ps-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="switch-bairro-bairro1" name="switch-bairro-bairro1" checked>
                                <label class="form-check-label" for="switch-bairro-bairro1">
                                    Bairro1
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="switch-bairro-bairro2" name="switch-bairro-bairro2">
                                <label class="form-check-label" for="switch-bairro-bairro2">
                                    Bairro2
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="switch-bairro-bairro3" name="switch-bairro-bairro3">
                                <label class="form-check-label" for="switch-bairro-bairro3">
                                    Bairro3
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group w-100">
                    <!-- Inserir número de banheiros -->
                    <div class="form-floating w-50">
                        <input type="number" class="form-control" id="banheiros" placeholder="Banheiros"
                               name="banheiros">
                        <label>Banheiros</label>
                    </div>
                    <!-- Inserir número de dormitórios -->
                    <div class="form-floating w-50">
                        <input type="number" class="form-control" id="dormitorios" placeholder="Dormitórios"
                               name="dormitorios">
                        <label>Dormitórios</label>
                    </div>
                </div>
                <div class="input-group w-100">
                    <!-- Inserir número de suítes -->
                    <div class="form-floating w-50">
                        <input type="number" class="form-control" id="suites" placeholder="Suítes"
                               name="suites">
                        <label>Suítes</label>
                    </div>
                    <!-- Inserir número de vagas -->
                    <div class="form-floating w-50">
                        <input type="number" class="form-control" id="vagas" placeholder="Vagas"
                               name="vagas">
                        <label>Vagas</label>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-start w-100">
                    <h5 class="fw-normal">M<sup>2</sup></h5>
                    <div class="input-group w-100">
                        <!-- Inserir número de área mínima -->
                        <div class="form-floating w-50">
                            <input type="number" class="form-control" id="min-area" placeholder="Min"
                                   name="min-area">
                            <label>Min</label>
                        </div>
                        <!-- Inserir número de área máxima -->
                        <div class="form-floating w-50">
                            <input type="number" class="form-control" id="max-area" placeholder="Max"
                                   name="max-area">
                            <label>Max</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column align-items-start w-100">
                    <h5 class="fw-normal">Preço</h5>
                    <div class="input-group w-100">
                        <!-- Inserir número de área mínima -->
                        <div class="form-floating w-50">
                            <input type="number" class="form-control" id="min-preco" placeholder="Min"
                                   name="min-preco">
                            <label>Min</label>
                        </div>
                        <!-- Inserir número de área máxima -->
                        <div class="form-floating w-50">
                            <input type="number" class="form-control" id="max-preco" placeholder="Max"
                                   name="max-preco">
                            <label>Max</label>
                        </div>
                    </div>
                </div>

                <button type="submit"
                        class="text-decoration-none mt-5 w-100 text-white btn px-3 py-2 btn-primary rounded-0 rounded-bottom-right rounded-top-left">
                    Aplicar Filtros
                </button>
            </form>
            <!-- Listagem Cards -->
            <section class="d-flex flex-column align-items-start gap-4 w-75">
                <div class="w-100 align-items-center justify-content-between d-flex">
                    <!-- Exibir qt. de resultados -->
                    <span class="text-muted">6 resultados</span>
                    <div class="d-flex align-items-center w-50 gap-3">
                        <!-- Ordenar por -->
                        <div class="form-floating w-50">
                            <!-- Selecionar Propriedade para ordenar -->
                            <select class="form-select form-control" id="ordenar-prop">
                                <option selected disabled></option>
                                <option value="date">Data</option>
                                <option value="price">Preço</option>
                                <option value="area">Área</option>
                            </select>
                            <label for="ordenar-prop">Ordernar por</label>
                        </div>

                        <!-- Ordenar direção -->
                        <div class="form-floating w-50">
                            <!-- Selecionar direção para ordenar -->
                            <select class="form-select form-control" id="ordenar-dir">
                                <option value="asc" selected>ASC</option>
                                <option value="desc">DESC</option>
                            </select>
                            <label for="ordenar-dir">Direção ordenação</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap w-100 gap-5 justify-content-evenly align-items-center">
                    <!-- Card : Início -->
                     <a href="view.php">
                    <div class="realty-card d-flex align-items-center justify-content-center position-relative card">
                        <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa3.png" alt=""/>
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
                    </a>
                    <!-- Card : Fim -->
                    <!-- Card : Início -->
                    <div class="realty-card d-flex align-items-center justify-content-center position-relative card">
                        <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa3.png" alt=""/>
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
                        <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa3.png" alt=""/>
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
                        <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa3.png" alt=""/>
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
                        <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa3.png" alt=""/>
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
                        <img class="object-fit-cover border-primary-subtle border" src="assets/img/casa3.png" alt=""/>
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
        </div>
    </div>
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