<?php

$conn = new mysqli("localhost","root","","sascreen");

    if (!$conn) {

    echo "Connection failed!";

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	
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
	margin-left: 80px;
  }
  h3{
    margin-top: 10px;
    color: rgb(41, 101, 129);
    justify-content: center;
    font-size: 40px;
	margin-left: 80px;
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
  font-family: "Audiowide", sans-serif;
  
}

#navbar a:first-child {
height: 80px;
padding-top: 25px;
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
  width: 260px;
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


form{
        text-align: center;
        border:10px solid;
        width:38%;
        margin-left:110px;
        height:250px;
        border-radius:8px;
        margin-top:160px;
        color:rgb(8, 37, 4);
        background: linear-gradient(110deg, rgb(68, 173, 173) 60%, rgb(145, 199, 199) 60%);
        box-shadow: 10px 10px rgb(153, 144, 144), -1em 0 .4em olive;
    }


    label {
        margin-top:30px;
        display: inline-block;
        width: 100px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-style: bold;
        
      }
      select{
        width: 200px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-style: bold;

      }
      input{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-style: bold;
        color:white;
        background-color:rgb(17, 16, 68);
        padding:10px;
      }
      .assign{
        margin-left:300px;
      }


</style>
<body>

	<div id="navbar">
  
  <div id="navbar-right">
    <a class="actoo" href="#stdportal">Teacher Portal</a>
  </div>
</div>
<div>
		<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="profileA.php">Profile</a>
  <a href="createA.php">Create Activity</a>
  <a href="assignA.php">Assign Activity</a>
  <a href="viewA.php">View Activity Response</a>
  <a href="settingA.php">Settings</a>
  <a href="logoutA.php">Logout</a>
</div>

<!-- Page content -->
<div  class="content">
  
<div class = "main">

    <form method="post" action="assignA.php">
    	
    	

        <label for="stid[]">Student ID :</label>
        <input type="text" name="stid[]" ><br><br>
        
        <label for="actid[]">Activities ID :</label>
        <input type="text" name="actid[]" ><br><br>

        

        <input type="submit" name = "create" value="Assign Activity">
          
    </form>


    <div class = "assign">
        <?php
        if(isset($_POST['create'])){
            $stid = $_POST['stid'];
            $actid = $_POST['actid'];
           
           $student_ids_str = implode(',', $stid);
           $activity_ids_str = implode(',', $actid);

             // Insert the assignments into the database using the comma-separated strings
            
            $stmt = "INSERT INTO `assign`(`actid`, `stid`)VALUES ($activity_ids_str, $student_ids_str)";
            
            if (mysqli_query($conn, $stmt)){
                
                echo "Activities assigned to the selected students successfully!";
            }else{
            
                echo "Error assigning activities: "  . mysqli_error($conn);
                
            }
          }
        ?>
    </div>

    </div>
</div>
</div>


	
</body>
</html>




