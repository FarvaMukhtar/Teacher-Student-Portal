<?php
session_start();
if (isset($_SESSION['Name']) && isset($_SESSION['Password']) && isset($_SESSION['Gender']) && isset($_SESSION['stdEmail'])) {
?>



<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	
</head>
<style type="text/css">
	a{
		
		padding: 8px;
		font-size: 20px;
		display:   flex;
		margin: 10px;
	}
	h1{
    color: rgb(15, 5, 71);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-style: bold;
    
    font-size: 60px;
    margin-top: 200px;
    margin-left: 300px;
  }
  h2{
    margin-top: 100px;
    color: rgb(41, 101, 129);
    justify-content: center;
    font-size: 40px;
  }
  h3{
    margin-top: 10px;
    color: rgb(41, 101, 129);
    justify-content: center;
    font-size: 40px;
  }
/* Create a sticky/fixed navbar */
#navbar {
  
  background-color: rgb(111, 177, 207);
  padding: 10px; /* Large padding which will shrink on scroll (using JS) */
  transition: 0.4s; /* Adds a transition effect when the padding is decreased */
  position: fixed; /* Sticky/fixed navbar */
  width: 100%;
  top: 0; /* At the top */
  box-shadow:rgb(15, 5, 71);
  
}

/* Style the navbar links */
#navbar a {
 
  color: white;
  margin-left: 500px;
  padding: 8px;
  text-decoration: none;
  font-size: 40px;
  text-align: center;
  border-radius: 4px;
  
}

#navbar a:first-child {
height: 80px;
padding-top: 25px;
margin-left: 520px;
width: 240px;
text-align: center;
background-color: rgb(15, 5, 71);
box-shadow: rgb(107, 109, 110);
}

#navbar a:nth-child(2) {
height: 100px;
padding-top: 25px;
width: 380px;
text-align: center;
background-color: #ff7e00;
}

#navbar a:nth-child(3) {
height: 100px;
padding-top: 25px;
width: 400px;
text-align: center;
background-color: #db0104;
}


/* Add responsiveness - on screens less than 580px wide, display the navbar vertically instead of horizontally */
@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px ; /* Use !important to make sure that JavaScript doesn't override the padding on small screens */
  }
 
 
}


		/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: rgb(15, 5, 71);
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: rgb(111, 177, 207);
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: rgb(111, 177, 207);
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}


</style>
<body>

	<div id="navbar">
  
  <div id="navbar-right">
    <a class="actoo" href="#stdportal">Student Portal</a>
  </div>
</div>
<div>
		<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="profile.php">Profile</a>
  <a href="view.php">View Activities</a>
  <a href="settings.php">Settings</a>
  <a href="logout.php">Logout</a>
</div>

<!-- Page content -->
<div  class="content">
  
  <h1> Hy , <?php echo $_SESSION['Name']; ?> ! </h1>
  <h2>Gender:  <?php echo $_SESSION['Gender']; ?> </h2>
  <h3>Email :  <?php echo $_SESSION['stdEmail']; ?> </h3>
</div>
</div>


	
</body>
</html>
<?php
}
else {
  header("Location : loginA.php");
  exit();
}
?>

