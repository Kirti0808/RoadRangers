


<?php
require 'includes/common.php';
$uid=$_SESSION['id'];
$se="Select submit from users where id='$uid' ";
$ser=mysqli_query($con,$se) or die(mysqli_error($con));
$row=mysqli_fetch_array($ser);
if($row[0]=='1')
    header("Location: index.php");

?>
<html>
    <head>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      body{
          background-color:#E5E7E9;
      }
      .caption{
          position: absolute;
          left:35%;
          bottom: 45%;
      }
      .container1{
          text-align: center;
          position: relative;
      }
      body{
      background: url(img4.jpg) no-repeat center;
      background-size: cover;
      }
      #ghi{
          color: red;
      }
      .card{
          margin-top: 15%;
          margin-right: 50%;
          margin: 25px solid;
          border: 1px solid;
          padding: 25px;
          
      }
  </style>      
  <title>Fabricate your dream </title>
    </head>
    <body>
        <?php
        include 'header1.php';
        include 'if_answered.php';
        ?>
        <div class="container">
           <h1 style="text-align:center; font-family: 'Georgia', serif; color:#CB4335  ;">AUTOQUIZ</h1>
  <?php         
if(isset($_POST['submit'])){

$qid=$_GET['id'];
$ans=$_POST['ans'];


}
$userid=$_SESSION['id'];
$insquery="Insert into quiz_users(qid,uid)values('$qid','$userid')";
$insres= mysqli_query($con, $insquery) or die(mysqli_error($con));

$sel="Select answer from quiz where id='$qid' ";
$selquery=mysqli_query($con,$sel) or die(mysqli_error($con));
$arr= mysqli_fetch_array($selquery);
$userid=$_SESSION['id'];
if($ans==$arr['answer'])
{

$email=$_SESSION['email'];
$sel="Select * from users where email='$email'";
$selres=mysqli_query($con,$sel) or die(mysqli_error($con));
$row= mysqli_fetch_array($selres);
$score=$row['score']+10;

$up="Update users set score='$score'where email='$email'";
$GLOBALS['q1']=1;
$upres=mysqli_query($con,$up) or die(mysqli_error($con));
$_COOKIE['a']=1;
?>
           <div class="card" >
               <h3 class="text-danger">CORRECT ANSWER!</h3>
             <?php  if($qid==1) { ?>
               <button class="btn btn-primary" onclick="location.href='autoquiz.php?id=<?php echo $qid+1; ?>'" > NEXT QUESTION </button>
              
                <button class="btn btn-primary" onclick="location.href='autoquiz_submit.php'" > FINAL SUBMIT </button> 
             <?php } else
             { ?>
                <button class="btn btn-primary" onclick="location.href='autoquiz_submit.php'" > FINAL SUBMIT </button> 
            <?php  } ?>
               <br />
               <br />
               <button class="btn btn-primary" onclick="location.href='autoquiz_leaderboard.php'" > LEADERBOARD </button>
           </div>
<?php
}
else{
    $del="Delete from quiz_users where qid='$qid' and uid='$userid'";
    $del_q=mysqli_query($con,$del) or die(mysqli_error($con));
    ?>
   <div class="card" >
               <h3 class="text-danger">INCORRECT ANSWER!</h3>
               <button class="btn btn-primary" onclick="location.href='autoquiz.php?id=<?php echo $qid; ?>'" > GO BACK </button>
               
               <button class="btn btn-primary" onclick="location.href='autoquiz_submit.php'" > FINAL SUBMIT </button> 
               <br />
               <br />
               <button class="btn btn-primary" onclick="location.href='autoquiz_leaderboard.php'" > LEADERBOARD </button>
           </div>
<?php     
}
?>


