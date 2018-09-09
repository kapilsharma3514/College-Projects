<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
 @include('config.php');?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
  
    $(".Ans").mousedown(function(e) {
        $(".ans_text").slideToggle(700);
    });
	
});


</script>



<link rel="stylesheet" href="css/main.css" type="text/css" />
<title>Untitled Document</title>
</head>
<body > 
<?php @include('head.php');?>

<div class="bdy" style="height:300px;"><?php 
$x=$_GET["qid"];
$y=$_GET["aastha"];
if (isset($_SESSION["name"]))
	{ 
	 $query2="SELECT * from reply ";
      $id=$_SESSION["id"];
       $data2 = mysql_query($query2);
	   $count= mysql_num_rows($data2);
	   $ins= $count+1;
	$qq="insert into reply values($ins,$x,'$y',$id,CURRENT_TIMESTAMP);" ;
	$v=mysql_query($qq);
	?>
    <div class="submit_foru"><span class="glyphicon glyphicon-ok-sign s"></span>
    <br />Your answer has been submitted successfully.<br />
    Thank you.</div>
	<?php }
else{
	?>
    <div class="submit_forum"><span class="glyphicon glyphicon-alert s"></span>
    <br />You are not logged in. You need to login to answer.<br />
    to login <a href="login.php">click here</a>
    </div>
    <?php
	}

?></div>
<?php @include('foot.php');?>

</body>
</html>