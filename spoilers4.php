<!DOCTYPE html>
<?php 


require 'includes/common.php';
$uid=$_SESSION['id'];
$sel="Select submit4,qual,qual1,qual2,qual3 from users where id='$uid'";
$sel_res=mysqli_query($con,$sel) or die(mysqli_error($con));
$arr=mysqli_fetch_array($sel_res);
if($arr[0]==1)
    header('Location:index.php');
else if($arr[1]==0 || $arr[2]==0 || $arr[3]==0)
{header('Location: index.php'); }
?>
<html lang="en" class="no-js">
	<head>
		
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="auto-submit4.js"></script>
		
	</head>
        <style>
            body{
                background: url(img11.jpg) no-repeat center;
                background-size: cover;
            }
             table th,td{
                text-align: center;
                
               
                
            }
            table th{
                font-family: Verdana, sans-serif;
            }
            td{
                color: red;
                font-size: 1.5em;
                font-family: Georgia, serif;
            }
            
        </style>
     
	<body>
		
                                        <?php
                                        include 'ifadded.php';
                                        include 'number_type.php';
                                        include 'header1.php';
        
        ?>
            <br />
            <div class="container">
                 <div><h2 style="color:#3498DB   ; float: right; font-family: Verdana, Arial, Helvetica, sans-serif"><b>Time left: <span id="time" class="text-danger"></span></b></h2></div>
       <div class="btn-group">
        
       <input type="button"  float="right" class="btn btn-primary" onclick="location.href='addedlist3.php'" value="CHECK ADDED ITEMS"/>
       </div>
                <?php
        $userid=$_SESSION['id'];
        $sel_query="Select balance from users where id='$userid'";
        $sel_query_res=mysqli_query($con,$sel_query);
        $row=mysqli_fetch_array($sel_query_res);
        ?>
       
            <h2 class="text-danger" style="font-family:Verdana, Arial, Helvetica, sans-serif;">Balance:<?php echo $row[0];?></h2>
        
        <h4 style="font-family: Times, Times New Roman, serif; font-size: 2em;" class="text-danger">
            3. SPOILERS
            </h4>
        <table class="table table-hover">
            <tr>
            <th >Name</th>
            <th>Type</th>
            
            <th >COST</th>
            <th>COST</th>
            <th></th>
            </tr>
            <?php
            //$userid=$_SESSION['id'];
            $bal=$row[0];
            $sel_query1="Select * from items where type=3";
            $sel_query_res1=mysqli_query($con,$sel_query1);
           
            while($row1=mysqli_fetch_array($sel_query_res1))
            {
                ?>
            <tr>
            <td class="text-danger"><?php echo $row1['name']; ?></td>
            <td class="text-danger"><?php echo $row1['type']; ?></td>
            <td class="text-danger"><?php echo $row1['cost']; ?></td>
            
            <?php if(if_added($row1['id'])==0 && $row1['cost']<=$bal)
            { ?>
            <?php if( count_type($row1['type'])<1){ ?>
            <td> <a href="additem4.php?id=<?php echo $row1['id']; ?>" class="btn btn-primary "  value="ADD ITEM" >ADD ITEM</a></td>
            <?php } else { ?>
                <td> <a href="additem4.php?id=<?php echo $row1['id']; ?>" class="btn btn-primary disabled "  value="ADD ITEM" >ADD ITEM</a></td>
          <?php  }
             }
            else
            {
             ?> <td> <a href="additem4.php?id=<?php echo $row1['id']; ?>" class="btn btn-primary disabled "  value="ADD ITEM" >ADD ITEM</a></td>
          <?php  } ?>
            </tr>
            <?php } ?>
        </table>
            <button class="btn btn-primary" onclick="location.href='aero4.php'" value="Continue" >CONTINUE</button>
            <button class="btn btn-primary" onclick="location.href='tyres4.php'" value="Back" >BACK</button>
            </div>
        </body>
</html>