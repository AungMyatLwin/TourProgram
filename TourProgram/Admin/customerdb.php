
<?php
@session_start();
  $conn = new mysqli("localhost", "root", "", "test");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 
  
$name=$_POST["name"];
$email=$_POST["email"];
$comment=$_POST["comment"];

  echo 'Connected to the database.<br>';
$sql = "INSERT INTO customerdb (id,Name, Email, Comment) VALUES (null, '$name', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 


/*if(isset($_POST["submit"])) { }
{
	header('Location:../customer/Contact Us.php');
			echo	$_SESSION["name"];echo '<br>';
						
}*/
echo ("<script language='javascript'>var val = ;
</script>");

if(isset($_POST["submit"])) {

	echo ("<script LANGUAGE='JavaScript'>
    window.alert( ' Your Comment has been saved');
    window.location.href='../customer/Contact Us.php';
    </script>");
        	
         
      }
  $conn->close();
?>
