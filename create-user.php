

<?php
     $conn = mysqli_connect("localhost", "root","","sams");
    
     try{

        if(isset($_POST['add'])){
            $result = mysqli_query($conn,"insert login(userid,password,usertype) values('$_POST[userid]','$_POST[password]','$_POST[type]')");   
            $success_msg = "User added successfully.";
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
          <a class="nav-link active" href="create-user.php">Create User</a>
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

    <!-- add student/teacher form starts here-->
    <section>

       <div class="message">
          <?php if(isset($success_msg)) echo $success_msg; if(isset($error_msg)) echo $error_msg; ?>
       </div>
             
             <div class = "container custom-container" id="student">
                 <div class = "row">
                      <div class = "col-lg-12 col-md-12">
                       <form  method="post" action="/SAMS/create-user.php">
                         <div class="form-group">
                           <label for="userid">UserID:</label>
                           <input type="text" class="form-control" id="roll" placeholder="Provide user id" name="userid"/>
                         </div>

                         <div class="form-group">
                          <label for="password">Password:</label>
                          <input type="password" class="form-control" id="password" placeholder="Provide a strong password" name="password"/>
                         </div>

                         <div class="form-group" class="radio">
			              <label for="input1" >Select user:</label>
			              <label><input type="radio" name="type" id="optionsRadios1" value="student" checked> Student</label>
			  	          <label><input type="radio" name="type" id="optionsRadios1" value="teacher"> Teacher</label>
			              <label><input type="radio" name="type" id="optionsRadios1" value="admin"> Admin</label>
			           </div>
    
                         <input type="submit" class="btn btn-success" value="Add User" name="add" />
                         </br></br></br></br>
                        </form>

                      </div>
                   </div>
</div>   

                      

                      



</body>
</html>