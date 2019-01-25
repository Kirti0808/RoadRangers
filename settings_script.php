<?php

require 'includes/common.php';

$name=mysqli_real_escape_string($con, $_POST['name']);
$uid=$_SESSION['id'];
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['password']);

$password=md5($password);
    if($stmt=$con->prepare("Update users SET password=?, name=?, email=? where id=?")){
$stmt->bind_param("ssss", $password,$name,$email,$uid); // 's' specifies the variable type => 'string'

$stmt->execute();
    echo "<h3 style='color:black;'>SETTINGS CHANGED!</h3>";
    $stmt->close();
}

?>
