<?php
require 'includes/common.php';
$uid=$_SESSION['id'];
if(!isset($_SESSION['email']))
{
    header('Location:index.php');
}
 
session_unset();
session_destroy();
header('Location:index.php');
?>
