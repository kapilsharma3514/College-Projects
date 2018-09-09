
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	session_start();
	include('config.php');
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Play|Orbitron:500' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/detailpage.css">
<link rel="stylesheet" type="text/css" href="css/contactbg.css">
<link rel="stylesheet" type="text/css" href="css/forum.css" />
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
	
    $(window).scroll(function(){
		var scrollTop=$(window).scrollTop();
		var height= $(window).height();
		
		$("#plo").css({'opacity': ((height-scrollTop)/hr)});
		
		});
  

	
});


</script>


<title>Eduspace</title>
</head>

<body>
<?php @include('head.php');?>
<div style="overflow: hidden; font-variant:small-caps; font-size:3.2em; text-align:center; margin-top:120px; font-weight:bold; margin-bottom: 10px;"><span>It's question time...</span></div>


<hr style="width:95%; margin:0px auto 0px auto; color:grey; padding-bottom:8px;" />
<div style="width:90%; padding:20px 20px 20px 20px; height:410px; border-radius:8px; margin-bottom:80px; margin-left:auto; margin-top:40px; margin-right:auto; background-color:#CCE1DB;">


<div style="width:95%; margin-left:auto; margin-right:auto;">
<form action="sub_ques.php" id="subques">
<b>Enter the Question Head:</b>
<input type="text" name="head" style="width:83%;"/>
<br /><br />

<b>Question Category:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cat">
<option value="Admission">Admission</option>
<option value="Fees">Fees</option>
<option value="Facilities">Facilities</option>
<option value="Government/Private School">Government/Private School</option>
<option value="College Affiliation">College Affiliation</option>
<option value="Hostel">Hostel</option>
<option value="Transport Facility">Transport Facility</option>
<option value="Stream">Stream</option>
<option value="School Board">School Board</option>
</select><br />
<br />


<span style="margin-top:0px;"><b>Your Question:</b></span><br />
 <textarea name="ques" cols="155" rows="10"></textarea>
 
<div class="Ans" id="sb" onclick="subq()" style="margin-top:10px;">Submit</div>
</div>
<script>
function subq()
{document.getElementById('subques').submit();}
</script>
</form>
</div>
<?php @include('foot.php');?>
</body>
</html>