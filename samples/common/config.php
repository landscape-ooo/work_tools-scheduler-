<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	require_once(dirname(__FILE__).'/connector/db_mysqli.php');

	// SQLite
// 	$dbtype = "SQLite3";
// 	$res = new SQLite3(dirname(__FILE__)."/database.sqlite");

	// Mysql
	$dbtype = "MySQLi";
	//$res=mysql_connect("127.0.0.1:3306", "scheduler", "scheduler");
	//mysql_select_db("scheduler");
	$res=@mysqli_connect("127.0.0.1", "scheduler", "scheduler",'schedulertest','3306');

?>