<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Legend Myanmar Travel & Tour</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../js/jquery-1.7.1.min.js"></script>
<script src="../js/superfish.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/tms-0.4.1.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/scroll.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
<script>
//email validation

function validateEmail(email) { 
    var re = ".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA
-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/"; 
    return re.test(email);
} 


</script>
<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</head>
<link rel="icon" href="../images/22231.png">
<body onload='document.form1.text1.focus()'>
<button onclick="topFunction()" id="myBtn" title="Go to top">Up</button>
<div class="main-indents">
  <div class="main">
    <!-- Header -->
        <header>
      <h1 class="logo"><a>Legend Myanmar</a></h1>
      <nav>
        <ul class="sf-menu">
          <li><a href="HomePage.php">Home</a></li>
          
          <li><a href="Welcome Myanmar.php">General Information</a>
          <ul>
              <li ><a href="Traveler Tips.php">Traveler Tips</a></li>
                    <li ><a href="Helpfulnumber.php">Helpful Number</a></li>
                  
            </ul>
          </li>
     
          
          <li> <a href="Tourprogram.php">Tour Program</a>
         		<ul class="tp">
                	
                	<li ><a href="Package Tour.php">Package Tour</a>
                    <ul >
                	<li><a href="3 Day Yangon Stopover.php">3 Day Yangon Stopover</a></li>
                    <li><a href="4 Day Legend Of Golden Rock.php">4 Day Legend Of Golden Rock</a></li>
                    <li><a href="5 Day Temples Of Bagan.php">5 Day Temples Of Bagan</a></li>
                    <li><a href="6 Day Glimpse Of Myanmar.php">6 Day Gllimpse Of Myanmar</a></li>
                    <li><a href="7 Day Impression Of Myanmar.php">7 Day Impression Of Myanmar</a></li>
                    <li><a href="7 Day Kingdom Of Rakhiine.php">7 Day Kingdom Of Rakhine</a></li>
                    <li><a href="7 Day Southern Myanmar Beauty.php">7 Day Southern Myanmar Beauty</a></li>
                    <li><a href="8 Day Compact Tour Of Myanmar.php">8 Day Compact Tour Of Myanmar</a></li>
                    <li><a href="9 Day Jewels Of Myanmar.php">9 Jewels Of Myanmar</a></li>
                    </ul>
                    </li>
                    <li><a href="Day Tour.php">Day Tour</a>
                    	<ul class="tp">
                        	<li><a href="Bago Day Tour.php">Bago Day Tour</a></li>
                            <li><a href="Golden Rock (Kyaikgtiyo)Day Tour.php">Golden Rock (Kyaikhtiyoe)</a></li>
                            <li><a href="Inle – Indein Boat Excursion Day Tour.php">Inle - Indein Boat Excursion</a></li>
                            <li><a href="Innwa (AVA) – Sagaing Day Tour.php">Innwa - Sagaing</a></li>
                            <li><a href="Mandalay Day Tour.php">Mandalay</a></li>
                            <li><a href="Mingun-Innwa(AVA) Day Tour.php">Mingun - Amarapura</a></li>
                            <li><a href="Mingun-Innwa (AVA) Day Tour.php">Mingun - Innwa</a></li>
                            <li><a href="Mt. Poppa Day Tour.php">Mt.Poppa</a></li>
                            <li><a href="Pyin Oo Lwin Day Tour.php">Pyin Oo Lwin</a></li>
                            <li><a href="Yangon Day (RGN-01).php">Yangon Day (RGN-01)</a></li>
                            <li><a href="Yangon Day (RGN-02).php">Yangon Day (RGN-02)</a></li>
                            <li><a href="Salay Day Trip.php">Salay</a></li>
                            <li><a href="Thanlyin Day Tour (RGN-04).php">Thanlyin</a></li>
                            
                        </ul>
                    </li>
                    
                    <li ><a href="Optional Tour.php">Optional Tour</a>
                    	<ul class="tp ">
                        	<li><a href="Trekking In Pindaya.php">Trekking In Pindaya</a></li>
                            <li><a href="Balloons Over Inle.php">Balloons Wver Inle</a></li>
                            <li><a href="Red Mountain.php">Red Mountain</a></li>
                            <li><a href="Elephant Sanctuary.php">Myanmar's Family-Run Elephant Sanctuary</a></li>
                        
                        </ul>
                    </li>

                </ul>
          
          <li><a href="About Myanmar.php">About Myanmar</a>
          
            <ul>
              <li ><a href="public holidays.php">Public Holiday</a></li>
              <li><a href="Culture.php">Culture</a></li>
            </ul>
          </li>
          <li><a href="About Us.php">About Us</a></li>
          <li class="current"><a href="Contact Us.php">Contact Us</a></li>
        </li>
        </ul>
        
      </nav>
      <div class="clear"></div>

    <!-- Slider -->
<div class="mp-slider container_12" style="width:100%; ">
      <ul class="items row">
        <li><img src="../images/Slider1.jpg" alt="" style="width:100%;" class="img-responsive">
          <div class="banner"><span class="row-1"><b></b></span><span class="row-2"><b></b></span></div>
        </li>
        <li><img src="../images/Slider2.jpg" alt="" style="width:100%;">
          <div class="banner"><span class="row-1"><b></b></span><span class="row-2"><b></b></span></div>
        </li>
        <li><img src="../images/Slider3.jpg" alt="" style="width:100%;">
          <div class="banner"><span class="row-1"><b></b></span><span class="row-2"><b></b></span></div>
        </li>
      </ul>
      <a href="#" class="mp-prev"></a> <a href="#" class="mp-next"></a> </div><!-- Content -->
    <section id="content">
      <div class="container_12">
        <article class="a2">
          <div class="wrapper">
            <div class="col-11">
              <h3>Postal address</h3>
              <div class="map_container">
                <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
              </div>
              <div class="adress">
                <div class="dt"> 9870 St Vincent Place, Glasgow, DC 45 Fr </div>
                <div class="extra-wrap">
                  <div class="dd">Telephone: +1 800 603 6035</div>
                  <div class="dd">E-mail: <a href="#">mail@demolink.org</a></div>
                  <div class="dd">Skype: <a href="#">@skypename</a></div>
                </div>
              </div>
            </div>
            <div class="col-12" style="border:thick #0D0000" >
             <a href="../Contact Us.php"></a>
             <h3>Register Form for feedback.</h3>
<form action="../Admin/customerdb.php" method="post" name="killme">

<h6>Name:</h6><input type="text" name="name" required style="width:60%;"><br>
<h6>E-mail:</h6><input type="text" name="email" style="width:60%;"><br>
<h6>Comment:</h6>
<textarea type="textfield" name="comment" style="width:60%;height:60px"></textarea>

<input type="submit" name="submit" onclick='Javascript:validateEmail();'>
</form >		

     </div>
          </div>
        </article>
      </div>
    </section>
    <!-- Footer -->
    <footer>
      <div class="copyright"><a><i class="material-icons" style="font-size:20px; color:#FFF">domain</i>&nbsp;: Legend Myanmar Travel & Tour Co.Ltd</a><br>
      <a><i class="material-icons" style="font-size:20px; color:#FFF">place</i>&nbsp; : 36<sup>th</sup> Street, Kyaukdata Township, Yangon</a><br>
      <a><i class="material-icons" style="font-size:20px; color:#FFF">local_phone</i>&nbsp; : +959 000 000 000, +959 000 000 001 </a><br>
      <a><i class="material-icons" style="font-size:20px">email</i>&nbsp; : legendmyanmar.gp1@gmail.com</a><br>
      <a><i class="material-icons" style="font-size:20px">public</i>&nbsp; : www.legendmyanmar.com.mm</a><br>
      <a>Payment accept under method Thank You</a>
        <ul class="social-list">
       <li><i class="fa fa-cc-paypal" style="font-size:36px; color:#FFF"></i></li>
        <li><i class="fa fa-cc-visa" style="font-size:36px; color:#FFF"></i></li>
        <li><i class="fa fa-credit-card" style="font-size:36px; color:#FFF"></i></a></li>
      </ul>
   
      </div> 
      <ul class="social-list">
       <li><a href="#" class="fa fa-facebook"></a></li>
        <li><a href="#" class="fa fa-twitter"></a></li>
        <li><a href="#" class="fa fa-instagram"></a></li>
      </ul>
    </footer>  </div>
</div>
</body>
</html>
