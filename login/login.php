<?php
session_start();

require_once('../db_config.php');

$_SESSION['loginError'] = '';

class ServerException extends Exception{
	public function showErrorMessage()
	{
		$message = '<span style="color:red">Error: (' . mysqli_connect_errno() . ') '. mysqli_connect_error().'</span>';
		return $message;
	}
}


	$email = $_POST['email'];
	$password = $_POST['password'];
	try{
		$conn = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_password);
		$data = $conn->query('SELECT * FROM users WHERE email = "'.$email.'" AND password = "'.$password.'"');

		if ($data->rowCount() > 0) {
			$result = $data->fetch(PDO::FETCH_ASSOC);

			$_SESSION['logIn'] = true;
			$_SESSION['name'] = $result['name'];
		}else{
			throw new PDOException;
			$_SESSION['loginError'] = true;
		}
			header('Location: ../index.php');
			$data->closeCursor();


	}
	catch(PDOException $e){
		$_SESSION['loginError'] = true;
		header('Location: ../index.php');
		//echo 'Error number: '.$e->getCode().'. '.$e->getMessage();
	}


// if($_SESSION['logIn'] && $_SESSION['logIn'] == true) {
//     header("Location: index.php");
//     exit();
// } else {
//     if($_POST['login'] != "" && $_POST['password'] != ""){
//         if($_POST['login'] == 'tomek' && $_POST['password'] == 'qwerty123'){
//             $_SESSION['logIn'] = true;
//             header("Location: strona.php");
//         } else {
//             $_SESSION['loginError'] = '<span class="error">Błędne dane logowania</span>';
//             header("Location: index.php");
//         }
//     } else {
//         $_SESSION['loginError'] = '<span class="error">Wypełnij pola</span>';
//         header("Location: index.php");
//     }
// }

?>