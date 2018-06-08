<?php
session_start();
if($_SESSION['logIn'] && $_SESSION['logIn'] == true){
    header("Location: strona.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Patter.com</title>
  <meta charset="utf-8">
    <meta name="keywords" content="firma, klient, dom, remont">   
    <meta name="description" content="Zbuduj sobie dom">
    <meta name="theme-color" content="#EF9221">

    <link href="style.css" rel="stylesheet" type="text/css">

    <script src="lib/jquery/jquery-3.3.1.min.js"></script>

</head>
  <body>
	<h1>Logowanie</h1>
    <?= ( $_SESSION['loginError'] != '' ) ? $_SESSION['loginError']:'' ?>
    <form action="login.php" method="POST">
        <table>
            <tr>
                <td><label for="login">Login: </label></td>
                <td><input id="login" name="login" type="text"></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label></td>
                <td><input id="password" name="password" type="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit"></td>
            </tr>
        </table>
    </form>
  </body>
</html>