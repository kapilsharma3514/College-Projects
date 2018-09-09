<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	session_start();
	include('config.php');
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Play|Orbitron:700' rel='stylesheet' type='text/css'>
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
		var hr= height*1.2;
		$("#detail_img").css({'opacity': ((hr-scrollTop)/hr)});
		
		});
  

	
});


</script>


<script>
window.addEventListener('scroll',para);
function para(){
	var ypos,img;
	ypos=window.pageYOffset;
	img=document.getElementById('detail_img');
	img.style.top= ypos*0.5+'px';}
</script>


<title>EduSpace</title>

</head>

<body>



<?php
	include('head.php');
?>

<?php $x=$_GET["q"];

 ?>
<div style="overflow: hidden; font-variant:small-caps; font-size:3.2em; text-align:center; margin-top:120px; font-weight:bold; margin-bottom: 10px;"><span><?php echo $x; ?></span></div>


<hr style="width:95%; margin:0px auto 0px auto; color:grey; padding-bottom:8px;" />
<a href="ask.php" style="text-decoration:none;"><div class="Ans" style="clear:both;"> Ask a Question</div></a>
<?php
$nu=0; 
$query="SELECT forum.Qid, forum.Ques from forum WHERE forum.Topic='$x'";
 $data = mysql_query($query);
 $n = mysql_num_rows($data);
 ?>
 <div style="margin-top:65px;">
 <?php
	  while ($qrw = mysql_fetch_array($data)) {?>
<div class="each_ques">

<a href="forum_detail.php?qid=<?php echo $qrw["Qid"] ?>"  style="text-decoration:none;"><div class="forum_ques"><?php echo $qrw["Ques"]; ?></div></a>
</div>
<?php 

} ?>

</div>
</body>
</html>