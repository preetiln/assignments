<html>
<head> 
<title> Search Page </title>
</head>
<form method="post" action="search.php">
<link rel="stylesheet" href="style.css">
<body>
  <div class="container">
    <h1><center> RESUME BUILDER </h1></center>
    <h4><center>Please fill in the below details</center></h4>
    <hr>
	<div>
    <label for="fullname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter your complete name to generate your resume" name="fullname" required>
	<br><br>
	 <button type="submit" name="search" class="submitbtn">Submit</button>
	 </form>
<?php
include_once('database.php');
if(isset($_POST['search']))
{
	$fullname = $_POST['fullname'];
	$query = "SELECT * FROM myresume WHERE fullname='$fullname'";
	$query_run = mysqli_query($conn,$query);	
	while($row=mysqli_fetch_assoc($query_run))
	{
?>
<h1><center>Resume</center></h1>
  <h2>Name: <?php echo $row['fullname']; ?></h2>
  <hr>
  <br>
  <h1>Personal details: </h1>
  <h3>Date Of Birth: <?php echo $row['dob']; ?></h3>
  <h3>Address: <?php echo $row['address']; ?></h3>
  <hr><br><br>
  <h1> Educational details: </h1>
  <table table border="1">
	<tr>
	<th>Qualification</th>
	<th>Institution</th>
	<th>Pass Year</th>
	<th>Grade</th>
	</tr>
	<tr>
		<td><?php echo $row['sslc']; ?> </td>
		<td><?php echo $row['institution1']; ?> </td>
		<td><?php echo $row['passyear1']; ?> </td>
		<td><?php echo $row['grade1']; ?> </td>
	</tr>
	<tr>
		<td><?php echo $row['puc']; ?> </td>
		<td><?php echo $row['institution2']; ?> </td>
		<td><?php echo $row['passyear2']; ?> </td>
		<td><?php echo $row['grade2']; ?> </td>
	</tr>
	<tr>
		<td><?php echo $row['graduation']; ?> </td>
		<td><?php echo $row['institution3']; ?> </td>
		<td><?php echo $row['passyear3']; ?> </td>
		<td><?php echo $row['grade3']; ?> </td>
	</tr>
	<tr>
		<td><?php echo $row['postgrad']; ?> </td>
		<td><?php echo $row['institution4']; ?> </td>
		<td><?php echo $row['passyear4']; ?> </td>
		<td><?php echo $row['grade4']; ?> </td>
	</tr>
	</table>
<br><br>
<h2> PROJECT DETAILS </h2>
<hr><br>
<h3>Project 1</h3>
Title: <?php echo $row['title1']; ?><br>
Description: <?php echo $row['description1']; ?><br>
Technology:<?php echo $row['technology1']; ?><br>
<br>
<h3>Project 2</h3>
Title: <?php echo $row['title2']; ?><br>
Description: <?php echo $row['description2']; ?><br>
Technology: <?php echo $row['technology2']; ?><br>
<br>
<h3>Project 3</h3>
Title: <?php echo $row['title2']; ?><br>
Description: <?php echo $row['description2']; ?><br>
Technology:<?php echo $row['technology2']; ?><br>
<br><hr>
<h2> STRENGTHS & WEAKNESS </h2>
<h3> Strengths </h3>
Strengths: <?php echo $row['strength']; ?><br>
<h3> Weakness </h3>
Weakness: <?php echo $row['weakness']; ?><br>
<br><hr>
<h2> HOBBIES </h2>
<h3> Hobbies </h3>
Hobbies: <?php echo $row['hobby']; ?>
<div>
  <h3>Date:</h3><br>
  <h3>Signature</h3>
  </div>
</body>
<?php
	}
}
?>
</head> 
</body>
</html>
