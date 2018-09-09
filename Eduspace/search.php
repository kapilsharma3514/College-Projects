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




<script src="script/jquery-1.11.3.min.js">

</script>

<script>
	
	var arr = [], arrt = [];
	
	$(document).ready(function() {

	$(".sort_type").mousedown(function(){
		$(".aa").toggle(400);
	});
	$(".sports").mousedown(function(){
		$(".a").toggle();
		$(".a").trigger('toggledit',['sports']);
	});
	
	
	$(".test").bind('toggledit',function(event, p1){
		if (arr.indexOf(p1)==-1) {
			arr.push(p1);
		}
		else {
			arr.splice(arr.indexOf(p1),1);
		}
		if (arr.length==0 && arrt.length==0)
		{
			$('.block').each(function(){
				$(this).fadeIn('slow');
			});
		}
		else
		{
			$('.block').each(function(){
				var item = $(this).attr('data-tag');
				var arrvalues = item.split(',');
				var ftemp=0;
				for (var i=0; i<arrvalues.length; i++)
				{
					if (jQuery.inArray(arrvalues[i],arr) > -1)
					{ ftemp++; 
					  //break;
					}
				}
				if (ftemp==arr.length)
				{ $(this).fadeIn('slow'); }
				else
				{ $(this).hide();
				  //alert( $(this).css.('display') );
				}
			});
		}
	});
	
	$(".test").bind('toggledit2',function(event, p1){
		if (arrt.indexOf(p1)==-1) {
			arrt.push(p1);
			//alert('Pushed '+p1+', '+arrt);
		}
		else {
			arrt.splice(arrt.indexOf(p1),1);
			//alert('Popped '+p1+', '+arrt);
		}
		if (arrt.length==0 && arr.length==0)
		{
			$('.block').each(function(){
				$(this).fadeIn('slow');
			});
		}
		else
		{
			$('.block').each(function(){
				var item = $(this).attr('data-tag');
				var arrvalues = item.split(',');
				var ftemp=0;
				//alert(arrvalues);
				for (var i=0; i<arrvalues.length; i++)
				{   //alert('for loop -> ith value: '+i+'; '+arrvalues[i]);
					if (jQuery.inArray(arrvalues[i],arrt) > -1)
					{ ftemp=1; 
					  //alert('Found In Array');
					  break;
					}
				}
				if (ftemp==1)
				{ $(this).fadeIn('slow'); }
				else
				{ $(this).hide(); }
			});
		}
	});
	$(".test").bind('removeit',function(event, p1){
		if (arr.indexOf(p1)>=0) {
			arr.splice(arr.indexOf(p1),1);
		}
		if (arr.length==0)
		{
			$('.block').each(function(){
				$(this).fadeIn('slow');
			});
		}
		else
		{
			$('.block').each(function(){
				var item = $(this).attr('data-tag');
				var arrvalues = item.split(',');
				var ftemp=0;
				for (var i=0; i<arrvalues.length; i++)
				{
					if (jQuery.inArray(arrvalues[i],arr) > -1)
					{ ftemp++; 
					  //break;
					}
				}
				if (ftemp==arr.length)
				{ $(this).fadeIn('slow'); }
				else
				{ $(this).hide(); }
			});
		}
	});
	
	
	
	$(".sports1").mousedown(function(){
		$(".a2").toggle();
		$(".a2").trigger('toggledit',['sports']);
	});
	$(".day").mousedown(function(){
		$(".b").toggle();
		$(".b").trigger('toggledit',['day']);
	});
	$(".sp").mousedown(function(){
		$(".c").toggle();
		$(".c").trigger('toggledit',['pool']);
	});
	$(".music").mousedown(function(){
		$(".d").toggle();
		$(".d").trigger('toggledit',['music']);
	});
	$(".dance").mousedown(function(){
		$(".e").toggle();
		$(".e").trigger('toggledit',['dance']);
	});
	$(".sclass").mousedown(function(){
		$(".f").toggle();
		$(".f").trigger('toggledit',['smartclass']);
	});
	$(".ac").mousedown(function(){
		$(".m").toggle();
		$(".m").trigger('toggledit',['ac']);
	});
	$(".tf").mousedown(function(){
		$(".n").toggle();
		$(".n").trigger('toggledit',['transport']);
	});
	$(".govt").mousedown(function(){
		$(".g").toggle();
		$(".g").trigger('toggledit',['govt']);
		$(".h").hide();
		$(".h").trigger('removeit',['pvt']);
		$(".i").hide();
		$(".i").trigger('removeit',['charity']);
	});
	$(".pvt").mousedown(function(){
		$(".h").toggle();
		$(".h").trigger('toggledit',['pvt']);
		$(".g").hide();
		$(".g").trigger('removeit',['govt']);
		$(".i").hide();
		$(".i").trigger('removeit',['charity']);
	});
	$(".cs").mousedown(function(){
		$(".i").toggle();
		$(".i").trigger('toggledit',['charity']);
		$(".h").hide();
		$(".h").trigger('removeit',['pvt']);
		$(".g").hide();
		$(".g").trigger('removeit',['govt']);
	});
	$(".coed").mousedown(function(){
		$(".j").toggle();
		$(".j").trigger('toggledit',['coed']);
		$(".k").hide();
		$(".k").trigger('removeit',['boys']);
		$(".l").hide();
		$(".l").trigger('removeit',['girls']);
	});
	$(".ob").mousedown(function(){
		$(".k").toggle();
		$(".k").trigger('toggledit',['boys']);
		$(".j").hide();
		$(".j").trigger('removeit',['coed']);
		$(".l").hide();
		$(".l").trigger('removeit',['girls']);
	});
	$(".og").mousedown(function(){
		$(".l").toggle();
		$(".l").trigger('toggledit',['girls']);
		$(".j").hide();
		$(".j").trigger('removeit',['coed']);
		$(".k").hide();
		$(".k").trigger('removeit',['boys']);
	});
	$(".sp1").mousedown(function(){
		$(".c1").toggle();
		$(".c1").trigger('toggledit',['pool']);
	});
	$(".music1").mousedown(function(){
		$(".d1").toggle();
		$(".d1").trigger('toggledit',['music']);
	});
	$(".dance1").mousedown(function(){
		$(".e1").toggle();
		$(".e1").trigger('toggledit',['dance']);
	});	
	$(".host").mousedown(function(){
		$(".f1").toggle();
		$(".f1").trigger('toggledit',['hostel']);
	});
	$(".ac1").mousedown(function(){
		$(".m1").toggle();
		$(".m1").trigger('toggledit',['ac']);
	});
	$(".govt1").mousedown(function(){
		$(".g1").toggle();
		$(".g1").trigger('toggledit',['govt']);
		$(".h1").hide();
		$(".h1").trigger('removeit',['pvt']);
	});
	$(".pvt1").mousedown(function(){
		$(".h1").toggle();
		$(".h1").trigger('toggledit',['pvt']);
		$(".g1").hide();
		$(".g1").trigger('removeit',['govt']);		
	});
	$(".ugc").mousedown(function(){
		$(".j1").toggle();
		$(".j1").trigger('toggledit',['ugc']);
		$(".k1").hide();
		$(".k1").trigger('removeit',['csir']);
		$(".l1").hide();
		$(".l1").trigger('removeit',['state']);
	});
	$(".csir").mousedown(function(){
		$(".k1").toggle();
		$(".k1").trigger('toggledit',['csir']);
		$(".j1").hide();
		$(".j1").trigger('removeit',['ugc']);
		$(".l1").hide();
		$(".l1").trigger('removeit',['state']);
	});
	$(".state").mousedown(function(){
		$(".l1").toggle();
		$(".l1").trigger('toggledit',['state']);
		$(".k1").hide();
		$(".k1").trigger('removeit',['csir']);
		$(".j1").hide();
		$(".j1").trigger('removeit',['ugc']);
	});
	$(".eng").mousedown(function(){
		$(".z1").toggle();
		$(".z1").trigger('toggledit',['eng']);
		$(".y1").hide();
		$(".y1").trigger('removeit',['med']);
		$(".x1").hide();
		$(".x1").trigger('removeit',['art']);
		$(".w1").hide();
		$(".w1").trigger('removeit',['man']);
	});
	$(".med").mousedown(function(){
		$(".y1").toggle();
		$(".y1").trigger('toggledit',['med']);
		$(".z1").hide();
		$(".z1").trigger('removeit',['eng']);
		$(".x1").hide();
		$(".x1").trigger('removeit',['art']);
		$(".w1").hide();
		$(".w1").trigger('removeit',['man']);
	});
	$(".art").mousedown(function(){
		$(".x1").toggle();
		$(".x1").trigger('toggledit',['art']);
		$(".y1").hide();
		$(".y1").trigger('removeit',['med']);
		$(".z1").hide();
		$(".z1").trigger('removeit',['eng']);
		$(".w1").hide();
		$(".w1").trigger('removeit',['man']);
	});
	$(".mang").mousedown(function(){
		$(".w1").toggle();
		$(".w1").trigger('toggledit',['man']);
		$(".y1").hide();
		$(".y1").trigger('removeit',['med']);
		$(".x1").hide();
		$(".x1").trigger('removeit',['art']);
		$(".z1").hide();
		$(".z1").trigger('removeit',['eng']);
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
	</script>";
}
else
{
	echo "<script type='text/javascript'>
	$(document).ready(function(){
		$('#filter_for_others').show();});
	</script>";
}
?>
<center><div style="font-family: 'Bree Serif', serif; font-size:2.5em; margin-top:90px;">Search Results</div></center>
<br>
<center><div style="font-family: 'Indie Flower', cursive; font-size:2em;"><?php echo $m?></div></center>


<hr style="width:90%;border:2px solid grey;">
<div class="sort_type" >
<center><div class="glyphicon glyphicon-chevron-down aa" style="display:none;"></div></center>
<div class="sort_text"> </div></center></div>



<div class="filter" id="filter_for_college" style="display:none;" >
<div class="filter_heading">Filters</div>

<br>

<div class="filter_subhead" >Facilities
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="sports1 opt" >Sports<span class="glyphicon glyphicon-ok tick a2 test" style="display:none;"></span></div>
<div class="sp1 opt">Swimming Pool<span class="glyphicon glyphicon-ok tick c1 test" style="display:none;"></span></div>
<div class="music1 opt">Music<span class="glyphicon glyphicon-ok tick d1 test" style="display:none;"></span></div>
<div class="dance1 opt">Dance<span class="glyphicon glyphicon-ok tick e1 test" style="display:none;"></span></div>
<div class="host opt">Hostel<span class="glyphicon glyphicon-ok tick f1 test" style="display:none;"></span></div>
<div class="ac1 opt">Air Conditioned<span class="glyphicon glyphicon-ok tick m1 test" style="display:none;"></span></div>

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
		min:25000,
		max:300000,
		values: [25000,300000],
		slide:function(event,uip)
		{output1.html('Range: Rs.'+uip.values[0] +' - Rs.'+ uip.values[1]);
			$('.block').each(function(){
				var price = $(this).attr('data-price');
				var prop = $(this).css('display');
				if (prop=='block')
				{
					if ( +price > uip.values[0] && +price < uip.values[1])
					;
					else
					{ $(this).hide(); }
				}
				else if (prop=='none')
				{
					if ( +price > uip.values[0] && +price < uip.values[1])
					{ $(this).fadeIn('slow'); }
					else
					;
				}
		  });
		}
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

<div class="govt1 opt">Govt Colleges<span class="glyphicon glyphicon-ok tick g1 test" style="display:none;"></span></div>
<div class="pvt1 opt">Private Colleges<span class="glyphicon glyphicon-ok tick h1 test" style="display:none;"></span></div>
</div>
<br>
<div class="filter_subhead" >Affiliated to
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="ugc opt">UGC<span class="glyphicon glyphicon-ok tick j1 test" style="display:none;"></span></div>
<div class="csir opt">CSIR<span class="glyphicon glyphicon-ok tick k1 test" style="display:none;"></span></div>
<div class="state opt">State University<span class="glyphicon glyphicon-ok tick l1 test" style="display:none;"></span>
</div></div>
<br>

<div class="filter_subhead" >Stream
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="eng opt">Engineering<span class="glyphicon glyphicon-ok tick z1 test" style="display:none;"></span></div>
<div class="med opt">Medical<span class="glyphicon glyphicon-ok tick y1 test" style="display:none;"></span></div>
<div class="art opt">Management<span class="glyphicon glyphicon-ok tick x1 test" style="display:none;"></span>
</div>
<div class="mang opt">Mangement<span class="glyphicon glyphicon-ok tick w1 test" style="display:none;"></span>
</div>
</div>
<br>



<br>


</div>

<div class="filter1 filter" id="filter_for_others" style="display:none;">
<div class="filter_heading">Filters</div>

<br>

<div class="filter_subhead" >Facilities
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="sports opt" >Sports<span class="glyphicon glyphicon-ok tick a test" data-tag="sports" style="display:none;"></span></div>
<div class="day opt">Day boarding<span class="glyphicon glyphicon-ok tick b test" data-tag="day" style="display:none;"></span></div>
<div class="sp opt">Swimming Pool<span class="glyphicon glyphicon-ok tick c test" data-tag="pool" style="display:none;"></span></div>
<div class="music opt">Music<span class="glyphicon glyphicon-ok tick d test" data-tag="music" style="display:none;"></span></div>
<div class="dance opt">Dance<span class="glyphicon glyphicon-ok tick e test" data-tag="dance" style="display:none;"></span></div>
<div class="sclass opt">Smart Classes<span class="glyphicon glyphicon-ok tick f test" data-tag="smart" style="display:none;"></span></div>
<div class="ac opt">Air Conditioned<span class="glyphicon glyphicon-ok tick m test" data-tag="ac" style="display:none;"></span></div>
<div class="tf opt">Transport Facility<span class="glyphicon glyphicon-ok tick n test" data-tag="transport" style="display:none;"></span></div>

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
		values: [1000,5000],
		slide:function(event,ui)
		{ output.html('Range: Rs.'+ui.values[0] +' - Rs.'+ ui.values[1]);
		  $('.block').each(function(){
				var price = $(this).attr('data-price');
				var prop = $(this).css('display');
				if (prop=='block')
				{
					if ( +price > ui.values[0] && +price < ui.values[1])
					;
					else
					{ $(this).hide(); }
				}
				else if (prop=='none')
				{
					if ( +price > ui.values[0] && +price < ui.values[1])
					{ $(this).fadeIn('slow'); }
					else
					;
				}
		  });
		}
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

<div class="govt opt">Govt Schools<span class="glyphicon glyphicon-ok tick g test" style="display:none;"></span></div>
<div class="pvt opt">Private Schools<span class="glyphicon glyphicon-ok tick h test" style="display:none;"></span></div>
<div class="cs opt">Charity Schools<span class="glyphicon glyphicon-ok tick i test" style="display:none;"></span>
</div></div>
<br>
<div class="filter_subhead" >Education Type
<span class="glyphicon glyphicon-chevron-down filter_arrow"></span>
</div>
<div class="filter_content" >
<div class="coed opt">Co-Education<span class="glyphicon glyphicon-ok tick j test" style="display:none;"></span></div>
<div class="ob opt">Only Boys<span class="glyphicon glyphicon-ok tick k test" style="display:none;"></span></div>
<div class="og opt">Only Girls<span class="glyphicon glyphicon-ok tick l test" style="display:none;"></span>
</div></div>
<br>
<br>

<!--
<form method="post">
<div style="float:right; background-color:white; margin-top:5px; margin-bottom:5px; margin-right:5%;"><input name="apply" type="submit" value="Apply" style="background-color: lightgray; border-radius:5%; min-width:60px; width:25%; max-width:100px;"/>
</div>
</form>
-->

</div>


<script>
window.onscroll =yHandler;
function yHandler(){
	
var srch=document.getElementById('srch');	
var contentHeight= srch.offsetHeight;//alert(contentHeight);
var yOffest=window.pageYOffset;
var y= yOffset+ window.innerHeight;
if(y>=contentHeight)
{//alert('helo');
}
var status=document.getElementById('plk');
//alert( contentHeight+' & '+y);	
}


</script>

<div class="search_results" id="srch">


<?php
	
	$count=0;
	if ($x=="name")
	{ //echo "x is name";
	  $query = "select institutes.id, institutes.name, institutes.address, institutes.website, institutes.contact, institutes.image, institutes.fees from institutes, links where institutes.Id=links.IdInst AND links.IdBuild=$z AND institutes.name LIKE '%$y%'";
	  $data = mysql_query($query);
	  $num = mysql_num_rows($data);
	  if ($num>0)
	  { while ($qrow = mysql_fetch_array($data))
	    { $count++;
?>


<?php
	// abhi konsa school chl rha h, uski image
	$cur_img=$qrow['image'];
	$q2="select pool, day, sports, music, dance, smartclass, ac,transport , govt, pvt, charity, coed, girls, boys, ugc, state, csir, eng, med, art, man from institutes, filters where institutes.image = '$cur_img' and institutes.id=filters.idinst";
	$d2=mysql_query($q2);
	$qr2 = mysql_fetch_array($d2);
	
	$filter_lists="faltu";
	
	if ( $qr2["pool"]=="y" )  { $filter_lists.=",pool"; }
	if ( $qr2["day"]=="y" )	{ $filter_lists.=",day"; }
	if ( $qr2["sports"]=="y" )	{ $filter_lists.=",sports"; }
	if ( $qr2["music"]=="y" )	{ $filter_lists.=",music"; }
	if ( $qr2["dance"]=="y" )	{ $filter_lists.=",dance"; }
	if ( $qr2["smartclass"]=="y" )	{ $filter_lists.=",smartclass"; }
	if ( $qr2["ac"]=="y" )	{ $filter_lists.=",ac"; }
	if ( $qr2["transport"]=="y" )	{ $filter_lists.=",transport"; }
	if ( $qr2["govt"]=="y" )	{ $filter_lists.=",govt"; }
	if ( $qr2["pvt"]=="y" )	{ $filter_lists.=",pvt"; }
	if ( $qr2["charity"]=="y" )	{ $filter_lists.=",charity"; }
	if ( $qr2["coed"]=="y" )	{ $filter_lists.=",coed"; }
	if ( $qr2["girls"]=="y" )	{ $filter_lists.=",girls"; }
	if ( $qr2["boys"]=="y" )	{ $filter_lists.=",boys"; }
	if ( $qr2["ugc"]=="y" )	{ $filter_lists.=",ugc"; }
	if ( $qr2["csir"]=="y" )	{ $filter_lists.=",csir"; }
	if ( $qr2["state"]=="y" )	{ $filter_lists.=",state"; }
	if ( $qr2["eng"]=="y" )	{ $filter_lists.=",eng"; }
	if ( $qr2["med"]=="y" )	{ $filter_lists.=",med"; }
	if ( $qr2["art"]=="y" )	{ $filter_lists.=",art"; }
	if ( $qr2["man"]=="y" )	{ $filter_lists.=",man"; }
	//echo $filter_lists ;
	
	/*$queryt = "select fees from institutes where image='$curr_img'";
	$datat = mysql_query($queryt);
	$runt = mysql_fetch_array($datat);
	$fees = $runt["fees"];*/
?>

<a href="alldetails.php?id=<?php echo $qrow['id'] ?>" style="text-decoration:none;color:black;">
<div class="recent_searches container-fluid block" data-price="<?php echo $qrow["fees"]; ?>" data-tag="<?php echo $filter_lists ?>">
<div class="recent_searches_heading" ><?php echo $qrow["name"]; ?></div>
<img src="<?php echo $qrow['image']?>" class="recent_searches_img img-responsive" style="float:left;">

<div class="recent_searches_des" >
<hr style=""><b>Rating:</b>
<?php
	$shu="select * from institutes where id='".$qrow['id']."'";
	$shub = mysql_query($shu);
	$v = mysql_fetch_array($shub);
	$totalrating = $v['TotalRating'];
	$rating = $v['Rating'];
	if ($totalrating!=0)
	$avgrating = $rating/$totalrating;
	else
	$avgrating = 0;
	$avgroundrating = round($avgrating); 
	for ($i=0; $i<$avgroundrating; $i++)
	{
?>
<span class="glyphicon glyphicon-star star"></span>
<?php
	}
	for (; $i<5; $i++)
	{
?>
<span class="glyphicon glyphicon-star-empty star"></span>
<?php
	}
?>
<?php
	$shu="select count(*) from review where idinst='".$qrow['id']."'";
	$kapil=mysql_query($shu);
	$mani=mysql_fetch_array($kapil);
	$behen=$mani['count(*)'];
?>
(<?php echo $totalrating; ?> ratings, <?php echo $behen; ?> reviews)

<hr style="">
<b>Features:</b>
<li><b> Fees: Rs <?php echo $qrow["fees"];?> 
<?php if ($z!=4) { ?>
per Month</b>
<?php } else { ?>
per Year</b>
<?php } ?>
<?php $queryt = "select board from institutes where image='$cur_img'";
		   $datat = mysql_query($queryt);
		   $anst = mysql_fetch_array($datat);
?>	
<?php if ($z!=4) { ?>
<li> <?php	   echo $anst["board"]; 
	 ?>
&nbsp;Board
<?php } else { ?>
<li> Affiliated to <?php echo $anst["board"]; ?>
<?php } ?>
<?php
	
	$q1 = "select Facilities from facilities where idinst='".$qrow['id']."' order by rand() limit 2";
	$d1 = mysql_query($q1);
	$n1 = mysql_num_rows($d1);
	$f=0;
?>
<!--<li> Total <?php echo $n1; ?> Facilities.-->
<?php
		while ($qr1 = mysql_fetch_array($d1))
		{ 
				echo "<li>".$qr1["Facilities"];
				$f++;	
		}
	
//<li> Large classrooms with an area of 12 sq.ft. per child. 
//<li> Outdoor game facilities for cricket, tennis, basketball and football.

	if ($f==0)
	{
?>
<li> No Facilities Available.
<?php
	}
?>
</li><hr style="">

</div>
</div>
</a>

<?php
		  }
		  
		}
		else
		{
?>
<tr>
<td>-</td>
<td>No Record Found</td>
<td>-</td>
<td>-</td>
</tr>
<?php
	  }
	}
    else
    {
		$q = "select institutes.id, institutes.name, institutes.address, institutes.website, institutes.contact, institutes.fees, institutes.image from institutes, links where institutes.id=links.idinst AND links.idbuild=$z AND institutes.address LIKE '%$y%'";
		$d = mysql_query($q);
		$n = mysql_num_rows($d);
		if ($n>0)		{ while ($qr = mysql_fetch_array($d))
		  { $count++;
?>

<?php
	// abhi konsa school chl rha h, uski image
	$cur_img=$qr['image'];
	$q2="select pool, day, sports, music, dance, smartclass, ac,transport , govt, pvt, charity, coed, girls, boys from institutes, filters where institutes.image = '$cur_img' and institutes.id=filters.idinst";
	$d2=mysql_query($q2);
	$qr2 = mysql_fetch_array($d2);
	
	$filter_lists="faltu";
	
	if ( $qr2["pool"]=="y" )  { $filter_lists.=",pool"; }
	if ( $qr2["day"]=="y" )	{ $filter_lists.=",day"; }
	if ( $qr2["sports"]=="y" )	{ $filter_lists.=",sports"; }
	if ( $qr2["music"]=="y" )	{ $filter_lists.=",music"; }
	if ( $qr2["dance"]=="y" )	{ $filter_lists.=",dance"; }
	if ( $qr2["smartclass"]=="y" )	{ $filter_lists.=",smartclass"; }
	if ( $qr2["ac"]=="y" )	{ $filter_lists.=",ac"; }
	if ( $qr2["transport"]=="y" )	{ $filter_lists.=",transport"; }
	if ( $qr2["govt"]=="y" )	{ $filter_lists.=",govt"; }
	if ( $qr2["pvt"]=="y" )	{ $filter_lists.=",pvt"; }
	if ( $qr2["charity"]=="y" )	{ $filter_lists.=",charity"; }
	if ( $qr2["coed"]=="y" )	{ $filter_lists.=",coed"; }
	if ( $qr2["girls"]=="y" )	{ $filter_lists.=",girls"; }
	if ( $qr2["boys"]=="y" )	{ $filter_lists.=",boys"; }
	//echo $filter_lists ;
?>

<a href="alldetails.php?id=<?php echo $qr['id'] ?>" style="text-decoration:none;color:black;">
<div class="recent_searches container-fluid block" data-price="<?php echo $qr["fees"]; ?>" data-tag="<?php echo $filter_lists ?>">
<div class="recent_searches_heading" ><?php echo $qr["name"]; ?></div>
<img src="<?php echo $qr['image']?>" class="recent_searches_img img-responsive" style="float:left;">

<div class="recent_searches_des" >
<hr style="border-top:1px solid cyan;"><b>Rating:</b>
<?php
	$shu="select * from institutes where id='".$qr['id']."'";
	$shub = mysql_query($shu);
	$v = mysql_fetch_array($shub);
	$totalrating = $v['TotalRating'];
	$rating = $v['Rating'];
	if ($totalrating!=0)
	$avgrating = $rating/$totalrating;
	else
	$avgrating = 0;
	$avgroundrating = round($avgrating); 
	for ($i=0; $i<$avgroundrating; $i++)
	{
?>
<span class="glyphicon glyphicon-star star"></span>
<?php
	}
	for (; $i<5; $i++)
	{
?>
<span class="glyphicon glyphicon-star-empty star"></span>
<?php
	}
?>
<?php
	$shu="select count(*) from review where idinst='".$qr['id']."'";
	$kapil=mysql_query($shu);
	$mani=mysql_fetch_array($kapil);
	$behen=$mani['count(*)'];
?>
(<?php echo $totalrating; ?> ratings, <?php echo $behen; ?> reviews)
<hr style="border-top:1px solid cyan;">
<b>Features:</b>
<li><b> Fees: Rs <?php echo $qr["fees"];?> 
<?php if ($z!=4) { ?>
per Month</b>
<?php } else { ?>
per Year</b>
<?php } ?>
<?php $queryt = "select board from institutes where image='$cur_img'";
		   $datat = mysql_query($queryt);
		   $anst = mysql_fetch_array($datat);
?>	
<?php if ($z!=4) { ?>
<li> <?php	   echo $anst["board"]; 
	 ?>
&nbsp;Board
<?php } else { ?>
<li> Affiliated to <?php echo $anst["board"]; ?>
<?php } ?>
<?php
	
	$q1 = "select facilities.Facilities from institutes, links, facilities where institutes.id=links.idinst AND links.idbuild=$z AND institutes.address LIKE '%$y%' AND institutes.id=facilities.idinst AND institutes.image LIKE '%$cur_img%'";
	$d1 = mysql_query($q1);
	$n1 = mysql_num_rows($d1);
	if ($n1>0)
	{
?>
<!--<li> Total <?php echo $n1; ?> Facilities.-->
<?php
		$rnum1 = mt_rand(1,$n1);
		$rnum2 = mt_rand(1,$n1);
		while ($rnum1==$rnum2)
		{		
			$rnum2 = mt_rand(1,$n1);
		}	
		$temp=1;
		while ($qr1 = mysql_fetch_array($d1))
		{ 
			if ($temp==$rnum1 || $temp==$rnum2)
			{
				echo "<li>".$qr1["Facilities"];
			}
			$temp++;
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
</li><hr style="border-top:1px solid black;">

</div>
</div>
</a>

<?php
		  }
		  
		}
		else
		{
?>
<tr>
<td>-</td>
<td>No Record Found</td>
<td>-</td>
<td>-</td>
</tr>
<?php   
		}
	}
?>

</div>
<div style="float: left; width:15%; padding-left:8px; margin-top:45px;; overflow:hidden;">
<div >
<div class="home_heading">Sponsored</div>
<img src="images/ads/Rosati-Kain_High_School_Building_Angle.JPG" style="width:100%;length:auto;" class="ads">
</div>

<div style="float:left;   margin-top:45px;">

<img src="images/ads/getimage.png"style="width:100%;length:auto;" class="ads">
</div>
</div>


<hr style="width:90%;border:2px solid gray;">


<?php
	include('foot.php');
?>



</body>
</html>
