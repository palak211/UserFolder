<?php include 'header.php';?>
      <?php
    $sql= "select * from video where Video_id='$_GET[vid]'";
    $result1=$conn->query($sql);
    $row1=$result1->fetch_assoc();
    $vd=$row1['Video_id'];
$crid=$row1['Course_id'];
            
    ?>      
 <div class="bg pt-5 pb-4">
  <h4 class="text-center"> Our Courses   </h4>     
    <p class="text-center"> Home / Courses / <?php echo $row1['Title']?> </p>
  </div>
        
        <div class="container pt-4 pb-5">

                
            <div class="row">
                
        <div  class="col-md-8">
    <video src='../admin/<?php echo $row1['Video']?>' height="400" width="100%"  controls> 
            </video><br><br>           
   
<h5> Ask Question : </h5> <sup class="fcy"> _____________ </sup><br><br>  
<form action="" method="post">
    <textarea type="text" class="form-control" maxlength="1000" name="que"  placeholder="Ask Your Query"></textarea><br>
            
            
        <button type="submit" name="sb" class='btn bgs '> Share Query  </button>
            </form>

    
    
<?php 
    if(isset($_POST['sb'])){
    $sql="INSERT INTO user_que(question,userid,topicid) VALUES('$_POST[que]','$_SESSION[sid]','$vd')";
    if($conn->query($sql)===TRUE)
    echo "<script>window.alert('Question Sent');</script>";
    else
    echo "Error :".$conn->error;
    }
?>   
    
            
            
        </div>
           <div class="col-md-4">
                <h5> Topic List  </h5>
                 <ul type='square'>
          <?php
    $sql= "select * from video where Course_id='$crid'";
    $result1=$conn->query($sql);
    while($row1=$result1->fetch_assoc()){
   $vid=$row1['Video_id'];
    $clr=$vd==$vid?"coral":"black";
 ?>  
<li style="padding-top:8px">  
    
    <?php echo "<a href='playvideo.php?vid=$vid' style='color:".$clr."'>".$row1['Title']."</a>";?> 
              
              </li>          
<?php } ?>
          </ul>

                
                </div> 
            
            
            </div></div>
        <?php include 'footer.php'; ?>