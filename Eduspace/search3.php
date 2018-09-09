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

 var y="<?php echo $_GET['y'] ?>";
  var z=<?php echo $_GET['z'] ?>;
  var x="<?php echo $_GET['x'];?>";
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
			$("#srch").append(data);
			},
			error: function(){} 	        
	   });
		}
	$(window).scroll(function(){
	
		if ($(window).scrollTop()== $(document).height() - $(window).height()){
			if($(".pagenum:last").val() <= $(".total-page").val()) {
			
				var pagenum = parseInt($(".pagenum:last").val()) + 1;
				getresult('getresult.php?page='+pagenum+'&z='+z+'&y='+y+'&x='+x);
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
	
	function playvalidate() {
		var e = document.getElementById("playselect");
		var strUser = e.options[e.selectedIndex].value;
		if (strUser!="name" && strUser!="localty" && strUser!="pincode")
		{
			alert('Choose A Filter');
			return false;
		}
		return true;
	}
</script>

<title>EduSpace</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body style="margin: 0px; background-image:url(images/Light-Grey-Background-Texture-3.jpg); background-size:cover;">


<?php
	include('head.php');
?>
<?php
$x=$_GET["x"]; //location, name, pincode
	$y=$_GET["y"]; //string to be searched
	$z=$_GET["z"]; //1,2,3,4
if($z==1)
$m="Playschools";
else if($z==2)
$m="Kindergarten";
else if($z==3)
$m="Schools";
else
$m="Colleges";	

if($z==4)
{
	echo "<script type='text/javascript'>
	$(document).ready(function(){
		$('#filter_for_college').show();});
	</script>";}
else
{echo "<script type='text/javascript'>
	$(document).ready(function(){
		$('#filter_for_others').show();});
	</script>";
	}
?>
<center><div style="font-family: 'Bree Serif', serif; font-size:2.5em; margin-top:90px;">Search Results</div></center>
<br>
<center><div style="font-family: 'Indie Flower', cursive; font-size:2em;"><?php echo $m?></div></center>


<hr style="width:90%;border:2px solid grey;">




<div class="filter" id="filter_for_college" style="display:none;" >
<div class="filter_heading">Filters</div>

<br>

<div class="filter_subhead" >Facilities
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="sports1 opt" >Sports<span class="glyphicon glyphicon-ok tick a2" style="display:none;"></span></div>
<div class="sp1 opt">Swimming Pool<span class="glyphicon glyphicon-ok tick c1" style="display:none;"></span></div>
<div class="music1 opt">Music<span class="glyphicon glyphicon-ok tick d1" style="display:none;"></span></div>
<div class="dance1 opt">Dance<span class="glyphicon glyphicon-ok tick e1" style="display:none;"></span></div>
<div class="host opt">Hostel<span class="glyphicon glyphicon-ok tick f1" style="display:none;"></span></div>
<div class="ac1 opt">Air Conditioned<span class="glyphicon glyphicon-ok tick m1" style="display:none;"></span></div>

</div>
<br>
<div class="filter_subhead" >Fees
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<br>
<div class="filter_content" >
<script src="script/jquery-ui-1.11.4.custom/jquery-ui-1.11.4.custom/jquery-ui.js">
</script>
<script>
$(document).ready(function(e) {
	var output1=$("#outp");
	var initial1=$("#exe");
    $("#exe").slider({
		range: true,
		min:20000,
		max:2000000,
		values: [25000,300000],
		slide:function(event,uip)
		{output1.html('Range: Rs.'+uip.values[0] +' - Rs.'+ uip.values[1]);}
		});
		output1.html('Range: Rs.'+initial1.slider('values',0)+' - Rs.'+ initial1.slider('values',1));
});
</script>
<div id="exe" style="margin-right:2%;"></div>
<center><span id="outp" style="margin-right:2%;"></span></center>
</div>
<br>
<div class="filter_subhead" >Type
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >

<div class="govt1 opt">Government Colleges<span class="glyphicon glyphicon-ok tick g1" style="display:none;"></span></div>
<div class="pvt1 opt">Private Colleges<span class="glyphicon glyphicon-ok tick h1" style="display:none;"></span></div>
</div>
<br>
<div class="filter_subhead" >Affiliated to
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="ugc opt">UGC<span class="glyphicon glyphicon-ok tick j1" style="display:none;"></span></div>
<div class="csir opt">CSIR<span class="glyphicon glyphicon-ok tick k1" style="display:none;"></span></div>
<div class="state opt">State University<span class="glyphicon glyphicon-ok tick l1" style="display:none;"></span>
</div></div>
<br>

<div class="filter_subhead" >Stream
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="eng opt">Engineering<span class="glyphicon glyphicon-ok tick z1" style="display:none;"></span></div>
<div class="med opt">Medical<span class="glyphicon glyphicon-ok tick y1" style="display:none;"></span></div>
<div class="art opt">Arts<span class="glyphicon glyphicon-ok tick x1" style="display:none;"></span>
</div>
<div class="mang opt">Mangement<span class="glyphicon glyphicon-ok tick w1" style="display:none;"></span>
</div>
</div>
<br>



<div class="filter_subhead" >Ratings
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="opt"><span class="glyphicon glyphicon-star star"></span>&nbsp;star<br></div>
<div class="opt"><span class="glyphicon glyphicon-star star"></span><span class="glyphicon glyphicon-star star"></span>&nbsp; stars</div>
<div class="opt"><span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>&nbsp; stars</div>
<div class="opt"><span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>&nbsp; stars</div>
<div class="opt"><span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>&nbsp; stars</div>

</div>
<br>


</div>

<div class="filter1 filter" id="filter_for_others" style="display:none;">
<div class="filter_heading">Filters</div>

<br>

<div class="filter_subhead" >Facilities
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="sports opt" >Sports<span class="glyphicon glyphicon-ok tick a" style="display:none;"></span></div>
<div class="day opt">Day boarding<span class="glyphicon glyphicon-ok tick b" style="display:none;"></span></div>
<div class="sp opt">Swimming Pool<span class="glyphicon glyphicon-ok tick c" style="display:none;"></span></div>
<div class="music opt">Music<span class="glyphicon glyphicon-ok tick d" style="display:none;"></span></div>
<div class="dance opt">Dance<span class="glyphicon glyphicon-ok tick e" style="display:none;"></span></div>
<div class="sclass opt">Smart Classes<span class="glyphicon glyphicon-ok tick f" style="display:none;"></span></div>
<div class="ac opt">Air Conditioned<span class="glyphicon glyphicon-ok tick m" style="display:none;"></span></div>
<div class="tf opt">Transport Facility<span class="glyphicon glyphicon-ok tick n" style="display:none;"></span></div>

</div>
<br>
<div class="filter_subhead" >Fees
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<br>
<div class="filter_content" >
<script src="script/jquery-ui-1.11.4.custom/jquery-ui-1.11.4.custom/jquery-ui.js">
</script>
<script>
$(document).ready(function(e) {
	var output=$("#out");
	var initial=$("#ex");
    $("#ex").slider({
		range: true,
		min:1000,
		max:5000,
		values: [2500,3000],
		slide:function(event,ui)
		{output.html('Range: Rs.'+ui.values[0] +' - Rs.'+ ui.values[1]);}
		});
		output.html('Range: Rs.'+initial.slider('values',0)+' - Rs.'+ initial.slider('values',1));
});
</script>
<div id="ex" style="margin-right:2%;"></div>
<center><span id="out" style="margin-right:2%;"></span></center>
</div>
<br>
<div class="filter_subhead" >Type
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >

<div class="govt opt">Government Schools<span class="glyphicon glyphicon-ok tick g" style="display:none;"></span></div>
<div class="pvt opt">Private Schools<span class="glyphicon glyphicon-ok tick h" style="display:none;"></span></div>
<div class="cs opt">Charity Schools<span class="glyphicon glyphicon-ok tick i" style="display:none;"></span>
</div></div>
<br>
<div class="filter_subhead" >Education Type
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="coed opt">Co-Education<span class="glyphicon glyphicon-ok tick j" style="display:none;"></span></div>
<div class="ob opt">Only Boys<span class="glyphicon glyphicon-ok tick k" style="display:none;"></span></div>
<div class="og opt">Only Girls<span class="glyphicon glyphicon-ok tick l" style="display:none;"></span>
</div></div>
<br>
<div class="filter_subhead" >Ratings
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="opt"><span class="glyphicon glyphicon-star star"></span>&nbsp;star<br></div>
<div class="opt"><span class="glyphicon glyphicon-star star"></span><span class="glyphicon glyphicon-star star"></span>&nbsp; stars</div>
<div class="opt"><span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>&nbsp; stars</div>
<div class="opt"><span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>&nbsp; stars</div>
<div class="opt"><span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>&nbsp; stars</div>

</div>
<br>


</div>



<div class="search_results" id="srch">
<?php
if($x='name') include('getresult.php'); ?>
</div>
<div id="loader-icon"><img src="LoaderIcon.gif" /></div>


<div style="float:left; width:15%; padding-left:8px; margin-top:45px;">
<div class="home_heading">Sponsored</div>
<img src="images/ads/Rosati-Kain_High_School_Building_Angle.JPG" class="ads">
</div>

<div style="float:left; width:15%; padding-left:8px; margin-top:45px;">

<img src="images/ads/getimage.png" class="ads">
</div>


<hr style="width:90%;border:1px solid black;">


<?php
	include('foot.php');
?>


</body>
</html>
