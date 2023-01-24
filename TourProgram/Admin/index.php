<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Comment List</title>
	<link rel="stylesheet" type="text/css" href="admin_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script Language ="javascript">
	function A()
	{
		if(document.getElementById("name"). value == "")
		{
			alert("pl.......");
			document.getElementById("name").focus();
			return false;
		}
		else if(document.getElementById("password"). value == "")
		{
			alert("pl.......");
			document.getElementById("password").focus();
			return false;
		}
		else
		{
			return true;
		}
	}
</script>
</head>
<body>
<!--	<header>
		<h1 style="font-size: 16px">Login Form</h1>
	</header>-->
	<section>
		<form action="testphplogin2.php" method="post">
 
  <div class="container" style="text-align:center;">
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Name" name="name" id="name" required><br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" id="password" required><br>
        
    <button type="submit">Login</button><br>
    <label>
      <input type="checkbox" checked="checked" name="remember" onclick ="return A();"> Remember me
    </label><br>
  </div>

</form>

	</section>
	<!--<footer class="killme">
		<h1 style="font-size: 16px">footer</h1>
	</footer>-->
	<script>
		$('.handle').on('click', function(){
			$('nav ul').toggleClass('showing');
		});
	</script>
</body>
</html>