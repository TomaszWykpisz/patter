<?php
	session_start();

	if(isset($_SESSION['logIn']) && $_SESSION['logIn'] == true) {
	header("Location: ../index.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Patter.com - Logowanie</title>
  <meta charset="utf-8">
	<meta name="keywords" content="firma, klient, dom, remont">   
	<meta name="description" content="Zbuduj sobie dom">
	
	<meta name="theme-color" content="#EF9221">
	<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
	<link rel="manifest" href="../favicon/site.webmanifest">
	<link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#EF9221">
	<meta name="msapplication-TileColor" content="#EF9221">

	<link href="https://fonts.googleapis.com/css?family=Cabin:400,600i&amp;subset=latin-ext" rel="stylesheet">

	<link href="../css/login.css" rel="stylesheet" type="text/css">

    <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
	<script src="../js/outlook.js"></script>

</head>
<body>
	<style type="text/css">
		main{
			width: 100%;
		}
	</style>
  
	  <header>
		<img class="logo" src="../img/logo.svg" alt="Pattern's logo">

	  </header>
	<main>
	<div class="logIn">
	    <form action="./loginScript.php" method="post">
	        <p>Podaj swój e-mail:</p>
	        <input type="text" name="email">
	        <p>Wprowadź hasło:</p>
	        <input type="password" name="password"><br>
	        <input type="submit" name="">
	    </form>
	    <p class="loginError">
	    	<?php
	        if ( isset($_SESSION['loginError']) && $_SESSION['loginError'] != '' ) {
	        	echo $_SESSION['loginError'];
	        }
	        ?>
	    </p>
	</main>


<footer>
	Wszystkie prawa zastrzeżone. &copy; Własność spółki Igtora
</footer>

</body>
</html>