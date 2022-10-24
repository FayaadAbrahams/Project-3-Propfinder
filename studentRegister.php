<?php
//Fetch the data from the Html values and store in PHP variables
$txtName = $_POST['txtName'];
$txtPassword = $_POST['txtPassword'];
$radGender = $_POST['radAnswer'];
$txtEmail = $_POST['txtEmail'];
$txtUni = $_POST['txtUni'];
$txtAddress = $_POST['txtAddress'];
$txtCell = $_POST['txtCell'];
$dob = $_POST['birthday'];

// Database connection code
$conn = new mysqli('localhost', 'root', '','propfinder');

//If email exists, produce error code
if(!filter_var($_POST['txtEmail'], FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email address');
}
$select = mysqli_query($conn, "SELECT `fldEmail` FROM `student_register` WHERE `fldEmail` = '".$_POST['txtEmail']."'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
    exit('This email is already being used');
}

if($conn->connect_error)
{
    echo('Connection Failed: '.$conn->connect_error);
}else{
    //Hash the password, so it is secure
    $hashedPwd = password_hash($txtPassword, PASSWORD_DEFAULT);
    //Passing the values into the database, binding them to their datatypes(s = String)
    $stmt = $conn->prepare("insert into student_register(fldName, fldPassword, fldGender, fldEmail, fldUni, fldAddress, fldCell, fldDOB) values (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$txtName,$hashedPwd,$radGender,$txtEmail,$txtUni,$txtAddress,$txtCell,$dob);
    $stmt->execute();
    //Redirect page to home after successful registration
    header("Location: home.html");
    $stmt->close();
    $conn->close();
}

