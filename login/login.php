<?php
include ("functions/database.php");
//收集表单提交数据
$userName = $_POST['username'];
$password = $_POST['password'];
//连接数据库服务器
getConnection();
//判断用户名和密码是否输入正确
$sql = "select * from user where name='$userName' and password='$password'";
$resultSet = mysql_query($sql);
if(mysql_num_rows($resultSet)>0){
    if($userName=="hw"){
        header("location:admin.php");
    }
    else{
      header("location:say.html");
    }
    }
else{
     echo "用户名和密码输入错误！登录失败！";
}
?>