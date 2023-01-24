<?php
	@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Comment List</title>
	<link rel="stylesheet" type="text/css" href="admin_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<header>
		<h1>Register Form</h1>
	</header>
	<?php
			include("menu.php");
		?>
      <section>
      	<div style="right"> 
        <h2 align="center">Welcome 
        <?php
			if(isset($_SESSION["username"]))
			echo	$_SESSION["username"];
		?>
        </h2>
        </div>
      </section>
	<section align="center">
		<form action="register2.php" method="post" style="align-content:center">
 <table  width="500" height="200">
  <div class="container">
    <tr><td><label for="uname"><b>Username:</b></label></td>
    <td><input type="text" placeholder="Enter Name" name="name" id="name" required></td>
    </tr>
    
    <tr>
    <td><label for="uname"><b>Email:</b></label></td>
    <td><input type="text" placeholder="Enter Email" name="email" id="email" required></td>
   </tr>
    <tr>
    <td><label for="psw"><b>Password:</b></label></td>
    <td><input type="password" placeholder="Enter Password" name="password" id="Password" required></td>
        </tr>
        <tr>
        <td><label><b>Register:</b></label></td>
    <td><button type="submit">Register</button>
    <label>
      <input type="checkbox" checked="checked" name="remember" onclick ="return A();"> Remember me
    </label></td></tr>
  </div>
</table>
</form>
		
	</section>
	<footer>
		<h3>This page is for Registering New Admins</h3>
	</footer>
	<script>
		$('.handle').on('click', function(){
			$('nav ul').toggleClass('showing');
		});
	</script>
</body>
</html>