<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Print</title>
  <style>
    h2{
      text-align: center;
    }
    td, th {
    border: 1px solid #777;
    padding: 0.5rem;
    text-align: center;
}
 
table {
    border-collapse: collapse;
  
}
 
tbody tr:nth-child(odd) {
    background: #eee;
}
caption {
    font-size: 0.8rem;
}
border: 1px solid #777;

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
</head>
<body >
<h2> Resulttend Data</h2>
<h3>Criminal Detail</h3>
<table >
  <tr>
    
    <th>Adhar</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Phone Number</th>
    <th>Crime</th>
    <th>Punishment</th>
    <th>Address</th>
    <th>Area</th>
    <th>City</th>
    <th>PIN code</th>
    <th>State</th>
    <th>Nationality</th>
    <th>Photo</th>
    <th>Policestation</th>
  </tr>
  <?php 
   include("connection.php");
   $Adhar=$_POST['Adhar'];
   //include("Login.php");
   $query="SELECT * FROM `criminal_detail` WHERE Adhar='$Adhar'";
   $result =mysqli_query($con,$query);
   
   if(mysqli_num_rows($result)>0)
     {
         //echo $count;
         while($record=mysqli_fetch_assoc($result))
         {
            echo "<tr>";
            echo "<td>".$Adhar=$record['Adhar']. "</td>";
            echo "<td>".$Name=$record['name']. "</td>";
            echo "<td>".$gender=$record['Gender']. "</td>";
            echo "<td>".$age=$record['age']. "</td>";
            echo "<td>".$Phone_Number=$record['Phone number']. "</td>";
            echo "<td>".$crime=$record['Crime']. "</td>";
            echo "<td>".$punishment=$record['punishment']. "</td>";
            echo "<td>".$Address=$record['Address']. "</td>";
            echo "<td>".$Area=$record['Area']. "</td>";
            echo "<td>".$city=$record['city']. "</td>";
            echo "<td>".$PIN_Code=$record['PIN code']. "</td>";
            echo "<td>".$state=$record['State']. "</td>";
            echo "<td>".$Nationality=$record['Nationality']. "</td>";
            echo "<td>" . '<img src="data:image/jpg;base64,' .  base64_encode($record["Photo"])  . '"
            style="width:100px; height: 100px" />';
            echo "<td>".$state=$record['policestation']. "</td>";
            
         }
     }
     else{
        echo '<script>
           window.location.href="adhar_number.php";
           alert("Data not found")
           </script>';
     }
    
    ?>
</table>

<h3>Crime Detail</h3>
<table >
  <tr>
    
    <th>Crime</th>
    <th>Date</th>

    <th>Time</th>
    <th>Location</th>
    
    <th>Aadhar</th>
    <th>Photo</th>
  </tr>
  <?php 
   include("connection.php");
   $Adhar=$_POST['Adhar'];
   //include("Login.php");
   $query="SELECT * FROM `crime_record` WHERE Aadhar='$Adhar'";
   $result =mysqli_query($con,$query);
   
   if(mysqli_num_rows($result)>0)
     {
         //echo $count;
         while($record=mysqli_fetch_assoc($result))
         {
            echo "<tr>";
            echo "<td>".$Adhar=$record['crime']. "</td>";
            echo "<td>".$Name=$record['crime_date']. "</td>";
            echo "<td>".$crime=$record['crime_time']. "</td>";
            echo "<td>".$crime=$record['crime_location']. "</td>";
            echo "<td>".$crime=$record['Aadhar']. "</td>";
            echo "<td>" . '<img src="data:image/jpg;base64,' .  base64_encode($record["Photo"])  . '"
            style="width:100px; height: 100px" />';
            
            
         }
     }
     else{
        echo '<script>
           window.location.href="adhar_number.php";
           alert("Data not found")
           </script>';
     }
    
    ?>
</table>

<h3>Victim Detail</h3>
<table >
  <tr>
    
    <th>Victim Name</th>
    <th>Victim Aadhar</th>

    <th>Victim Address</th>
    <th>Victim Injury  </th>
    
    
  </tr>
  <?php 
   include("connection.php");
   $Adhar=$_POST['Adhar'];
   //include("Login.php");
   $query="SELECT * FROM `victim_record` WHERE CAadhar='$Adhar'";
   $result =mysqli_query($con,$query);
   
   if(mysqli_num_rows($result)>0)
     {
         //echo $count;
         while($record=mysqli_fetch_assoc($result))
         {
            echo "<tr>";
            echo "<td>".$Adhar=$record['name']. "</td>";
            echo "<td>".$Name=$record['Aadhar']. "</td>";
            echo "<td>".$crime=$record['address']. "</td>";
            echo "<td>".$crime=$record['victim_injury']. "</td>";
          //  echo "<td>".$crime=$record['Aadhar']. "</td>";
            echo "<td>" . '<img src="data:image/jpg;base64,' .  base64_encode($record["Photo"])  . '"
            style="width:100px; height: 100px" />';
            
            
         }
     }
     else{
        echo '<script>
           window.location.href="adhar_number.php";
           alert("Data not found")
           </script>';
     }
    
    ?>
</table>
    </body>