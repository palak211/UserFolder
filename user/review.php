<?php include 'header.php';?>
      
 <div class="bg pt-5 pb-4">
  <h4 class="text-center">  Your Reviews   </h4>     
    <p class="text-center"> Home / Reviews </p>
  </div>
        
        <div class="container pt-5 pb-5">


<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">

    <form action="" method="post">
        
    <h3 align="center"> Share Your Reviews Here. </h3>
        <hr/>
<label><i class="icofont icofont-ui-message   fcy"></i> Your Reviews </label>
<textarea name="review" placeholder="Type Here......." rows="5" maxlength="3000" class="form-control" required></textarea><br/>
        <hr/>
        <button type="submit" name="sb" class='btn bgs'> Share </button>
            </form>

    
    
<?php 
    if(isset($_POST['sb'])){
    $sql="INSERT INTO review(review,review_by) VALUES('$_POST[review]','$_SESSION[sid]')";
    if($conn->query($sql)===TRUE)
    echo "Reviews Shared";
    else
    echo "Error :".$conn->error;
    }
?>   
    </div>
    </div>
</div>
 <?php include '../footer.php'; ?>
 