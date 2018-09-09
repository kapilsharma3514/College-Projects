 <?php
	session_start();
	include('config.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/search_config.css">

<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Play|Orbitron:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
<link href="css/detailpage.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link type="text/javascript" href="script/home.js">
<link rel="icon" href="images/icon.png">
<link rel="stylesheet" type="text/css" href="script/jquery-ui-1.11.4.custom/jquery-ui-1.11.4.custom/jquery-ui.css">

<style>
#loader-icon {position: fixed;top: 50%;width:100%;height:100%;text-align:center;display:none;}
</style>
<script type="text/javascript">


</script>
<script src="script/jquery-1.11.3.min.js">

</script>

<script>

 var uid=<?php echo $_SESSION['id'] ?>;
 
	$(document).ready(function() {
	
		function getresult(url) {
		$.ajax({
			url: url,
			type: "GET",
			data:  {rowcount:$("#rowcount").val()},
			beforeSend: function(){
			$('#loader-icon').show();
			},
			complete: function(){
			$('#loader-icon').hide();
			},
			success: function(data){
			$("#srchd").append(data);
			},
			error: function(){} 	        
	   });
		}
	$(window).scroll(function(){
	
		if ($(window).scrollTop()== $(document).height() - $(window).height()){
			if($(".pagenum:last").val() <= $(".total-page").val()) {
			
				var pagenum = parseInt($(".pagenum:last").val()) + 1;
				getresult('getresult.php?page='+pagenum+'&uid='+uid);
			}
		}
	});
		
		
		

	$(".sort_type").mousedown(function(){
		$(".aa").toggle(400);
		});
	 $(".sports").mousedown(function(){
		$(".a").toggle();
		});
	 $(".sports1").mousedown(function(){
		$(".a2").toggle();
		});
	$(".day").mousedown(function(){
		$(".b").toggle();
		});
	$(".sp").mousedown(function(){
		$(".c").toggle();
		});
	$(".music").mousedown(function(){
		$(".d").toggle();
		});
	$(".dance").mousedown(function(){
		$(".e").toggle();
		});
	$(".sclass").mousedown(function(){
		$(".f").toggle();
		});
	$(".ac").mousedown(function(){
		$(".m").toggle();
		});
	$(".tf").mousedown(function(){
		$(".n").toggle();
		});
	$(".govt").mousedown(function(){
		$(".g").toggle();
		});
	$(".pvt").mousedown(function(){
		$(".h").toggle();
		});
	$(".cs").mousedown(function(){
		$(".i").toggle();
		});
	$(".coed").mousedown(function(){
		$(".j").toggle();
		});
	$(".ob").mousedown(function(){
		$(".k").toggle();
		});
	$(".og").mousedown(function(){
		$(".l").toggle();
		});
	$(".sp1").mousedown(function(){
		$(".c1").toggle();
		});
	$(".music1").mousedown(function(){
		$(".d1").toggle();
		});
	$(".dance1").mousedown(function(){
		$(".e1").toggle();
		});	
	$(".host").mousedown(function(){
		$(".f1").toggle();
		});
	$(".ac1").mousedown(function(){
		$(".m1").toggle();
		});
	$(".govt1").mousedown(function(){
		$(".g1").toggle();
		});
	$(".pvt1").mousedown(function(){
		$(".h1").toggle();
		});
	$(".ugc").mousedown(function(){
		$(".j1").toggle();
		});
	$(".csir").mousedown(function(){
		$(".k1").toggle();
		});
	$(".state").mousedown(function(){
		$(".l1").toggle();
		});
	$(".eng").mousedown(function(){
		$(".z1").toggle();
		});
	$(".med").mousedown(function(){
		$(".y1").toggle();
		});
	$(".art").mousedown(function(){
		$(".x1").toggle();
		});
	$(".mang").mousedown(function(){
		$(".w1").toggle();
		});
		
		
		
		
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

	function log_me_out() {
		window.location.href="log_me_out.php";
	}
    
	function rev(p){
		window.location.href="revwish.php?insid="+p;}	

</script>

<title>EduSpace</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<?php @include('head.php'); ?>
<center><div style="font-family: 'Bree Serif', serif; font-size:2.5em; margin-top:120px; margin-bottom:20px;">Your Favorites</div></center>
<hr style="width:90%;border:2px solid grey;">
<div class="search_result" id="srchd" style="margin-top:50px; width:92%; margin-left:auto; margin-right:auto; margin-bottom:50px;">
<?php 
$uid=$_SESSION['id'];
$q1="select *  from wishlist where uid=$uid;";
$d1=mysql_query($q1);
$nm=mysql_num_rows($d1);
while($v1=mysql_fetch_array($d1))
{ if($nm>0)
	{$i=$v1['InsId'];
	$q2="select * from institutes where Id=$i;";
	$d2=mysql_query($q2);
	while($qrow=mysql_fetch_array($d2))
	{
		$q2="select pool, day, sports, music, dance, smartclass, ac,transport , govt, pvt, charity, coed, girls, boys, med,
		eng, art, man from institutes, filters where institutes.id = '$i' and institutes.id=filters.idinst";
	$d2=mysql_query($q2);
	$qr2 = mysql_fetch_array($d2);
	
 ?>
 
 
  
 <div style="background-color:#F4F7F7;  padding:10px 10px 10px 10px;">
 <div class="rem" onClick="rev(<?php echo $qrow['Id'];?>)"><span class="glyphicon glyphicon-remove" style="color:#F06;"></span>
</div>
<a href="alldetails.php?id=<?php echo $i ?>" style="text-decoration:none; color:black;">
<div class="recent_searches container-fluid" style="">
<div class="recent_searches_heading" ><?php echo $qrow["Name"]; ?>

</div>

<img src="<?php echo $qrow['image']?>" class="recent_searches_img img-responsive" style="float:left;">

<div class="recent_searches_des" >
<hr><b>Rating:</b>
<?php
	$shu="select * from institutes where id='".$i."'";
	$shub = mysql_query($shu);
	$v = mysql_fetch_array($shub);
	
	
	$totalrating = $v['TotalRating'];
	$rating = $v['Rating'];
	if ($totalrating!=0)
	$avgrating = $rating/$totalrating;
	else
	$avgrating = 0;
	$avgroundrating = round($avgrating); 
	for ($j=0; $j<$avgroundrating; $j++)
	{
?>
<span class="glyphicon glyphicon-star star"></span>
<?php
	}
	for (; $j<5; $j++)
	{
?>
<span class="glyphicon glyphicon-star-empty star"></span>
<?php
	}
?>
<span style="color:red; font-weight:bold">&nbsp;<?php echo $avgrating; ?></span>
<span style="color:black;">(Based On <?php echo $totalrating; ?> Ratings),</span>
<?php
	$shu="select count(*) from review where idinst='$i'";
	$kapil=mysql_query($shu);
	$mani=mysql_fetch_array($kapil);
	$behen=$mani['count(*)'];
?>
<span style="color:green; font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $behen; ?> Reviews</span>
</div>
<hr>
<b>Features:</b>
<li><b> Fees: Rs <?php echo $qrow["Fees"];?> per month.</b>
 <?php if ($qr2['eng']=='n' && $qr2['med']=='n' && $qr2['art']=='n' && $qr2['man']=='n') { ?>
<li> <?php $queryt = "select board from institutes where id='$i'";
		   $datat = mysql_query($queryt);
		   $anst = mysql_fetch_array($datat);
		   echo $anst["board"]; 
	 ?>
&nbsp;Board
<?php } else { ?>
<li> Affiliated to <? if ($qr2["ugc"]=="y") echo "UGC"; else if ($qr2["csir"]=="y") echo "CSIR"; else echo "State"; ?>
<?php } ?>

<?php
	
	$q11 = "select facilities.Facilities from facilities where idinst = '$i' order by rand() limit 2";
	$d11 = mysql_query($q11);
	$n11 = mysql_num_rows($d11);
	if ($n11>0)
	{
?>
<!--<li> Total <?php echo $n11; ?> Facilities.-->
<?php
	/*	$rnum1 = mt_rand(1,$n1);
		$rnum2 = mt_rand(1,$n1);
		while ($rnum1==$rnum2)
		{		
			$rnum2 = mt_rand(1,$n1);
		}	
		$temp=1;*/
		while ($qr11 = mysql_fetch_array($d11))
		{ 
			//if ($temp==$rnum1 || $temp==$rnum2)
			//{
				echo "<li>".$qr11["Facilities"];
			//}
			//$temp++;
		}
	}
//<li> Large classrooms with an area of 12 sq.ft. per child. 
//<li> Outdoor game facilities for cricket, tennis, basketball and football.

	else
	{
?>
<li> No Facilities Available.
<?php
	}
?>
</li><hr>
</div>
</div>
</a>

<?php } 
}
else{
	
	echo "<div style='text-align:center; height:100px; margin:0px auto 50px auto;'> No institution in your favorites </div>";
	
	
	}}?>
</div>

<?php @include('foot.php'); ?>

</body>
</html>