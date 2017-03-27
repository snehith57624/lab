<?php

$servername = "127.0.0.1";
$username = "root";
$Password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $Password, $dbname);
// Check connection
//echo "string";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "hi";
$email=$_POST["Email_Id"];
$pwd=$_POST["password"];
$f_name=$_POST["First_Name"];
$l_name=$_POST["Last_Name"];
$dat=$_POST["dob"];
$age=$_POST["age"];
$m_no=$_POST["Mobile_Number"];
$p_adrr=$_POST["addr"];
$pm_adrr=$_POST["Address"];
$city=$_POST["City"];
$pin=$_POST["Pin_Code"];
$state=$_POST["State"];
$country=$_POST["Country"];
$gender=$_POST["Gender"];
$regn_no=$_POST["regn_no"];
$branch=$_POST["branch"];
$course=$_POST["course"];
$r_no=$_POST["roll_no"];

//echo "$email";
//echo "$pwd";
// CREATE TABLE student_login(id INT NOT NULL AUTO_INCREMENT,email VARCHAR(100) NOT NULL,pwd VARCHAR(40) NOT NULL,PRIMARY KEY ( id ) );
$sql1="SELECT * FROM student_login WHERE email='$email'";
$res1= mysqli_query($conn,$sql1);
$no_of_rows= mysqli_num_rows($res1);
if($no_of_rows > 0){
	die('Email id already exists');
}
else{
	$sql = "INSERT INTO student_login(email,pwd) VALUES ('$email','$pwd')";
	$sql2 = "INSERT INTO student_details(f_name,l_name,date,age,m_no,p_addr,pm_addr,city,pin,state,country,regn_no,branch,course,roll_no) VALUES ('$f_name','$l_name','$dat','$age','$m_no','$p_adrr','$pm_adrr','$city','$pin','$state','$country','$regn_no','$branch','$course','$r_no')";
	$sql3="SELECT * FROM student_details WHERE roll_no='$r_no'";
	$res = mysqli_query($conn,$sql3);
	$no_of_rows= mysqli_num_rows($res);
	//echo "$no_of_rows"
if($no_of_rows > 0){
	//die('Roll no already exists');
	header("Location: after_register_error.php");
}
	//echo $sql2;
	$result1 = mysqli_query($conn,$sql);
	$result = mysqli_query($conn,$sql2);
	echo $result;
	/*if (! $result ) {
		die('Could not enter data or data already exists ' .mysqli_error());
	}*/
	// echo "Entered data successfully\n";

}
if(!$result && !$result1){
		//die("Database query failed!");
		header("Location: after_register_error.php");
	}
else{
		header("Location: after_register.php");
	}
$conn->close();
?>
