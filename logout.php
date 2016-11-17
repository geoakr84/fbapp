<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>PD Treatment</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stylesheet/style.css" media="all" type="text/css">
</head>
<body>

<ul>
	<li><a href="index.php">HOME</a></li>
</ul>

<h1>You are now logged out</h1>

<?php session_destroy(); ?>

<hr/>

</body>
</html>
<?php
?>