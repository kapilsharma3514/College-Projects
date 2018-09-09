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

<script>
window.addEventListener('scroll',para);
function para(){
	var ypos,img;
	ypos=window.pageYOffset;
	img=document.getElementById('plo');
	img.style.top= ypos*0.1+'px';}
</script>

<title>Forum</title>
</head>

<body>
<?php @include("head.php");?>
<div id="imt" style="position:relative; "><img src="images/ForumSignBIG2-1600x600.jpg"  id="plo" width="100%"/></div>
<div class="forum_body" style="background-color:white;">
<a href="ask.php" style="text-decoration:none;"><div class="Ans" style="clear:both; margin-top:5px;"> Ask a Question</div></a>
<div class="forum_content" >

<div class="forum_header recent_searches_heading">
Topics
</div>
<div class="forum_topics_content">

<div class="f">

<a href="forum_topic.php?q=Admission" style="text-decoration:none;  color:black;"><div class="topics_options">Admissions</div></a>

<a href="forum_topic.php?q=Fees" style="text-decoration:none; color:black;"><div class="topics_options">Fees</div></a>
<a href="forum_topic.php?q=Facilities" style="text-decoration:none; color:black;"><div class="topics_options">Facilities</div></a>
<a href="forum_topic.php?q=Government/Private Schools" style="text-decoration:none; color:black;"><div class="topics_options">Government/Private Schools</div></a>
<a href="forum_topic.php?q=College Affiliation" style="text-decoration:none; color:black;"><div class="topics_options">College Affiliation</div></a>
<a href="forum_topic.php?q=Hostel" style="text-decoration:none; color:black;"><div class="topics_options">Hostel</div></a>
<a href="forum_topic.php?q=Transport Facility" style="text-decoration:none; color:black;"><div class="topics_options">Transport Facility</div></a>
<a href="forum_topic.php?q=Stream" style="text-decoration:none; color:black;"><div class="topics_options">Stream</div></a>
<a href="forum_topic.php?q=School Board" style="text-decoration:none; color:black;"><div class="topics_options">School Board</div></a>
</div>
</div>




<div class="forum_header recent_searches_heading">
Recently Asked Questions
</div>
<div class="forum_topics_content">
<div class="f">
<?php 
$q="Select * from forum order by dateTime desc limit 2;";
$data=mysql_query($q);
while($qr=mysql_fetch_array($data))
{$z=$qr["Uid"];
$query3="SELECT users.Name, Users.Photo from users WHERE users.id=$z";
$data2=mysql_query($query3);
$v=mysql_fetch_array($data2);
?>
<a href="forum_detail.php?qid=<?php echo $qr['Qid']; ?>" style="text-decoration:none;">
<div class="each_review_div lp">
<span> <img src="upload/<?php echo $v['Photo'];?>" class="img-circle img-adjust" style="float:left; margin-top:4px;"/> </span>
<div class="lp1" style="float:left; padding-left:5px;"><span class="username_detail_review"> <?php echo $v['Name'];?></span>
<div class="date_time_forum"><?php echo $qr['dateTime'];?></div></div>
<div class="review_display">
<?php echo $qr['Ques'];?>
</div>
</div>
</div>
</a>
<?php }?>
</div>
<br />
<br />
<br />


</div>

<?php @include("foot.php");?>
</body>
</html>