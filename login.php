<?php
session_start();
$_SESSION['loginError'] = '';


if($_SESSION['logIn'] && $_SESSION['logIn'] == true) {
    header("Location: strona.php");
    exit();
} else {
    if($_POST['login'] != "" && $_POST['password'] != ""){
        if($_POST['login'] == 'tomek' && $_POST['password'] == 'qwerty123'){
            $_SESSION['logIn'] = true;
            header("Location: strona.php");
        } else {
            $_SESSION['loginError'] = '<span class="error">Błędne dane logowania</span>';
            header("Location: index.php");
        }
    } else {
        $_SESSION['loginError'] = '<span class="error">Wypełnij pola</span>';
        header("Location: index.php");
    }
}

?>