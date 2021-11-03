<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

if(isset($_REQUEST['submit_btn'])){
$link = mysqli_connect("localhost", "root", "", "wls");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$country = mysqli_real_escape_string($link, $_REQUEST['country']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$package = mysqli_real_escape_string($link, $_REQUEST['package']);
$no_adults = mysqli_real_escape_string($link, $_REQUEST['no_adults']);
$no_chil = mysqli_real_escape_string($link, $_REQUEST['no_chil']);
$in_date = mysqli_real_escape_string($link, $_REQUEST['in_date']);
$out_date = mysqli_real_escape_string($link, $_REQUEST['out_date']);
$veh = mysqli_real_escape_string($link, $_REQUEST['veh']);
$hot = mysqli_real_escape_string($link, $_REQUEST['hot']);
$num_room = mysqli_real_escape_string($link, $_REQUEST['num_room']);
$room = mysqli_real_escape_string($link, $_REQUEST['room']);
$subject = mysqli_real_escape_string($link, $_REQUEST['subject']);

 
// Attempt insert query execution
$sql = "INSERT INTO reservation(firstname,lastname,phone,country,email,package,no_adults,no_chil,in_date,out_date,veh,hot,num_room,room,subject) VALUES (
  '$first_name','$last_name','$phone','$country','$email','$package','$no_adults','$no_chil','$in_date','$out_date','$veh','$hot','$num_room','$room','$subject')";
if(mysqli_query($link, $sql)){
  echo '<script language="javascript">';
  echo 'alert("Successfully Added"); location.href="success.html"';
  echo '</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



// Close connection
mysqli_close($link);
}
?>




<html>
	<head>
		<title> Enjoy Safari </title>
		<link rel="styleSheet" type="text/css" href="../style/homeStyle.css"> </link>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href='../css/css_res.css'>
		<link rel="stylesheet" href='../css/camp.css'>
		
	</head>

	<!-- Add Logo -->
		<img class="floatLogo" src="../images/logo.png" alt="Enjoy Safari logo" width="125" height="125">
		<h1 class="floatWebName">Enjoy Safari</h1> 
	<!-- Add Social Media -->
		<img class="floatL iconM" src="../images/fbIcon.png" alt="Face book" width="30" height="30">
		<img class="floatL" src="../images/Instagram.png" alt="Instagram" width="30" height="30">
		<img class="floatL" src="../images/GoogleEPlus.png" alt="GoogleEPlus" width="30" height="30">
		<img class="floatL" src="../images/twitter.png" alt="Twitter" width="30" height="30">
		<img class="userIcon1" src="../images/SingIn.webp" alt="SingIn" width="75" height="75">
		<img class="userIcon2" src="../images/singnUp.png" alt="singnUp" width="75" height="75">
				<h5 class="floatR"> SingIn </h5>
		<h5 class="floatR"> SingUp </h5>

	
	<div class="menuH">
	
		<a class="menu" href = "#"> Home </a> 
		<a class="menu" href = "#"> Safari Parks </a>
		<a class="menu" href = "#"> Camping </a>
		<a class="menu" href = "News.html"> Vechical Hire </a>
		<a class="menu" href = "file:///C:/Users/it19985428/Desktop/IWT/src/contacN.html"> Hotel Booking </a>
		<a class="menu" href = "News.html"> Contact </a>
		<a class="menu" href = "https://en.wiktionary.org/wiki/about">About US </a>
		<!-- Making Search Bar-->
		<div class="search-container">
			<form>
				<input type="text" placeholder="Search.." name="search">
				<button type="submite" > <i class="fa fa-search" style="font-size:15px;color:red"></i> </button>
			</form>
		</div>
	</div>



<body>

<div style = "background-image: url(img/bac.png); "">	


	
		<hr>
<form action="" method="post">

 <div class="container">

 	<h1 align="center">Make A Reservation</h1>

  <div class="row">
    <div class="col-25">
      <label for="fname">Name</label>
    </div>
    <div class="col-25">
      <input type="text" id="fname" name="firstname" placeholder="First name">
    </div>
    <div class="col-25">
      <input type="text" id="lname" name="lastname" placeholder="Last name">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="cnum">Contact Number</label>
    </div>
    <div class="col-50">
      <input type="tel" id="phone" name="phone" placeholder="0711234567" required><br><br>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="country">Select Your Country</label>
    </div>
    <div class="col-50">
      <select id="country" name="country">
      	<option value="s">Select Your Country</option>
      	<option value="sl">Srilanka</option>
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
    </div>
  </div>

   <div class="row">
    <div class="col-25">
      <label for="fname">Email Addrerss</label>
    </div>
    <div class="col-50">
      <input type="text" id="email" name="email" placeholder="Email">
    </div>
   
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="country">Package</label>
    </div>
    <div class="col-50">
      <select id="package" name="package">
      	<option value="s">Select Your Package</option>
        <option value="delu">Delux</option>
        <option value="pla">Platinum/option>
        <option value="ada">###</option>
      </select>
    </div>
  </div>

 <div class="row">
    <div class="col-25">
      <label for="cnum">No of adults</label>
    </div>
    <div class="col-50">
      <input type="number" id="no_adults" name="no_adults" placeholder="1"><br><br>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="cnum">No of children</label>
    </div>
    <div class="col-50">
      <input type="number" id="no_chil" name="no_chil" placeholder="1"><br><br>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="cnum">Check in Date</label>
    </div>
    <div class="col-50">
      <input type="date" id="in_date" name="in_date"><br><br>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="cnum">Check out Date</label>
    </div>
    <div class="col-50">
      <input type="date" id="out_date" name="out_date"><br><br>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="country">Vehicle</label>
    </div>
    <div class="col-50">
      <select id="veh" name="veh">
      	<option value="s">Select Your Vehicle</option>
        <option value="delu">Cab</option>
        <option value="pla">##</option>
        <option value="ada">###</option>
      </select>
    </div>
  </div>


  <hr>
  <h3>Hotel Booking</h3>
  <hr>
  <div class="row">
    <div class="col-25">
      <label for="country">Hotel</label>
    </div>
    <div class="col-50">
      <select id="hot" name="hot">
      	<option value="s">Select Your Hotel</option>
        <option value="delu">Amaya Lake</option>
        <option value="pla">##</option>
        <option value="ada">###</option>
      </select>
    </div>
  </div>



 <div class="row">
    <div class="col-25">
      <label for="num_room">No of Rooms</label>
    </div>
    <div class="col-50">
      <input type="number" id="num_room" name="num_room" placeholder="1"><br><br>
    </div>
  </div>


 <div class="row">
    <div class="col-25">
      <label for="country">Room Type</label>
    </div>
    <div class="col-50">
      <select id="room" name="room">
      	<option value="s">Select Your Room Type</option>
        <option value="delu">Delux</option>
        <option value="pla">##</option>
        <option value="ada">###</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">Addition Details</label>
    </div>
    <div class="col-50">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>



   
    
  <br>
  <hr>
  <div class="row">
  	<div class="col-50">
    <button class="button" style="vertical-align:middle"><span>Cancel </span></button>
	</div>

 
  	<div class="col-50">
    <button class="btn btn-primary" type="submit" name="submit_btn">Submit</button>
	</div>
  </div>


</div>


</form>




</div>

<hr>
<br>
<br>

	<div class="image" style="max-width:1500px">

			
			
			<img class="mySlides" src="img_pack/3.jpg" style="width:105%">
			<img class="mySlides" src="img_pack/2.jpg" style="width:105%">
			<img class="mySlides" src="img_pack/1.jpg" style="width:105%">
			<img class="mySlides" src="img_pack/4.jpg" style="width:105%">
			<img class="mySlides" src="img_pack/5.jpg" style="width:105%">
			<img class="mySlides" src="img_pack/6.jpg" style="width:105%">
			<img class="mySlides" src="img_pack/7.jpg" style="width:105%">
			<img class="mySlides" src="img_pack/23.jpg" style="width:105%">
			</div>





</body>
	<footer>
				<hr class="newF">
				
				<ul class="menuF">
					<li class="menuF"> <a href = "#"> Home </a> </li>
					<li class="menuF"> <a href = "News.html"> Contact </a> </li>
					<li class="menuF"> <a href = "https://en.wiktionary.org/wiki/about">About US </a> </li>
				</ul>
			
				<img class="bnk" src="../images/bankCard.png" alt="bankCard" width="220" height="40">
				<p> Enjoy Safari</p> 
				<p> 447/1 Kandy Road </p>
				<p> Kadawatha </p>
				<img class="footIcon" src="../images/playStoreA.png" alt="playStoreA" width="100" height="30">
				<img class="footIcon" src="../images/playStoreG.png" alt="playStoreG" width="100" height="30">
				<img class="footIcon" src="../images/facebookLike.webp" alt="facebookLike" width="100" height="30">
				<img class="footIcon" src="../images/YTubeSubcribe.png" alt="YTubeSubcribe" width="100" height="30">
			</footer>

 				
	<script src="../js/slideshow_js.js"></script>


	</body>
</html>
