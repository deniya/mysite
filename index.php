<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
	include "controllers/controller.php";
	include "model.php";
	$uri=$_SERVER['REQUEST_URI'];
	$uri=rtrim($uri,'/');
	echo "uri=$uri";
	
	if('/mysite/index.php' == $uri || '/mysite'==$uri){
		$response=list_action();
	}elseif('/mysite/index.php/admin'==$uri){
		$response=admin_action();
	}elseif('/mysite/index.php/add'==$uri){
		$response=add_action();
	}elseif('/mysite/index.php/show'==$uri && isset($_REQUEST['id'])){
		$response=show_action($_REQUEST['id']);
	}
	echo $response;
?>

