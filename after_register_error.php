<!DOCTYPE html>
<html>
<head>
	<title>
		Main Page
	</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<style type="text/css">
		html {
			overflow-x: hidden;
			width: 100%;
		}
		.container {
    		height: 100%;
		}
		#header {
			background-color:#727995;
			color:#F9F9F9;
			height: 100px;
			width: 100%;
		}
		#header h1 {
			margin-top: 0px;
			font-family: 'Noto Serif', serif;
		}
		body{
			margin: 0px;
			background-size: cover;
		}
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    background-color: #333;
		}

		li {
		    float: left;
		    width: 100%;
		}

		li a {
			width: 100%;
		    display: inline-block;
		    color: white;
		    padding: 14px 16px;
		    text-decoration: none;
		}
		li a:hover {
		    background-color: #111;
		}
		.navbar {
			width: 100%;
		}
		.navbar li {
			width: 25%;
		}
		.navbar li:nth-child(1) {
			background-color: blue;
		}
		.navbar li:nth-child(2) {
			background-color: red;
		}
		.navbar li:nth-child(3) {
			background-color: green;
		}
		.navbar li:nth-child(4) {
			background-color: skyblue;
		}
		.leftcolumn {
			padding: 10px;
			float: left;
	        width: calc(25% - 40px);
	    }
	    .leftcolumn img {
	    	width: 100%;
	    }
	    .rightcolumn {
			margin-top: 10px;
			padding: 5px;
	    	float: left;
	    	width: calc(75% - 5px);
			font-size: 20px;
			font-family: 'Oswald', sans-serif;
	    }
	    .dropbtn {
	    	background: transparent;
	    	text-align: left;
	    	width: 100%;
		    color: white;
		    padding: 14px;
		    font-size: 16px;
		    border: none;
		    cursor: pointer;
		}

		.dropdown {
			width: 100%;
		    position: relative;
		    display: inline-block;
		}

		.dropdown-content {
		    display: none;
		    width: 100%;
		    position: absolute;
		    background-color: #f9f9f9;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}

		.dropdown-content a {
		    color: black;
		    padding: 14px;
		    text-decoration: none;
		    display: block;
		}

		.dropdown-content a:hover {
			width: calc(100% - 28px);
		    background-color: #f1f1f1;
		}

		.dropdown:hover .dropdown-content {
		    display: block;
		}

		.dropdown:hover .dropbtn {
			background-color: #000;
			color: white;
		}
		.inside{
			border: transparent;
			color: blue;
			font-size: 30px;
			padding: 25px;
			font-family: 'Lobster', cursive;
			width: 100%;
		}
	</style>
</head>
<body background="images/background.jpg">
	<div id="header" style="text-align: center;">
		<img src="images/nit_logo.png" alt="nit_logo" style="float: left; width:100px;height:100px">
			<h1>NIT DURGAPUR</h1>
			<h2>(An Institute of National Importance under Government of India, Ministry of Human Resource Development)</h2>

		</div>
			<div class="container">
				<ul class="navbar">
					<li><a href="#home">Home</a></li>
					<li>
						<div class="dropdown">
							<button class="dropbtn">Login</button>
							<div class="dropdown-content">
								<a href="stud_loginpage.php">Student Login</a>
								<a href="adminlogin.php">Administrator Login</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<button class="dropbtn">Signup</button>
							<div class="dropdown-content">
							    <a href="login1.php">Student Signup</a>
							<!--    <a href="login2.html">Administration Signup</a> !-->
						  	</div>
						</div>
					</li>
					<li><a href="#about">About Us</a></li> 
				</ul>
			</div>
		<div>
		<div class="col-container">
			<fieldset class="inside" >
				<p  align="center"> Couldn't Enter data or data already exists</p>
			</fieldset>
		</div>
	</div>
</body>
</html>
