<?
session_start();
if (!isset($_SESSION['username'])) {
	exit ("Need authorization. <a href='index.html'>Vhod</a>");
}

$db = new mysqli("localhost", "root", "", "mybd");  
$login = $_SESSION['username'];
$db->query ("DELETE FROM `users` where `login` = '$login'");
echo "User delete";

?>
<br>
<a href='index.html'>Vhod</a><br>
<a href='reg_form.html'>Registration</a>
</body>
</html>