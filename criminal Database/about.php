<!DOCTYPE html>
<html>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 18.2%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #B041FF;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: gray;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 800,  color: white;
  background-color:  linear-gradient(135deg, #71b7e6, #9b59b6);
  text-align: center;
  cursor: pointer;
  width: 50;
}

.button:hover {
  background-color:  linear-gradient(135deg, #71b7e6, #9b59b6);;
}

@media screen and (max-width: 650px) {
  .column {
    width: 50%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About</h1>
  <p>  </p>
  <p>  </p>
</div>

<h1 style="text-align:center">Our Team Members</h1>





<ul class="team-members">
  <li>
    <img src="ankit.jpg" alt="Team Member 1">
    <h3>Ankit Mewada</h3>
    <p>Email:mewadaankit05@gmail.com<br>Phone:8103577650</p>
  </li>
  <li>
    <img src="anand.jpg" alt="Team Member 2">
    <h3>Anand Patel</h3>
    <p>Email:anandpatel217@gmail.com.com<br>Phone:6261081827</p>
  </li>
  <li>
    <img src="satyammishra.jpg" alt="Team Member 3">
    <h3>Satyam Mishra</h3>
    <p>Email:spstm.11@gmail.com<br>Phone:7024327764</p>
  </li>
  <li>
    <img src="meha.jpg" alt="Team Member 4">
    <h3>Mehak Kushwaha</h3>
    <p>Email:mehakkushwaha2@gmail.com<br>Phone:9109625932</p>
  </li>
  <li>
    <img src="Apesh.jpg" alt="Team Member 5">
    <h3>Apesh Ahirwar</h3>
    <p>Email:apeshdev@gmail.com<br>Phone:7049532491</p>
  </li>
</ul>
<style>

.team-members {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
}

.team-members li {
  width: 200px;
  margin: 20px;
  text-align: center;
}

.team-members img {
  width: 150px;
  height: 150px;
  border-radius: 60%;
}

.team-members h3 {
  margin-top: 10px;
  font-size: 1.2em;
}

.team-members p {
  margin-top: 5px;
  font-size: 0.9em;
}
</style>

</html>