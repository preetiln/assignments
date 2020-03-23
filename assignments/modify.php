<?php
include_once('database.php'); 
$sql1 = "SELECT * FROM myresume";
$result = mysqli_query($conn, $sql1);
?>
<!DOCTYPE html>
<html>
<head>
<title>Resume Modifier</title>
<style>
table{
width: 95%;
color: #black;
font-family: monospace;
font-size: 25px;
text-align: centre;
}
th {
background-color: black;
color: white;
}
tr {
width: 80%;
color: #black;
font-family: monospace;
font-size: 25px;
text-align: centre;
background-color: #f1f1f1
}
.dangerbtn {
  background-color: #f44336;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
</head>
<body>
<h1><center> RESUME DETAILS </h1></center>
<h2> PERSONAL DETAILS </h2>
<table>
<tr>
<th>SlNo</th>
<th>Full Name</th>
<th>Date of birth</th>
<th>Address</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
	while($row=mysqli_fetch_assoc($result))
	{
?>
	<tr>
		<td><?php echo $row['SlNo']; ?> </td>
		<td><?php echo $row['fullname']; ?> </td>
		<td><?php echo $row['dob']; ?> </td>
		<td><?php echo $row['address']; ?> </td>
		<td><button class="dangerbtn" name="edit"><a href="index2.php?SlNo=<?php echo $row['SlNo']; ?>"> Edit </a></button></td>
		<td><button class="dangerbtn" name="delete"><a href="delete.php?SlNo=<?php echo $row['SlNo']; ?>"> Delete </a></button></td>
	</tr>
<?php
	}
?>
</table>
<br><br>
<h2> EDUCATIONAL DETAILS </h2>
<table>
<tr>
<th>SlNo</th>
<th>Qualification</th>
<th>Institution</th>
<th>Pass Year</th>
<th>Grade</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
	$sql1 = "SELECT * FROM myresume";
	$result = mysqli_query($conn, $sql1);
	while($row=mysqli_fetch_assoc($result))
	{
?>
	<tr>
		<td><?php echo $row['SlNo']; ?> </td>
		<td><?php echo $row['sslc']; ?> </td>
		<td><?php echo $row['institution1']; ?> </td>
		<td><?php echo $row['passyear1']; ?> </td>
		<td><?php echo $row['grade1']; ?> </td>
		<td><button class="dangerbtn"><a href="index2.php?SlNo=<?php echo $row['SlNo']; ?>"> Edit </a></button></td>
		<td><button class="dangerbtn"><a href="delete.php?SlNo=<?php echo $row['SlNo']; ?>"> Delete </a></button></td>
	</tr>
	<tr>
		<td><?php echo $row['SlNo']; ?> </td>
		<td><?php echo $row['puc']; ?> </td>
		<td><?php echo $row['institution2']; ?> </td>
		<td><?php echo $row['passyear2']; ?> </td>
		<td><?php echo $row['grade2']; ?> </td>
		<td><button class="dangerbtn"><a href="index2.php?SlNo=<?php echo $row['SlNo']; ?>"> Edit </a></button></td>
		<td><button class="dangerbtn"><a href="delete.php?SlNo=<?php echo $row['SlNo']; ?>"> Delete </a></button></td>
	</tr>
	<tr>
		<td><?php echo $row['SlNo']; ?> </td>
		<td><?php echo $row['graduation']; ?> </td>
		<td><?php echo $row['institution3']; ?> </td>
		<td><?php echo $row['passyear3']; ?> </td>
		<td><?php echo $row['grade3']; ?> </td>
		<td><button class="dangerbtn"><a href="index2.php?SlNo=<?php echo $row['SlNo']; ?>"> Edit </a></button></td>
		<td><button class="dangerbtn"><a href="delete.php?SlNo=<?php echo $row['SlNo']; ?>"> Delete </a></button></td>
	</tr>
	<tr>
		<td><?php echo $row['SlNo']; ?> </td>
		<td><?php echo $row['postgrad']; ?> </td>
		<td><?php echo $row['institution4']; ?> </td>
		<td><?php echo $row['passyear4']; ?> </td>
		<td><?php echo $row['grade4']; ?> </td>
		<td><button class="dangerbtn"><a href="index2.php?SlNo=<?php echo $row['SlNo']; ?>"> Edit </a></button></td>
		<td><button class="dangerbtn"><a href="delete.php?SlNo=<?php echo $row['SlNo']; ?>"> Delete </a></button></td>
	</tr>
<?php
	}
?>
</table>
<br><br>
<h2> PROJECT DETAILS </h2>
<table>
<tr>
<th>SlNo</th>
<th>Project Title</th>
<th>Description</th>
<th>Technology</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
	$sql1 = "SELECT * FROM myresume";
	$result = mysqli_query($conn, $sql1);
	while($row=mysqli_fetch_assoc($result))
	{
?>
	<tr>
		<td><?php echo $row['SlNo']; ?> </td>
		<td><?php echo $row['title1']; ?> </td>
		<td><?php echo $row['description1']; ?> </td>
		<td><?php echo $row['technology1']; ?> </td>
		<td><button class="dangerbtn"><a href="index2.php?SlNo=<?php echo $row['SlNo']; ?>"> Edit </a></button></td>
		<td><button class="dangerbtn"><a href="delete.php?SlNo=<?php echo $row['SlNo']; ?>"> Delete </a></button></td>
	</tr>
	<tr>
		<td><?php echo $row['SlNo']; ?> </td>
		<td><?php echo $row['title2']; ?> </td>
		<td><?php echo $row['description2']; ?> </td>
		<td><?php echo $row['technology2']; ?> </td>
		<td><button class="dangerbtn"><a href="index2.php?SlNo=<?php echo $row['SlNo']; ?>"> Edit </a></button></td>
		<td><button class="dangerbtn"><a href="delete.php?SlNo=<?php echo $row['SlNo']; ?>"> Delete </a></button></td>
	</tr>
	<tr>
		<td><?php echo $row['SlNo']; ?> </td>
		<td><?php echo $row['title3']; ?> </td>
		<td><?php echo $row['description3']; ?> </td>
		<td><?php echo $row['technology3']; ?> </td>
		<td><button class="dangerbtn"><a href="index2.php?SlNo=<?php echo $row['SlNo']; ?>"> Edit </a></button></td>
		<td><button class="dangerbtn"><a href="delete.php?SlNo=<?php echo $row['SlNo']; ?>"> Delete </a></button></td>
	</tr>
<?php
	}
?>
</table>
<br><br>
<h2> STRENGTHS, WEAKNESS & HOBBIES </h2>
<table>
<tr>
<th>SlNo</th>
<th>Strengths</th>
<th>Weakness</th>
<th>Hobbies</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
	$sql1 = "SELECT * FROM myresume";
	$result = mysqli_query($conn, $sql1);
	while($row=mysqli_fetch_assoc($result))
	{
?>
	<tr>
		<td><?php echo $row['SlNo']; ?> </td>
		<td><?php echo $row['strength']; ?> </td>
		<td><?php echo $row['weakness']; ?> </td>
		<td><?php echo $row['hobby']; ?> </td>
		<td><button class="dangerbtn"><a href="index2.php?SlNo=<?php echo $row['SlNo']; ?>"> Edit </a></button></td>
		<td><button class="dangerbtn"><a href="delete.php?SlNo=<?php echo $row['SlNo']; ?>"> Delete </a></button></td>
	</tr>
<?php
	}
?>
</table>
</body>
</html>