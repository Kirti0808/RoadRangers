<?php
function count_type($type)
{
    $con=mysqli_connect("localhost","root","mysql","sae_event") or die(mysqli_error($con));
$userid=$_SESSION['id'];
$sel_query="Select * from items_users where type='$type' and userid='$userid'";
$sel_query_res=mysqli_query($con,$sel_query);
$c= mysqli_num_rows($sel_query_res);
return $c;
}


?>