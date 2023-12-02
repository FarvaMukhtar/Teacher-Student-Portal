<?php
session_start();

$conn = new mysqli("localhost","root","","sascreen");

    if (!$conn) {

    echo "Connection failed!";

}

if (isset($_POST['email']) && isset($_POST['Password'])) { 

function validate($data){

       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    } 

	$email = validate($_POST['email']);
    $Pass = validate($_POST['Password']);

    if(empty($email)){
    	header("Location: loginA.php?error=Email is required");
        exit();
    }
    elseif (empty($Pass)) {
    	header("Location: loginA.php?error=Password is required");
        exit();
    }
    else{

    	$sql = "SELECT * FROM admin WHERE adEmail='$email' AND adPassword='$Pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) ) {
        	$row = mysqli_fetch_assoc($result); 
        	if ($row['adEmail'] === $email && $row['adPassword'] === $Pass) {
        		echo "Logged In........!";

                $_SESSION['aname'] = $row['aname'];
        		$_SESSION['adEmail'] = $row['adEmail'];
                $_SESSION['adPassword'] = $row['adPassword'];
                header("Location: homeA.php");
                exit();
                
        	}else{
        		header("Location: loginA.php?error=Email or password is incorrect");
            exit();
        	}
        }else{
        	header("Location: loginA.php?error=Email or password is incorrect");
            exit();
        }
    }
}
else{

	header("Location: loginA.php");
    exit();
}