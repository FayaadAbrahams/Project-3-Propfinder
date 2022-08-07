<?php
$txtId = $_POST['txtId'];
$txtFirstName = $_POST['txtFirstName'];
$txtLastName = $_POST['txtLastName'];
$radGender = $_POST['radAnswer'];
$txtEmail = $_POST['txtEmail'];
$txtUni = $_POST['txtUni'];
$txtAddress = $_POST['txtAddress'];
$txtCell = $_POST['txtCell'];
$dob = $_POST['birthday'];


// Database connection code
$conn = new mysqli('localhost', 'root', '','propfinder');


if($conn->connect_error)
{
    echo('Connection Failed: '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into studentregister(txtId, txtFirstName, txtLastName, radAnswer, txtEmail, txtUni, txtAddress, txtCell, birthday) values (?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("issssssss",
        $txtId,$txtFirstName,$txtLastName,$radGender,$txtEmail,$txtUni,$txtAddress,$txtCell,$dob);
    $stmt->execute();
    echo "Registration Successful";
    $stmt->close();
    $conn->close();
}


// Database insert SQL code
/*$sql = "INSERT INTO `studentregister` (`id`, `dbFirstName`, `dbLastName`, `dbGender`, `dbEmail`,`dbUni`,`dbAddress`,`dbCell`,`dbBirthday` )
VALUES ('0', '$txtId', '$txtFirstName', '$txtLastName', '$radGender', '$txtEmail','$txtUni','$txtAddress','$txtCell','$dob ')";*/

/*// Inserts data into the database
$rs = mysqli_query($conn, $sql);*/


