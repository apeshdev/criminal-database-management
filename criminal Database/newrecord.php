<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Address Code</title>
   </head>
   <header>
    <nav>
      <a class="links" href="home.php">HOME</a>
      <div class="dropdown-menu">
        <button class="menu-btn">Old Record</button>
        <div class="menu-content">
        <a class="links-hidden" href="adhar_number.php">Aadhar Number </a>
        <a class="links-hidden" href="addresscode.php">Address</a>
         <a class="links-hidden" href="bycrime.php">ByCrime</a>
        </div>
        </div>
      <a class="links" href="newrecord.php">New Record</a>
      <a class="links" href="Policestation.php">Police Station</a>
      <a class="links" href="about.php">About Us</a>
      </nav>
      
   </header>
   <body>
    <h1>ADD CRIMINAL RECORD</h1>
   </body>
   <body>
  <div class="adhar1">
    <div class="criminalrecord">  </div>
    <div class="content">
      <form action="record_Store.php" method="post">

        <div class="user-details">
          <div class="input-box">
            <span class="details">Aadhar Number</span>
            <input type="text" placeholder="Enter your Aadhar Number" name="Adhar" required>
          </div>

          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Enter your Name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" placeholder="Enter your Age" name="Age" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="Phone" required>
          </div>


          <div class="input-box">
            <span class="details"> Address</span>
            <input type="text" placeholder="Enter your Address" name="Address" required>
          </div>
          <div class="input-box">
            <span class="details"> Type Of Offence</span>
            <input type="text" placeholder="Enter the Offence" name="crime" required>
          </div>

          <div class="input-box">
            <span class="details"> Jail Term</span>
            <input type="text" placeholder="Enter the Jail Term" name="punishment" required>
          </div>
          
          
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" placeholder="Enter your city" name="city" required>
          </div>
          <div class="input-box">
            <span class="details">Area PIN</span>
            <input type="text" placeholder="Enter your PIN" name="PIN" required>
          </div>
          <div class="input-box">
            <span class="details">Local Area</span>
            <input type="text" placeholder="Enter your Local area" name="Area" required>
          </div>


           <div class="input-box">
            <span class="details">State</span>
            <input type="text" placeholder="Enter your State" name="state" required>
          </div>
          <div class="input-box">
            <span class="details">Nationality</span>
            <input type="text" placeholder="Enter the Nationality" name="Nationality" required>
          </div>
        </div>
        
        <div class="gender-details">
       
          <label>   
            GENDER :
            </label>  
          <select name="gender">  
            <option value="default">Choose</option>  
            <option value="MALE">MALE</option>  
            <option value="FEMALE">FEMALE</option>  
            <option value="OTHER">OTHER</option>  
           
            </select>  
          </div>

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
        <div class="input-box">
            <span class="details"> Policestation</span>
            <input type="text" placeholder="Enter the Policestation" name="policestation" required>
          </div>
          
        <div><input type="submit" class="btn" value="Add Record" name="Add Address"/>
     
          
            
            
           
       
      </form>

     
    </div>
  </div>
</body>
</html>