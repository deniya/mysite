<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
	
	include "controllers/controller.php";
	include "model/model.php";
	$uri=$_SERVER['REQUEST_URI'];
	$s = explode('?', $_SERVER['REQUEST_URI']);
	$uri = $s[0];
	$uri=rtrim($uri,'/');
	echo "uri=$uri";
	if('/mysite/index.php' == $uri || '/mysite'==$uri){
		$response=list_action();
	}elseif('/mysite/index.php/admin'==$uri){
		$response=admin_action();
	}elseif('/mysite/index.php/add'==$uri){
		$response=add_action();
	}elseif('/mysite/index.php/show'==$uri){
	 	$response=show_action($_REQUEST['id']);
	 }
	echo $response;
?>

