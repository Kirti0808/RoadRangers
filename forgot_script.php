<?php
require 'includes/common.php';
$Err="";
if(isset($_POST['submit'])){
    
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    $name= mysqli_real_escape_string($con, $_POST['name']);
    $contact= mysqli_real_escape_string($con, $_POST['contact']);
   
if($stmt = $con->prepare('SELECT id,email FROM users WHERE email = ? and contact=? and name=?')){
$stmt->bind_param('sss', $email,$contact,$name); // 's' specifies the variable type => 'string'

$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id,$emaill);

$row = $stmt->num_rows;
}


if($row>0)
{
    while($stmt->fetch()){
    $_SESSION['id']=$id;
    $uid=$_SESSION['id'];
    
    $_SESSION['email']=$emaill;
    
    header('Location:settings.php');
    exit();
    }
}
else
{
    echo "<h3>Invalid credentials</h3>";
}

}

?>


