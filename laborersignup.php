<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bs/css/bootstrap-grid.css">	
</head>
<center>
<body style="background-color: #C0C0C0";>
	<div id="header">
		<h1>Welcome to JOJALE</h1>
		<ul class="nav navbar-nav navbar-right">
                    <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>
	</div>
	<img src="">
<div id="section">
	<div class="form">
		<b style="font-size: 30px;">Signup</b>
		<form action="processsignup.php" method="POST" target="top">
			<br>
			<div class="row">
		       <div class="col-md-6">
			First Name<br>
			<input type="name" name="firstName" placeholder="First Name">
		</div>
		       <div class="col-md-6">
			Last Name<br>
			<input type="name" name="lastName" placeholder="Last Name">
		</div>
	</div>
			<br><br>
		<div class="row">
		       <div class="col-md-6">
			Email<br>
			<input type="email" required autofocus name="email" placeholder="laborer@gmail.com">
		</div>
		<div class="col-md-6">
			Phonenumber<br>
			<input type="text" name="phonenumber" placeholder="+254700000000">
		</div>
	</div>
			<br><br>
		<div class="row">
		       <div class="col-md-6">
			Password<br>
			<input type="password" required name="password" placeholder="Password">
			<br><br> 
		</div>
			   <div class="col-md-6">
			Confirm Password<br>
			<input type="password" required name="password" placeholder="Password"> 
		</div>
	</div>
            <br><br>
            <div class="row">
		       <div class="col-md-6">
            Address<br>
			<input type="text" name="address" placeholder="001-100, Nairobi">
		</div>
	</div>
			<br><br>
			Job :<select name="job">
				<option>Plumbing</option>
				<option>Electrician</option>
			</select>

			Skills
			<!-- <input type="textarea"> -->
			<textarea name="skills" placeholder="Enter your Skills"></textarea>
            <input type="submit" name="register" value="Register" class="bt1">
            <input type="reset" name="reset" value="Clear" class="bt1">
		</form>
		
	</div>
 </div>
<br><br>
 <div id="footer">
<marquee width="100" height="20" behaviour="alternate">Copyright @ Maseno.ac.ke</marquee> 
</div>

</body>
</center>
</html>