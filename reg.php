<?
$db = new mysqli("localhost", "root", "", "mybd");
$db ->set_charset ('cp1251');
$login=$_POST['login'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if ($password==$password2 ){
if (preg_match("/^[a-zA-Z0-9]+$/",$password) and strlen($password)>5 and preg_match("/^[a-zA-Z0-9]+$/",$login) and strlen($login)>5) {
		$db->query ("INSERT INTO `users` (`login`,`password`) values ('$login','$password')");
		}
	else{
		echo ("Password/Login error<br/>");
		}
	} 
else{
	echo ("Password confirmation error<br/>");
	}
?>
<a href='index.html' >Vhod</a>
