 
  
  <?php 
   include("connection.php");
   $crime=$_POST['crime'];
   $crime_date=$_POST['crime_date'];
   $crime_time=$_POST['crime_time'];
   $crime_location=$_POST['crime_location'];
   //session_start();
   $Aadhar=$_POST['Aadhar'];
   $Photo=$_POST['Photo'];

   
   $query="INSERT INTO `crime_record`(`crime`, `crime_date`, `crime_time`, `crime_location`, `Aadhar`, `Photo`) VALUES ('$crime','$crime_date','$crime_time','$crime_location','$Aadhar','$Photo')";
   $result =mysqli_query($con,$query);
   
   if($result)
     {
         //echo $count;
         echo '<script>
           window.location.href="victim.php";
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
