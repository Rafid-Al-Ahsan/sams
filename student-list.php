<?php
     $conn = mysqli_connect("localhost", "root","","sams");
    
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
          <a class="nav-link" href="admin.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-add-user.php">Add Student/Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create-user.php">Create User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="student-list.php">Students List</a>
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


<h2 style="text-align:center; margin: 15px 0;">All Students</h2>

<div class="container">

  <div class="row">
   
    <table class="table table-striped table-hover">
      
        <thead>
        <tr>
          <th scope="col">Roll No.</th>
          <th scope="col">Name</th>
          <th scope="col">Age</th>
          <th scope="col">Gender</th>
          <th scope="col">Email</th>
        </tr>
        </thead>
     <?php
       
       $i=0;
       
       $all_query = mysqli_query($conn, "SELECT * from student ORDER BY roll_no asc");
       
       while ($data = mysqli_fetch_array($all_query)) {
         $i++;
       
       ?>
  
       <tr>
         <td><?php echo $data['roll_no']; ?></td>
         <td><?php echo $data['name']; ?></td>
         <td><?php echo $data['age']; ?></td>
         <td><?php echo $data['gender']; ?></td>
         <td><?php echo $data['email']; ?></td>
       </tr>
  
       <?php 
            } 
              
        ?>
      </table>
    
  </div>
    

</div>

  




</body>
</html>    