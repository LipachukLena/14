<?
$db = new mysqli("localhost", "root", "", "mybd");
$s="SELECT `password` from `users` WHERE `login`='".$_POST['login']."'";
$result=$db->query($s);

if ($result->num_rows > 0) {
	$record = $result->fetch_assoc();
	if ($record['password']!=$_POST['password']){
		exit('Password error');
	}
	session_start();
	$_SESSION['username']=$_POST['login'];
	echo "Correct vhod.<br>";
	echo "<a href='main.php'>Next</a>";
} 
else{
	exit('User error');
}