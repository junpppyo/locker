<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');

	$db = new mysqli("localhost","root","","locker");
	$db->set_charset("utf8");

	if(!$db) echo "fail";
	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}

?>

