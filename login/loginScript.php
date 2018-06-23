<?php
session_start();

if(isset($_SESSION['logIn']) && $_SESSION['logIn'] == true) {
	header("Location: ../index.php");
	exit();
}

require_once('../db_config.php');

$_SESSION['loginError'] = '';


$email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
$password = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");;

if($email != "" && $password != ""){
	try{
		$conn = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_password, [
       PDO::ATTR_EMULATE_PREPARES => false, 
       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
     ]);
		$data = $conn->query(
			sprintf("SELECT * FROM users WHERE email = '%s' AND password = '%s'", $email, $password)
		);

		if ($data->rowCount() > 0) {
			$result = $data->fetch(PDO::FETCH_ASSOC);

			$_SESSION['name'] = $result['name'];
			$_SESSION['logIn'] = true;
			unset($_SESSION['loginError']);
			header('Location: ../index.php');
		}else{
			$_SESSION['loginError'] = "Błąd logowania. Zły login lub hasło";
			header('Location: ./login.php');
			throw new PDOException;
		}
		$data->closeCursor();
	}
	catch(PDOException $e){
		$_SESSION['loginError'] = "Błąd logowania. Zły login lub hasło!";
		//echo 'Error number: '.$e->getCode().'. '.$e->getMessage();
		header('Location: ./login.php');
	}
}else {
	$_SESSION['loginError'] = "Podaj login i hasło";
	header('Location: ./login.php');
}

?>
