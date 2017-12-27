
<?php
session_start();
if(!empty($_SESSION['login_user']))
{
header('Location: home.php');
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>EMYES</title>
<link rel="stylesheet" href="css/style.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.shake.js"></script>
</head>

<body>
<div id="main">
<br><br><br><br>
<h1>EMYES</h1>

<div id="box">
<form method="post" action="checklogin.php">
<label>Username</label> 
<input type="text" name="uid" class="input" autocomplete="off" id="username"/>
<label>Password </label>
<input type="password" name="pw" class="input" autocomplete="off" id="password"/><br/>
<input type="submit" class="button button-primary" value="Log In" id="login"/> 
<span class='msg'></span> 

<div id="error">

</div>	

</div>
</form>	
</div>

</div>
</body>
</html>