
<?php
  $conn = new mysqli("localhost", "root", "", "test");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 
  
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];

  echo 'Connected to the database.<br>';
$sql = "INSERT INTO admin (id,Name, Email, Password) VALUES ('', '$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo'<script language="javascript">
		  alert("Register Successful");
		  window.location.href="index.php";
		  </script>';
 
  $conn->close();
?>
