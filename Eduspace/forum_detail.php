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
  
    $(".Ans").mousedown(function(e) {
        $(".ans_text").slideToggle(700);
    });
	
	
		
$(".edit_delete_but").mousedown(function(){
	$(".edit_delete_menu").toggle(500);
	});
	
	$(".e").mousedown(function(){
		
		$(this+">.q_edit").slideToggle(500);
		$(this+">.di").slideToggle(500);
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
<?php $x=$_GET["qid"];

 ?>
 
 <?php
$nu=0; 
$query="SELECT * from forum WHERE forum.Qid='$x'";


 $data = mysql_query($query);
 $n = mysql_num_rows($data);
 $qrw = mysql_fetch_array($data);
 $z= $qrw["Uid"];
 $query1="SELECT users.Name, Users.Photo from users WHERE users.id='$z'";
  $data1 = mysql_query($query1);
 
 $qrow = mysql_fetch_array($data1);
 
 ?>
<div style="overflow: hidden; font-size:2em; width:95%; margin-left:auto; margin-right:auto; margin-top:120px; font-weight:bold; margin-bottom:5px;"><span><?php echo $qrw["Ques"];?></span></div>


<hr style="width:95%; margin:0px auto 0px auto; color:#000; padding-bottom:4px;" />

<div class="user_ques container">
<span class="forum_img"> <img src="upload/<?php echo $qrow["Photo"]; ?>" class="img-circle" style="width:70px; margin-top:10px; margin-left:37px; margin-right:auto;" height="70px" />
<div class="user_name"><?php echo $qrow["Name"];?></div>
<div class="date"><?php echo $qrw["dateTime"];?></div></span>
<div class="edit_delete_but" style="display:none;"><span class="glyphicon glyphicon-chevron-down" style="font-size:1.5em; float:right;"></span>
<div class="edit_delete_menu" style="display:none;">
<div class="sub_edit e"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</div>
<div class="sub_edit d"><span class="glyphicon glyphicon-remove"></span>&nbsp;Delete</div>

</div></div>

<div class="q di"><?php echo $qrw["QuesBody"];?> </div>
<div class="q q_edit" style="display:none;"><textarea name="edit_qq" cols="110" rows="3"><?php echo $qrw["QuesBody"];?> </textarea>
<div class="submit_edit">Submit</div>
</div>
</div>
<div class="Ans">Answer to this question</div>
<div class="ans_text" style="clear:both; display:none; margin-left:5%; margin-top:70px;">
<form id="submit_but" action="submit_forum.php">
<textarea name="aastha" cols="50" rows="8" style="width:90%;" placeholder="Enter your answer here..."></textarea>
<input type="hidden" name="qid" value="<?php echo $x;?>" />
<div class="forum_submit_button" onclick="sub()">Submit</div>
</form>
<script>
function sub(){
	document.getElementById('submit_but').submit();}
</script>
</div>
<br />
<div style="overflow: hidden; font-size:2em; width:95%; margin-left:auto; margin-right:auto; margin-top:10px; font-weight:bold; margin-bottom:5px;"><span>Answers</span></div>
<hr style="width:95%; margin:0px auto 0px auto; color:#000; padding-bottom:4px;" />

<?php 
$query2="SELECT * from reply WHERE reply.Qid=$x";

$data2 = mysql_query($query2);
 
while ($qr = mysql_fetch_array($data2)) {
	$user=$qr["Uid"];
	$query3="SELECT users.Name, Users.Photo from users WHERE users.id=$user";
	$data3 = mysql_query($query3);
	$qre = mysql_fetch_array($data3);
	?>
<div class="user_ques anw container">
<span class="forum_img"> <img src="upload/<?php echo $qre["Photo"];?>" class="img-circle" style="width:70px; margin-top:10px; margin-left:37px; margin-right:auto;" height="70px" />
<div class="user_name"><?php echo $qre["Name"];?></div>
<div class="date"> <?php echo $qr["dateTime"];?></div></span>

<div class="edit_delete_but" style="display:none;"><span class="glyphicon glyphicon-chevron-down" style="font-size:1.5em; float:right;"></span>
<div class="edit_delete_menu" style="display:none;">
<div class="sub_edit e"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</div>
<div class="sub_edit d"><span class="glyphicon glyphicon-remove"></span>&nbsp;Delete</div>

</div></div>

<div class="q"><?php echo $qr["Reply"];?></div>
<div class="q q_edit" style="display:none;"><textarea name="edit_qq" cols="110" rows="3"><?php echo $qr["Reply"];?> </textarea>
<div class="submit_edit">Submit</div>
</div>
</div>
<?php }?>
<br />
<?php @include('foot.php'); ?>
</body>
</html>