<?php

$conn = new mysqli("localhost","root","","sascreen");

    if (!$conn) {

    echo "Connection failed!";

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Activity</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>
<style type="text/css">
	
	.activityform{
		border: 2px solid rgb(15, 5, 71);
		width: 18%;
		height:150px;
		margin left: 680px;
		margin-top: 130px;
		text-align: center;
		background-color: #f1f1f1;
		 border-radius: 6px;
     font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

	}
	.aactive{
		margin-left: 45px;
		font-size: 25px;
	}
	a{
		
		padding: 8px;
		font-size: 20px;
		display:   flex;
		margin: 10px;
	}
	h1{
		color: darkblue;
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
  height:90px
  
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
  font-family: "Audiowide", sans-serif;
}

#navbar a:first-child {
height: 60px;
padding-top: 15px;
margin-left: 520px;
width: 340px;
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
  margin-left: 230px;
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
.view{
  margin-left:300px;
  marign-top:200px;
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

</div>
<div class="content">
	<div class="activityform">
	<a class="aactive" href="activity1.php">Activity 1 </a>
    <p>Family Law Interview Form</p>
</div>

<div class = "view">
<?php
// Include your database connection code here

if (isset($_GET['stid'])) {
    $student_id = $_GET['stid'];

    // Query to retrieve assigned activities for the student
    $query = "SELECT a.acttitle, a.actdes
              FROM activity AS a
              JOIN assign AS assign ON a.id = assign.actid
              WHERE assign.stid = $stid";

    // Execute the query and fetch the results
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Fetch and display the assigned activities
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Title: " . $row['acttitle'] . "<br>";
            echo "Description: " . $row['actdes'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Error retrieving assigned activities: " . mysqli_error($conn);
    }
}
?>
</div>
</div>



</body>
</html>