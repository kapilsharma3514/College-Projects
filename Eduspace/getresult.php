<?php
	require_once("dbcontroller.php");
$db_handle = new DBController();
$perPage = 3;
$page = 1;
 $z=$_GET['z'];
 $y=$_GET['y'];
 $x=$_GET['x'];
if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$start = ($page-1)*$perPage;
if($start < 0) $start = 0;


	if($x=='name')
	 //echo "x is name";
{	  $sql = "select institutes.name, institutes.address, institutes.website, institutes.contact, institutes.image, institutes.fees, institutes.id, institutes.board from institutes, links where institutes.Id=links.IdInst AND links.IdBuild=$z AND institutes.name LIKE '%$y%'";
	$query =  $sql . " limit " . $start . "," . $perPage; 
$faq = $db_handle->runQuery($query);
	 
if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}
$pages  = ceil($_GET["rowcount"]/$perPage);
$output = '';
if(!empty($faq)) {
$output .= '<input type="hidden" class="pagenum" value="' . $page . '" /><input type="hidden" class="total-page" value="' . $pages . '" />';

	   foreach($faq as $k=>$v) 
	    { 



$output.="<a href='alldetails.php?id=".$faq[$k]["id"]."' style='text-decoration:none; color:black;'> <div class='recent_searches container-fluid'>";
$output.='<div class="recent_searches_heading" >'. $faq[$k]['name'] .'</div>';
$output.= '<img src="'.  $faq[$k]['image'].'" class="recent_searches_img img-responsive" style="float:left;">';

$output.='<div class="recent_searches_des" ><hr><b>Rating:</b>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star-empty star"></span>
(1378 ratings)
<hr>
<b>Features:</b>';
$output.='<li><b> Fees: Rs'.$faq[$k]["fees"].'per month.</b>
<li> Affiliated To: '.$faq[$k]["board"].'
<li> Large classrooms with an area of 12 sq.ft. per child. 
<li> Outdoor game facilities for cricket, tennis, basketball and football.
</li><hr>

</div>
</div>
</a>';
 }
 } 
 print $output;
}
else
{
	$sql = "select institutes.name, institutes.address, institutes.website, institutes.contact, institutes.fees, institutes.image, institutes.id from institutes, links where institutes.id=links.idinst AND links.idbuild=$z AND institutes.address LIKE '%$y%'";
	$query =  $sql . " limit " . $start . "," . $perPage; 
$faq = $db_handle->runQuery($query);
	 
if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}
$pages  = ceil($_GET["rowcount"]/$perPage);
$output = '';
if(!empty($faq)) {
$output .= '<input type="hidden" class="pagenum" value="' . $page . '" /><input type="hidden" class="total-page" value="' . $pages . '" />';

	   foreach($faq as $k=>$v) 
	    { 



$output.="<a href='alldetails.php?id=".$faq[$k]["id"]."' style='text-decoration:none; color:black;'> <div class='recent_searches container-fluid'>";
$output.='<div class="recent_searches_heading" >'. $faq[$k]['name'] .'</div>';
$output.= '<img src="'.  $faq[$k]['image'].'" class="recent_searches_img img-responsive" style="float:left;">';

$output.='<div class="recent_searches_des" ><hr><b>Rating:</b>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star star"></span>
<span class="glyphicon glyphicon-star-empty star"></span>
(1378 ratings)
<hr>
<b>Features:</b>';
$output.='<li><b> Fees: Rs'.$faq[$k]["fees"].'per month.</b>
<li> CBSE board(Till XII).
<li> Large classrooms with an area of 12 sq.ft. per child. 
<li> Outdoor game facilities for cricket, tennis, basketball and football.
</li><hr>

</div>
</div>
</a>';

 }
 } 
 print $output;
	
	
}
	?>