<?php include 'header.php';?>
      
 <div class="bg pt-5 pb-4">
  <h4 class="text-center">  Your Result  </h4>     
    <p class="text-center"> Home / Result </p>
  </div>
        
        <div class="container pt-5 pb-5">


<div class="row">
<div class="col-md-12">
    
            
            
           <table class="table table-striped table-bordered table-hover">
<tr>
    <th>Topic</th>
    <th>Date and Time</th>
    <th>Correct Answer</th>
    <th>Wrong Answer</th>

    

    
</tr>    
    <?php
    $sql= "SELECT * from play_quiz q,course  c where q.userid='$_SESSION[sid]' and c.Course_id=q.cid";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){

    echo"<tr>";
    echo"<td>".$row['Title']."</td>";
    echo"<td>".$row['datetime']."</td>";
    echo"<td>".$row['correctAns']."</td>";
    echo"<td>".$row['wrongAns']."</td>";
   
        echo"</tr>";
    }
    

    ?>
    
</table>
                </div></div></div>
            <?php include 'footer.php'; ?>