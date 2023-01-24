<?php
	@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Adminstrator</title>
	<link rel="stylesheet" type="text/css" href="admin_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body style="text-align:center">
	<header>
		<h1>Adminstrator</h1>
	</header>
		<?php
			include("menu.php");
		?>
      <section>
      	<div style="right"> <h3>Welcome 
        <?php
			if(isset($_SESSION["username"]))
			echo	$_SESSION["username"];
		?>
        </h3></div>
      </section>
	<section>
<?php 
 $conn = new mysqli("localhost", "root", "", "test");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 
  $sql = "SELECT id,name,email,comment FROM customerdb";
$res = mysqli_query($conn, $sql);
$start=0;
?><table border="4px" width="800" height="600" align="center">
<th scope="row">ID</th>
<th scope="row">Name</th>
<th scope="row">Email</th>
<th scope="row">Comment</th>	
<?php
	while ( $r = mysqli_fetch_assoc($res)) {
?> 	<tr>
		<td><?php echo $r['id']; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;
		<td><?php echo $r['name']; ?></td>&nbsp;&nbsp;&nbsp;&nbsp; 
        <td><?php echo $r['email']; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;
        <td><?php echo $r['comment']; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;
	</tr> 
    	 
<?php } ?>
</table>
</section>
	<footer>
		<h1>This Page is For the Admins Only</h1>
	</footer>
	<script>
		$('.handle').on('click', function(){
			$('nav ul').toggleClass('showing');
		});
	</script>
</body>
</html>