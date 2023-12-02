
<?php
session_start();
if (isset($_SESSION['Name']) && isset($_SESSION['Password']) && isset($_SESSION['Gender']) && isset($_SESSION['stdID']) && isset($_SESSION['phnmbr']) 
  &&isset($_SESSION['stdEmail'])) {
?>



<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    
</head>
<style type="text/css">
    
    
  h1{
    margin-top: 20px;
    color: darkblue;
    text-align:  center;
    font-size: 40px;
  }
  h2{
    margin-top: -10px;
    color: darkblue;
    justify-content: center;
    font-size: 20px;
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



      div {
        margin-bottom: 10px;
      }
      label {
        display: inline-block;
        width: 200px;
        
      }
      input{
        width: 300px;

      }
      #myfile{
        width: 300px;
        padding: 10px;
        font-size: 20px;
        color: darkblue;
      }


</style>
<body>

    
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
  <form method="post" action="activity1_process.php">
        <h1>Family Law Client Interview Form</h1>
        <?php if(isset($_GET['error'])){ ?>
           <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
         <h2>1. Please provide your full name, date and place of birth:</h2>
        <label for="name">a.    Name            : </label>
        <input type="text" name="name" ><br><br>
        <label for="dob">b.    Date of Birth       :  </label>
        <input type="text" name="dob" ><br><br>
        <label for="pob">c.    Place of Birth      :   </label>
        <input type="text" name="pob" ><br><br>

        <h2>Where are you living now?</h2>
        <label for="adress">d.    Address     :  </label>
        <input type="text" name="adress" ><br><br>
        <label for="residencee">e.    Residence telephone :  </label>
        <input type="text" name="residence" ><br><br>
        <label for="mobile">f.    Mobile telephone    :    </label>
        <input type="text" name="mobile" ><br><br>
        <label for="emaile">g.    Email address       :    </label>
        <input type="text" name="email" ><br><br>

        <h2>2.  Please complete the following concerning your employment:</h2>
        <label for="employer">a.    Employer        :   </label>
        <input type="text" name="employer" ><br><br>
        <label for="job">b.    Job title       :   </label>
        <input type="text" name="job" ><br><br>
        <label for="addresse">c.    Address     :    </label>
        <input type="text" name="addresse" ><br><br>
        <label for="telephone">d.    Telephone number    :     </label>
        <input type="text" name="telephone" ><br><br>
        <label for="gros">e.    Gross salary/monthly: </label>
        <input type="text" name="gross" ><br><br>
        <label for="annual">f.    Annual gross :  </label>
        <input type="text" name="annual" ><br><br>
        <label for="length">g.    Length of employment:    </label>
        <input type="text" name="length" ><br><br>
        <label for="education">h.    Education/Training  :     </label>
        <input type="text" name="education" ><br><br>

        <h2>3.  Please provide your spouse’s full name, date and place of birth, Social Security number, driver’s license number:</h2>
        <label for="names">a.    Name              </label>
        <input type="text" name="names" ><br><br>
        <label for="dobs">b.    Date of Birth       :    </label>
        <input type="text" name="dobs" ><br><br>
        <label for="pobs">c.    Place of Birth      :    </label>
        <input type="text" name="pobs" ><br><br>
        <label for="socials">d.    Social Security      </label>
        <input type="text" name="socials" ><br><br>
        <label for="driverse">e.    Driver’s License No.    :  </label>
        <input type="text" name="drivers" ><br><br>

        <h2>4.  Where is your spouse living?</h2>
        <label for="ads">a.    Address:  </label>
        <input type="text" name="ads" ><br><br>
        <label for="residences">b.    Residence telephone: </label>
        <input type="text" name="residences" ><br><br>
        <label for="mobiles">c.   Mobile telephone:   </label>
        <input type="text" name="mobiles" ><br><br>
        <label for="emails">d.    Email address   :      </label>
        <input type="text" name="emails" ><br><br>


        <h2>5.  Please provide the date and place of your marriage:</h2>
        <label for="date">a.    Date            :   </label>
        <input type="text" name="date" ><br><br>
        <label for="city">b.    City, State     :  </label>
        <input type="text" name="city" ><br><br>

        <input type="file" id="myfile" name="myfile" /><br><br>
        

        <input type="submit" value="Submit">
       
    </form>
  
</div>
</div>


    
</body>
</html>
<?php
}
else {
  header("Location : login.php");
  exit();
}
?>