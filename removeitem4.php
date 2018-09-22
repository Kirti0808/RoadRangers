<?php
require 'includes/common.php';
$item_id=$_GET['id'];
$user_id= $_SESSION['id'];
$del_query="Delete from items_users where userid='$user_id' and itemid='$item_id'";
$del_query_res=mysqli_query($con,$del_query) or die(mysqli_error($con));
$sel_query="Select cost from items where id='$item_id'";
$sel_query_res=mysqli_query($con,$sel_query);
$row=mysqli_fetch_array($sel_query_res);
$sel_query1="Select balance from users where id='$user_id'";
$sel_query_res1=mysqli_query($con,$sel_query1);
$row1=mysqli_fetch_array($sel_query_res1);
$bal=$row1[0]+(0.5)*$row[0];
$update_query="Update users set balance='$bal' where id='$user_id'";
$update_query_res=mysqli_query($con,$update_query);
header('Location: addedlist4.php');
?>
