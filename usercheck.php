<?php session_start();?>
<?php
require_once("conn.php");
echo "connected";

$username = $_POST['name'];
$userpass = $_POST['password'];
$userpass = md5($userpass);
$useremail = $_POST['email'];
echo "got all data<br/>";

$query = "INSERT INTO ordinary(name,password,email) VALUES ('$username','$userpass','$useremail')"
mysql_query($query);

mysql_close();
echo "welcome";
?>
</body>
</html>