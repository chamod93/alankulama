<!DOCTYPE html>
	<head>
		<title>
			Registration Form
		</title>
		
		<script type="text/javascript">
		
		function Validationform()
		{
			/*name text*/
			var name = document.forms["form1"]["stdname"].value; 
			var address1 = document.forms["form1"]["address1"].value;
			var address2 = document.forms["form1"]["address2"].value;
			var address3 = document.forms["form1"]["address3"].value;
			var sex = document.forms["form1"]["sex"].value;
			var username = document.forms["form1"]["username"].value; 
			var password = document.forms["form1"]["password1"].value; 
			var pw_confirm = document.forms["form1"]["password2"].value; 
			if(name=="")
			{
				alert("Please fill the name");
			}
			else if(address1 && address2 && address3 == "")
			{
				alert("Please fill the address");
			}
			else if(sex =="")
			{
				alert("Please confirm that you are not a robot, by filling 'sex'");
			}
			else if(username=="")
			{
				alert("Please add username field");
			}
			else if(password==pw_confirm)
			{
				alert("Password Confirmation is wrong");
			}
			
			
			
		
		}
		
		
		</script>
	</head>

	<body>
		<header>
		<center>
			
		</center>
		</header>
			
		<hr>
		
		<h1 align="center"><i>Application for Registration of E-learning</i></h1>
		
		<br>
		<br>
		<form name="form1" method="post" action="" onsubmit="return Validationform()">

		<fieldset>

		<fieldset>
			<legend>
				<h2>
					<i>
						Basic Information
					</i>
				</h2>
			</legend>
				<h3>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full Name: 
					<input type="text" name="stdname" id="stdname" maxlength="50" size="50" placeholder="Enter your name">
					
					&nbsp; &nbsp;Example: 
					<input type="text" value="Siripala" disabled>
						</br>
						<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address:&nbsp;&nbsp;&nbsp; 
					<input type="text" name="address1" placeholder="Enter your Address"/>
						</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
						
						<input type="text" name="address2" placeholder="Enter your Address"/>
						<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
						<input type="text" name="address3" placeholder="Enter your Address"/>
						<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Father's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mr.
					<input type="text" name="fatname" id="fatname" maxlength="50" size="50" placeholder="Father's name">
						<br>
						<br>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mother's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mrs.
					<input type="text" name="motname" id="motname" maxlength="50" size="50" placeholder="Mother's name">
						<br>
						<br>	
				
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="sex" id="sex" placeholder="Male or Female"> 
						<br>
						<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					Birth Day:
					<input type="date" name="date" id="date" placeholder="Your Birthday">

					<br>
					<br>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					Insert your Photo
					<input type="file" name="photo" multiple>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		

					<fieldset>
						<legend>
							<h2>
								<i>
									Profile information
								</i>
							</h2>
						</legend>
				
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<h2 align="center" style="color:blue">
					Create your Account with Username and Password
					</h2>
					<br>
					<h3>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					Username: <input type="text" name="username" id="username" placeholder="Enter the username">
					</br>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					Password: <input type="password" name="password1" id="password1" Placeholder="password">
					<br>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					Confirm Password: <input type="password" name="password2" id="password2" autocomplete="off" placeholder="Password Confirmation">
					<br>
					<br>
					<h2>
					<i>
					<center>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				I certify all the details of my knowledge.
				</center>
				</i>
				</h2>
				<br>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				

				<input type="submit" value="submit" name="submit" >
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<input type="reset" value="reset" name="reset">
				
				
				
				
			
			</fieldset>
		
		<h3>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<i><a href="Index.html">Back to home page</a></i></h3>


		</fieldset>
		</form>
	</body>
</html>
