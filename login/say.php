<?php
error_reporting(E_ALL^E_DEPRECATED);
$con = mysql_connect("localhost","root","123456") or die(mysql_error());
mysql_query("set name 'utf8'");
@mysql_select_db("users",$con) or die(mysql_error());
    $user=$_POST['user'];
    $title=$_POST['title'];
    $content=$_POST['content'];
    $saySQL="insert into blog values('$user','$title','$content')";
	mysql_query($saySQL);
	echo "<br />";
//从数据库中提取用户注册信息
$blogSQL = "select * from blog";
$blogResult = mysql_query($blogSQL);
if($user = mysql_fetch_array($blogResult))
{
    header("location:xianshi.php");
    }
?>




