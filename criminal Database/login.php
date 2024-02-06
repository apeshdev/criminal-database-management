<?php
 include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>

<body>
    <form action="Logincheck.php" method="post">
        <div class="imgcontainer">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtx3zxmNOy79R6n-u7L8OcfESVLomPkCaSobSvQi7LAGijGKQL" alt="Avatar" class="avatar">
        </div>
      <center>
        <div class="container">
          <label for="user"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="user" required>

          <br>
          <br>
      
          <label for="pass"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pass" required>
          <br>
          <br>
      
          
          <input type="submit" class="btn" value="Login" name="submit"/>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </center>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
         <left> <button type="button" class="cancelbtn">Clear</button></left>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    
      </form>
</body>
<head>
    <style>
        /* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
.btn {
  background-color: #27ec04;
  color: white;
  padding: 14px 20px;
  margin: 8px 10px;
  border: none;
  cursor: pointer;
  width: 10%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  align:center;
  width: auto;
  padding: 10px 18px;
  background-color: #8c06eb;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 20%;
  border-radius: 10%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 50%;
  }
}
    </style>
</head>
</html>

</body>
</html>