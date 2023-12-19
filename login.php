<?php
require "config.php";

if(isset($_POST['login'])){
	$user_email = $_POST['email'];
	$user_pass = $_POST['password'];
	$check= "SELECT * FROM database WHERE email ='$user_email '  AND password = '$user_pass '";
	$row = mysqli_query($connn, $check);

	if(mysqli_num_rows($row)){
		echo "<script>alert('Welcome user')</script>";
		$_SESSION['email'] = $user_email;
		header("location: index.php");
	}
	else{
		echo "<script>alert('Incorrect email or Password')</script>";
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
		box-sizing:border-box;
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
		align-items:center;
		height:430px;
		width:300px;
	}

h1, form{
	margin:30px;
}
input{
	margin:5px;
	width:250px;
}	
button{
	text-decoration:none;
	color:var(--bg);
	background-color:var(--navy);
	padding:5px;
	border-radius:10px;

}
a{
	text-decoration:none;
	color:var(--bg);
	background-color:var(--navy);
	padding:5px;
	margin:20px;
	


}
.login_btn{
		background-color:var(--navy);
		border:0;
		padding:5px;
		color:white;

}

</style>
<html>
<body>

<form role="form" method="POST" action="login.php">
<h1>Log in</h1>
Email: <input name="email" type="email" placeholder="Email" required> </br>
Password: <input name="password" type="password" placeholder="Password" required>

</br>

<input class="login_btn" type="submit" value="login" name ="login" >


</br></br><hr></br>
<a href="register.php">Register here</a>

</form>


</body>
</html>
