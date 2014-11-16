<?php
mysql_connect("localhost","root","1112");
mysql_select_db("users");
if (@mysql_select_db("users"))
{
	echo "database exist<br/>";
} else {
	echo "database doesn't exist!";
}
?>