<?php
	session_start();
	include('config.php');
	$ii=$_GET['id'];
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
     
      #map {
      
		width: 100%;
		z-index:100;
      }
#floating-panel {
  
  z-index: 5;
 
  padding: 5px;
  
  
  font-family: 'Roboto','sans-serif';


}

    </style>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Play|Orbitron:700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/detailpage.css">
<link rel="stylesheet" type="text/css" href="css/forum.css">
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
		
	
		$('.s1').mouseover(function(){
			$('.s11').show();
			$('.s1').hide();
			$('.s2').show();
			$('.s22').hide();
			$('.s3').show();
			$('.s33').hide();
			$('.s4').show();
			$('.s44').hide();
			$('.s5').show();
			$('.s55').hide();
			$('#ip').attr('value','1');
		});
		
		
		$('.s2').mouseover(function(){
			$('.s11').show();
			$('.s1').hide();
			$('.s22').show();
			$('.s2').hide();
			$('.s33').hide();
			$('.s3').show();
			$('.s44').hide();
			$('.s4').show();
			$('.s55').hide();
			$('.s5').show();
			$('#ip').attr('value','2');
		});
		$('.s3').mouseover(function(){
			$('.s11').show();
			$('.s1').hide();
			$('.s22').show();
			$('.s2').hide();
			$('.s33').show();
			$('.s3').hide();
			$('.s44').hide();
			$('.s4').show();
			$('.s55').hide();
			$('.s5').show();
			$('#ip').attr('value','3');
		});
		$('.s4').mouseover(function(){
			$('.s11').show();
			$('.s1').hide();
			$('.s22').show();
			$('.s2').hide();
			$('.s33').show();
			$('.s3').hide();
			$('.s44').show();
			$('.s4').hide();
			$('.s55').hide();
			$('.s5').show();
			$('#ip').attr('value','4');
		});
		$('.s5').mouseover(function(){
			$('.s11').show();
			$('.s1').hide();
			$('.s22').show();
			$('.s2').hide();
			$('.s33').show();
			$('.s3').hide();
			$('.s44').show();
			$('.s4').hide();
			$('.s55').show();
			$('.s5').hide();
			$('#ip').attr('value','5');
		});

		$('.s11').mouseover(function(){
			$('.s22').hide();
			$('.s2').show();
			$('.s33').hide();
			$('.s3').show();
			$('.s44').hide();
			$('.s4').show();
			$('.s55').hide();
			$('.s5').show();
			$('#ip').attr('value','1');
		});
		$('.s22').mouseover(function(){
			$('.s33').hide();
			$('.s3').show();
			$('.s44').hide();
			$('.s4').show();
			$('.s55').hide();
			$('.s5').show();$('#ip').attr('value','2');
		});
		$('.s33').mouseover(function(){
			$('.s44').hide();
			$('.s4').show();
			$('.s55').hide();
			$('.s5').show();$('#ip').attr('value','3');
		});
		$('.s44').mouseover(function(){
			$('.s55').hide();
			$('.s5').show();$('#ip').attr('value','4');
		});
		
		$('.str').mouseout(function(){
			$('.s11').hide();
			$('.s22').hide();
			$('.s33').hide();
			$('.s44').hide();
			$('.s55').hide();
			$('.s1').show();
			$('.s2').show();
			$('.s3').show();
			$('.s4').show();
			$('.s5').show();
			$('#ip').attr('value','0');
		});



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
	$('#sb').mousedown(function(){
		var x= $('#rev').val();
		var k= <?php echo $ii; ?>;
		window.location.href="review_sb.php?y="+x+"&id="+k;
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
	$ins_id= $_GET['id'];
	$q="select * from institutes where id=$ins_id;";
	$d=mysql_query($q);
	$v=mysql_fetch_array($d);
	$op="update institutes set datetime=CURRENT_TIMESTAMP where Id=$ins_id;";
	$n=mysql_query($op);
	$q="select * from institutes where id=$ins_id;";
	$d=mysql_query($q);
	$v=mysql_fetch_array($d);
?>


<div style=" overflow:hidden;">


<div style="overflow: hidden; font-variant:small-caps; font-size:3.2em; text-align:center; margin-top:120px; font-weight:bold; margin-bottom: 10px;"><span><?php echo $v['Name']; ?></span></div>
<div style="margin: 0 auto 20px auto; text-align: center;">
<?php
	$totalrating = $v['TotalRating'];
	$rating = $v['Rating'];
	if ($totalrating!=0)
	$avgrating = $rating/$totalrating;
	else
	$avgrating = 0;
	$avgroundrating = round($avgrating); 
	$lk="update links set avgrate=$avgrating where IdInst=$ins_id;";
	$kk=mysql_query($lk);
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
<span style="color:red; font-weight:bold">&nbsp;<?php echo $avgrating; ?></span>
<span style="color:black;">(Based On <?php echo $totalrating; ?> Ratings),</span>
<?php
	$shu="select count(*) from review where idinst='$ii'";
	$kapil=mysql_query($shu);
	$mani=mysql_fetch_array($kapil);
	$behen=$mani['count(*)'];
?>
<span style="color:green; font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $behen; ?> Reviews</span>
</div>

<hr style="width:95%; margin:0px auto 0px auto; color:grey; padding-bottom:8px;"

<div style="overflow: hidden; width:95%; margin: 0px auto 20px auto;">
<img src="<?php echo $v['image']; ?>" id="detail_img" style="width:100%; border-radius:5px; position:relative; z-index:-1; 
height:600px;"></div>
<div class="content_body" style="margin:0px 2.5% 0px 2.5%; position:relative; border-radius:5px; z-index:1;">


<div class="addtofav_button" style="margin-bottom:5px; padding:5px 5px 5px 5px; float:right; font-size:1.2em;" onClick="af()"><span class="glyphicon glyphicon-heart heart" style="font-color:red  ; "></span> Add To Favourites</div>
<script>


function af()
{
<?php if(isset($_SESSION["name"]))
{
$i=$_SESSION['id'];
$qv="select * from wishlist where uid=$i and insId=$ins_id;";
$d= mysql_query($qv);
      if(mysql_num_rows($d)>0)
         {?>
           alert('already added to your favourites');	
    <?php }
	else if(mysql_num_rows($d)==0)
	{
$qr="insert into wishlist values('',$i,$ins_id)";
$d2= mysql_query($qr);
	?>
alert("successfully added");
<?php }
else
{?>
alert('You are not logged in....');<?php }} ?>
	}
	

</script>
<div style="width:32.5%; min-width:180px; padding: 15px 20px;  clear:both; background-color:#006FA4; height:auto; min-height:155px; float:left; ">
<div class="recent_searches_heading" style="margin-bottom:12px; font-size:2em; color:#F5FAFA;"><span style=" ">
Institute Type 
</span></div>
<div style="color:#F5FAFA;">
<?php 
$qu="select distinct * from links where IdInst=$ins_id";
$da=mysql_query($qu);
while($va=mysql_fetch_array($da))
{
	if($va["IdBuild"]==1)
	$out="Playschool";
	else if($va["IdBuild"]==2)
	$out="Kindergarten";
	else if($va["IdBuild"]==3)
	$out="School";
	else
	$out="College";
?>
<li> <?php echo $out; ?> </li>
<?php } ?>
</div>
</div>

<div style="width:32.5%; min-width:180px; padding: 15px 20px; margin-left:13px; height:auto; min-height:155px; background-color:#006FA4; float:left; ">
<div class="recent_searches_heading" style="margin-bottom:12px; color:#F5FAFA; font-size:2em;"><span >
Affiliated Board
</span></div>
<div style="color:#F5FAFA;"><?php echo $v['Board']; ?>
</div>
</div>

<div  style="width:32.5%; min-width:180px; padding: 15px 20px; margin-left:13px; height:auto; min-height:155px; background-color: green; float:left; ">
<div class="recent_searches_heading" style="margin-bottom:16px; font-size:2em; color:#F5FAFA;"><span >
Contact Information
</span></div>
	<div style="margin-bottom:10px; color:#F5FAFA;">
		<span style="font-weight:bold;">Phone : </span><?php echo $v['Contact']; ?><br>
		
		<span style="font-weight:bold;">E-Mail : </span><a href="mailto:info@mtps.in" style="color: blue"><?php echo $v['Email']; ?></a>
</div>
</div>



<div style="width:25%; min-width:180px; margin:20px auto 20px auto; min-height:200px; float:left; padding: 15px 20px; background-color:#CFCB9C; overflow: hidden;">
<div class="recent_searches_heading" style="margin-bottom:16px; font-size:2em;  color:#F5FAFA;"><span style="overflow: hidden;">
Basic Details
</span></div>
<div style="color:#F5FAFA;">
<b>Principal:</b><?php echo $v['Principal']; ?>
<br><br>

<b>Fee:</b> Rs. <?php echo $v['Fees']; ?> per month.
<br><br>

<b>Website:</b><a href="<?php echo $v['Website']; ?>"><?php echo $v['Website']; ?></a>
<br>
<br>

</div>
</div>
 <script>
	
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: {lat: 28.38, lng: 77.12}
  });
  var geocoder = new google.maps.Geocoder();

  document.getElementById('submit').addEventListener("click", function() {
    geocodeAddress(geocoder, map);
  });
}

function geocodeAddress(geocoder, resultsMap) {
  var address = document.getElementById('address').value;
  geocoder.geocode({'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
      resultsMap.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKLsUNn3cMpHaWuMbFL9VtkJwZMOws4tI&signed_in=true&callback=initMap"
        async defer></script>


<div style="width:75%; float:left; margin:20px auto 20px auto; min-height:206px; padding: 15px 20px; background-color:#CFCB9C;" >

<div class="recent_searches_heading" style="margin-bottom:16px; font-size:2em;  color:#F5FAFA;"><span style="overflow:hidden;">
Address
</span></div>
<div id="floating-panel">
      <input id="address" type="hidden" value="<?php echo $v['Name'].','.$v['Address'];?>">
     <a href="#map" style="text-decoration:none;">
     <div id="submit" class="Ans" style="clear:both; margin-top:5px;">Locate</div></a>
    </div>



   
<div style="font-weight:bold">
	<?php echo $v['Address']; ?>
</div>


</div>







<!--General Info Over-->



<div style=" margin:0px auto 20px auto; clear:both; padding: 15px 20px; background-color: #93B380; overflow: hidden;">
<div class="recent_searches_heading" style="margin-bottom:16px; font-size:2em;  color:#F5FAFA;"><span style=" overflow: hidden;">
Campus
</span></div>
<div>
<?php $qw="select * from facilities where IdInst=$ins_id;";
$dt=mysql_query($qw);
while($val=mysql_fetch_array($dt))
{ ?>


	<p><li><?php echo $val['Facilities']; ?> </li></p>
	
    <?php } ?>
	</div>
</div>



<div style="margin:50px auto 20px auto; padding: 15px 20px; overflow: hidden;">
<div class="recent_searches_heading" style=" font-size:1.5em; "><span style="font-size:1.5em; overflow: hidden;">
Give Us A 5 Star Rating :
</span></div>
<div style="font-size:1.5em; margin-top:10px;">
<span class="abcd" style="overflow:hidden;">
<form method="post">
<button name="button" style="background-color:white;">
<span class="glyphicon glyphicon-star-empty star s1"></span>
<span class="glyphicon glyphicon-star star s11 str" style="display:none;"></span>
<span class="glyphicon glyphicon-star-empty star s2"></span>
<span class="glyphicon glyphicon-star star s22 str" style="display:none;"></span>
<span class="glyphicon glyphicon-star-empty star s3"></span>
<span class="glyphicon glyphicon-star star s33 str" style="display:none;"></span>
<span class="glyphicon glyphicon-star-empty star s4"></span>
<span class="glyphicon glyphicon-star star s44 str" style="display:none;"></span>
<span class="glyphicon glyphicon-star-empty star s5"></span>
<span class="glyphicon glyphicon-star star s55 str" style="display:none;"></span>

</button>
<input type="textbox" id="ip" style="display:none;" name="box" value="0"/>
</form>
<?php
	if (isset($_POST["button"]))
	{   
		$qq = "select TotalRating, Rating from institutes where id='$ii'";
		$dd = mysql_query($qq);
		$rr = mysql_fetch_array($dd);
		$trating = $rr["TotalRating"];
		$temp = $_POST["box"];
		$trating++;
		$rating = $rr["Rating"];
		$rating+=$temp;
		error_reporting(0);
		$qq = "update institutes set Rating='$rating', TotalRating='$trating' where id='$ii'";
		$dd = mysql_query($qq);
		$rr = mysql_fetch_array($dd);
		?> <script> alert('Thanks for rating.'); 
        window.location.href="alldetails.php?id=<?php echo $ii;?>"</script>
		<?php
		
	}
?>
</span>
</div>
</div>




<div style=" margin:0px auto 60px auto; padding: 15px 20px; overflow: hidden;">
<div class="recent_searches_heading" style=" font-size:1.5em;"><span style="font-size:1.5em; overflow: hidden;">
Write A Review
</span></div>
<div>
<textarea id="rev" style="width:50%;height:150px; margin-top:10px;"></textarea>
    
</div>
<div class="detail_review_submit_button" id="sb" style="margin-top:15px; background-color:green; float:left; color:#F5FAFA; padding:5px 5px 5px 5px;">
    Submit
    </div>
</div>

<hr width="95%">
<div style=" margin:0px auto 20px auto; padding: 15px 20px; background-color: #069; overflow: hidden;">
<div class="recent_searches_heading" style="margin-bottom:16px; font-size:2em;  color:#F5FAFA;"><span style="overflow: hidden;">
Reviews
</span></div>
<?php
$qt="Select * from review where IdInst=$ins_id order by time desc limit 10 ;";
$de=mysql_query($qt);
while($b=mysql_fetch_array($de))
{    $z=$b['uid'];
	 $u="SELECT users.Name, Users.Photo from users WHERE users.id=$z";
	 $r=mysql_query($u);
	 $h=mysql_fetch_array($r);
?>
<div class="each_review_div">
<span> <img src="upload/<?php echo $h['Photo']; ?>" class="img-circle img-adjust" /> </span>
<span class="username_detail_review"> <?php echo $h['Name']; ?></span>
<div class="review_display">
<?php echo $b['review']; ?>
</div>
</div>
<?php } ?>
</div>

</div>


<div id="map"></div>

    





<?php
	
	include('foot.php');
?>


</body>

</html>
