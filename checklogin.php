<?php
$uid = $_POST['uid'];
$pw = $_POST['pw'];

if($uid == 'monian' and $pw == 'admin123')
{	
	session_start();
	$_SESSION['sid']=session_id();
	header("location:index.php");
}
if($uid == 'emyes' and $pw == 'emyes123')
{	
	session_start();
	$_SESSION['sid']=session_id();
	header("location:view.php");
}
else
{
	echo"<br>";
}
?>