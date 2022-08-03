<?php
// Database connection code

$con = mysqli_connect('localhost', 'root', '','propfinder');

// Get the post records - this retrieves data from the studentRegister.html page
$txtId = $_POST['txtId'];
$txtFirstName = $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$radGender = $_POST['radAnswer'];
$txtEmail = $_POST['txtEmail'];
$txtUni = $_POST['txtUni'];
$txtAddress = $_POST['txtAddress'];
$txtCell = $_POST['txtCell'];
$dob = $_POST['birthday'];

// Database insert SQL code
$sql = "INSERT INTO `studentregister` (`id`, `dbFirstName`, `dbLastName`, `dbGender`, `dbEmail`,`dbUni`,`dbAddress`,`dbCell`,`dbBirthday` )
VALUES ('0', '$txtId', '$txtFirstName', '$txtLastName', '$radGender', '$txtEmail','$txtUni','$txtAddress','$txtCell','$dob ')";

// Inserts data into the database
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "Contact Records Inserted";
}

