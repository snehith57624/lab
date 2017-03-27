<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$Password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $Password, $dbname);
// Check connection
//echo "string";
//CREATE TABLE admin_login(id INT NOT NULL AUTO_INCREMENT,email VARCHAR(100) NOT NULL,pwd VARCHAR(40) NOT NULL,PRIMARY KEY ( id ) );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "hi";
$email=$_POST["Email_Id"];
$pwd=$_POST["password"];
//echo "$email";
//echo "$pwd";
$sql1="SELECT * FROM student_login WHERE email='$email' and pwd='$pwd'";
$res= mysqli_query($conn,$sql1);
$no_of_rows= mysqli_num_rows($res);
//echo $no_of_rows;
if($no_of_rows != 1){
		// die("Database query failed!");
	// $PHPtext = "Email_Id doesnot exist";
	// echo "Email_Id doesnot exist";
	header("Location: after_login_error.php");
	}
else{
		$_SESSION['Email_Id'] = $Email_Id;
		header("Location: after_login.php");
	}
if(isset($_GET['logout'])){
	session_unregister('Email_Id');
}
$conn->close();
?>
