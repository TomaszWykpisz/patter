<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
  <title>Patter.com</title>
  <meta charset="utf-8">
	<meta name="keywords" content="firma, klient, dom, remont">   
	<meta name="description" content="Zbuduj sobie dom">
	
	<meta name="theme-color" content="#EF9221">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#EF9221">
	<meta name="msapplication-TileColor" content="#EF9221">

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
			<div class="userPanel">
				<?php
                	if(isset($_SESSION['logIn']) && $_SESSION['logIn'] == true){
                    require_once('./login/logged_on.php');
                }else{
                    require_once('./login/not_logged_in.php');
                }
				?> 
                </div>
			</div>
		<section class="topNav">
			<div class="topNavItem">Some Item</div>
			<div class="topNavItem">Some Item2</div>
			<div class="topNavItem">Some Item3</div>
		</section>
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
	  Dodaj ogłoszenie <br>za darmo
	</div>
	</aside>
	<div style="clear: both;"></div>
  <svg height="64" version="1.1" width="64" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"></svg>
<footer>
	Wszystkie prawa zastrzeżone. &copy; Własność spółki Igtora
</footer>

</body>
</html>