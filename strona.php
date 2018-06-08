<?php
session_start();

if(!isset($_SESSION['logIn']) || $_SESSION['logIn'] == false){
    header("Location: index.php");
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
  <header>
    <img id="logo" src="img/logo.svg" alt="Pattern's logo">
    <div class="addAdvert">
      <div><img src="img/plus_white.svg"></div> 
      <span>Dodaj ogłoszenie <br>za darmo</span>
    </div>
    <div style="clear: both;"></div>
  </header>
  <a href="logout.php">Wyloguj</a>

</body>
</html>