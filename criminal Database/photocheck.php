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
        <a class="links-hidden" href="adhar_number.php">Aadhar Number </a>
        <a class="links-hidden" href="addresscode.php">Address</a>
        <a class="links" href="Policestation.php">Police Station</a>
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
      <form action="Photodata.php" method="post">

      <div>
              <label for="photo-upload" class="upload-btn">PHOTO :</label>
              <input id="photo-upload" type="file" onchange="previewPhoto(event)" name="Photo">
              <div id="photo-container"></div>
              <script>
                function previewPhoto(event) {
                  const file = event.target.files[0];
                  const reader = new FileReader();
                  reader.onload = function(e) {
                    const photoPreview = document.createElement("img");
                    
                    document.getElementById("photo-container").appendChild(photoPreview);
                  }
                  reader.readAsDataURL(file);
                }
              </script>
        
        </div>
          <input type="submit" class="btn" value="Search" name="Search criminal data">
        </div>
      </form>
    </div>
  </div>
  </div>


</body>
</html>