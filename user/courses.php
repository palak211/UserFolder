<?php include 'header.php';?>
      
 <div class="bg pt-5 pb-4">
  <h4 class="text-center"> Our Courses   </h4>     
    <p class="text-center"> Home / Courses </p>
  </div>
        
        <div class="container pt-5 pb-5">
            <div class="row pb-3">
        
        <?php
    $sql= "select * from course where Category='$_GET[crsid]' order by Course_id DESC";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){
   $aid=$row['Course_id'];
 ?> 
        
                
<div class="col-md-4">
        
        
        <div class="border">
            
        <?php echo "<a href='viewcourse.php?id=$aid' style='color:black;text-decoration:none'>"; ?>
        <img src="admin/<?php echo $row['Image'];?>" width="100%" height="250px" class="border rounded p-1"/>
            <div style="min-height:75px;padding-top:10px">
        <h5 class='p-2 text-center'><?php echo $row['Title'];?></h5>
            </div>
        
        <?php echo "</a>";?> 
    <div class="row pb-1">
    <div class="col-6"><p class='pl-1'>
        <i class="icofont icofont-tag fcy"></i> &nbsp; <?php echo $row['Language'];?> </p>
    </div>
    
    <div class="col-6 text-right"><p class='pr-1'>
        <i class="icofont icofont-price fcy"></i>  &nbsp; 
        <?php echo $row['fee'];?></p>
        </div></div>
        </div></div>                   
            
     <?php }  ?>
        
            
            </div></div>
    
    
    <?php include 'footer.php'; ?>