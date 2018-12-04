<?php
session_start();
		if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
		if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
		if (empty($login) or empty($password)){
				exit ("Ви ввели не всю інформацію, поверніться назад і заповніть всі поля!");
				}
					$login = stripslashes($login);
					$login = htmlspecialchars($login);
					$password = stripslashes($password);
					$password = htmlspecialchars($password);
					$login = trim($login);
					$password = trim($password);
			include ("bd.php");
				$result = mysqli_query($link, "SELECT * FROM users WHERE login='$login'");
				$myrow = mysqli_fetch_array($result);
			if (empty($myrow['password']))
			{
				exit ("Вибачте, введений Вами логін або пароль невірний. Зареєструйтесь та спробуйте знову <a href='reg.php'> Реєстрація </a>");
			}
			 else {
			          if ($myrow['password']==$password) {
				          $_SESSION['login']=$myrow['login']; 
				          $_SESSION['id']=$myrow['id'];
				          header("Location:home.php");
			          //echo "Ви успішно увійшли на сайт! <a href='home.php'> Головна сторінка </a>";
			          }
				else {
         		exit ("Вибачте, введений Вами логін або пароль невірний!");
	   				 }
			 }
?>
