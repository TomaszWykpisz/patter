<span>Logowanie / Rejestracja <img src="./img/dropdown.svg"></span>
<div class="logIn">
    <form action="./login/login.php" method="post">
        <p>e-mail:</p>
        <input type="text" name="email">
        <p>hasło:</p>
        <input type="password" name="password"><br>
        <input type="submit" name="">
        <?php
        if (isset($_SESSION['loginError']) && $_SESSION['loginError'] == true) {
        	echo '<span class="loginError">Błędne dane logowania</span>';
        }
        ?>
    </form>