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
    margin-top: 110px;
    margin-left: 300px;
  }
  h2{
    margin-top: 10px;
    color: rgb(41, 101, 129);
    justify-content: center;
    font-size: 40px;
  }
  h3{
    
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
  font-family: "Audiowide", sans-serif;
  
}

#navbar a:first-child {
height: 50px;
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


button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color: rgb(17, 19, 51);
  border: none;
  border-radius: 7px;
  box-shadow: 0 9px rgb(177, 194, 202);
}

button:hover {background-color: rgb(52, 84, 100)}

button:active {
  background-color: rgb(177, 194, 202);
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}



h2{
		color: rgb(8, 37, 4);
        text-align: center;
        margin-top:60px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
	}

    form{
        text-align: center;
        border:10px solid;
        width:30%;
        margin-left:360px;
        height:440px;
        border-radius:8px;
        margin-top:150px;
        color:rgb(8, 37, 4);
        background: linear-gradient(110deg, rgb(68, 173, 173) 60%, rgb(145, 199, 199) 60%);
        box-shadow: 10px 10px 5px rgb(120, 128, 128);
    }


    label {
        display: inline-block;
        width: 100px;
        
      }
      input{
        width: 200px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-style: bold;

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
  <form action="changerecS.php" method="POST">

  <h2>Update Record</h2>
    	

        <label for="name">Name:</label>
        <input type="text" name="name" required=""><br><br>
        
        <label for="stid">Std-ID:</label>
        <input type="text" name="stdid" required=""><br><br>

        <label for="stemail">Std-Email:</label>
        <input type="text" name="stemail" required=""><br><br>

        <label for="gender">Gender:</label>
        <input type="text" name="gender" required=""><br><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required=""><br><br>


        <label for="password">Password:</label>
        <input type="password" name="Password" required="" ><br><br>
        <input type="submit" name = update_info value="Change Record">
  </form >
</div>
<div class = "updation">
        <?php
        if(isset($_POST['update_info'])){
            $namee = $_POST['name'];
            $stdide = $_POST['stdid'];
            $stemaile = $_POST['stemail'];
            $gendere = $_POST['gender'];
            $phonee = $_POST['phone'];
            $Passworde = $_POST['Password'];


            

            $query = "UPDATE `std` SET `Name`='$namee',`stdID`='$stdide',`stdEmail`='$stemaile',
            `Gender`='$gendere' , `phnmbr` = '$phonee', `Password` = '$Passworde' WHERE stdID = $stdide";
            
            if (mysqli_query($conn, $query)){
                
                echo "updated successfully....! <a href='login.php'>Updated</a>";
               
            }else{
                echo "Error updating information: " . mysqli_error($conn);
                }
            }
        
        ?>
    </div>

</div>


	
</body>
</html>

<?php


