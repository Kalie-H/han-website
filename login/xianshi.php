<meta charset="utf8">
<?php
  error_reporting(E_ALL^E_DEPRECATED);
  $con = mysql_connect("localhost","root","123456") or die(mysql_error());
  mysql_query("set name 'utf8'");
  @mysql_select_db("users",$con) or die(mysql_error());
?>
<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<?php
  $sql = "SELECT * FROM blog";
  $query = mysql_query($sql);
  while($row = mysql_fetch_array($query)){
?>

  <tr bgcolor="#eff3ff">
  <td><b><big>
  	标题：<?= $row['title']?></big></b></td></tr>
  	<tr><td><b><sub>
  	用户：<?= $row['user']?></sub></b></td>
  </tr>
  <tr bgColor="#ffffff">
  <td>内容：<?= $row['content']?></td>
  </tr>
<?php
  }
?>
</table>
<center>
<a  href="../index.html">继续逛逛</a></center>
