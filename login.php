<html>
<head>
<title>Login Form</title>
<!-- <link href="signin.css" rel="stylesheet"> -->
</head>
<style>
	body {
  padding-top: 40px;
  padding-bottom: 40px;
 /*background-image: url(images/images.jpg);*/
}
input[type=email]{
    background-color: #f1f1f1;
    border-radius: 3px;
    padding: 10px 30px;
    }
input[type=email]:hover{
    border-color: #737CA1;
}

input[type=password]{
    background-color: #F0F3F4;
    border-radius: 3px;
    padding: 10px 30px;
    }
input[type=password]:hover{
    border-color: #737CA1;
}

input[type=submit]{
	background-color: #1aba9c;
	color: white;
	border: none;
    padding: 8px 30px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    }
input[type=submit]:hover{
  background-color: green;
}

    input[type=reset]{
	background-color: #1aba9c;
	color: white;
	border: none;
    padding: 8px 30px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
input[type=reset]:hover{
  background-color: green;
}

</style>
<center>
<body>
    <nav class="navbar" id="insidenav">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">JOJALE</a>
      </div>

    <ul class="nav navbar-nav">
      <li class="active"><a data-toggle="tab" href="#main1">Home</a></li>
      <li><a data-toggle="tab" href="#Contractor">Contractor</a></li>
      <li><a data-toggle="tab" href="#">Laborer</a></li>
      <li><a data-toggle="tab" href="#contact">Contact Us</a></li>
    </ul>

    <h1 style="color: #1aba9c">Welcome to the Login page</h1>
    <div>
    <form action="loginprocess.php" method="POST">
        <p style="font-size: 20px;">Enter your email address:</p>
        <input type="email" name="email"required></input>
        <p style="font-size: 20px;">Enter your password:</p>
        <input type="password" name="password" required></input>
        <br><br>
        <input type="reset" type="reset" value="Clear">

<input type="submit" type="submit" value="login">


</form>
</div>
</body>
<script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</html>