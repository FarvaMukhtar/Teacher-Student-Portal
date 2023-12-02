<?php
session_start();
if (isset($_SESSION['Name']) && isset($_SESSION['Password']) && isset($_SESSION['Gender']) && isset($_SESSION['stdEmail'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	a{
		border: 2px solid;
		padding: 8px;
		background: pink;
		font-size: 20px;
	}
	h1{
		color: blue;
		justify-content: center;
		font-size: 60px;
	}
	h1{
		color: darkblue;
		justify-content: center;
		font-size: 50px;
	}
</style>
<body>
	<h1> <?php echo $_SESSION['Name']; ?>  </h1>
	<h2>Gender:  <?php echo $_SESSION['Gender']; ?> </h2>
	<h2>Email :  <?php echo $_SESSION['stdEmail']; ?> </h2>
	<a href="logoutA.php">Logout</a>
</body>
</html>
    
<?php
}
else {
	header("Location : loginA.php");
	exit();
}
?>


