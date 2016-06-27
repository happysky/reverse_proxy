<?php
	$proxy=new PhpReverseProxy();
	$proxy->port="8080";
	$proxy->host="www.xiumu.org";
	//$proxy->ip="1.1.1.1";
	$proxy->forward_path="";
	$proxy->connect();
	$proxy->output();
?>