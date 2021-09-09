<?php

$conn = mysqli_connect("localhost", "root","","sams");
    
    if(!isset($_GET['userid'])) {
        header('location: login.php');
        exit();
    }
    
    $userid = $_GET['userid'];   

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>


<body>

<!-- navigation bar starts here -->
<h3 class="header">Student Attendance Management System</h3>
 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

      
       <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Logout</a>
        </li>
      </ul>
</nav>

    <?php
       
     
       $i=0;
       
       $all_query = mysqli_query($conn, "SELECT * from student WHERE roll_no='$userid'");
       
       while ($data = mysqli_fetch_array($all_query)) {
         $i++;

         $studentData[0]= $data['roll_no'];
         $studentData[1]= $data['name'];
         
       }
       
?>


<h3 style="text-align:center; margin: 15px 0;">Welcome, <?php echo $studentData[1]?></h3>
<h5 style="text-align:center; margin: 20px 0;">Attendance</h5>    

    <div class="container">

<div class="row">
 
  <table class="table table-striped table-hover">
    
      <thead>
      <tr>
        <th scope="col">Roll No.</th>
        <th scope="col">Name</th>
        <th scope="col">Subject</th>
        <th scope="col">Teacher</th>
        <th scope="col">Date</th>
        <th scope="col">Status</th>
      </tr>
      </thead>
   <?php
     
     $i=0;
     
     $all_query = mysqli_query($conn, "SELECT roll_no, name, subject, teacher, date, status FROM report WHERE roll_no='$userid'");
     
     while ($data = mysqli_fetch_array($all_query)) {
       $i++;
     
     ?>

     <tr>
       <td><?php echo $data['roll_no']; ?></td>
       <td><?php echo $data['name']; ?></td>
       <td><?php echo $data['subject']; ?></td>
       <td><?php echo $data['teacher']; ?></td>
       <td><?php echo $data['date']; ?></td>
       <td><?php echo $data['status']; ?></td>
     </tr>

     <?php 
          } 
            
      ?>
    </table>
  
</div>
  

</div>    

</body>
</html>       