<?php include 'header.php';?>
      
 <div class="bg pt-5 pb-4">
  <h4 class="text-center"> Update Your Profile  </h4>     
    <p class="text-center"> Home / profile</p>
  </div>
        
        <div class="container pt-2 pb-2">

        <?php
        $result=$conn->query("SELECT * from student where Sid='$_SESSION[sid]'");
        $row=$result->fetch_assoc();
        $pimg=$row['Img'];
        ?>
                
        <div class="container-fluid  pt-5">
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo $pimg;?>" height="180px" width="100%"  class="border p-1 round circle"/>
                </div>
                <div class="col-md-8">
                        <form action="" method="post" enctype="multipart/form-data">
        
                    <label>Select Profile</label>
                <input type="file" class="form-control" required name="fl" accept=".jpg,.png,.jpeg">

                   Accept (jpg/png/jpeg )are allowed <br><br>
                    <button type="submit" class="btn btn-info" name="uimg">Upload Image</button>
                    </form>
                    <?php 
    if(isset($_POST['uimg'])){
        
         $dirname="images/";
    $flname=$dirname.$_FILES['fl']['name'];
    $fl_tname=$_FILES['fl']['tmp_name'];
        $type=strtolower(pathinfo($flname,PATHINFO_EXTENSION));
        if($type!='jpg'&&$type!='jpeg'&&$type!='png')
            echo "Only.jpg, .jpeg,.png Files are Allowed";
        else{
   if(move_uploaded_file($fl_tname,$flname)){
                
        $sql="UPDATE student set Img='$flname' where Sid='$_SESSION[sid]'";

 
    if($conn->query($sql)===TRUE)
        echo"<script>window.location='student.php'</script>";
       else 
           echo "<br/><div class='alert alert-danger'> <i class='icofont icofont-delete'> </i> &nbsp;
     Error:</div>".$conn->error;
    }
       else
    echo "<br/><div class='alert alert-danger'> <i class='icofont icofont-delete'> </i> &nbsp;
     Error:Error in Uploading Image File</div>";
    }}
?>  
                </div>
                
                
                </div> <hr>
                    <form action="" method="post">
        
                <h4> Edit Profile Info </h4>
                <div class="row">
                    <div class="col-md-1"></div>
                <div class="col-md-5">
            
                    <label>First Name</label>
                    <input type="text" class="form-control"pattern="[a-z A-Z]{3,40}"  required name="fn" value="<?php echo $row['FirstName'];?>"> <br>
                    <label>E-Mail</label>
                    <input type="email" class="form-control" required name="em" value="<?php echo $row['Email'];?>">
                </div>
                
                <div class="col-md-5">
        
                    <label>Last Name</label>
     <input type="text" class="form-control" required name="ln" pattern="[a-z A-Z]{3,40}" value="<?php echo $row['LastName'];?>"><br>
                    <label>Phone Number</label>
                    <input type="text" class="form-control"pattern="[0-9]{10}" required name="ph" value="<?php echo $row['Pno'];?>">
                
                    </div>
                <div class="col-md-1"></div>
            </div><br>
                <div class="row">
                    <div class="col-md-1"></div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-info"name='up'>Update Profile</button>
                        </div>
                
                </div>
                </form>
                <?php
                if(isset($_POST['up'])){
                $sql="UPDATE student set FirstName='$_POST[fn]',LastName='$_POST[ln]',Email='$_POST[em]',
                Pno='$_POST[ph]'where Sid='$_SESSION[sid]'";
                    if($conn->query($sql)===TRUE)
    echo "<script>window.location='student.php';</script>";
else 
    echo "<br/><div class='alert alert-danger'> <i class='icofont icofont-delete'> </i> &nbsp;
     Error:</div>".$conn->error;
    }
                        ?>
                        </div></div>
                
         
                <?php include 'footer.php'; ?>