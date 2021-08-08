



<?php
     $conn = mysqli_connect("localhost", "root","","sams");
     //$sql = "INSERT INTO 'student'('roll_no' , 'name' , 'age' , 'gender' , 'email') VALUES('$_POST[roll_no]','$_POST[name]','$_POST[age]','$_POST[gender]','$_POST[email]')";

     try{

        if(isset($_POST['std'])){
            $result = mysqli_query($conn,"insert student(roll_no,name,age,gender,email) values('$_POST[roll_no]','$_POST[name]','$_POST[age]','$_POST[gender]','$_POST[email]')");   
            $success_msg = "Student added successfully.";
        }

        if(isset($_POST['tcr'])){
            $result = mysqli_query($conn,"insert teacher(id,name,age,gender,email) values('$_POST[id]','$_POST[name]','$_POST[age]','$_POST[gender]','$_POST[email]')");   
            $success_msg = "Teacher added successfully.";
        }

     }

     catch(Execption $e){
        $error_msg =$e->getMessage();
      }
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

<h3 class="header">Student Attendance Management System</h3>
 
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

      <!-- Links -->
       <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="admin-add-user.php">Add Student/Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Create User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Students List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Faculty List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </nav>

    <section>

       <div class="message">
          <?php if(isset($success_msg)) echo $success_msg; if(isset($error_msg)) echo $error_msg; ?>
       </div>
             
             <div class = "container custom-container" id="student">
                 <div class = "row">
                      <div class = "col-lg-12 col-md-12">
                          <p style = "text-align: center;">Select: <a href="#teacher">Teacher</a> | <a href="">Student</a></p> </br> 
                      <h4>Add Student's Information</h4>
                       <form  method="post" action="/SAMS/admin-add-user.php">
                         <div class="form-group">
                           <label for="roll">Roll No:</label>
                           <input type="text" class="form-control" id="roll" placeholder="Enter student's roll no" name="roll_no"/>
                         </div>

                         <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter student's name" name="name"/>
                         </div>

                         <div class="form-group">
                           <label for="age">Age:</label>
                           <input type="text" class="form-control" id="age" placeholder="Enter student's age" name="age"/>
                         </div>

                         <div class="form-group">
                           <label for="gender">Gender:</label>
                           <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender"/>
                         </div>

                         <div class="form-group">
                           <label for="email">Email:</label>
                           <input type="email" class="form-control" id="email" placeholder="Enter a valid email" name="email"/>
                         </div>
    
                         <input type="submit" class="btn btn-success" value="Add Student" name="std" />
                         </br></br></br></br>
                        </form>

                      </div>
                      

                      <div class = "col-lg-12 col-md-12" id="teacher">

                      <h4>Add Teacher's Information</h4>
                       <form  method="post" action="/SAMS/admin-add-user.php">
                         <div class="form-group">
                           <label for="id">ID:</label>
                           <input type="text" class="form-control" id="id" placeholder="Enter teacher's id" name="id">
                         </div>

                         <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter teacher's name" name="name">
                         </div>

                         <div class="form-group">
                           <label for="age">Age:</label>
                           <input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
                         </div>

                         <div class="form-group">
                           <label for="gender">Gender:</label>
                           <input type="text" class="form-control" id="gender" placeholder="Enter gender" name="gender">
                         </div>

                         <div class="form-group">
                           <label for="email">Email:</label>
                           <input type="text" class="form-control" id="email" placeholder="Enter valid email" name="email">
                         </div>
    
                         <input type="submit" class="btn btn-success" value="Add Teacher" name="tcr" />
                        </form>

                      </div>
                      

                   </div>
               </div>   



</body>
</html>