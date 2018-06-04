<!DOCTYPE html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/newhome.css">
	<title>OBAR - Signin</title>
	<meta name="description" content="Write some words to describe your html page">

	<style type="text/css">
		#Login_Container
		{
		display: table;
		background: white;
		border:5px solid #cccccc;
		border-radius:10px;
		/*border: 1px solid #bcbdb7;*/
		float : top;
		clear : none;
		height : 200px;
		width : 450px;
		z-index: 5;
		/*position: absolute;
		top: 50%;
		left: 50%;*/
		
		position: fixed;
		top: 50%;
		left: 50%;
		/* bring your own prefixes */
		transform: translate(-50%, -50%);
		}
		#Login_Content{
		text-align: center;
		line-height: 15px;
		vertical-align: middle;
		display: table-cell;
		}
		a:link {
		    color: black; 
		    background-color: transparent; 
		    font-weight: bold;
		    text-decoration: none;
		}
		a:visited {
		  color: black;
		}

		a:hover {
		    color: black;
		    background-color: transparent;
		    text-decoration: bold;
		    text-decoration: none;
		}
		.username {
		    line-height: 15px;
		    padding-left: 5px;
		    border: 0.5px solid #a5a5a5;
		    position: relative;
		    left: 4%;
		}
		.password {
		    line-height: 15px;
		    padding-left: 5px;
		    border: 0.5px solid #a5a5a5;
		    position: relative;
		    left: 6%;
		}
		.login {
		    text-align: center;
		    vertical-align: middle;
		    height: 30px;
		    padding: 3px 5px;
		    border: 1px solid #a5a5a5;
		    border-radius: 3px;
		    background: #ffffff;
		    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#c4c2c4));
		    background: -moz-linear-gradient(top, #ffffff, #c4c2c4);
		    background: linear-gradient(to bottom, #ffffff, #c4c2c4);
		    font: normal normal bold 12px arial;
		    color: #111111;
		    text-decoration: none;

		    position: relative;
		    top: 30px;
		    left: -210px;
		}
		.register {
		    text-align: center;
		    vertical-align: middle;
		    height: 30px;
		    padding: 3px 5px;
		    border: 1px solid #a5a5a5;
		    border-radius: 3px;
		    background: #ffffff;
		    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#c4c2c4));
		    background: -moz-linear-gradient(top, #ffffff, #c4c2c4);
		    background: linear-gradient(to bottom, #ffffff, #c4c2c4);
		    font: normal normal bold 12px arial;
		    color: #111111;
		    text-decoration: none;

		    position: relative;
		    top: 10%;
		    left: 6%;
		}
		.register_form_btn {
			text-align: center;
			vertical-align: middle;
			height: 30px;
			padding: 3px 5px;
			border: 1px solid #a5a5a5;
			border-radius: 3px;
			background: #ffffff;
			background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#c4c2c4));
			background: -moz-linear-gradient(top, #ffffff, #c4c2c4);
			background: linear-gradient(to bottom, #ffffff, #c4c2c4);
			font: normal normal bold 12px arial;
			color: #111111;
			text-decoration: none;

			position: relative;
			top: 10%;
			left: 35%;
		}
		.logout {
		    text-align: center;
		    vertical-align: middle;
		    height: 30px;
		    padding: 3px 5px;
		    border: 1px solid #a5a5a5;
		    border-radius: 3px;
		    background: #ffffff;
		    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#c4c2c4));
		    background: -moz-linear-gradient(top, #ffffff, #c4c2c4);
		    background: linear-gradient(to bottom, #ffffff, #c4c2c4);
		    font: normal normal bold 12px arial;
		    color: #111111;
		    text-decoration: none;

		    position: relative;
		    left: 120px;
		    top: -25px;
		}
		.login:hover, .register:hover, .logout:hover {
		    border: 1px solid #a5a5a5;
		    background: #ffffff;
		    background: -webkit-gradient(linear, left top, left bottom, from(#c4c2c4), to(#ffffff));
		    background: -moz-linear-gradient(top, #c4c2c4, #ffffff);
		    background: linear-gradient(to bottom, #c4c2c4, #ffffff);
		    color: #111111;
		    text-decoration: none;
		}
		#cover {
			position: fixed;
			top: 0;
			left: 0;
			background:rgba(0,0,0,0.6);
			z-index:10;
			width:100%;
			height:100%;
			display:none;
		}
		#loginScreen {
		    height:320px;
		    width:340px;
		    margin:0 auto;
		    position:fixed;
		    left: 11%;
		    top: -35%;
		    z-index:25;
		    display:none;
			background: white;
			border:5px solid #cccccc;
			border-radius:10px;
		}
		#loginScreen:target, #loginScreen:target + #cover {
		    display:block;
		    opacity:2;
		}
		.text_box {
			border: 0.5px solid #a5a5a5;
		}
		.cancel {
		    display:block;
		    color:black;
		    height:30px;
		    width:60px;
		    /*font-size:30px;*/
		    text-decoration:none;
		    text-align:center;
		    font-weight:bold;
		    vertical-align: middle;
		    padding: 3px 5px;

		    border: 1px solid #a5a5a5;
		    border-radius: 3px;
		    background: #ffffff;
		    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#c4c2c4));
		    background: -moz-linear-gradient(top, #ffffff, #c4c2c4);
		    background: linear-gradient(to bottom, #ffffff, #c4c2c4);
		    font: normal normal bold 12px arial;
		    color: black;
		    text-decoration: none;

		    position: relative;
		    top: 0%;
		    left: 15%;
		}
		.cancel_close {
		    display:block;
		    color:black;
		    height:10px;
		    width:10px;
		    text-decoration:none;
		    text-align:center;
		    font-weight:bold;
		    vertical-align: middle;
		    padding: 3px 3px;

		    border: 1px solid #a5a5a5;
		    border-radius: 3px;
		    background: #ffffff;
		    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#c4c2c4));
		    background: -moz-linear-gradient(top, #ffffff, #c4c2c4);
		    background: linear-gradient(to bottom, #ffffff, #c4c2c4);
		    font: normal normal bold 12px arial;
		    color: black;
		    text-decoration: none;

		    position: relative;
		    top: -4%;
		    left: 90%;
		}
	</style>
</head>
<body>
	<div id="TopNav"> <!--logo, signin, search, customer service, others-->
		<div id="Login_Container">
			<div id="Login_Content">
				<form action ="login.php" method="POST">
					<b>ICTC Online Borrowing and Returning of Equipment</b>
					<br>
					<input type="text" name="username" placeholder="username" class="username" required/>
					<input type="password" name="password" placeholder="password" class="password" required/>
					<button type="submit" class="login"/>Login</button>
				</form>
				<form action="register.php" method="POST">
							<!--<input type="submit" value="Register" class="register"/>-->
							<button class="register"><a href="#loginScreen">Register</a></button>
							<div id="loginScreen">
								<br><b>Registration Form</b>
							    <a href="" class="cancel_close">&times;</a>
							    <table align="center">
                                        <th colspan="2">User Information</th><hr>
                                        <tr>
                                            <td><label>Fullname:</label></td>
                                            <td><input type="text" name="fullname" class="text_box" placeholder="Fullname" required/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Gender:</label></td>
                                            <td>
                                                <input type="radio" name="gender" value="male" checked required/>Male
                                                <input type="radio" name="gender" value="female" required/>Female
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>Email:</label></td>
                                            <td><input type="email" name="email" class="text_box" placeholder="Email" required/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Username:</label></td>
                                            <td><input type="text" name="username" class="text_box" placeholder="Username" required/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Password:</label></td>
                                            <td><input type="password" name="password" class="text_box" placeholder="Password" required/></td>
                                        </tr>
                                        <tr>
                                            <td><label>Confirm Password:</label></td>
                                            <td><input type="password" name="cpassword" class="text_box" placeholder="Confirm Password" required/></td>
                                        </tr><br>
                                        <tr>
                                            <td><button type="submit" name="register" class="register_form_btn" onclick="location='#'">Register</button></td>
                                            <td><button type="submit" name="cancel" class="cancel" onclick="location='#'">Cancel</button></td>
                                        </tr>
                                    </table>
							</div>
							<div id="cover" >
							</div>
						</form>
			</div>
		</div>
	</div>
</body>
</html>