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

<title>About Us</title>

</head>

<body >


<?php
	include('head.php');
?>





<div class="about_us container-fluid" style="height:auto; text-align:center; margin-top:100px;">
<div class="page_title"><h1>ABOUT US</h1></div>
<div class="im">
<img src="images/about-us.jpg" height="50%" width="100%"></div>

<div class="txt">
Eduspace originated from the idea that there does not exists a website that contains a collaborative information about all the playschools, kindergartens, schools and colleges at one place. It makes it easier for the parents to know about the facilities and the infrastructure of the institutions and what is happening in the institution where they are/will be sending their ward everyday.

Website can be effectively used by parents and students. The students currently pursuing class 10th can take up the proficiency test to know which stream suits them the best. The students who have completed their class 12th can be acquainted with the best institutes available.
</div>





</div>









<?php
	include('foot.php');
?>









</body>
</html>
