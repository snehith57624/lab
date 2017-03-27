<!doctype html>
<html>
  <head>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" >
		function email_in(){
	var x = document.forms["Student_login"]["Email_Id"].value;
	if(x == "")
	{
		document.forms["Student_login"]["Email_Id"].style.backgroundColor ="#008B8B";
		document.forms["Student_login"]["Email_Id"].placeholder = "*****@gmail.com";
		document.forms["Student_login"]["Email_Id"].style.border ="none";
	}
}

function email_out(){
	var x = document.forms["Student_login"]["Email_Id"].value;
	if(x=="")
	{
		document.forms["Student_login"]["Email_Id"].placeholder = "email can't be empty";
		document.forms["Student_login"]["Email_Id"].style.border ="2px solid red";
		return false;
	}
	var x = document.forms["Student_login"]["Email_Id"].value;
	var regex = new RegExp('[A-Za-z0-9_+\.~!#%&]+@[A-Za-z0-9_+\.~!#%&]+\.[A-Za-z0-9_+\.~!#%&]+');
	if (!x.match(regex))
	{
		alert("Invalid Email id");
		return false;
	}
	return true;
}

	</script>
  <!--  <script type="text/javascript" src="js/valid.js"></script> !-->
    <title>Student Information</title>
    <style>
    form { width: 1000px; }
    label{
    width: 9em;
    float: left;
    text-align: right;
    margin-right: 0.5em;
    display: block
     }
     body {
      font-family: 'Nunito', sans-serif;
      color: #6A5ACD;
       padding: 10px;
    }
    table {
      width: 100%;
    }
    h1
    {
    font-family :Impact, Charcoal, sans-serif;
    color: #000000
    }
    textarea,
    select {
      background: rgba(255,255,255,0.1);
      border: none;
      font-size: 15px;
      height: auto;
      margin: 0;
      outline: 0;
      padding: 1px;
      width: 60%;
      background-color: #e8eeef;
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
      width: %;
      border: 1px solid #3ac162;
      border-width: 1px 1px 0.5px;
      box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
      margin-bottom: 10px;
    }
    form {
      max-width: 500px;
      margin: 20px auto;
      padding: 20px 20px;
      background: #f4f7f8;
      border-radius: 10px;
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
  <form name="Student_login" onsubmit="return validate(this)" action="form_login.php" method="post">
  </head>
  <body background="images/back.jfif">
    <h1 style="text-align:center;">STUDENT LOGIN PAGE</h1>
      <table align="center" cellpadding = "10">
          <!--- First Name -->
          <tr>
            <td>EMAIL ID:</td>
            <td><input type="text" required name="Email_Id" maxlength="50" placeholder="eg:example@gmail.com" onfocusin="email_in()" onfocusout="email_out()"/>
            </td>
          </tr>
          <tr>
            <td>Password :</td>
            <td><input type="password" required name="password" maxlength="50" placeholder="*******"/></td>
          </tr>
      </table>
      <div class="buttons">
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
      </div>
    <br>
    </form>
  </body>
</html>