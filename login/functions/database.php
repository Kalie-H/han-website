<?php
$databaseConnection = null;
function getConnection(){
	$hostname = "localhost";
	$database = "users";
	$userName = "root";
	$password = "123456";
	global $databaseConnection;
	$databaseConnection = @mysql_connect($hostname,$userName,$password) or die(mysql_error());
	mysql_query("set name 'utf8'");
	@mysql_select_db($database,$databaseConnection) or die(mysql_error());
}
function closeConnection(){
	global $databaseConnection;
	if($databaseConnection){
		mysql_close($databaseConnection) or die (mysql_error());

}
}
?>