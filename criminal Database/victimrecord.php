 
  
  <?php 
   include("connection.php");
   $Victim=$_POST['Victim'];
   $Aadhar=$_POST['Aadhar'];
   $Address=$_POST['Address'];
   $Injury=$_POST['Injury'];
   //session_start();
   $CAadhar=$_POST['cadhar'];
   $Photo=$_POST['Photo'];

   
   $query="INSERT INTO `victim_record`( `name`,`Aadhar`, `address`, `victim_injury`, `Photo`,`CAadhar`) VALUES ('$Victim','$Aadhar','$Address','$Injury','$Photo','$CAadhar')";
   $result =mysqli_query($con,$query);
   
   if($result)
     {
         //echo $count;
         echo '<script>
           window.location.href="home.php";
           alert("Data stored Successfully now fill crime detail")
           </script>';
         
         
     }
     if(mysqli_num_rows($result)==0){
        echo '<script>
           window.location.href="crimedata.php";
           alert("Input format error")
           </script>';
     }
    
    ?>
</table>
