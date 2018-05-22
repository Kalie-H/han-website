<?php
error_reporting(E_ALL^E_DEPRECATED);
  $con = mysql_connect("localhost","root","123456") or die(mysql_error());
  mysql_query("set name 'utf8'");
  @mysql_select_db("users",$con) or die(mysql_error());

        $tit = $_POST['title'];
        mysql_query("DELETE FROM blog WHERE title=$tit");
        $message = "删除成功";
        header("location:admin.php?message=$message");
?>