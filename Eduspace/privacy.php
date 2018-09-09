<?php
	session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/search_config.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link href='https://fonts.googleapis.com/css?family=Play|Orbitron:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/sidenav.css">
<link type="text/javascript" href="script/home.js">
<link rel="icon" href="images/icon.png">
<script src="script/jquery-1.11.3.min.js">
</script>
<script>

	$(document).ready(function(){
		
		$(window).scroll(function() { 
		var scroll = $(window).scrollTop();
        if (scroll > 4) {
			$("#log").attr('src','images/icon.png');
			$(".header").addClass('smaller');
			$(".smaller").removeClass('header');
			$(".lul").removeClass("drop_it_down");
			$(".lul").addClass("smaller_drop_it_down");
		}
		else {
			$("#log").attr('src','images/logo2.png');
            $(".smaller").addClass("header");
			$(".header").removeClass("smaller");
			$(".smaller_drop_it_down").addClass("drop_it_down");
			$(".drop_it_down").removeClass("smaller_drop_it_down");
		}
    });
	
	$("#Login").click(function(){
		$(".lul").toggle();
	});
		
	});
</script>

<title>Terms of use</title>

</head>

<body >


<?php
	include('head.php');
?>



<div class="about_us container-fluid" style="height:auto; text-align:center; margin-top:100px;">
<div class="page_title"><h1>PRIVACY POLICY</h1></div>
<div class="im" style="border-radius:3px;">
<img src="images/privacy.jpg" height="50%" width="100%"></div>

<div class="txt" style="text-align:left; padding-left:10px;">

<p>This is the main privacy policy of EDUSPACE .

At EDUSPACE we collect different types of information about our users for 

four main reasons:</p>


1. To provide personalised services unique to individual users.
<br>

2. To help us to monitor and improve the services we offer
<br>

3. To sell advertising space on the site. This helps us to keep the site free for 


people who visit it.
<br>

4. If we have permission from the user, to market services to them.
<br>
<br>

<p>There may be other privacy policies that apply to certain services we 

provide. Please read these when you register or subscribe for these services 

on these sites.</p>

<b>Our principles</b>
<br>
<br>

1.&nbsp;We do our very best to protect your privacy by using security technology 

appropriately. This means:
<br>

&nbsp;&nbsp;• we make sure that we have appropriate security measures to protect your 

information; and
<br>

&nbsp;&nbsp;• we make sure that when we ask another organisation to provide a service 

for us, they have appropriate security measures.
<br>

2.&nbsp;We will be clear in our dealings with you as to what information about 

you we will collect and how we will use it.
<br>

3.&nbsp; We will use personal information only for the purposes for which it was 

originally collected and we will make sure we delete it securely.
<br>

4.&nbsp; Our site is accessible via the internet. This means that people around the 

world who access our website can see anything you post on the website, for 

example, forum
<br>
<br>

<b>How we use your information</b>
<br>
<br>

<b>What information do we collect?</b>
<br>

 We collect information on you:
<br>

• when you register or become a member of the Eduspace
<br>

• when you use the website
<br>

• through cookies
<br>
<br>

<b>Registration</b>


<p>
The minimum information we need to register you is your name, email and 

a password. Unless we say otherwise, you have to answer all the registration 

questions.</p>

<p>We may also ask some other, voluntary questions during registration for 

certain services (for example, professional networks) so we can gain a 

clearer understanding of who you are. This also allows us to personalise 

services for you.</p>
<br>

<b>Updating your personal information</b>
<br>
<br>

We offer edit page, where you can update your personal information at any 

time, and change your marketing preferences.
<br>
<br>

<b> Legal information and how to contact us</b>

<p>If you would like access to or a copy of the personal information we hold 

about you, to request a correction, or have any questions about how we may 

use it or to make a complaint, please contact the Data Protection Manager 

at the address shown above. Or, email eduspace@gmail.com</p>
<br>

<b>Changes to the privacy policy</b>
<br>
<br>

<p>Should we elect to change our privacy policy we will post the changes here. 

Where the changes are significant, we may also choose to email all our 

registered users with the new details. Where required by law, will we obtain 

your consent to make these changes.</p>

</div>





</div>




<?php
	include('foot.php');
?>



</body>
</html>
