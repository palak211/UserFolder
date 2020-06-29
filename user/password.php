<?php include 'header.php';?>
      
 <div class="bg pt-5 pb-4">
  <h4 class="text-center"> Change Your Password  </h4>     
    <p class="text-center"> Home / Change Password </p>
  </div>
        
        <div class="container pt-4 pb-5">

                
            <div class="row">
                
                <div  class="col-md-3"></div>
        <div  class="col-md-6">
              <form action="" method="post">
            <h3> Change Password</h3><hr>
            <label>Existng Password</label>
            <input type="password"name='cp' class="form-control" required>
                  <label>New Password</label>
<input type="password" name='np'class="form-control"pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"title="Min 8 character Password must contain a number,a special character(_@#%^&*) and an uppercase"
 required><br>
            <button type="submit" name='sb' class='btn bgs'>Change Password</button>
            </form>
            <?php
        if(isset($_POST['sb'])){
        $result=$conn->query("SELECT Pswrd  from student where Sid='$_SESSION[sid]'");
            $row=$result->fetch_assoc();
            $pw=$row['Pswrd'];
            if($pw==$_POST['cp']){
$sql="UPDATE student set Pswrd='$_POST[np]'where Sid='$_SESSION[sid]'";
if($conn->query($sql)===TRUE)
    echo"<br/><div class='alert alert-success'> <i class='icofont icofont-tick-mark'> </i> &nbsp;
Password Changed</div>";
else 
    echo "<br/><div class='alert alert-danger'> <i class='icofont icofont-delete'> </i> &nbsp;
     Error:</div>".$conn->error;
    }
else
 echo"<br/><div class='alert alert-success'> <i class='icofont icofont-tick-mark'> </i> &nbsp;
Password  Not Matched</div>";
            
        }
     ?>       
                
                
                </div>
                
                <div  class="col-md-4"></div>
                
                
                </div>
        </div>
                </div>
        
                
                
     
    
    
    </body></html>
            
            
            
            
        