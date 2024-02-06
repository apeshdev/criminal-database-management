<?php
include("connection.php");
if(isset($_POST['submit']))
{
    
    $username=$_POST['user'];
    $password=$_POST['pass'];
    //echo $username;
    //$sql=mysqli_query($con,"INSERT INTO `details`(`username`, `password`) VALUES ('$username','$password')");
    $sql1="select *from user_details where name='$username' and password='$password'";
    $result =mysqli_query($con,$sql1);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['name']=$username;
        $_SESSION['password']=$password;
        header("Location:home.php");
        //header("Location:welcome.php");
    }
    else{
      echo '<script>
           window.location.href="login.php";
           alert("Login failed. Invalid username or password")
           </script>';
    }

}
?>