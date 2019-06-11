<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Creative Design.</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>

	<header>
		<img src="img/logo.png" alt="Creative design. logo" class="logo">
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
				</ul>
			</nav>
	</header>

	<body>
<?php
	$error_message = "";
	
	$fname = $_POST['fname']; 
	$lname = $_POST['lname']; 
	$email_from = $_POST['email_from'];
	$message = $_POST['message']; 
	
	if ($fname != "" && $lname != "" && $email_from != "" && $message != "") {
		$email_to = "brandoncox09@gmail.com";
		$email_subject = "Contact Form Submission";

		$email_body .= "First Name: " . $fname . "\n";
		$email_body .= "Last Name: " . $lname ."\n";
		$email_body .= "Email " . $email_from ."\n";
		$email_body .= "Message: " . $message ."\n";

		mail($email_to, $email_subject, $email_body);
		
		echo "<h1>Thank You</h1>";
		echo "<p>We will get back to you soon!</p>";
		exit;
	} else {
		$error_message = "Please enter all required fields.";
	}
?>	
<?php
	if ($error_message != "") {
		echo "<p>". $error_message . "</p>";
	}
?>
	<div class="contact">
		<br><br><br><br>
		<div class="contact-container">
  <div style="text-align:center">
    <h2>Contact me</h2>
    <p>Send me your project details and I'll get back to you as soon as I can</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="img/map.jpg" style="width:100%">
    	</div>
   		 <div class="column">
      		<form action="/action_page.php">
      			<label for="email">Email</label>
      			<br>
      			<input type="text" id="email" name="email_from" placeholder="Your email">
      			<br><br>
        		<label for="fname">First Name</label>
        		<br>
        		<input type="text" id="fname" name="fname" placeholder="Your name..">
        		<br><br>
        		<label for="lname">Last Name</label>
        		<br>
        		<input type="text" id="lname" name="lname" placeholder="Your last name..">
        		<br><br>
        		<label for="subject">Subject</label>
       			 <br>
        		<textarea id="subject" name="message" placeholder="Write something.." style="height:170px">	</textarea>
        		<br><br>
        		<input type="submit" value="Submit">
     		 </form>
    		</div>
  		</div>
			</div>
		</div>
	</body>

	<footer>
		<div class="container">
			<div class="col-3">
				<p>This website was designed and written by Brandon Cox</p>
			</div>

			<div class="col-1">
				<ul class="unstyled-list">
					<nav>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="resume.html">Resume</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="sitemap.html">Site Map</a></li>
						</ul>
					</nav>
				</ul>
			</div>
	</div>
	</footer>
</body>
</html>