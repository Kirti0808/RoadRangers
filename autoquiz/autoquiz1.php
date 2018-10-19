<?php
require 'C:/wamp/www/sae_event/includes/common.php';
$qid=$_GET['id'];
$uid=$_SESSION['id'];
$se="Select submit from users where id='$uid' ";
$ser=mysqli_query($con,$se) or die(mysqli_error($con));
$row=mysqli_fetch_array($ser);
if($row[0]=='1')
    header("Location:C:/wamp/www/sae_event/index.php");

?>
<html>
    <head>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css1/style.css">

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
      background-size: 100% 130%;
      background-position-y: 5px;
      }
      #ghi{
          color: red;
      }
      #text1{
          font-size: 1.5em;
          color: blue;
      }
      .card{
          margin-top: 15%;
          margin-right: 50%;
          margin: 25px solid;
          
          padding: 25px;
          
      }
  </style>      
  <title>Fabricate your dream </title>
    </head>
    <?php
        include 'C:/wamp/www/sae_event/autoquiz/header1.php';
        ?>
    <body>
        <?php
        include 'C:/wamp/www/sae_event/autoquiz/if_answered.php';
        ?>
        <div class="container">
           <h1 style="text-align:center; font-family: 'Georgia', serif; color:#CB4335  ;">AUTOQUIZ</h1>
           
           <?php
           $sel="Select question from quiz where id='$qid'";
           $sel_query=mysqli_query($con,$sel) or die(mysqli_error($con));
           $arr=mysqli_fetch_array($sel_query);
           ?>
           <div>
                <span><label for="name"> <p style="font-family:Bradley Hand, cursive; font-size:1.7em; color: #E74C3C    ;"><?php echo $qid.".".$arr['question']; $GLOBALS['qid']=$qid; ?></p>
          </label></span>
             <form id="sign-form" class="sign-form"  method="POST" action="autoquiz_script1.php?id=<?php echo $qid; ?>">
                <ol class="questions">
                    <li>
                       
						<input class="active" id="name" name="ans" type="text" placeholder="Type your answer here!" style="font-size: 1.3em; font-family:Bradley Hand, cursive; font-size:1.7em; color: #1678B9    ;" autofocus/>
                    </li>
                  
                    
                </ol>
          
            
           
           <br />
            <br />
           
       
                     <?php
                 if(if_answered($qid))
                 {?>
                 <input name="submit" class="btn btn-primary disabled" style="font-family: Georgia, serif;" value="SUBMIT"/>
                  <input type='button' class="btn btn-primary " value="Go to Next Question" style="font-family: Georgia, serif;" onclick="location.href='autoquiz1.php?id=<?php echo $qid+1; ?>'"/>
                  <br/>
                  <br />
                  
                 <h3 id="def"></h3>
                 <?php }    
                 else { ?>
                 <input name="submit" type="submit" class="btn btn-primary" style="font-family: Georgia, serif;" value="SUBMIT" />
                  <button class="btn btn-primary" style="font-family: Georgia, serif;" onclick="location.href='autoquiz_submit.php'" > FINAL SUBMIT </button> 
                     
                     
                <?php } ?>
            </form>     
              
               
               <br />
        </div>            
             <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

  

    <script  src="js1/index.js"></script>
            
               
        
            <br />
        </div>
        
        
    </body>
    
    
    
</html>