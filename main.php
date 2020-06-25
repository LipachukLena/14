<?
session_start();
if (!isset($_SESSION['username'])) {
	exit ("You need <a href='index.html'>authorization</a>");
}

echo "Hello, ".$_SESSION['username'].'<BR>';

$db = new mysqli("localhost", "root", "", "mybd");
$s="SELECT * from `users` WHERE `login`='".$_SESSION['username']."'";
$result=$db->query($s);
$record = $result->fetch_assoc();
$balance=$record['balance'];
echo "Your balance: ".$balance."$.<br>";
?>

<a href='send_form.php'>Perevod</a><br>
<a href='exit.php'>Exid</a><br>
<a href='new_password_form.php'>Change password</a><br>
<a href='deleteUser.php'>Delete account</a>
