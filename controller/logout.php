<?php

require '../model/connect.php';


unset($SESSION['user']);
unset($SESSION['password']);

session_destroy();

echo '<script type="text/javascript">';
echo 'confirm("Obrigada por acessar nosso sistema");';
echo 'window.location.href = "../view/login.php";';
echo '</script>';



?>