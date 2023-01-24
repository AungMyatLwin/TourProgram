<?php
//connection open
  $con = new mysqli("localhost", "root", "", "test");
  
  if ($con->connect_error) {
    die("ERROR: Unable to connect: " . $con->connect_error);
  } 
  
  echo 'Connected to the database.<br>';

//datas
if(isset($_POST["name"]) && isset($_POST["password"]))
$name=$_POST["name"];
$password=$_POST["password"];
{
	$sql=("SELECT * FROM admin where name='name' AND password='password'");
		if ($con->query($sql) === TRUE) {
    echo "This is it";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

}
mysqli_close($con);

?>