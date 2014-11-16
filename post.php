<?php
header("charset=utf8");
require "connect.php";
$link = Connect2Root('localhost','articles');
/*$host = "localost";
$dbname = "articles";
$usr = "root";
$pass = "1112";
$link = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$usr,$pass);*/
echo "connected<br/>";

$category = $_POST['cat'];
$name = $_POST['name'];
$date = $_POST['date'];
$location = $_POST['loc'];
$info = $_POST['info'];
$people = $_POST['people'];
$comission = $_POST['comission'];
$end = $_POST['end'];
$editor = $_POST['ckeditor'];
echo "got all data<br/>";

$insert = "INSERT INTO mission (cat,mname,mdate,mlocation,minfo,people,fund,end,content)
			VALUES ('$category','$name','$date','$location','$info','$people','$comission','$end','$editor')";
$statement = $link-> prepare($insert);
$statement-> execute($data);
echo "executed!";
$link = null;
?>