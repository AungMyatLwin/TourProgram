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
		<h1>Adminstrator</h1>
	</header>
	<nav>
		<ul class="showing">
			<a href="#"><li>Home</li></a>
			<a href="#"><li>About</li></a>
			<a href="#"><li>Login</li></a>
			<a href="#"><li>Register</li></a>
			<a href="#"><li>Logout</li></a>

		</ul>
		<div class="handle">Menu</div>
	</nav>
	<section>
<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

	</section>
	<footer>
		<h1>footer</h1>
	</footer>
	<script>
		$('.handle').on('click', function(){
			$('nav ul').toggleClass('showing');
		});
	</script>
</body>
</html>