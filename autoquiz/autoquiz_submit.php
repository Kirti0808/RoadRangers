<?php
require 'includes/common.php';
$email=$_SESSION['email'];


?>
<html>
    <head>
       
        <meta charset="UTF-8">
       
  <script>
      confirm("Are you sure you want to submit?")
  </script>
  <script>
      (function(window, location) {
history.replaceState(null, document.title, location.pathname+"#!/history");
history.pushState(null, document.title, location.pathname);

window.addEventListener("popstate", function() {
  if(location.hash === "#!/history") {
    history.replaceState(null, document.title, location.pathname);
    setTimeout(function(){
      location.replace("../index.php");
    },0);
  }
}, false);
}(window, location));
</script>
   
  <title>Fabricate your dream </title>
   <link rel="stylesheet" href="css4/style.css">
     
    </head>
    <body>
       
        <?php
       
        $c=1;
        $uid=$_SESSION['id'];
        $sel="Select name,score,submitdate from users order by score desc,submitdate asc";
        $selres=mysqli_query($con,$sel);    
        $select="Select submitdate from users where id='$uid'";
        $selre=mysqli_query($con,$select);    
        $arr=mysqli_fetch_array($selre);
        
        ?>
         <h1 style="text-align:center; font-family: 'Georgia', serif; color:#CB4335  ;">LEADERBOARD</h1>
        <table >
            <thead>
            <tr>
            <th >Position</th>
            <th>Name</th>
            <th >Score</th>
           <th>Time</th>
           
            </tr>
            </thead>
            <tbody>
        <?php while($row=mysqli_fetch_array($selres))
        
        
             
                { ?>
        
            <tr>
                <td><?php echo $c; ?></td>
                <td ><?php echo $row['name']; ?></td>
                
                <td ><?php echo $row['score']; ?></td>
                <td ><?php echo $row['submitdate']; ?></td>
            </tr>
            
        
            <?php 
            $c+=1;
        } ?>
            </tbody>
        <table/>
         <?php
         $sel="Select * from users order by score desc, submitdate asc";
         $sel_q=mysqli_query($con,$sel) or die(mysqli_error($con));
         $uid=$_SESSION['id'];
         $upd="Update users set submit=1 where id='$uid'";
         $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
         $i=0;
         $k=0;
         while($row=mysqli_fetch_array($sel_q))
         {
             
             if($i==3)
                 break;
             else{
                 if($_SESSION['id']==$row['id']){
                     $k=1;
                 ?>
         
      <div class="container">
         <div class="jumbotron">
             <h3>Congratulations! You've qualified for next round! </h3>
             <?php
             $upd="Update users set qual=1 where id='$uid'";
         $upd_q=mysqli_query($con,$upd) or die(mysqli_error($con));
         ?>
             <input type='button' class="btn btn-primary"onclick="location.href='../round1/shop.php'" value="Move to next round" />
         </div>
         <?php 
                break;
             }
             $i+=1;
             }
             
         }
         ?>
<?php         if($k!=1){
    ?>
      </div>
         <div class="container">
         <div class="jumbotron" >
        <h3>
            Sorry! You've been eliminated!
        </h3>
</div>
         <?php
}
         ?>
    </div>
    </body>
</html>

