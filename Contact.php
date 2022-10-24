<?php
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$message = $_POST['message'];
//  Database
$conn = new mysqli('localhost','root','','student_accomadation'); 
if ($conn -> connect_error){
    die ('Connection failed : ' .$conn->connect_error);
} 
else
{
    $stmt = $conn -> prepare("insert into contact_us(firstName, email,message) 
    values(?,?,?)");
    $stmt->bind_param("sss" , $firstName,$email,$message);
$stmt->execute();
echo "successful";
$stmt ->close();
$conn ->close();

}
