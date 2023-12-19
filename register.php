<?php
require "config.php";
if(isset($_POST["submit"])){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$contact = $_POST["contact"];
		$gender = $_POST["gender"];
		$password = $_POST["password"];
		$confirm_password = $_POST["confirm_password"];
		$duplicate = mysqli_query($connn, "SELECT * FROM form WHERE name = '$name' OR email = '$email';");
		
	if(mysqli_num_rows($duplicate) > 0){
			echo "<script>alert('Your Name and Email is Already registered')</script>";
		}
	else{
		if($password == $confirm_password){
			$query = "INSERT INTO form VALUES('','$name','$email','$contact','$gender','$password')";
			mysqli_query($connn, $query);
				echo "<script>alert('Successfully Registered')</script>"; 
			}
		else{
				echo "<script>alert('Password not match')</script>";				
			}
		}
}		

?>
<style>
*{
		--light:#DBECF4;
		--navy:#194569;
		--font:white;
		--bg:white;
		margin:0;
		padding:0;
		text-decoration:none;
		list-style:none;
		boxing-sizing:border-box;
}
body{
		background:var(--navy);
		display:flex;
		justify-content:center;
		

	}
form{
		margin:20%;
		background-color:var(--bg);
		padding:20px;
		border-radius:10px;
		align-item:center;
		height:430px;
		width:300px;
	
	
	}
label input{
	position:relative;
	
	}	
input{
	margin:5px;
	width:250px;

	}	
a{
	text-decoration:none;
	color:var(--bg);
	background-color:black;
	padding:5px;
	margin:20px;


	}
button{
	text-decoration:none;
	color:var(--bg);
	background-color:var(--navy);
	padding:5px;
	border-radius:10px;
	border:0;

	

	}
label, input, button, a, select{
	position:relative;
	left:20px;
}
h1{
	position:relative;
	left:100px;
	line-height:60px;
}

</style>
<html>
<body>

<form action="" method="POST" autocomplete="off">
<h1>Register</h1> </br>

<label>Name:</label> </br>
<input type="text" placeholder="Name" name="name"> </br>

<label>E-mail:</label> </br>
<input type="email" placeholder="email" name="email"> </br>

<label>Contact Number:</label> </br>
<input type="text" placeholder="Contact" name="contact"> </br>

	<select name="gender"> </br>
			<option>Select gender</option>
			<option>Male</option>
			<option>Female</option>			
	</select> </br>

<label>Password:</label> </br>
<input type="password" placeholder="Password" name="password"> </br>

<label>Confirm Password:</label></br>
<input type="password" placeholder="Confirm Password" name="confirm_password"> </br> 

</br>
<button type="submit" name="submit">Submit</button>
<button type="submit" name="submit">Cancel</button>
</br> </br>
<hr></br>
<a href="login.php">Log in here</a>





</form>


</body>
</html>
