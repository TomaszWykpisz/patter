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

	<link href="https://fonts.googleapis.com/css?family=Cabin:400,600i&amp;subset=latin-ext" rel="stylesheet">

	<link href="style.css" rel="stylesheet" type="text/css">

	<script src="lib/jquery/jquery-3.3.1.min.js"></script>

</head>
<body>
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
	<main>
	  <header>
		<img class="logo" src="img/logo.svg" alt="Pattern's logo">
		<section class="topNav">
			<div class="topNavItem">Some Item</div>
			<div class="topNavItem">Some Item2</div>
			<div class="topNavItem">Some Item3</div>
		</section>
			<div class="logIn">
				<?php
				  if($_SESSION['logIn'] == true){
				      echo 'Witaj Tomku';
				  }else{
				   echo 'Logowanie / Rejestracja';
				  }
				?>
			</div>
	  </header>
	  <section class="search">
	  	<div>
	  		<p>Wybierz typ ogłoszenia</p>
		  	<select>
			  <option value="do">Wykonam</option>
			  <option value="commission">Zlecę</option>
			</select>
	  	</div>
	  	<div>
	  		<p>Wybierz swój powiat</p>
			<select>
			  <option value="powiat">Koniński</option>
			  <option value="powiat">Słupski</option>
			  <option value="powiat">Kolski</option>
			  <option value="powiat">Kolski</option>
			  <option value="powiat">Słupski</option>
			  <option value="powiat">Kolski</option>
			  <option value="powiat">Kolski</option>
			  <option value="powiat">Słupski</option>
			  <option value="powiat">Kolski</option>
			  <option value="powiat">Kolski</option>
			</select>
	  	</div>
	</section>
	</main>
	<aside>
	   <div class="addAdvert">
	  <div><img src="img/plus_white.svg"></div> 
	  <span>Dodaj ogłoszenie <br>za darmo</span>
	</div>
	</aside>
	<div style="clear: both;"></div>
  <a href="logout.php">Wyloguj</a>
  <svg height="64" version="1.1" width="64" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"></svg>
<footer>
	Wszystkie prawa zastrzeżone. &copy; Własność spółki Igtora
</footer>

</body>
</html>