<?php

$conn = new mysqli("localhost","root","","sascreen");

    if (!$conn) {

    echo "Connection failed!";

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student SignUp</title>
</head>
<style type="text/css">
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
        margin-left:460px;
        height:440px;
        border-radius:8px;
        margin-top:40px;
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
      .registration{
        color:rgb(15, 5, 71);
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-top:20px;
      }
      
      


</style>
<body>
    <div class = "main">

    <form method="post" action="registration.php">
    	<h2>Student SignUp</h2>
    	

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

        <input type="submit" name = "create" value="SignUp">
          
    </form>


    <div class = "registration">
        <?php
        if(isset($_POST['create'])){
            $name = $_POST['name'];
            $stdid = $_POST['stdid'];
            $stemail = $_POST['stemail'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $Password = $_POST['Password'];

            $stmt = "INSERT INTO `std`(`Name`, `stdID`, `stdEmail`, `Gender`, `phnmbr`, `Password`)
            VALUES ('$name','$stdid','$stemail','$gender','$phone','$Password')";
            
            if ($conn->query($stmt) === TRUE){
                
                echo "Registration successful....! <a href='login.php'>Now Login</a>";
               
            }else{
                echo "Error: " . $stmt . "<br>" . $conn->error;
                }
            }
        
        ?>
    </div>

    </div>
    
    
    

    


    
</body>
</html>
