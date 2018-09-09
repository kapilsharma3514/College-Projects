<?php
	session_start();
	if (!isset($_SESSION["name"]))
	{
		echo "<script>alert('Login before taking the test !')</script>";
		echo "<script>window.location.href='login.php'</script>";
	}
	include('config.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Play|Orbitron:700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/contactbg.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'><link type="text/javascript" href="script/home.js">
<link rel="icon" href="images/icon.png">
<script language="javascript">
function log_me_out() {
		window.location.href="log_me_out.php";
	}
</script>
<script src="script/jquery-1.11.3.min.js">
</script>
<script>

		
	
	$(document).ready(function(){
		
		
	 $(window).scroll(function() { 
        var scroll = $(window).scrollTop();
 
        if (scroll > 4) {$("#log").attr('src','images/icon.png');
            $(".header").addClass('smaller');
			$(".smaller").removeClass('header');
			$(".lul").removeClass("drop_it_down");
			$(".lul").addClass("smaller_drop_it_down");
			
        } else {$("#log").attr('src','images/logo2.png');
            $(".smaller").addClass("header");
			$(".header").removeClass("smaller");
			$(".smaller_drop_it_down").addClass("drop_it_down");
			$(".drop_it_down").removeClass("smaller_drop_it_down");
			
        }
    });
	
	$("#expandit1").click(function(){
		$("#hideit1").slideToggle();
	});
	
	$("#expandit2").click(function(){
		$("#hideit2").slideToggle();
	});
	
	$("#expandit3").click(function(){
		$("#hideit3").slideToggle();
	});
	
	$("#Login").click(function(){
		$(".lul").toggle();
	});
	
});


</script>

<title>EduSpace</title>

</head>

<body style="background:url(images/3033422-poster-p-1-why-duolingo-and-google-are-entering-the-standardized-test-game.jpg) no-repeat center center fixed; ">



<?php
	include('head.php');
?>


<div style="overflow:hidden; margin:130px auto 80px auto; background-color:#CDE1E2; opacity:0.95; border-radius:8px;  width:60%;">


<div style="overflow: hidden; font-variant:small-caps; color:#000040; font-size:3.2em; text-align:center; margin-top:20px; font-weight:bold; margin-bottom: 10px;">
	<span>
		Proficiency Test
	</span>
</div>
<div style="overflow: hidden; font-variant:small-caps; font-size:1.7em;  color:#000040; text-align:center; margin: -10px auto 40px auto; font-weight:bold; margin-bottom: 10px;">
	
		( For 10th Class )
	
</div>

<div style="overflow:hidden; text-align:center; font-size:1.7em; margin:40px auto 20px 0px;">
	Select A Topic :
</div>
<div style="overflow:hidden; margin-top:20px;font-size:1.4em;">
	<a href="science.php" style="text-decoration:none;">
   <div style="float:left; width:30%; margin-left:15%;"> <img src="images/FacultyOfScience.jpg" width="100%" height="160px">
		<div style="background-color:ghostwhite; padding:10px 20px;">
			Science
		</div></div>
	</a>

	<a href="socialscience.php" style="text-decoration:none;">
		  <div style="float:right; width:30%; margin-right:15%;"> <img src="images/Social-Sciences-Pic-Part-I.jpg" width="100%" height="160px">
		<div style="background-color:ghostwhite; padding:10px 20px;">
			Social Science
		</div></div>
	</a>
</div>
<div style="overflow:hidden; margin-top:20px; margin-bottom:40px; font-size:1.4em;">
	<a href="maths.php" style="text-decoration:none;">
		   <div style="float:left; width:30%; margin-left:15%;"> <img src="images/mathematics-symbols.jpg" width="100%">
		<div style="background-color:ghostwhite; padding:10px 20px;">
			Mathematics
		</div></div>
	</a>

<a href="english.php" style="text-decoration:none;">
<div style="float:right; width:30%; margin-right:15%;"> <img src="images/english-language-day.jpg" width="100%">
		<div style="background-color:ghostwhite; padding:10px 20px;">
			English
		</div></div>
        </a>
</div>




</div>



<?php
	
	include('foot.php');
?>


</body>

</html>
