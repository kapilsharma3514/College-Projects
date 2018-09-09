<?php
	session_start();
	if (!isset($_SESSION["name"]))
	{
		echo "<script>window.location.href='index.php'</script>";
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
<link rel="stylesheet" type="text/css" href="css/quizkliye.css">
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

<body>





<?php
	include('head.php');
?>


<div style="background-color: lightgray; overflow:hidden;">


<div style="overflow: hidden; font-variant:small-caps; font-size:3.2em; text-align:center; margin-top:120px; font-weight:bold; margin-bottom: 10px;">
	<span style="text-decoration:underline">
		Aptitude Test
	</span>
</div>
<div style="overflow: hidden; font-variant:small-caps; font-size:1.7em; text-align:center; margin: -10px auto 40px auto; font-weight:bold; margin-bottom: 10px;">
		Result
</div>



<div id="quiz screen" style="margin-top:40px;margin-left:auto;margin-right:auto;margin-bottom:60px;width:80%;overflow:hidden;">

	<<div id="start_quiz" style="width:80%;background-color:black;color:ghostwhite;border:1px solid cyan;border-radius:5px;padding:15px 25px;margin-top:20px;margin-bottom:50px;font-size:2.5em;cursor:pointer;margin-left:auto;margin-right:auto;">
		Topic -> <span id="topic"></span><br/>
		<div style="font-size:0.6em; margin-top:15px;">Total Questions -> 15<br/>
		Attempted Questions -> <span id="attempt"></span> (Correct : <span id="correct"></span>, Incorrect : <span id="wrong"></span>)<br/>
		Precentage -> <span id="per"></span>%
		</div>
		<div style="margin-top:15px;">
		<span id="salah"></span>
		</div>
	</div>

<script>
	document.getElementById("topic").innerHTML=localStorage.getItem("topic");
	document.getElementById("attempt").innerHTML= +localStorage.getItem("correctans") + +localStorage.getItem("wrongans");
	document.getElementById("correct").innerHTML=localStorage.getItem("correctans");
	document.getElementById("wrong").innerHTML=localStorage.getItem("wrongans");
	document.getElementById("per").innerHTML= ( +localStorage.getItem("correctans") * 100 / 15 ).toFixed(2);
	var p = ( +localStorage.getItem("correctans") * 100 / 15 ).toFixed(2);
	if (p>75)
	document.getElementById("salah").innerHTML = "We recommend you to take this stream";
	else if (p>50)
	document.getElementById("salah").innerHTML = "We recommend you to take thiss stream as per your choice";
	else
	document.getElementById("salah").innerHTML = "We recommend you to opt some other stream";

</script>	



</div>



<?php
	
	include('foot.php');
?>


</body>

</html>
