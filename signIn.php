<?php


?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Blues || Registration</title>
        <style>
*{
				--light:#DBECF4;
				--navy:#194569;
				--orange:#ee6c4f;
    --white:white;

				margin:0;
				padding:0;
				text-decoration:none;
				list-style:none;
				boxing-sizing:border-box;
}     	

.cont_form{
   display:flex;
		 justify-content:center;
		 margin:0;
   align-item:center;

   background:linear-gradient(var(--navy),var(--light));

}      				
.main_form{
				background:var(--white);
				height:400px;
				width:250px;
				border-radius:10px;
				display:flex;
				justify-content:center;
				padding:20px;
				margin:50px;


}
input{
						height:20px;
						border-radius:5px;
						border:1px solid var(--orange);
						background:var(--bg);
						height:auto;
						width:230px;
						margin:2px;
								
}
label {	
     color:var(--navy);
     
       
}
.btn_reg{
    position:absolute;
    left:390px;
				background-color: var(--navy);
				height:30px;
				width:200px;
				color:white;
				border:0;				
				border-radius:5px;
	
}
footer{
    display:flex;
    justify-content:center;
				background:var(--navy);
				color:white;
				height:150px;
				width:100%;
				line-height:170px;
		
}		
.tag_blues{ 
				font-weight:bold;
				font-size:50px;
				text-tranform:uppercase;
    margin:70px;
				text-align:center;
    
}
.have{
 text-align:center;
				background-color:black;			
				text-allign:center;
				padding:7px;
				margin:10px;
				height:20px;
				width:200px;
				border-radius:5px;
}
a{
     color:white;
     text-decoration:none;
}

#ask_reg{
    color:grey;
				font-size:12px;
				text-align:center;
}
      				
        </style>
    </head>
<body>

	<div class="cont_form">			
				<div class="main_form">

<form action="" method="POST" autocomplete="OFF">
   <label class="tag_blues">Blues</label> </br>
   
    <label>Fullname:</label></br>
    <input type="text" name="fullname" placeholder=" Fullname" value=""> </br>

    <label>Username:</label> </br>
    <input type="text" name="username" placeholder=" Username" value=""></br>
    
    
    <label>E-mail:</label></br>
    <input type="email" name="email" placeholder=" E-mail" value=""> </br>

    <label>Password:</label></br>
    <input type="password" name="password" placeholder=" Password" value=""></br>

    <label>Confirm Password:</label>
    <input type="password" name="confirmpassword" placeholder=" Confirm password" value=""></br>


 </br>   <button type="submit" name="submit" class="btn_reg">Register</button></br> 
 


<br> 
<hr style="width:230px;float:center;margin:10px;background-color:black;">
<br>
<p id="ask_reg">Already have an account?</p>
   <div class="have"><a href="Log_in.html">Log in your account</a></div>

 </form>
    </div>
      </div>


<footer>
Dexter James Website ||  2nd year BSIS ||  2022
</footer>

</body>
</html>
