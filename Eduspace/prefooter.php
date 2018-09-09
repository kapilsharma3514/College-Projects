
<div class="home_content container-fluid" id="hc">

<div class="l_home container-fluid" >
<div class="home_heading">Upcoming Institutions</div>
<div class="upcoming_items">
<img src="images/upcoming/assignment-5-1.jpg" class="upcoming_items_img">
Jack Donohue Public School
Greater Noida
</div>
<div class="upcoming_items">
<img src="images/upcoming/school-building-back.jpg" class="upcoming_items_img">
Delhi Public School
Sector-100, Noida
</div>
<div class="upcoming_items">
<img src="images/upcoming/635155355396297115_Pawar Public School.jpg" class="upcoming_items_img">
Panwar Public School
Alwar, Rajasthan
</div>
<div class="upcoming_items">
<img src="images/upcoming/sumner_2003.jpg" class="upcoming_items_img">
Ryan International School
Lucknow
</div>




</div>

<div class="c_home" >
<div class="home_heading" >Recent Searches</div>
<?php
$k="select * from institutes order by datetime desc limit 4;";
$df=mysql_query($k);
while($da=mysql_fetch_array($df))
{
 ?>
<div class="recent_searches container-fluid">
<a href="alldetails.php?id=<?php echo $da['Id']; ?>" style="text-decoration:none; color:black;">
<div class="recent_searches_heading" ><?php echo $da['Name']; ?></div>
<img src="<?php echo $da['image']; ?>" class="recent_searches_img img-responsive" style="float:left;">

<div class="recent_searches_des" >
<hr><b>Rating:</b>
<?php
$ui=$da['Id'];
	$shu="select * from institutes where id=$ui;";
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
	$shu="select count(*) from review where idinst='$ui'";
	$kapil=mysql_query($shu);
	$mani=mysql_fetch_array($kapil);
	$behen=$mani['count(*)'];
?>
<span style="color:green; font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $behen; ?> Reviews</span>
<hr>
<b>Features:</b><br>
<li> <b>Fees: Rs. <?php echo $da['Fees']; ?> per month.</b></li>
<li> 
Affiliated To: <?php echo $da['Board']; ?></li>
<?php $nn=$da['Id']; 
$p="select * from facilities where IdInst='$nn' order by rand() limit 2;";
$nb=mysql_query($p);
while($m=mysql_fetch_array($nb)){?>
<li><?php echo $m['Facilities']; ?> </li> 
<?php } ?>
<hr>

</div>
</a>
</div>
<?php } ?>
</div>

<div class="r_home" >
<div class="home_heading">Sponsored</div>
<img src="images/ads/Rosati-Kain_High_School_Building_Angle.JPG" class="ads">
</div>
</div>