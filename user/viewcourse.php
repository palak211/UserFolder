<?php include 'header.php';?>
            <?php
    $sql= "select * from course where Course_id='$_GET[id]'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
   $aid=$row['Course_id'];
 ?>  
<?php @include 'calc_d.php'; ?> 

 <div class="bg pt-5 pb-4">
  <h4 class="text-center"> Courses Overview   </h4>     
    <p class="text-center"> Home / Courses /<?php echo $row['Title'];?> </p>
  </div>
        
        <div class="container-fluid pt-5 pb-5">
    
        <div class="container">
        
<div class="row pb-3">
    
        <div class="col-md-9">
        <h4> Course Title : <?php echo $row['Title'];?></h4> <br/>
        <h6> Course Category  : &nbsp; 
<span style="color:sbrown"><?php echo $row['Category'];?> </span>&nbsp; | &nbsp; 
         Language  : &nbsp; 
<span style="color:brown"><?php echo $row['Language'];?> </span>&nbsp; | &nbsp;  
Duration  : &nbsp; 
<span style="color:brown"><?php echo round(($videoduration/60),0);?>  Hours </span>&nbsp; | &nbsp;
Level  : &nbsp;
<span style="color:brown"><?php echo $row['Level'];?> </span>
       
        </h6> <br/>
         <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    +       Course Lesson
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <ul type='square'>
          <?php
    $sql= "select * from video where Course_id='$_GET[id]'";
    $result1=$conn->query($sql);
    while($row1=$result1->fetch_assoc()){
   $vid=$row1['Video_id'];
 ?>  
<li style="padding:8px">  
    
    <?php echo "<a href='playvideo.php?vid=$vid' style='color:black'>".$row1['Title']."</a>";?> 
              
              </li>          
<?php } ?>
          </ul>

          
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingfive">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
     +   Study Material 
          </button>
      </h2>
    </div>
    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
      <div class="card-body">
  <ul>
          <?php
    $sql= "select * from study_material where Course_id='$_GET[id]'";
    $result1=$conn->query($sql);
    while($row1=$result1->fetch_assoc()){
   $fid=$row1['M_id'];
 ?>  
<li style="padding:8px">  
    <i class='icofont icofont-file-pdf'></i> &nbsp;
    <?php echo "<a href='myfiles.php?fid=$fid' style='color:black'>".$row1['Title']."</a>";?> 
              
              </li>          
<?php } ?>
          </ul>

      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    +      Course Overview
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
             <?php echo $row['Overview'];?>
  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    +      Course Outline
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
          
      <?php echo $row['Outline'];?>
      </div>
    </div>
  </div>
<div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
    +      Course Requirments
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
          
        
       <?php echo $row['Requirements'];?>
        </div>
    </div>
  </div>
</div>
                      
            
        
            
        </div>
<div class='col-md-3'> 
    <div class='pb-3 pt-3'>
    <img src='../admin/<?php echo $row['Image'];?>' width='90%' height='200px' class="border rounded"> 
        </div>
    
    <?php 
    
    echo "<a class='btn btn-block' href='viewquiz_question.php?id=$aid' style='background:#20d1e9; color:#fff;'> Take Quiz </a>"; 
               
     echo @"<a class='btn btn-block bgy' href='myfiles.php?fid=$fid' style=' color:#fff;'> Study Material </a>";
    
    ?>
      <br/>
    <h5> Write Your Review  </h5> <sup class="fcy"> _____________ </sup><br><br>  
<form action="" method="post">
    <textarea type="text" class="form-control" maxlength="1000" rows="5" name="rvw" required placeholder="Type Here " required minlength="5"></textarea><br>
            
            
        <button type="submit" name="sb" class='btn bgs '> Send Feedback  </button>
            </form>

    
    
<?php 
    if(isset($_POST['sb'])){
    $sql="INSERT INTO course_review(review,userid,courseid) VALUES('$_POST[rvw]','$_SESSION[sid]','$aid')";
    if($conn->query($sql)===TRUE)
    echo "<script>window.alert('Thanks for Your Feedback');</script>";
    else
    echo "Error :".$conn->error;
    }
?>   
    

    </div></div>        </div></div>    
    <?php include 'footer.php'; ?>