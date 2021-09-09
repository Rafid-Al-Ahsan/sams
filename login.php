<?php

if(isset($_POST['login']))
{
	//start of try block

	try{

		//checking empty fields
		if(empty($_POST['userid'])){
			throw new Exception("Username is required!");
			
		}
		if(empty($_POST['password'])){
			throw new Exception("Password is required!");
			
		}

		//establishing connection with db and things
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="sams";
		$conn = mysqli_connect($servername, $username, $password, $dbname);		

		//checking login info into database
		$row=0;
		$result=mysqli_query($conn, "select * from login where userid='$_POST[userid]' and password='$_POST[password]' and usertype='$_POST[type]'");		

		//storing the results in an  array
		$row=mysqli_num_rows($result);

		//checking login information
		if($row>0 && $_POST["type"] == 'teacher'){
			session_start();
			$_SESSION['name']="oasis";
			//for passing sessions to the redirected page
			$userid = $_POST['userid'];
			$url = "teacher.php?userid=" . $userid;
			header('location:' . $url);
			exit();
		
		}

		else if($row>0 &&  $_POST["type"] == 'student'){
			session_start();
			$_SESSION['name']="oasis";
            //for passing sessions to the redirected page
			$userid = $_POST['userid'];
			$url = "student.php?userid=" . $userid;
			header('location:' . $url);
			exit();
		}

		else if($row>0 && $_POST["type"] == 'admin'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: admin.php');
		}		

		else{
			throw new Exception("Username,Password or Role is wrong, try again!");
			
			header('location: login.php');
		}
	}

	//end of try block and show error msg
	catch(Exception $e){
		$error_msg=$e->getMessage();
	}
	//end of try-catch
}

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
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- Header and navbar starts here-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <a class="navbar-brand" href="#">Student Attendance Management System</a>
  
</nav>

<div class="message">
          <?php if(isset($success_msg)) echo $success_msg; if(isset($error_msg)) echo $error_msg; ?>
</div>   

<h4 style = "text-align:center;">Login into SAMS</h4>

<!-- Login in form section starts here-->
<section>
             
         <div class = "container">
             <div class = "row">
                  <div class = "col-lg-12 col-md-12">
				           
				            
				        
				  <form method="post" class="login-container">
			           <div class="form-group">
			              <label for="input1">UserID:</label>
			              <input type="text" name="userid"  class="form-control" id="input1" placeholder="Enter user id" />
			           </div>

			           <div class="form-group">
			              <label for="input1">Password:</label>		    
			              <input type="password" name="password"  class="form-control" id="input1" placeholder="Enter password" />
			           </div>


			           <div class="form-group" class="radio">
			              <label for="input1" >Login As:</label>
			              <label><input type="radio" name="type" id="optionsRadios1" value="student" checked> Student</label>
			  	          <label><input type="radio" name="type" id="optionsRadios1" value="teacher"> Teacher</label>
			              <label><input type="radio" name="type" id="optionsRadios1" value="admin"> Admin</label>
			           </div>


			<input type="submit" class="btn btn-success" value="Login" name="login" />
		</form>

				  

                  </div>
             </div>
         </div>	 

</section>		 

</body>

</html>



