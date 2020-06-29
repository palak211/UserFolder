<script>if(performance.navigation.type ==2 ){ location.reload();}  </script>
<?php include 'header.php';?>

 <div class="bg pt-5 pb-4">
  <h4 class="text-center"> Take Quiz   </h4>     
    <p class="text-center"> Home / MyCourses / Quiz</p>
  </div>
        
        <div class="container-fluid pt-5 pb-5">
        <div class="container">
        <div class="row pb-3">
    
        <div class="col-md-12">
    <form action="viewquestion2.php" method="post">
        

<?php
$i=0;
    $sql= "select * from questions where Course_id='$_GET[id]' order by RAND() LIMIT 6";
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
$i++;
    ?>

        
    <h5> <i class='icofont icofont-question-circle'></i>   <?php echo $que; ?></h5>
<input type="hidden" name="que[]" value="<?php echo $que; ?>"/>
<input type="hidden" name="ans[]" value="<?php echo $answer; ?>"/> 
<input type="hidden" name="quesid" value="<?php echo $quesid; ?>"/>

<input type="hidden" name="crsid" value="<?php echo $crsid; ?>"/>
<input type="radio" name="<?php echo $rname;?>" checked required value="<?php echo $opt1; ?>"/> <?php echo $opt1; ?> <br/>
<input type="radio"  name="<?php echo $rname;?>" required value="<?php echo $opt2; ?>"/> <?php echo $opt2; ?> <br/>
<input type="radio"  name="<?php echo $rname;?>" required value="<?php echo $opt3; ?>"/> <?php echo $opt3; ?> <br/>
<input type="radio"  name="<?php echo $rname;?>" required value="<?php echo $opt4; ?>"/> <?php echo $opt4; ?>
    
<?php } ?>            
                <br/> <br/>  <button type="submit" name="sb" class='btn bgs'> Submit Quiz</button>

                &nbsp; &nbsp; <button type="reset" name="rs" class='btn' style='background:#ffc000;color:#fff'> Reset Quiz</button>
 </form>
<br/>    
                <div  class="col-md-1"></div>

         
                 </div></div>    
                 
           
                
            

                                     
</div>
            <?php include 'footer.php'; ?>