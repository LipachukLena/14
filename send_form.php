<?
session_start();
if (!isset($_SESSION['username'])) {
	exit ("Need authorization. <a href='index.html'>Vhod</a>");
}
?>

Perevod<br>
<form method="POST" action="send.php"><br>
Poluchatel: <input name="receiver"><br>
Summa: <input name="sum"><br>
<input type="submit" value="Go">
</form>
<br>
<a href='main.php'>Menu</a>