<?php
if(isset($_POST['submit']))
{
	//print_r($_POST);
	$connect = mysql_connect('localhost', 'root', '');
	mysql_select_db('tst');
	
	$name	=	$_POST['name'];
	$surname=	$_POST['surname'];
	$email	=	$_POST['email'];
	$about	=	$_POST['about'];
	
	$query	=	"INSERT INTO tableName(`name`,`surname`,`email`,`about`) VALUES ('$name','$surname','$email','$about')";
	
	mysql_query($query);
	
	
	//============You can do whatver you want to do with your form================
	
}
?>