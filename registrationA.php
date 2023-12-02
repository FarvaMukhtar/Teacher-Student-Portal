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
        border:2px solid;
        width:30%;
        margin-left:460px;
        height:440px;
        border-radius:8px;
        margin-top:100px;
        color:rgb(86, 15, 153);
        background-color: rgb(213, 236, 229);
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
    <div>
        <?php
        if(isset($_POST['create'])){
            $name = $_POST['name'];
            $stdid = $_POST['stdid'];
            $stemail = $_POST['stemail'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $Password = $_POST['Password'];

            $sql = "INSERT INTO std(Name, stdID, stdEmail, Gender, phnmbr, Password) 
            VALUES ('$name','$stdid','$stemail','$gender','$phone','$Password')";
           $result = mysqli_query($conn, $sql);
           
            if($result){
                echo'Succes saved';
            }else{
                    echo'there ere hile saving the issue';
                }
            }
        
        ?>
    </div>
    
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
    

    


    
</body>
</html>
