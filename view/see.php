
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Imobiliária WSBrasil - Enviar Mensagem</title>
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

        form {
            display: flex;
            flex-flow: column;

            width: 300px;
            gap: 10px;

            margin: 40px;
        }
    </style>
</head>

<body>

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

                        // require '../model/connect.php';

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

    </header>

    <br>
    <br>
    <br>
    <br>
    <br>


    <main>

        <form class="input1"   enctype="multipart/form-data" action="" method="post" autocomplete="off">
            <label for="">Digite o id do imovel desejado</label>
            <input type="text" name="id">

            <button type="submit" name="submit">Ver imovel</button>
        </form>

        <a class="text-decoration-none text-white btn px-4 py-2 btn-primary rounded-0 rounded-bottom-right rounded-top-left" href="adm.php">
    Voltar
</a>

    </main>

</body>

</html>


<?php

require '../model/connect.php';


// Pegando o valor do input e colocando dentro do bd
if (isset($_POST["submit"])) {

    // Chamando as váriaveis que estão dentro do form com metodo POST
    $code = $_POST["id"];


    // Query é a váriavel que vai fazeruma requisição para o banco de dados.
    $sql = "select * from cadastro where id='$code'";

    // Aqui, a tag mysqli_query faz a ligação que pergunta, ou seja, ela usa a conesão com o banco, mais a requisição por meio do query
    $result = $connect ->query($sql);

    if ($result){
        if ($result->num_rows > 0){

            $row = $result-> fetch_assoc();
            echo 'Imagem do imovel:';
            echo "Nome do imovel:". $row['nome']."<br>";
            echo "Id do imovel:". $row['id']."<br>";
            echo "Valor do imovel". $row['valor']."<br>";
            echo "Tipo do imovel:". $row['tipo']."<br>";

            echo '<img src="';
            echo '$row[';
            echo '"imagem"';

            $imgcode = $row['imagem'];

            echo '<img src=" $imgcode"'."br";
        }
    }

  
} else {
    echo "<script> alert('Tente novamente')</script>";
}

?>