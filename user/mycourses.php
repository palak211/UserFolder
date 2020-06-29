<?php include 'header.php';?>
<div class="bg pt-5 pb-4">
  <h4 class="text-center"> My Courses  </h4>     
    <p class="text-center"> Home / Courses </p>
  </div>
        
        <div class="container-fluid pt-5 pb-5">
    
        <div class="container">
 

            <div class="row pb-3">
        
        <?php
    $sql= "select * from course,cart where cart.userid='$_SESSION[sid]' and cart.status='enroll' and cart.course_id=course.Course_id order by cart.added_on DESC";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
   $aid=$row['Course_id'];
 ?> 
        
                
<div class="col-md-4">
        
        
        <div class="border text-center">
            
        <?php echo "<a href='viewcourse.php?id=$aid' style='color:black;text-decoration:none'>"; ?>
        <img src="../admin/<?php echo $row['Image'];?>" width="80%" height="200px" class="border rounded p-1"/>
            <div style="min-height:75px;padding-top:10px">
        <h6 class='p-2 text-center'><?php echo $row['Title'];?></h6>
            </div>
        
        <?php echo "</a>";?> 
          </div></div>                   
            
     <?php }  ?>
        
            
            </div></div></div>
    
<?php include 'footer.php'; ?>    
    