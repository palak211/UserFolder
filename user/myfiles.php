<?php include 'header.php';?>
      <?php
    $sql= "select * from study_material where M_id='$_GET[fid]'";
    $result1=$conn->query($sql);
    $row1=$result1->fetch_assoc();
    $fd=$row1['M_id'];
$crid=$row1['Course_id'];
    $title=$result1->num_rows>0?$row1['Title']:'';       
    ?>      
 <div class="bg pt-5 pb-4">
  <h4 class="text-center">  Study Material   </h4>     
     
    <p class="text-center"> Home / Courses / <?php echo $title;?> </p>
  </div>
        
        <div class="container pt-4 pb-5">

                
            <div class="row">
                
        <div  class="col-md-12">
<?php if($result1->num_rows>0){ ?>
        
<iframe src='../admin/<?php echo $row1['File']?>' height="800" width="100%" > 
    </iframe>           
            
<?php }
else 
echo "<div class='alert alert-info p-4 m-5'>No File Found . Study Material will uplaod Soon </div> ";
?>
            
        </div>
            
            
            </div></div>
        <?php include 'footer.php'; ?>