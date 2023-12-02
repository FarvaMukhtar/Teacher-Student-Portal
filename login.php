<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
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
</style>
<body>
    
    <form method="post" action="login_process.php">
    	<h2>Student Login</h2>
    	<?php if(isset($_GET['error'])){ ?>
    	   <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label for="name">Name:</label>
        <input type="text" name="name" required=""><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="Password" required="" ><br><br>

        <input type="submit" value="Login">
        <p>Don't have an account?  <a href="registration.php">Create Account</a></p>
    </form>


    
</body>
</html>
