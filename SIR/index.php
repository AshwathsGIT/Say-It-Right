<?php

$esub = $_POST['searchhere'];

$esubErr = '';
	if (isset($esub)) {

		if (preg_match("/^([a-zA-Z0-9]+)@([a-zA-Z]+)\.([a-zA-Z]+)/", $esub)) {
			mail($esub,"Test","Hey","From: mailaashoo@gmail.com");
		}
		else
		{
			$esubErr = "*Follow the format";
		}}
		
/*if(($esubErr ==='')){
		$sqlquery = "INSERT INTO Subscriber(Email) VALUES('$esub') ";

		if($conn->query($sqlquery)===TRUE){
			$alert = "Successful";
			echo $alert;
		}
		else{
			echo $conn->error;
		}

	}*/


?>
<!DOCTYPE html>
<html>
<title>home page</title>
<head>
  <link rel="stylesheet" href="sayitright.css">
  <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
  <script src="jsfile.js"></script>
</head>

<body class="wrapper">
	<div class="nav">
	<img id="logo" src="img/sit.png">
  	<a class="active" href="index.php" style=" color: skyblue">HOME</a>
  	<a href="Aboutus.php">ABOUT US</a>
  	<a href="http://ashwathsridhar.uta.cloud/">BLOG</a>
  	<a href="Shop.php">BUY FROM US </a>
  	<a href="contact.php">CONTACT</a>
  	<a href="signup.php">SIGN UP</a>
  	<a href="login.php">LOGIN</a>
	</div>
	<div id="homehome">
		<img id="logoin" src="img/mob.png"> 
		<div style="position: absolute;top:40%; left: 60%"><h2 style="font-size: 50px" >For good <br>
		communication <br>
		<span style="color: red">Say it right</span>  is<br>
		the tool that <br>
		you should use</h2></div>
	</div>
	<div class='subsc'>
		<form class="form" method="post" >
		<div style="position: absolute;top: 125%; left: 48% "><?php echo $esubErr; ?><input style="border-radius: 15px; height: 31px" type="input" id="subbl"   name="searchhere" placeholder="Enter email address">
		<!--<input style="border-radius: 15px; height: 31px" type="input" id="subbl"   name="searchhere" placeholder="Enter email address"><span id="eErr"></span></div>-->
		<div style="position: absolute;top: 117.57%; right: 8%"><input type="submit" style="background-image: linear-gradient(to right,#26C1F0,#26F0AD); height: 30px; width: 90px;border-radius: 10px; margin-right: 290px; margin-top: 60px;" value="Subscribe" name="esub"></div>
		<div style="position: absolute;top: 121%;left: 1%"><p>Subscribe Our Newsletter<br>
		<span class='spam'>We won't send any kind of spam </span></p>
		<p><br>	
		</form>
	</div>
	<footer class="footer">Copyright&#169 2019 All rights reserved | This website is made by &#9825 <span id="diaz" >DiazApps</span></footer>
</body>
</html>
