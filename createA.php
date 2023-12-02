<?php
session_start();

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

h2{
		color: rgb(8, 37, 4);
        text-align: center;
        margin-top:60px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
	}

    form{
        text-align: center;
        border:10px solid;
        width:38%;
        margin-left:110px;
        height:340px;
        border-radius:8px;
        margin-top:160px;
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
      .activitycreate{
        margin-left:650px;
        margin-top:-330px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-style: bold;
        color:white;
        font-size:20px;
        border:8px solid rgb(30, 184, 223);
        width:30%;
        text-align: center;
        background: linear-gradient(110deg, rgb(17, 19, 51) 60%, rgb(35, 33, 173));
        height:200px;
        border-radius:8px;
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
  
<form method = "post" action = "createA.php">
<h2>Create Activity</h2>
    <label for="title">Activity tilte:</label>
    <input type="text" name="title" required></input><br><br>

    <label for="description">Description:</label>
    <textarea  name="description" rows="3" cols="14"></textarea><br><br>

    <input type="submit" name="create_activity" value="Create Activity"></input>
</form>

<div  class="activitycreate">
        <?php
        if(isset($_POST['create_activity'])){
            $title = $_POST['title'];
            $des = $_POST['description'];
            

            $stmt = "INSERT INTO `activity`( `acttitle`, `actdes`)
            VALUES ('$title','$des')";
            
            if ($conn->query($stmt) === TRUE){
                
                echo "Activity created Successfully!....! <a href='activity1.php'>Click Here</a>";
                 echo "Title :". $_POST['title'].'<br><br>';
                 echo "Description  :".$_POST['description'];
               
            }else{
                echo "Error: " . $stmt . "<br>" . $conn->error;
                }
            }
        
        ?>
</div>
</div>
</div>


	
</body>
</html>
<?php




