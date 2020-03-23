<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>
<form method="POST" action="insert.php">
<link rel="stylesheet" href="style.css">
<div class="container">
    <h1><center> RESUME BUILDER </h1></center>
    <h4><center>Please fill in this form to create your CV</center></h4>
    <hr>
</div>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Personalinfo')" id="defaultOpen">PERSONAL DETAILS</button>
  <button class="tablinks" onclick="openCity(event, 'Educationalinfo')">EDUCATIONAL DETAILS</button>
  <button class="tablinks" onclick="openCity(event, 'Projects')">PROJECTS</button>
  <button class="tablinks" onclick="openCity(event, 'Hobbies')">STRENGTHS, WEAKNESS & HOBBIES</button>
</div>


<div id="Personalinfo" class="tabcontent">
	<h2> PERSONAL INFO </h2>
	<hr>
    <label for="fullname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter your complete name" name="fullname" required>
	<br>
    <label for="dob"><b>Date of Birth</b></label>
    <input type="date" name="dob" required>
	<br><br>
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your address" name="address" required>
    <br>
	<br>
	</div>


	<div id="Educationalinfo" class="tabcontent"><hr>
	<h2> EDUCATIONAL INFO </h2>
	<hr>
	<div>
	<h3> SSLC </h3>
	<label for="sslc"><b>Qualification</b></label>
	<select id="sslc" class="qualification" name="sslc" required>
	<option value="sslc">SSLC</option>
	</select><br>
    <label for="institution1"><b>Institution</b></label>
    <input type="text" placeholder="Enter your school name" name="institution1" required>
	<br>
    <label for="passyear1"><b>Pass Year</b></label>
    <input type="text" placeholder="Enter your pass year" name="passyear1" required>
	<br>
    <label for="grade1"><b>Grade/CGPA</b></label>
    <input type="text" placeholder="Enter your aggregate" name="grade1" required>
    <br>
	<br>
	</div>
	<div>
	<h3> PUC </h3>
	<label for="puc"><b>Qualification</b></label>
	<select id="puc" class="qualification" name="puc">
	<option value="puc"> PUC </option>
	</select><br>
    <label for="institution2"><b>Institution</b></label>
    <input type="text" placeholder="Enter your school name" name="institution2">
	<br>
    <label for="passyear2"><b>Pass Year</b></label>
    <input type="text" placeholder="Enter your pass year" name="passyear2">
	<br>
    <label for="grade2"><b>Grade/CGPA</b></label>
    <input type="text" placeholder="Enter your aggregate" name="grade2">
    <br>
	<br>
	</div>
	<div>
	<h3> GRADUATION </h3>
	<label for="graduation"><b>Qualification</b></label>
	<select id="graduation" class="qualification" name="graduation">
	<option value="graduation"> Graduation </option>
	</select><br>
    <label for="institution3"><b>Institution</b></label>
    <input type="text" placeholder="Enter your school name" name="institution3">
	<br>
    <label for="passyear3"><b>Pass Year</b></label>
    <input type="text" placeholder="Enter your pass year" name="passyear3">
	<br>
    <label for="grade3"><b>Grade/CGPA</b></label>
    <input type="text" placeholder="Enter your aggregate" name="grade3">
    <br>
	<br>
	</div>
	<div>
	<h3> POST GRADUATION </h3>
	<label for="postgrad"><b>Qualification</b></label>
	<select id="postgrad" class="qualification" name="postgrad">
	<option value="postgrad"> Post Graduation </option>
	</select><br>
    <label for="institution4"><b>Institution</b></label>
    <input type="text" placeholder="Enter your school name" name="institution4">
	<br>
    <label for="passyear4"><b>Pass Year</b></label>
    <input type="text" placeholder="Enter your pass year" name="passyear4">
	<br>
    <label for="grade4"><b>Grade/CGPA</b></label>
    <input type="text" placeholder="Enter your aggregate" name="grade4">
    <br>
	<br>
	</div>
	</div>

	<div id="Projects" class="tabcontent">
	<h2> PROJECTS </h2>
	<hr>
	<div>
    <label for="title1"><b> Project-1 </b></label>
    <input type="text" placeholder="Enter your project name" name="title1" required>
	<br>
    <label for="description1"><b>Description</b></label>
    <input type="text" placeholder="Enter your project Description" name="description1" required>
	<br>
    <label for="technology1"><b>Technology</b></label>
    <input type="text" placeholder="Enter technologies/softwares used" name="technology1" required>
    <br><br><br>
	</div>
	<div>
    <label for="title2"><b> Project-2 </b></label>
    <input type="text" placeholder="Enter your project name" name="title2">
	<br>
    <label for="description2"><b>Description</b></label>
    <input type="text" placeholder="Enter your project Description" name="description2">
	<br>
    <label for="technology2"><b>Technology</b></label>
    <input type="text" placeholder="Enter technologies/softwares used" name="technology2">
    <br><br><br>
	</div>
	<div>
    <label for="title3"><b> Project-3 </b></label>
    <input type="text" placeholder="Enter your project name" name="title3">
	<br>
    <label for="description3"><b> Description </b></label>
    <input type="text" placeholder="Enter your project Description" name="description3">
	<br>
    <label for="technology3"><b> Technology </b></label>
    <input type="text" placeholder="Enter technologies/softwares used" name="technology3">
    <br><br>
	</div>
	</div>

	<div id="Hobbies" class="tabcontent">
	<h2> STRENGTH/WEAKNESS </h2>
	<hr>
	<div>
    <label for="strength"><b> Strengths </b></label>
    <input type="text" placeholder="Mention your strengths here" name="strength" required>
	<br>
    <label for="weakness"><b> Weakness </b></label>
    <input type="text" placeholder="Meantion your weakness here" name="weakness" required>
    <br><br><br>
	</div>
	<div>
	<hr>
    <label for="hobby"><b> Hobbies </b></label>
	<h2> HOBBIES </h2>
    <input type="text" placeholder="Mention your hobbies" name="hobby" required>
    <br><br><br>
	</div>
	<div><center>
    <button type="submit" name="save" class="submitbtn"><a href="search.php">Submit</a></button>
	</form>
	<form action="search.php">
	<button type="submit" name="search" class="submitbtn"><a href="search.php">Search</a></button>
	</form>
	<form action="modify.php">
	<button type="submit" name="search" class="submitbtn"><a href="modify.php">Dashboard</a></button>
	</form>
	</center>
	</div>
	</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
