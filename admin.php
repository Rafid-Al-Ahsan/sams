<?php

//connectiion to database
$conn = mysqli_connect("localhost", "root","","sams");

//firing the sql query
$result1 = mysqli_query($conn,"SELECT COUNT(*) FROM student");
$result2 = mysqli_query($conn,"SELECT COUNT(*) FROM teacher");
//$result3 = mysqli_query($conn,"SELECT COUNT(*) FROM subject");
$result4 = mysqli_query($conn,"SELECT COUNT(*) FROM login");

//storing the results
$output1 = mysqli_fetch_row($result1);
$output2 = mysqli_fetch_row($result2);
//$output3 = mysqli_fetch_row($result3);
$output4 = mysqli_fetch_row($result4);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<h3 class="header">Student Attendance Management System</h3>
 
    <!-- navigation bar starts here -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

      
       <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="admin.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-add-user.php">Add Student/Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create-user.php">Create User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student-list.php">Students List</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="teacher-list.php">Teachers List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user-list.php">User List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="report.php">Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Logout</a>
        </li>
      </ul>
    </nav>

<!-- Card section starts here -->
<div class="container">
  <div class="card-deck">
    <div class="card bg-primary">
      <div class="card-body text-center">
        <p class="card-text custom-text" style="font-size:30px;"><?php echo $output1[0];?></p>
        <p class="card-text">Student Enrolled&nbsp&nbsp<i class="fa fa-graduation-cap"></i></p>
      </div>
    </div>
    <div class="card bg-warning">
      <div class="card-body text-center">
        <p class="card-text" style="font-size:30px;"><?php echo $output2[0];?></p>
        <p class="card-text">Total Teachers&nbsp&nbsp<i class="fa fa-user"></i></p>
      </div>
    </div>
    <!--<div class="card bg-success">
      <div class="card-body text-center">
        <p class="card-text" style="font-size:30px;"><?php echo $output3[0];?></p>
        <p class="card-text">Total Subjects&nbsp&nbsp<i class="fa fa-file-text"></i></p>
      </div>
    </div>-->
    <div class="card bg-danger">
      <div class="card-body text-center">
         <p class="card-text" style="font-size:30px;"><?php echo $output4[0];?></p>
        <p class="card-text">Current Users&nbsp&nbsp<i class="fa fa-users"></i></p>
      </div>
    </div>  
  </div>
</div>

</br></br>


<div class="container custom-card">
 
  <div class="card bg-light text-dark">
    <div class="card-body"><h4>Dashboard</h4>Hi Administrator! Welcome to the Student Attendance Management System </div>
  </div>
</div>
  

</body>

</html>
</html>