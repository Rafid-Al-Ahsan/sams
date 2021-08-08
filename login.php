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

		
		$row=mysqli_num_rows($result);

		if($row>0 && $_POST["type"] == 'faculty'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: faculty.php');
		}

		else if($row>0 &&  $_POST["type"] == 'student'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: student.php');
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

	//end of try block
	catch(Exception $e){
		$error_msg=$e->getMessage();
	}
	//end of try-catch
}

?>







.header{
    font-size: 30px;
    text-align: center;
    margin: 15px;
}

ul li{
   margin: 5px 10px;
}
.active{
    color: #ffffff;
    background-color: #5cb85c;
}

.card-deck{
    margin-top: 40px;
}

.card-text{
    color: #ffffff;
    text-align: left;
    font-size: 22px;
}

.card-text.fa{
    color: green;
}