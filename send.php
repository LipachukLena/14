<?
session_start();
if (!isset($_SESSION['username'])) {
	exit ("Need authorization. <a href='index.html'>V0hod</a>");
}
  
$sender=$_SESSION['username'];
$receiver=$_POST['receiver'];
$sum=floatval($_POST['sum']);

$db = new mysqli("localhost", "root", "", "mybd"); 

$s="SELECT `balance` from `users` WHERE `login`= '$sender'";
$result=$db->query($s);
$record = $result->fetch_assoc();
$max=$record['balance'];

if ($sum<0){
	echo "Error sum<br>";
	} 
else{
	if ($max<$sum ){
		echo "Nedostatochno sredstv<br>";
		} 
	else {
		$db->query ("UPDATE `users` SET `balance`= `balance`-$sum where `login`='$sender'");
		$db->query ("UPDATE `users` SET `balance`= `balance`+$sum where `login`='$receiver'");
		}
	}
?>
<a href='main.php'>Menu</a>