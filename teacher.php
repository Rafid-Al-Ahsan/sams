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
          <a class="nav-link" href="login.php">Logout</a>
        </li>
      </ul>
    </nav>

  <?php echo "Hello $userid"; ?>

  <?php
       
       $j=0;
       
       
       $all_query = mysqli_query($conn, "SELECT * from teacher where id='$userid'");
       
       while ($data = mysqli_fetch_array($all_query)) {
         $j++;
         echo $data['subject'];

         $teacherData[0]= $data['id'];
         $teacherData[1]= $data['name'];
         $teacherData[2]= $data['age'];
         $teacherData[3]= $data['gender'];
         $teacherData[4]= $data['subject'];
         $teacherData[5]= $data['email'];
         
       }

       echo $teacherData[0];
       
?>


<h2 style="text-align:center; margin: 15px 0;">All Students</h2>
<h3>Attendance of <?php echo date('d-m-Y'); ?></h3>

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
        </tr>
        </thead>
     <?php
       
       $i=0;
       $radio = 0;
       $dt = date('Y-m-d');
       
       $all_query = mysqli_query($conn, "SELECT * from student ORDER BY roll_no asc");
       
       while ($data = mysqli_fetch_array($all_query)) {
         $i++;

         $studentData[$i][0]= $data['roll_no'];
         $studentData[$i][1]= $data['name'];
         /*
         $studentData[$i][2]= $data['age'];
         $studentData[$i][3]= $data['gender'];
         $studentData[$i][4]= $data['email'];*/
           
       ?>
  
       <tr>
         <td><?php echo $studentData[$i][0]; ?></td>
         <td><?php echo $studentData[$i][1]; ?></td>
         <td><?php echo $teacherData[4]; ?></td>
         <td><?php echo $teacherData[1]; ?></td>
         <td><?php echo $dt; ?></td>
         <td>
            <label>Present</label>
            <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Present" >
            <label>Absent </label>
            <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Absent" checked>
         </td>
       </tr>
  
       <?php 

            $radio++;
            } 

           echo $studentData[4][0];
              
        ?>
    </table>
        
        <form  method="post" >
            <input type="submit" class="btn btn-primary" value="Submit" name="att" />
        </form>
  


    
      
  </div>


</div>
  
<?php

      if(isset($_POST['att'])){
           /* 
          for($count =1; $count<=$i; $count++){
              $result = mysqli_query($conn,"insert report(subject,teacher,date) values('$studentData[1][0]','$teacherData[1]','$dt')"); 
              echo "Attendence Recorded";
          }*/

          foreach($studentData as $row => $value ){
             $rock = mysqli_real_escape_string($conn,$value[0]);
             $rock2 = mysqli_real_escape_string($conn,$value[1]);
             $result = mysqli_query($conn,"insert report4(roll_no,name,subject,teacher,date,status) values('".$rock."','".$rock2."','$teacherData[4]','$teacherData[1]','$dt','$st_status')");
          }
      }
   
?>
    

</body>
</html>    