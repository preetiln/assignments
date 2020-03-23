<!DOCTYPE html>
<html>
<body>
<head> 
<title> Index Page </title>
</head>
<form method="POST" action="update.php">
<link rel="stylesheet" href="style.css">
  <div class="container">
    <h1><center> RESUME DETAILS EDITOR PAGE </h1></center>
    <h4><center>Please fill in this form to update your CV</center></h4>
    <hr>
	<?php
	include_once('database.php');
	$SlNo = $_GET['SlNo'];
	$sql1 = "SELECT * FROM myresume WHERE SlNo=$SlNo";
	$result = mysqli_query($conn, $sql1);
	while($row = mysqli_fetch_assoc($result))
	{
	?>
	<div>
	<h2> PERSONAL INFO </h2>
	<hr>
    <label for="fullname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter your complete name" name="fullname" value="<?php echo $row['fullname'];?>" required>
	<br>
    <label for="dob"><b>Date of Birth</b></label>
    <input type="date" placeholder="Enter your complete name" name="dob" value="<?php echo $row['dob']; ?>" required>
	<br><br>
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your address" name="address" value="<?php echo $row['address']; ?>" required>
    <br>
	<br>
	</div>
	
	<div><hr>
	<h2> EDUCATIONAL INFO </h2>
	<hr>
	<div>
	<h3> SSLC </h3>
	<label for="sslc"><b>Qualification</b></label>
	<select id="sslc" class="qualification" name="sslc"  value="<?php echo $row['sslc']; ?>"  required>
	<option value="sslc">SSLC</option>
	</select><br>
    <label for="institution1"><b>Institution</b></label>
    <input type="text" placeholder="Enter your school name" name="institution1" value="<?php echo $row['institution1']; ?>" required>
	<br>
    <label for="passyear1"><b>Pass Year</b></label>
    <input type="text" placeholder="Enter your pass year" name="passyear1"  value="<?php echo $row['passyear1']; ?>" required>
	<br>
    <label for="grade1"><b>Grade/CGPA</b></label>
    <input type="text" placeholder="Enter your aggregate" name="grade1" value="<?php echo $row['grade1']; ?>"  required>
    <br>
	<br>
	</div>
	<div>
	<h3> PUC </h3>
	<label for="puc"><b>Qualification</b></label>
	<select id="puc" class="qualification" name="puc" value="<?php echo $row['puc']; ?>" >
	<option value="puc"> PUC </option>
	</select><br>
    <label for="institution2"><b>Institution</b></label>
    <input type="text" placeholder="Enter your school name" name="institution2" value="<?php echo $row['institution2']; ?>" >
	<br>
    <label for="passyear2"><b>Pass Year</b></label>
    <input type="text" placeholder="Enter your pass year" name="passyear2" value="<?php echo $row['passyear2']; ?>" >
	<br>
    <label for="grade2"><b>Grade/CGPA</b></label>
    <input type="text" placeholder="Enter your aggregate" name="grade2" value="<?php echo $row['grade2']; ?>" >
    <br>
	<br>
	</div>
	<div>
	<h3> GRADUATION </h3>
	<label for="graduation"><b>Qualification</b></label>
	<select id="graduation" class="qualification" name="graduation" value="<?php echo $row['graduation']; ?>" >
	<option value="graduation"> Graduation </option>
	</select><br>
    <label for="institution3"><b>Institution</b></label>
    <input type="text" placeholder="Enter your school name" name="institution3" value="<?php echo $row['institution3']; ?>" >
	<br>
    <label for="passyear3"><b>Pass Year</b></label>
    <input type="text" placeholder="Enter your pass year" name="passyear3" value="<?php echo $row['passyear3']; ?>" >
	<br>
    <label for="grade3"><b>Grade/CGPA</b></label>
    <input type="text" placeholder="Enter your aggregate" name="grade3" value="<?php echo $row['grade3']; ?>" >
    <br>
	<br>
	</div>
	<div>
	
	<h3> POST GRADUATION </h3>
	<label for="postgrad"><b>Qualification</b></label>
	<select id="postgrad" class="qualification" name="postgrad" value="<?php echo $row['postgrad']; ?>" >
	<option value="postgrad"> Post Graduation </option>
	</select><br>
    <label for="institution4"><b>Institution</b></label>
    <input type="text" placeholder="Enter your school name" name="institution4" value="<?php echo $row['institution4']; ?>" >
	<br>
    <label for="passyear4"><b>Pass Year</b></label>
    <input type="text" placeholder="Enter your pass year" name="passyear4" value="<?php echo $row['passyear4']; ?>" >
	<br>
    <label for="grade4"><b>Grade/CGPA</b></label>
    <input type="text" placeholder="Enter your aggregate" name="grade4" value="<?php echo $row['grade4']; ?>" >
    <br>
	<br>
	</div>
	</div>
	<div>
	<hr>
	<h2> PROJECTS </h2>
	<hr>
	<div>
    <label for="title1"><b> Project-1 </b></label>
    <input type="text" placeholder="Enter your project name" name="title1"  value="<?php echo $row['title1']; ?>"  required>
	<br>
    <label for="description1"><b>Description</b></label>
    <input type="text" placeholder="Enter your project Description" name="description1"  value="<?php echo $row['description1']; ?>"  required>
	<br>
    <label for="technology1"><b>Technology</b></label>
    <input type="text" placeholder="Enter technologies/softwares used" name="technology1"  value="<?php echo $row['technology1']; ?>"  required>
    <br><br><br>
	</div>
	<div>
    <label for="title2"><b> Project-2 </b></label>
    <input type="text" placeholder="Enter your project name" name="title2" value="<?php echo $row['title2']; ?>" >
	<br>
    <label for="description2"><b>Description</b></label>
    <input type="text" placeholder="Enter your project Description" name="description2" value="<?php echo $row['description2']; ?>" >
	<br>
    <label for="technology2"><b>Technology</b></label>
    <input type="text" placeholder="Enter technologies/softwares used" name="technology2" value="<?php echo $row['technology2']; ?>" >
    <br><br><br>
	</div>
	<div>
    <label for="title3"><b> Project-3 </b></label>
    <input type="text" placeholder="Enter your project name" name="title3" value="<?php echo $row['title3']; ?>" >
	<br>
    <label for="description3"><b> Description </b></label>
    <input type="text" placeholder="Enter your project Description" name="description3" value="<?php echo $row['description3']; ?>" >
	<br>
    <label for="technology3"><b> Technology </b></label>
    <input type="text" placeholder="Enter technologies/softwares used" name="technology3" value="<?php echo $row['technology3']; ?>" >
    <br><br>
	</div>
	</div>
	<hr>
	<h2> STRENGTH/WEAKNESS </h2>
	<hr>
	<div>
    <label for="strength"><b> Strengths </b></label>
    <input type="text" placeholder="Mention your strengths here" name="strength"  value="<?php echo $row['strength']; ?>" required>
	<br>
    <label for="weakness"><b> Weakness </b></label>
    <input type="text" placeholder="Meantion your weakness here" name="weakness"  value="<?php echo $row['weakness']; ?>" required>
    <br><br><br>
	</div>
	<hr>
	<h2> HOBBIES </h2>
	<hr>
	<div>
    <label for="hobby"><b> Hobbies </b></label>
    <input type="text" placeholder="Mention your hobbies" name="hobby"  value="<?php echo $row['hobby']; ?>" required>
    <br><br><br>
	</div>
    <button type="submit" name="save" class="submitbtn"><a href="modify.php">UPDATE</button>
	<?php
	}
	?>
</div>
</form>
</body>
</html>