<?php
include('db_conn.php');

if(isset($_POST['btn_signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $confirmpassword= $_POST['confirm_password'];


if($password != $confirmpassword){
    header('location: error.php');

}
else{
$status="active";
$role="student";
$stmt = $conn->prepare("INSERT INTO `users`( `role`, `username`, `password`,`user_status` ) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $role,$username,$password,$status);

// Execute the query
if ($stmt->execute()) {
    header('location: waiting.php');
} else {
    header('location: error.php');
    
}

// Close the connection
$stmt->close();
$conn->close();

}
   
}

?>