
<?php
$host = "192.168.0.105";
$bduser = "competidor";
$password = "Senai@134";
$bd = "bd";

$connect = mysqli_connect($host, $bduser, $password, $bd);

$captcha = rand(10, 100);

// setando tempo para session

//Defina o tempo limite da sessão por 2 segundos
$timeout = 1200;

// Defina o máximo de tempo da sessão
ini_set( "session.gc_maxlifetime", $timeout );

// Defina a vida útil do cookie da sessão
ini_set( "session.cookie_lifetime", $timeout );

// Inicie uma nova sessão
session_start();

// Defina o nome da sessão padrão
$s_name = session_name();

// Verifique se a sessão existe ou não
if(isset( $_COOKIE[ $s_name ] )) {
    setcookie( $s_name, $_COOKIE[ $s_name ], time() + $timeout, '/' );

    // echo "Session foi criada para $s_name.<br/>";
} else {
    unset($_SESSION['user']);
unset($_SESSION['senha']);
echo '<script type="text/javascript">';
echo 'confirm("Sua sessão expirou");';
echo 'window.location.href = "../view/index.php";';
echo '</script>';

}

// if ($connect -> error){
//     echo "Não worko";
// } else {
//     echo ' workando';

//     session_start();
// }



?>