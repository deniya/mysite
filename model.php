<?php
function open_database_connection()
{
	$link=mysql_connect('localhost','melnikov2','123');
	mysql_select_db('melnikov2',$link);
	mysql_query("SET NAMES UTF8");
	return $link;
}
function close_database_connection($link)
{
	mysql_close($link);
}
function get_all_rows()
{
	$link=open_database_connection();
	$result=mysql_query('SELECT * FROM pages',$link);
	$rows=array();
	while($row=mysql_fetch_assoc($result)){
		$rows[]=$row;
	}
	close_database_connection($link);
	return $rows;
}
function add_row()
{
	if(empty($_REQUEST['add_titel'])
		&& empty($_REQUEST['add_content'])
			&& empty($_REQUEST['add_autor'])){
		return;
	}
	$title=$_REQUEST['add_title'];
	$content=$_REQUEST['add_content'];
	$autor=$_REQUEST['add_autor'];
	$date=date("Y-m-d H:i:s");
	$link=open_database_connection();
	$sql="INSERT INTO pages (`date`,title,`text`,autor) 
			VALUES('$date','$title','$content','$autor')";
		mysql_query($sql);
	close_database_connection($link);

	return;
}
function get_row($id)
{
	$link=open_database_connection();
	$result=mysql_query("SELECT * FROM pages WHERE id='$id'",$link);
	$row=mysql_fetch_assoc($result);
	close_database_connection($link);
	
	return $row;
}