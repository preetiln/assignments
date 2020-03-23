<?php
include_once('database.php');
if(isset($_POST['save']))
{
	$fullname = $_POST['fullname'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];
	$sslc = $_POST['sslc'];
	$institution1 = $_POST['institution1'];
	$passyear1 = $_POST['passyear1'];
	$grade1 = $_POST['grade1'];
	$puc = $_POST['puc'];
	$institution2 = $_POST['institution2'];
	$passyear2 = $_POST['passyear2'];
	$grade2 = $_POST['grade2'];
	$graduation = $_POST['graduation'];
	$institution3 = $_POST['institution3'];
	$passyear3 = $_POST['passyear3'];
	$grade3 = $_POST['grade3'];
	$postgrad = $_POST['postgrad'];
	$institution4 = $_POST['institution4'];
	$passyear4 = $_POST['passyear4'];
	$grade4 = $_POST['grade4'];
	$title1 = $_POST['title1'];
	$description1 = $_POST['description1'];
	$technology1 = $_POST['technology1'];
	$title2 = $_POST['title2'];
	$description2 = $_POST['description2'];
	$technology2 = $_POST['technology2'];
	$title3 = $_POST['title3'];
	$description3 = $_POST['description3'];
	$technology3 = $_POST['technology3'];
	$strength = $_POST['strength'];
	$weakness = $_POST['weakness'];
	$hobby = $_POST['hobby'];
	
	$sql3 = "UPDATE myresume SET fullname='$fullname',dob='$dob',address='$address',
	sslc='$sslc',institution1='$institution1',passyear1='$passyear1',grade1='$grade1',
	puc='$puc',institution2='$institution2',passyear2='$passyear2',grade2='$grade2',
	graduation='$graduation',institution3='$institution3',passyear3='$passyear3',grade3='$grade3',
	postgrad='$postgrad',institution4='$institution4',passyear4='$passyear4',grade4='$grade4',
	title1='$title1',description1='$description1',technology1='$technology1',
	title2='$title2',description2='$description2',technology2='$technology2',
	title3='$title3',description3='$description3',technology3='$technology3',
	strength='$strength',weakness='$weakness',hobby='$hobby' WHERE fullname='$fullname'";


	if (mysqli_query($conn, $sql3)) {
		header('location:modify.php');
	 }
	 else 
	 {
		echo "Error: " . $sql3 . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>