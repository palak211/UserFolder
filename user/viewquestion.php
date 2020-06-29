
<?php include 'header.php';?>

 <div class="bg pt-5 pb-4">
  <h4 class="text-center"> Take Quiz   </h4>     
    <p class="text-center"> Home / MyCourses / Quiz</p>
  </div>
        
        <div class="container-fluid pt-5 pb-5">
        <div class="container">
        <div class="row pb-3">
    
        <div class="col-md-12">
<?php
    $sql= "select * from questions where Course_id='$_GET[id]' limit 8";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
        $quesid=$row['ques_id'];
        $que=$row['question'];
        $opt1=$row['option1'];
        $opt2=$row['option2'];
        $opt3=$row['option3'];
        $opt4=$row['option4'];
        $ans=$row['answer'];
        $crsid=$_GET['id']; 
    ?>

    <h5> <?php echo $que; ?></h5>
    <form action="" method="post">
<input type="hidden" name="que" value="<?php echo $que; ?>"/>
<input type="hidden" name="ans" value="<?php echo $ans; ?>"/> 
<input type="hidden" name="quesid" value="<?php echo $quesid; ?>"/> 
<input type="radio" name="opt[]" required value="<?php echo $opt1; ?>"/> <?php echo $opt1; ?> <br/>

<input type="radio" name="opt[]" required value="<?php echo $opt2; ?>"/> <?php echo $opt2; ?> <br/>

<input type="radio" name="opt[]" required value="<?php echo $opt3; ?>"/> <?php echo $opt3; ?> <br/>
        
<input type="radio" name="opt[]" required value="<?php echo $opt4; ?>"/> <?php echo $opt4; ?>
    
            
            
    </form>
    
    
   
    <?php     
    
    }

    ?>
    
</table>
                
           
                
            

                                     
                <div  class="col-md-1"></div>


                 
                 
        
        
                 
                 
                 
                 </div></div></div>
            <?php include 'footer.php'; ?>