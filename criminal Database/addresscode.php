<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Adhar Number</title>
   </head>
   <header>
    <nav>
      <a class="links" href="home.php">HOME</a>
    
      <div class="dropdown-menu">
        <button class="menu-btn">Old Record</button>
        <div class="menu-content">
        <a class="links-hidden" href="photocheck.php">Photocheck</a>
        <a class="links-hidden" href="adhar_number.php">Aadhar Number </a>
        <a class="links-hidden" href="addresscode.php">Address</a>
        <a class="links-hidden" href="bycrime.php">ByCrime</a>
        <a class="links-hidden" href="photocheck.php">Photocheck</a>
        </div>
        </div>
      <a class="links" href="newrecord.php">New Record</a>
      <a class="links" href="Policestation.php">Police Station</a>
      <a class="links" href="about.php">About Us</a>
      
      </nav>
   </header>
<body>
  
  <div class="adhar1">
    <div class="adhar">
    
    
    <div class="title">Search Criminal Details</div>
    <div class="content">
      <form action="addressprint.php" method="post">

        <div class="user-details">
          <div class="input-box">
            <span class="details">Address </span>
            <input type="text" placeholder="Enter Address s" name="Adhar" required>
          </div>
          <input type="submit" class="btn" value="Search" name="Search criminal data">
        </div>
      </form>
    </div>
  </div>
  </div>


</body>
</html>