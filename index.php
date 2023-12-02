<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<style>
  h2{
		color: rgb(8, 37, 4);
        text-align: center;
        margin-top:60px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
	}
  h1{
    color: rgb(8, 37, 4);
        text-align: center;
        margin-top:60px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size:60px;
  }

    form{
        text-align: center;
        border:10px solid;
        width:38%;
        margin-left:380px;
        height:180px;
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
      
      button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: linear-gradient(110deg, rgb(68, 173, 173) 60%, rgb(145, 199, 199) 60%);
  background-color: linear-gradient(110deg, rgb(68, 173, 173) 60%, rgb(145, 199, 199) 60%);
  border: none;
  border-radius: 7px;
  box-shadow: 0 9px rgb(17, 19, 51);
}

button:hover {background-color: rgb(107, 109, 110)}

button:active {
  background-color: rgb(80, 78, 78);
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


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
  
}

#navbar a:first-child {
height: 80px;
padding-top: 25px;
margin-left: 420px;
width: 4440px;
text-align: center;
background-color: rgb(52, 84, 100);
box-shadow: rgb(107, 109, 110);
}

#navbar a:nth-child(2) {
height: 100px;
padding-top: 25px;
width: 480px;
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
 
 
  </style>
<body>
<div id="navbar">
  
  <div id="navbar-right">
    <a class="actoo" href="#stdportal">Student Management System</a>
  </div>
</div>
<h1>Welcome...........!!!</h1>
<div class="forms">
  <form action="loginA.php" method="POST">
    <h2>Admin can LogIn here</h2>
    <button>Admin LogIn  ></button>
    
  </form >
  <form action="login.php" method="POST">
    <h2>Registered Students can LogIn here</h2>
    <button>Student LogIn  ></button>
  </form>
    </div> 

  


  
</body>
</html>