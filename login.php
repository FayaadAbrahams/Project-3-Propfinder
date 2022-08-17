<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost","root","","propfinder");
    if($conn->connect_error){
        die("Failed to Connect : ".$conn->connect_error);
    }else {
        $stmt = $conn->prepare("select * from student_register where fldEmail = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if(password_verify($password,$data['fldPassword'])){
                echo "<h1>Login Successful</h1>";
            }else{
                echo "<h1>Incorrect Email or Password Combination </h1>";
            }
        }else {
            echo "<h1> Incorrect Email or Password Combination</h1>";
        }
    }
