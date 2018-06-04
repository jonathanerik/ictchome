<html>
<title>ICTC Network Support - Sign Up</title>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style_register.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class = "container">
			<div style = "position: relative;">
				<div id="myModal" class="modal" role="dialog">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-body">
								<div class = "words" style = "padding-top:10px;">
									<p style = "text-align:center;">Create an Account</p>
									<form action = "this_value_should_change" name="radopt" method = "	">
										<input type = "text" placeholder = "Username" style="margin-bottom: 10px; " required>
										<input type = "password" placeholder = "Password" style="margin-bottom: 10px; " required>
										<input type = "password" placeholder = "Confirm Password" style="margin-bottom: 10px; " required>
										<input type = "email" placeholder = "Email Adress" style="margin-bottom: 10px; " required>
										<input type = "number" placeholder = "Mobile Number" style="margin-bottom: 10px; " required>
																			
												<input type="radio" name="radopt" 
													onclick="document.radopt.action='http://localhost/qwe/inventory/add.php';"
														style="margin-left: 80px;"> Employee
												
												<div style = "padding-top: 8px;">
													<button type = "submit" class = "btn btn-danger">Create Account</button>
												</div>
												
										
									</form>
									<div style = "margin-top: -5px;" class="robot" >
													<input id="checkBox" type="checkbox"> I am not a  robot
												</div>
									
								</div>
							</div>
							<div style = "background-color: #3d4147; height:88px;">
								<div class = "words">
									<h1>Already have an Account?</h1>
									<div style = "margin-left: 43px; margin-top: 10px;">
										<a href = "login.php" style="width: 150px;"  class = "rectangle">Sign in Here!</a>
									</div>
								</div>
							</div>	
							<div class="modal-footer">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
