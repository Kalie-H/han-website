<?php
include_once("functions/database.php");
$password = $_POST['password'];
$userName = $_POST['username'];
//判断用户名是否占用
$userNameSQL = "select * from user where name = '$userName'";
getConnection();
$resultSet = mysql_query($userNameSQL);
if(mysql_num_rows($resultSet)>0)
{
	closeConnection();
	exit("用户名已被占用，请更换其他用户名！");
}
$registerSQL="insert into user values('$userName','$password')";
	mysql_query($registerSQL);
	echo "<br />";
//从数据库中提取用户注册信息
$userSQL = "select * from user where name = '$userName'";
$userResult = mysql_query($userSQL);
if($user = mysql_fetch_array($userResult))
{
	exit('用户注册成功！点击此处<a href="login.html">登陆</a>');
    }
    else{
        echo "注册失败！";
        echo '点击此处<a href="javascript:history.back(-1);">返回</a>重试';
    }
    closeConnection();
?>