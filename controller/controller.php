<?php
require '../model/connect.php';

$_SESSION['user'] = "";


// Recebendo coisa do post

if (isset($_POST)){

    $_SESSION['user'] = $_POST['user'];
    $_SESSION['password'] = $_POST['senha'];
    $_SESSION['capcthainput'] = $_POST['capcthainput'];

    echo $captcha;

    // echo $SESSION['user'].'<br>'.$SESSION['password'];

    if ( $_SESSION['user'] === "competidor" && $_SESSION['password'] === "Modalidade#17" ){

        header('Location: ../view/index.php');
    } else{
        unset($SESSION['user']);
        unset($SESSION['password']);

        echo '<script type="text/javascript">';
        echo 'confirm("Login ou senha invalida");';
        echo 'window.location.href = "../view/login.php";';
        echo '</script>';



    }

}


?>