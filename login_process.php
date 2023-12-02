<?php
session_start();

$conn = new mysqli("localhost","root","","sascreen");

    if (!$conn) {

    echo "Connection failed!";

}

if (isset($_POST['name']) && isset($_POST['Password']) ) { 

function validate($data){

       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    } 

	$name = validate($_POST['name']);
    $Pass = validate($_POST['Password']);

    if(empty($name)){
    	header("Location: login.php?error=Student_name is required");
        exit();
    }
    elseif (empty($Pass)) {
    	header("Location: login.php?error=Password is required");
        exit();
    }
    else{

    	$sql = "SELECT * FROM std WHERE Name='$name' AND Password='$Pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) ) {
        	$row = mysqli_fetch_assoc($result); 
        	if ($row['Name'] === $name && $row['Password'] === $Pass) {
        		echo "Logged In........!";

        		$_SESSION['Name'] = $row['Name'];
                $_SESSION['Password'] = $row['Password'];
                $_SESSION['Gender'] = $row['Gender'];
                $_SESSION['stdEmail'] = $row['stdEmail'];
                $_SESSION['stdID'] = $row['stdID'];
                $_SESSION['phnmbr'] = $row['phnmbr'];

                header("Location: home.php");
                exit();
                
        	}else{
        		header("Location: login.php?error=st-name or password is incorrect");
            exit();
        	}
        }else{
        	header("Location: login.php?error=st-name or password is incorrect");
            exit();
        }
    }
}
else{

	header("Location: login.php");
    exit();
}