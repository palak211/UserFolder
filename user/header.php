
<?php include '../db.php'?>
<?php
session_start();
if(!isset($_SESSION['sid']))
echo"<script>window.location='../index.php'</script>"; 
include '../db.php';
?>


<html>
    <head>
        <title>Skill Share</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/icofont.css" rel="stylesheet">    
    <style> 
        .bgy{ background:#ffc000; color:#fff; }  
        .fcy{ color:#ffc000; }
        .bgs{ background:#20d1e9; color:#fff; font-weight: 600}  
        .bg { 
  background-image: url("../banner2.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
}
         .bg1 { 
  background-image: url("homepage.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
padding-top:170px;
     height:500px;            
text-align: center ;            
color: white;
}
    </style>
    </head>
    <body>
        <div class="container-fluid">
    <div class="row">
       <div class="col-md-2 pt-5 text-center border">
           <h4><a href="../index.php" style="color:#222">Skill Share</a></h4>
        </div>
        <div class="col-md-8 border pb-2">
          
    <div class="row">
       <div class="col-md-12 pt-4 border-bottom mb-1">
          <form action="../courses.php" method="get"> 
           <input type="text" class='form-control' placeholder="Search Course" name="cnm"/>
           </form>
        </div></div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mr-auto ml-auto">
    
      <a class="nav-item nav-link active" href="student.php">My Profile</a>
      <a class="nav-item nav-link active" href="mycourses.php"> My Courses </a>
    
      <a class="nav-item nav-link active" href="review.php"> Feedback</a>
      <a class="nav-item nav-link active" href="Myque.php"> My Questions </a>
        <a class="nav-item nav-link active" href="quiz%20result.php"> Quiz Results</a>
    
    
      <a class="nav-item nav-link active" href="password.php">Change Password</a>
     
    </div>
  </div>
</nav>
        </div>
        <div class="col-md-1 pt-5 text-center border">
        <p class="pt-3" style="font-size:large;font-weight:600"><a href='../cart.php' class='fcy'>My Cart</a></p>
        </div>
        <div class="col-md-1 pt-5 text-center border">
    
        
        <p class="pt-3" style="font-size:large;font-weight:600">
            <a href='logout.php' class='fcy'> Logout </a></p>
        </div>
            </div></div>
           