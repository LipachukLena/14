<?
session_start();
if (!isset($_SESSION['username'])) {
	exit ("Need authorization. <a href='index.html'>Vhod</a>");
}
?>

    Change password<br>
    <form method="POST" action="new_password.php"><br>
	Password: <input type="password" name="password"><br>
	New password: <input type="password" name="newPassword"><br>
	New password confirmation: <input type="password" name="newPassword2"><br>
	<input type="submit" value="Change">
    </form>
    <a href='main.php'>Menu</a>