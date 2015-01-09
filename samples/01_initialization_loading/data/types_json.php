<?php

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	require_once('../../common/connector/scheduler_connector.php');
	include ('../../common/config.php');

	$list = new JSONOptionsConnector($res, $dbtype);
	$list->render_table("types","typeid","typeid(value),name(label)");

	$scheduler = new JSONSchedulerConnector($res, $dbtype);
	$scheduler->set_options("type", $list);
	$scheduler->render_table("tevents","event_id","start_date,end_date,event_name,type");
?>