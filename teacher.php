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
       
       $j=0;
       
       
       $all_query = mysqli_query($conn, "SELECT * from teacher where id='$userid'");
       
       while ($data = mysqli_fetch_array($all_query)) {
         $j++;

         $teacherData[0]= $data['id'];
         $teacherData[1]= $data['name'];
         $teacherData[2]= $data['age'];
         $teacherData[3]= $data['gender'];
         $teacherData[4]= $data['subject'];
         $teacherData[5]= $data['email'];
         
       }
       
?>


<h3 style="text-align:center; margin: 15px 0;">Welcome, <?php echo $teacherData[1]?></h3>
<h5 style="text-align:center; margin: 20px 0;">Please provide the Attendance of <?php echo date('Y-m-d'); ?></h5>

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
       
       $i=-1;
       $k=0;
       $radio = 0;
       $dt = date('Y-m-d');
       
       $all_query = mysqli_query($conn, "SELECT * from student ORDER BY roll_no asc");
       
       while ($data = mysqli_fetch_array($all_query)) {
         $i=$i+2;
         $k=$k+2;

         $studentData[$i]= $data['roll_no'];
         $studentData[$k]= $data['name']; 
           
       ?>
  
       <tr>
         <td><?php echo $studentData[$i]; ?></td>
         <td><?php echo $studentData[$k]; ?></td>
         <td><?php echo $teacherData[4]; ?></td>
         <td><?php echo $teacherData[1]; ?></td>
         <td><?php echo $dt; ?></td>
         <td>
        <form action="" method = "POST">
       
            <label>Present</label>
            <input type="radio" name="status[<?php echo $radio; ?>]" value="Present" >
            <label>Absent </label>
            <input type="radio" name="status[<?php echo $radio; ?>]" value="Absent" checked>
        

        
         </td>
       </tr>
  
       <?php 
            $radio++;
            }  
        ?>

    </table>
        
        
        <input type="submit" class="btn btn-primary" value="Submit" name="att" />
    </form>
  


    
      
  </div>


</div>
  
<?php
    try{
      if(isset($_POST['att'])){
           $x=1;
           $y=2;
        foreach ($_POST['status'] as $row => $value){
            $rock = mysqli_real_escape_string($conn, $value);
            $result = mysqli_query($conn,"insert report(roll_no,name,subject,teacher,date,status) values('$studentData[$x]','$studentData[$y]','$teacherData[4]','$teacherData[1]','$dt','".$rock."')");
            $x=$x+2;
            $y=$y+2;
         }
         $success_msg = "Attendence Recorded";

      }
    } 

    catch(Execption $e){
      $error_msg =$e->getMessage();
    }
        
   
?>
   
<div class="message">
          <?php if(isset($success_msg)) echo $success_msg; if(isset($error_msg)) echo $error_msg; ?>
</div>   

</body>
</html>   