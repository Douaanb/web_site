<?php
$servername = "localhost";
$username ="root";
$password ="";
$dbname ="di";
// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    echo "Connection Failed". mysqli_connect_error(); 
}if (isset($_POST) && $_POST != []){
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["fullname"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $sql="INSERT INTO users(name,email,password)VALUES('$name','$email','$pwd')";
        $query=mysqli_query($conn,$sql);
        if ($query) {
             echo " Added successfuly";
       }else{
             echo "Error" . mysqli_error($conn);
       }
    
}
}

  
?>
<html>

<head>
	<link rel="stylesheet" href="assets/css/register.css">
</head>

<body>
	<section id="reg_section">
		<div class="left">
			<img src="images/pic01.jpg" alt="register image" />
		</div>
		<div class="right">
			<form  method="POST">
				<h1><b>Get more things done with Loggin platform.</b></h1><br>
				<p>Access to the most powerfull tool in the entire design and web industry.</p><br>
				<label>Registre</label><br>
				<input type="radio" name="genre" value="" /><label>M</label>
				<input type="radio" name="genre" value="" /><label>F</label><br>
				<input type="checkbox" name="role" value="" /><label>Appr</label>
				<input type="checkbox" name="role" value="" /><label>Ensg</label><br>
				<input name="fullname" class="inputs" type="text" placeholder="Full name" style="color: red;" /><br>
				<input name="email" class="inputs" type="email" placeholder="E-mail Address" /><br>
				<input name="pwd" class="inputs" type="Password" placeholder="Password" /><br>
				<input id="btn_register" type="submit" value="Register" />
			</form>
		</div>
	</section>
</body>

</html>