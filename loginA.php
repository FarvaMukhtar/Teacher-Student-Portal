<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
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
    
    <form method="post" action="login_processA.php">
    	<h2>Admin Login</h2>
    	<?php if(isset($_GET['error'])){ ?>
    	   <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label for="stid">Admin Email:</label>
        <input type="text" name="email" required=""><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="Password" required="" ><br><br>

        <input type="submit" value="Login">
    </form>


    
</body>
</html>
