<?php include 'header.php';?>

 <div class="bg pt-5 pb-4">
  <h4 class="text-center"> Take Quiz   </h4>     
    <p class="text-center"> Home / MyCourses / Quiz Result </p>
  </div>
        
        <div class="container-fluid pt-5 pb-5">
        <div class="container">
        <div class="row pb-3">
    
        <div class="col-md-12">
     <table class='table table-sm table-bordered'>   
   
    <?php     
    if(isset($_POST['sb'])){
$score=0;$wrong=0;
$crsid=$_POST['crsid'];        
for($i=0;$i<10;$i++)
{

$rname="opt".$i;
$ans_given=$_POST[$rname];
$correct_ans=$_POST['ans'][$i];
if($ans_given==$correct_ans){
$score++;$clr="text-info";}
else {
$wrong++;$clr="text-danger";}

echo "<tr><th class='table-warning'> Question </th><td class='table-warning'>".$_POST['que'][$i]."</td></tr>";
echo "<tr><th> Answer Given </th><td class='".$clr."'>".$ans_given."</td></tr>";
echo "<tr><th> Correct Answer  </th><td>".$correct_ans."</td></tr> <tr> <th colspan='2'> &nbsp; </th> </tr>";

}
echo "<tr> <th colspan='2'> &nbsp; </th> </tr>";
echo "<tr class='table-warning'><th> No of Correct Answer </th><td>".$score."</td></tr>";
echo "<tr class='table-warning'><th> No of Wrong  Answer </th><td>".$wrong."</td></tr>";
$message=$score>7?"Pass the test":"Try again";
echo "<tr class='table-info'><th> Quiz Result </th><td>".$message."</td></tr>";
        
$sql="INSERT INTO play_quiz(cid,userid,correctAns,wrongAns) VALUES('$crsid','$_SESSION[sid]','$score','$wrong')" ;
if($conn->query($sql)===TRUE)
        echo"<br/><div class='alert alert-success'> <i class='iconfont iconfont-tick-mark'> </i> &nbsp;
    Result Saved</div>";
       else 
           echo "<br/><div class='alert alert-danger'> <i class='iconfont iconfont-delete'> </i> &nbsp;
     Error:</div>".$conn->error;

    }

    ?>
</table>    
                
           
                
            

                                     
</div>
            <?php include 'footer.php'; ?>