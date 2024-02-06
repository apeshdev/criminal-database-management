 
  
  <?php 
   include("connection.php");
   $Adhar=$_POST['Adhar'];
   $name=$_POST['name'];
   $Gender=$_POST['gender'];
   $Age=$_POST['Age'];
   $Phone=$_POST['Phone'];
   $crime=$_POST['crime'];
   $punishment=$_POST['punishment'];
   $Address=$_POST['Address'];
   $area=$_POST['Area'];
   $city=$_POST['city'];
   $PIN=$_POST['PIN'];
   $state=$_POST['state'];
   $Nationality=$_POST['Nationality'];
   $Photo=$_POST['Photo'];
   $policestation=$_POST['policestation'];
   //session_start();
   //$_SESSION['Aadhar']=$Aadhar;
   $query="INSERT INTO `criminal_detail`(`Adhar`, `name`, `Gender`, `age`, `Phone number`, `Crime`, `punishment`, `Address`, `Area`, `city`, `PIN code`, `State`, `Nationality`, `Photo`, `policestation`) VALUES ('$Adhar','$name','$Gender','$Age','$Phone','$crime','$punishment','$Address','$area','$city','$PIN','$state','$Nationality','$Photo','$policestation')";
   $result=mysqli_query($con,$query);
   if($result)
     {
         //echo $count;
         echo '<script>
           window.location.href="crimedata.php";
           alert("Data stored Successfully now fill crime detail")
           </script>';
         
         
     }
     if(mysqli_num_rows($result)==0){
        echo '<script>
           window.location.href="newrecord.php";
           alert("Input format error")
           </script>';
     }
    
    ?>
</table>
