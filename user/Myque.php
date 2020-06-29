<?php include 'header.php';?>
      
 <div class="bg pt-5 pb-4">
  <h4 class="text-center">  Your Asked Questions  </h4>     
    <p class="text-center"> Home / my Question </p>
  </div>
        
        <div class="container pt-5 pb-5">


<div class="row">
<div class="col-md-12">
    
            
            
           <table class="table table-striped table-bordered table-hover">
<tr>
    <th>Topic</th>
    <th>Question</th>
    <th>Date</th>
    <th>Reply</th>
    

    
</tr>    
    <?php
    $sql= "select * from user_que q,video v where q.userid='$_SESSION[sid]' and q.topicid=v.Video_id";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){

    echo"<tr>";

    echo"<td>".$row['Title']."</td>";
    echo"<td>".$row['question']."</td>";
    echo"<td>".$row['ask_date']."</td>";
    echo"<td>".$row['reply']."</td>";
        echo"</tr>";
    }
    

    ?>
    
</table>
                </div></div></div>
            <?php include 'footer.php'; ?>