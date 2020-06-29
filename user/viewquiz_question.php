<script>if(performance.navigation.type ==2 ){ location.reload();}  </script>
<?php include 'header.php';?>

 <div class="bg pt-5 pb-4">
  <h4 class="text-center"> Take Quiz   </h4>     
    <p class="text-center"> Home / MyCourses / Quiz</p>
  </div>
        
        <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <?php 
            $sql= "select * from questions where Course_id='$_GET[id]'";
            $result=$conn->query($sql); 
            if($result->num_rows>=10){
            ?>
        <div class="row pb-3">
    
        <div class="col-md-12">
            
   
    <form action="viewquestion2.php" method="post">
        <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <?php for($i=0;$i<10;$i++){ 
      $cls=$i==0?'active':'';
      $idnm="nav".$i;?>
<a class="nav-item nav-link <?php echo $cls; ?>" id="<?php echo $idnm; ?>-tab" data-toggle="tab" href="#<?php echo $idnm; ?>" role="tab" aria-controls="<?php echo $idnm; ?>" aria-selected="false"><?php echo ($i+1); ?></a>
      <?php } ?>
      
</div>
</nav>
<div class="tab-content" id="nav-tabContent">
    
   

<?php
$i=0;
    $sql= "select * from questions where Course_id='$_GET[id]' order by RAND() LIMIT 10";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
        $quesid=$row['ques_id'];
        $que=$row['question'];
        $opt1=$row['option1'];
        $opt2=$row['option2'];
        $opt3=$row['option3'];
        $opt4=$row['option4'];
        $ans=$row['answer'];
        $answer=$row[$ans];
        $crsid=$_GET['id']; 
	$rname="opt".$i;
        $idnm="nav".$i;
        $cls=$i==0?'active':'';
$i++;
    ?>

  <div class="tab-pane fade show <?php echo $cls; ?>" id="<?php echo $idnm; ?>" role="tabpanel" aria-labelledby="<?php echo $idnm; ?>-tab">
       
    <h5 class="text-info pt-4 pb-3"> <i class='icofont icofont-question-circle'></i>   <?php echo $que; ?></h5>
<input type="hidden" name="que[]" value="<?php echo $que; ?>"/>
<input type="hidden" name="ans[]" value="<?php echo $answer; ?>"/> 
<input type="hidden" name="quesid" value="<?php echo $quesid; ?>"/>

<input type="hidden" name="crsid" value="<?php echo $crsid; ?>"/>
<input type="radio" name="<?php echo $rname;?>"  required value="<?php echo $opt1; ?>"/> <?php echo $opt1; ?> <br/>
<input type="radio"  name="<?php echo $rname;?>" required value="<?php echo $opt2; ?>"/> <?php echo $opt2; ?> <br/>
<input type="radio"  name="<?php echo $rname;?>" required value="<?php echo $opt3; ?>"/> <?php echo $opt3; ?> <br/>
<input type="radio"  name="<?php echo $rname;?>" required value="<?php echo $opt4; ?>"/> <?php echo $opt4; ?>
    </div>
<?php } ?>   </div>
         
                <br/> <br/>  <button type="submit" name="sb" class='btn bgs'> Submit Quiz</button>

                &nbsp; &nbsp; <button type="reset" name="rs" class='btn' style='background:#ffc000;color:#fff'> Reset Quiz</button>
 </form>
<br/>    
                <div  class="col-md-1"></div>

         
                 </div></div>    
                 
           
                
            
<?php }  
            else {
            echo  "<div class='alert alert-warning p-4 m-5'>No Quiz Found . Quiz of This Course will uplaod Soon </div> "; 
            
            }
             ?>
           
                                     
            </div></div>
                    
            <?php include 'footer.php'; ?>