<?
session_start();
if (!isset($_SESSION['username'])) {
	exit ("Need authorization. <a href='index.html'>Vhod</a>");
}
$db = new mysqli("localhost", "root", "", "mybd");
$login=$_SESSION['username'];
$s="SELECT `password` from `users` WHERE `login`= '$login'";
$result=$db->query($s);
$record = $result->fetch_assoc();
$old=$record['password'];
$new=$_POST['newPassword'];
$new2=$_POST['newPassword2'];
$db = new mysqli("localhost", "root", "", "mybd"); 

if ($old==$_POST['password'] and preg_match("/^[a-zA-Z0-9]+$/",$new) and strlen($new)>5 and $new==$new2) {
	$db->query ("UPDATE `users` SET `password` = '$new' where `login`= '$login'");
	echo "Password change correct";
	
}
else {
	echo "Error";
}
?>	