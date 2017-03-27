<!doctype html>
<html>
<head>
<script type="text/javascript" src="js/valid2.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<title>Student Information</title>
<style>
form { 
	width: 1000px; 
}
label{
	width: 9em;
	float: left;
	text-align: right;
	margin-right: 0.5em;
	display: block
 }
 
textarea,select {
  border: none;
  font-size: 15px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 1px;
  width: 60%;
  background-color: white;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 10px;
}
button {
  padding: 5px 10px 5px 10px;
  color: #FFF;
  background-color: #000080;
  font-size: 15px;
  text-align: center;
  font-style: bold;
  border-radius: 5px;
  width: 37%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 0.5px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}
legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}
.number {
	background-color: #5fcf80;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 100%;
}
h1{
	font-family: 'Nunito', sans-serif;
	color: #384047;
	padding: 10px;}
form {
    max-width: 1000px;
    margin: 20px auto;
    padding: 20px 20px;
    background: #f4f7f8;
    border-radius: 10px;
  }

table {
	width: 100%;
}

.buttons {
	display: flex;
	width: 100%;
	position: relative;
	align-items: center;
	justify-content: center;
}

button[type=reset], button[type=submit] {
	flex-direction: row;
	width: 25%;
	margin: 20px 10px;
}

</style>

</head>
	<body background="images/back.jfif" >
		<marquee behaviour=scroll direction="right" scrollamount="10"><h1 style="text-align:center; color: #F5FFFA ;">STUDENT SIGN-UP PAGE</h1></marquee>

		<h2 style="text-align:center; color: #4bc970;background: black">ENTER YOUR DETAILS </h2>

		<form name="Student_signup" onsubmit ="return validateForm()" action="form_processing.php" method="post">
			<legend>
				<span class="number">1</span>
				<b> Personal Information :</b>
			</legend>
			<fieldset style="background-color: tan">
				<table align="center" cellpadding = "10">
					<!--- First Name -->
					<tr>
						<td>FIRST NAME:</td>
						<td><input type="text"  name="First_Name" maxlength="30" placeholder="First Name" onfocusin="name_in()" onfocusout="name_out()" required="required" />
						</td>
					</tr>
		 
					<!--- Last Name -->
					<tr>	
						<td>LAST NAME:</td>
						<td><input type="text"  name="Last_Name" maxlength="30" placeholder="Last Name" onfocusin="name1_in()" onfocusout="name1_out()" required="required" />
						</td>
					</tr>

					<!--- Date Of Birth -->
					<tr>
						<td>DATE OF BIRTH:</td>
						<td><input type="date"  name="dob" placeholder="dd/mm/yyyy" onfocusout="dob_out()" /></td>
					</tr>
					<tr>	
						<td>AGE:</td>
						<td><input type="text" name="age" maxlength="10" placeholder="age" onclick="getage()" />
						</td>
					</tr>
					<!--- Mobile Number -->
					<tr>
						<td>MOBILE NUMBER:</td>
						<td><input type="text"  name="Mobile_Number" maxlength="10" placeholder="(10 digit number)" onfocusin="Mobile_Number_in()" onfocusout="Mobile_Number_out()" required="required" /></td>
					</tr>
					<!--- Gender -->
					<tr>
						<td>GENDER:</td>
						<td>
							Male <input type="radio" name="Gender" value="Male" />
							Female <input type="radio" name="Gender" value="Female" />
						</td>
					</tr>
					<!--- Address -->
					<tr>
						<td>
							PRESENT ADDRESS: 
						</td>
						<td>
							<textarea  name="addr"  rows="4" cols="30" placeholder="eg:" required="required"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							Same as<input  type="radio" name="address" value="1">&nbsp;
							Different<input type="radio" name="address" value="0">&nbsp;
						</td>
					</tr>
					<tr>
						<td>
							PERMANENT ADDRESS: 
						</td>
						<td>
							<textarea name="Address" rows="4" cols="30" placeholder="eg:" onclick="getaddress()"></textarea>
						</td>
					</tr>
					<!--- City -->
					<tr>
						<td>CITY:</td>
						<td>
							<input type="text"  name="City" maxlength="30" placeholder="eg. " required="required" />
						</td>
					</tr>
					<!--- Pin Code -->
					<tr>
						<td>PIN CODE</td>
						<td>
							<input type="text" name="Pin_Code" maxlength="6" placeholder="eg. 516503" pattern="[0-9][0-9][0-9][0-9][0-9][0-9]" required="required" />
						</td>
					</tr>
					<!--- State -->
					<tr>
						<td>STATE</td>
						<td>
							<input type="text"  name="State" maxlength="30" placeholder="eg. " required="required" />
						</td>
					</tr>
				 
					<!--- Country -->
					<tr>
						<td>COUNTRY</td>
						<td><input type="text"  name="Country" placeholder="eg." required="required" /></td>
					</tr>
				</table>
			</fieldset>
		<br>
		<legend><span class="number">2</span><b> Academic Details </b></legend>
		<fieldset style="background-color: tan ">
			<br>
			<table>
				<!--- Qualification-->
				<thead>
					<tr>
						<td>QUALIFICATION:</td>
					</tr>
					<tr>
						<!--<td align="center"><b>Sl.No.</b></td> !-->
						<td align="center"><b>Examination</b></td>
						<td align="center"><b>Board</b></td>
						<td align="center"><b>Percentage</b></td>
						<td align="center"><b>Year of Passing</b></td>
					</tr>
				</thead>
				<tr>
					<!--<td align="center">1</td> !-->
					<td align="center">Class X</td>
					<td align="center"><input type="text" name="ClassX_Board" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
				</tr>
				<tr>
					<!--<td align="center">2</td> !-->
					<td align="center">Class XII</td>
					<td align="center"><input type="text" name="ClassX_Board" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
				</tr>
				<tr>
					<!--<td align="center">3</td> !-->
					<td align="center">Under Graduation</td>
					<td align="center"><input type="text" name="ClassX_Board" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
				</tr>
				<tr>
					<!--<td align="center">4</td> !-->
					<td align="center">Post Graduation</td>
					<td align="center"><input type="text" name="ClassX_Board" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
					<td align="center"><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
				</tr>
			</table>
			<table>
				<tr>
					<td colspan="2">COURSES APPLIED FOR: </td>
					<td>
						B.Tech<input class="xshow" type="radio" name="course" value="B.Tech">&nbsp;
						M.Tech<input class="xshow" type="radio" name="course" value="M.Tech">&nbsp;
						MBA<input type="radio" name="course" value="MBA">&nbsp;
						MCA<input type="radio" name="course" value="MCA">&nbsp;
					</td>
				</tr>
				<br>
				<tr class="show" >
					<td colspan="2">BRANCH</td>
					<td colspan="2">
						<select name="branch">
							<option value="0">--Select--</option>
							<option value="BT">Biotechnology</option>
							<option value="CHE">CHEMICAL ENGINEERING</option>
							<option value="CE">Civil engineering</option>
							<option value="CSE">Computer Science and engineering</option>
							<option value="ECE">Electronics and communication Engineering</option>
							<option value="IT">Information Technology</option>
							<option value="ME">Mechanical engineering</option>
							<option value="MME">Metallurgical and materials engineering</option>
						</select>
					</td>
				</tr>
				<!--- Registration No -->
				<tr>
					<td colspan="2">REGISTRATION NO</td>
					<td colspan="2"><input type="text"  placeholder="" name="regn_no" maxlength="50" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" /></td>
				</tr>
				<!--- Roll No-->
				<tr>
					<td colspan="2">ROLL NO</td>
					<td colspan="2"><input type="text"  name="roll_no" maxlength="50" placeholder="" onclick="getstudentid()" /></td>
				</tr>
				</table>
				</fieldset>
				<br>
				<legend><span class="number">3</span><b> Login Details </b></legend>
				<fieldset style="background-color: tan">
				<table>
				
				<!--- Email Id -->
				<tr>
					<td colspan="2">EMAIL ID</td>
					<td colspan="2"><input placeholder="example@gmail.com"  type="text" name="Email_Id" maxlength="50" onfocusin="email_in()" onfocusout="email_out()"/></td>
				</tr>
				<br>
				<!--- Submit and Reset -->
				<tr>
					<td colspan="2">PASSWORD</td>
					<td colspan="2"><input type="password"  id="pwd" name="password" maxlength="25" placeholder="********"/></td>
				</tr>
				<br>
				<tr>
					<td colspan="2">CONFIRM PASSWORD</td>
					<td colspan="2"><input type="password"  id="cpwd" name="cpassword" maxlength="25" placeholder="********" /></td>
				</tr>
				<br>	
			</table>
			<div class="buttons">
				<button type="submit">Submit</button>
				<button type="reset">Reset</button>
			</div>
		</fieldset>
	</form>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
    		$(".show").hide();
    		$('input[type=radio]').change(function(){
	        	var isShow = $(this).hasClass('xshow');
	        	if (isShow) {
	        		$(".show").show();	
	        	} else {
	        		$(".show").hide();
	        	}
    		});
		});
	</script>
	</body>
</html>