<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="di";
// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    echo "Connection Failed". mysqli_connect_error(); 
}
if (isset($_POST) && $_POST != []){
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	$sql="SELECT * From users WHERE email = '$email' AND password = '$pwd'";
	$query = mysqli_query($conn,$sql);
	if (mysqli_num_rows($query) > 0) {
		session_start();
		$_SESSION['username']='di';

		header("location: index.html");
	}else{
		$error ="login or password doesn't existe";
	}
}


?>
<html>

<head>
	<link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
	<section id="reg_section">
		<div class="left">
			<img src="images/banner.jpg" alt="register image" />
		</div>
		<div class="right">
			<form method="POST">
				<h3><b>Get more things done with Loggin platform.</b></h3><br>
				<p>Access to the most powerfull tool in the entire design and web industry.</p><br>
				<label><div class="login">login</div></label><br>
				<p style="color:red"; ><?= (isset ($error))? $error : "" ?></p>
				<input class="inputs" type="email" placeholder="E-mail Address" name="email" /><br>
				<input class="inputs" type="Password" placeholder="Password" name="pwd" /><br>
				<input id="btn" type="submit" value="login" />
				
				<a href="#" >Forget password?</a>
				<a  href="register.php" >Create Account</a>
			</form>
		</div>
	</section>
</body>

</html>