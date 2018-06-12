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
<div class="logIn">
<?php
  if($_SESSION['logIn'] == true){
      echo 'Witaj Tomku';
  }else{
    echo 'Logowanie / Rejestracja';
  }
?>
</div>
<section class="topNav">
  <div class="topNavItem">Some Item</div>
  <div class="topNavItem">Some Item2</div>
  <div class="topNavItem">Some Item3</div>
</section>
    
    <div style="clear: both;"></div>
  </header>
  <main>
    <nav>
      <h2>Title of menu</h2>
      <div class="leftNavItem">MenuItem</div>
      <div class="leftNavItem">MenuItem</div>
      <div class="leftNavItem">MenuItem</div>
      <div class="leftNavItem">MenuItem</div>
      <div class="leftNavItem">MenuItem</div>
      <div class="leftNavItem">MenuItem</div>
      <div class="leftNavItem">MenuItem</div>
      <div class="leftNavItem">MenuItem</div>
      <div class="leftNavItem">MenuItem</div>
      <div class="leftNavItem">MenuItem</div>
    </nav>
    <section>
      
    </section>
  </main>
  <a href="logout.php">Wyloguj</a>
  <svg height="64" version="1.1" width="64" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">

</body>
</html>