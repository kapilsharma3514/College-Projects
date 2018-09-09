<?php  
	session_start();
 include('config.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/search_config.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/contactbg.css">

<link type="text/javascript" href="script/home.js">
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
		
		$("#register").click(function(){
			$(".a2-1").slideToggle();
			$(".a2-2").slideToggle();
		});
		
		$("#signin").click(function(){
			$(".a2-1").slideToggle();
			$(".a2-2").slideToggle();
		});
		
			
	$(window).scroll(function() { 
        var scroll = $(window).scrollTop();
 
        if (scroll > 4) {$("#log").attr('src','images/icon.png');
            $(".header").addClass('smaller');
			$(".smaller").removeClass('header');
			
        } else {$("#log").attr('src','images/logo2.png');
            $(".smaller").addClass("header");
			$(".header").removeClass("smaller");
			
        }
    });
	
	 $('#college_check').click(function(){
		if (document.getElementById('college_check').checked)
		{	$('#affiliated_to').show();
			$('#stream_selection').show();
		}
		else
		{	$('#affiliated_to').hide();
			$('#stream_selection').hide();
		}
	 });
	 
	 
	 $('#add_facilities').click(function(){
		var x = $(this).attr('data-tag');
		var y = +x + 1;
		if (y==16)
		{ alert('Maximum Facilities Limit Reached !'); return; }
		var z = "f"+y;
		$('#'+z).show();
		$(this).attr('data-tag',y);
		$('#remove_facilities').attr('data-tag',y);
	 });
	 
	 $('#remove_facilities').click(function(){
		var x = $(this).attr('data-tag');
		var y = +x - 1;
		if (y==0)
		{ alert("Can't Delete More !"); return; }
		var z = "f"+y;
		$('#'+z).hide();
		$(this).attr('data-tag',y);
		$('#add_facilities').attr('data-tag',y);
	 });
	 	 
	 
	});
	
	function checkname() {
		var x = document.getElementsByName("name")[0].value;
		if (x=="")
		{ document.getElementById("wrongname").style.display="block";
		  document.getElementsByName("name")[0].style.borderColor = 'red';
		  return; 
		}
		
		document.getElementById("wrongname").style.display = 'none';
		document.getElementsByName("name")[0].style.borderColor = 'green';
	}
	
	function checkaddress() {
		var x = document.getElementsByName("address")[0].value;
		var pattern = new RegExp(/[~`!#$@%\^.&*+=\-\[\]\\';,/{}|\:<>\?]/);
		if (x=="")
		{ document.getElementById("wrongaddress").style.display="block";
		  document.getElementsByName("address")[0].style.borderColor = 'red';
		  return; 
		}
		document.getElementById("wrongaddress").style.display = 'none';
		document.getElementsByName("address")[0].style.borderColor = 'green';
	}
	
	function checkphone() {
		var x = document.getElementsByName("contact")[0].value;
		var pattern = new RegExp(/[~`!#$@%\^.&*+=\-\[\]\\';,/{}|\:<>\?]/);
		if (x=="")
		{ document.getElementById("wrongphone").style.display="block";
		  document.getElementsByName("contact")[0].style.borderColor = 'red';
		  return; 
		}
		document.getElementById("wrongphone").style.display = 'none';
		document.getElementsByName("contact")[0].style.borderColor = 'green';
	}
	
	function checkemail() {
		var n = document.getElementsByName("email")[0].value;
		var lastAtPos = n.lastIndexOf('@');
		var lastDotPos = n.lastIndexOf('.');
		if ( (lastAtPos>0 && lastAtPos<lastDotPos && lastDotPos>0 && (n.length - lastDotPos)>=2)==false )
		{ 	document.getElementById("wrongemail").style.display = 'block';
			document.getElementsByName("email")[0].style.borderColor = 'red';
			return;
		}
		document.getElementById("wrongemail").style.display = 'none';
		document.getElementsByName("email")[0].style.borderColor = 'green';
	}
	
	function checkfees() {
		var n = document.getElementsByName("fees")[0].value;
		if (isNaN(n) || n=="")
		{	document.getElementById("wrongfees").style.display = 'block';
			document.getElementsByName("fees")[0].style.borderColor = 'red';
			return;
		}
		document.getElementById("wrongfees").style.display = 'none';
		document.getElementsByName("fees")[0].style.borderColor = 'green';
	}
	
	function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
			
			//window.onerror = function(msg,url,line)
			//{ alert (msg + "||" + url + "||" + line); }
    }
	
	/*function add_facilities() {
		var x = document.getElementById()
	}*/
</script>

<title>EduSpace</title>

</head>

<body style="margin: 0px;">


<?php
	if (isset($_SESSION["name"]))
	{   ?><script>alert("To register school you must be logged out");</script><?php
		echo "<script>window.location.href='index2.php'</script>";
		
	}
?>


<div class="header navbar-fixed-top" >
<div class="header_left" id="LOGO">
<img src="images/logo2.png" width="100%" height="100%" id="log" class="l"></div>
<a href="index2.php" style="text-decoration:none">
<div class="header_right" >
<div class="homeb">
<img src="images/home_button.png" width="100%" height="100%"></div>
</div>

</a>
</div>






<div class="container-fluid" style="padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;background-color:lightgray;">

<!--<div class="a2-1" style="padding: 10px 25px 10px 25px; opacity: 0.95; ">
-->
	<div class="wrap" style="margin-top:150px;">
	<div class="main">
		<div class="content">
			<!-- start contact -->
			<div class="contact">				
				<div class="contact_left_half">
	<div class="contact-form">
				  	<h3 style="text-decoration: underline">Basic Information</h3>
					    <form method="post" name="myForm" enctype="multipart/form-data" >
					    	<div>
						    	<span style="color: black;"><label>name *</label></span>
						    	<span style="color: black;"><input name="name" type="text" class="textbox" onfocusout="checkname()"></span>
						    <div style="display:none; font-size:0.8em; margin-top:-5px; margin-bottom: -20px; float:right; padding-right:4%;" id="wrongname"><p>XX--&nbsp;&nbsp; Enter Valid Name &nbsp;&nbsp;--XX</p></div>
							</div>
						   	<div>
						    	<span style="color: black;"><label>address *</label></span>
						    	<span style="color: black;"><input name="address" type="text" class="textbox" onfocusout="checkaddress()"></span>
						    <div style="display:none; font-size:0.8em; margin-top:-5px; margin-bottom: -20px; float:right; padding-right:4%;" id="wrongaddress"><p>XX--&nbsp;&nbsp; Can't Leave This Empty &nbsp;&nbsp;--XX</p></div>
							</div>
						    <div>
						     	<span style="color: black;"><label>contact numbers *</label></span>
						    	<span><input name="contact" type="text" class="textbox" onfocusout="checkphone()"></span>
						    <div style="display:none; font-size:0.8em; margin-top:-5px; margin-bottom: -20px; float:right; padding-right:4%;" id="wrongphone"><p>XX--&nbsp;&nbsp; Can't Leave This Empty &nbsp;&nbsp;--XX</p></div>
							</div>
						    <div>
						     	<span style="color: black;"><label>email *</label></span>
						    	<span><input name="email" type="text" class="textbox" onfocusout="checkemail()"></span>
						    <div style="display:none; font-size:0.8em; margin-top:-5px; margin-bottom: -20px; float:right; padding-right:4%;" id="wrongemail"><p>XX--&nbsp;&nbsp; Enter Valid EMail &nbsp;&nbsp;--XX</p></div>
							</div>
							<div>
						     	<span style="color: black;"><label>principal</label></span>
						    	<span><input name="principal" type="text" class="textbox" onfocusout="checkphone()"></span>
						    <div style="display:none; font-size:0.8em; margin-top:-5px; margin-bottom: -20px; float:right; padding-right:4%;" id="wrongphone"><p>XX--&nbsp;&nbsp; Enter Valid Phone Number &nbsp;&nbsp;--XX</p></div>
							</div>
							<div>
						     	<span style="color: black;"><label>board *</label></span>
						    	<span><input name="board" type="text" class="textbox" onfocusout="checkboard()"></span>
						    <div style="display:none; font-size:0.8em; margin-top:-5px; margin-bottom: -20px; float:right; padding-right:4%;" id="wrongphone"><p>XX--&nbsp;&nbsp; Enter Valid Phone Number &nbsp;&nbsp;--XX</p></div>
							</div>
							<div>
						     	<span style="color: black;"><label>website</label></span>
						    	<span><input name="website" type="text" class="textbox" onfocusout="checkwebsite()"></span>
						    <div style="display:none; font-size:0.8em; margin-top:-5px; margin-bottom: -20px; float:right; padding-right:4%;" id="wrongphone"><p>XX--&nbsp;&nbsp; Enter Valid Phone Number &nbsp;&nbsp;--XX</p></div>
							</div>
							<div>
						     	<span style="color: black;"><label>fees (Per Month for School, Per Year for College) *</label></span>
						    	<span><input name="fees" type="text" class="textbox" onfocusout="checkfees()"></span>
						    <div style="display:none; font-size:0.8em; margin-top:-5px; margin-bottom: -20px; float:right; padding-right:4%;" id="wrongfees"><p>XX--&nbsp;&nbsp; Enter Valid Fees &nbsp;&nbsp;--XX</p></div>
							</div>
							<div>
						     	<span style="color: black;"><label>image</label></span>
								<input type="file" class="form_control" name="dp" onchange="readURL(this)" />
							</div>
							<div>
							<label>Image Preview</label><br/>
							<img src="images/fre.jpg" id="blah" style="max-width:90px; width: 100%; height: auto; border:1px solid black; padding:2px;" />
							</div>
						   
						  
						  
				  	<div style="margin-top:20px;"><h3 style="text-decoration: underline">Institute Type</h3></div>
							<input type="checkbox" value="Playschool" name="playschool"/>&nbsp;Playschool<br/>
							<input type="checkbox" value="Kindergarten" name="kindergarten"/>&nbsp;Kindergarten<br/>
							<input type="checkbox" value="School" name="school"/>&nbsp;School<br/>
							<input type="checkbox" value="College" name="college" id="college_check"/>&nbsp;College<br/>
						
					<div style="margin-top:20px;"><h3 style="text-decoration: underline">Facilities</h3></div>
							<div id="f1" style="margin-bottom:10px"><textarea name="f1" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f2" style="margin-bottom:10px;display:none;"><textarea name="f2" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f3" style="margin-bottom:10px;display:none;"><textarea name="f3" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f4" style="margin-bottom:10px;display:none;"><textarea name="f4" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f5" style="margin-bottom:10px;display:none;"><textarea name="f5" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f6" style="margin-bottom:10px;display:none;"><textarea name="f6" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f7" style="margin-bottom:10px;display:none;"><textarea name="f7" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f8" style="margin-bottom:10px;display:none;"><textarea name="f8" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f9" style="margin-bottom:10px;display:none;"><textarea name="f9" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f10" style="margin-bottom:10px;display:none;"><textarea name="f10" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f11" style="margin-bottom:10px;display:none;"><textarea name="f11" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f12" style="margin-bottom:10px;display:none;"><textarea name="f12" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f13" style="margin-bottom:10px;display:none;"><textarea name="f13" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f14" style="margin-bottom:10px;display:none;"><textarea name="f14" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div id="f15" style="margin-bottom:10px;display:none;"><textarea name="f15" style="border-radius:5px;width:90%;height:80px;"> </textarea></div>
							<div style="margin-bottom:10px;overflow:hidden;width:90%;">
								<div onclick="add_facilities()" id="add_facilities" data-tag="1" style="float:left; background-color:green;padding:5px 10px;font-weight:bold;color:white;cursor:pointer;">Add</div>
								<div onclick="remove_facilities()" id="remove_facilities" data-tag="1" style="float:right; background-color:red;padding:5px 10px;font-weight:bold;color:white;cursor:pointer;">Delete</div>
							</div>
							
							
					<div style="margin-top:20px;"><h3 style="text-decoration: underline">Filters</h3></div>
							<div>
						     	<span style="color:black;"><input type="radio" name="pool">&nbsp;&nbsp;Swimming Pool</span>
						    </div>
							<div>
						     	<span style="color:black;"><input type="radio" name="hostel">&nbsp;&nbsp;Hostel</span>
						    </div>
							<div>
						     	<span style="color:black;"><input type="radio" name="sports">&nbsp;&nbsp;Sports</span>
						    </div>
							<div>
						     	<span style="color:black;"><input type="radio" name="music">&nbsp;&nbsp;Music</span>
						    </div>
							<div>
						     	<span style="color:black;"><input type="radio" name="dance">&nbsp;&nbsp;Dance</span>
						    </div>
							<div>
						     	<span style="color:black;"><input type="radio" name="ac">&nbsp;&nbsp;AC</span>
						    </div>
							<div>
						     	<span style="color:black;"><input type="radio" name="transport">&nbsp;&nbsp;Transport</span>
						    </div>
							<div>
						     	<span style="color:black;"><input type="radio" name="smartclass">&nbsp;&nbsp;Smart Class</span>
						    </div>
						    <div>
						     	<span style="color:black;"><input type="radio" name="day">&nbsp;&nbsp;Day Boarding</span>
						    </div>
							<div style="margin-top:10px;">
						     	<span style="color: black;"><label>Type</label></span>
						    	<span style="float:left;color:black;"><input type="radio" name="type" value="Government" checked>&nbsp;&nbsp;Government</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:left;margin-left:20px;color:black;"><input type="radio" name="type" value="Private">&nbsp;&nbsp;Private</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:left;margin-left:20px;color:black;"><input type="radio" name="type" value="Charity">&nbsp;&nbsp;Charity</span>
						    </div>
							<div style="display:none;margin-top:10px;" id="affiliated_to">
						     	<span style="color: black;"><label>affiliated to</label></span>
						    	<span style="float:left;color:black;"><input type="radio" name="affil" value="ugc" checked>&nbsp;&nbsp;UGC</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:left;margin-left:20px;color:black;"><input type="radio" name="affil" value="csir">&nbsp;&nbsp;CSIR</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:left;margin-left:20px;color:black;"><input type="radio" name="affil" value="state">&nbsp;&nbsp;State</span>
						    </div>
							<div style="display:none;margin-top:10px;" id="stream_selection">
						     	<span style="color: black;"><label>stream</label></span>
						    	<span style="float:left;color:black;"><input type="checkbox" name="eng">&nbsp;&nbsp;Engineering</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:left;margin-left:20px;color:black;"><input type="checkbox" name="med">&nbsp;&nbsp;Medical</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:left;margin-left:20px;color:black;"><input type="checkbox" name="art">&nbsp;&nbsp;Law</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:left;margin-left:20px;color:black;"><input type="checkbox" name="man">&nbsp;&nbsp;Management</span>
						    </div>
							<div>
						     	<span style="color: black;"><label></label></span>
						    	<span style="float:left;color:black;"><input type="radio" name="coed" value="coed" checked>&nbsp;&nbsp;Co-Ed</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:left;margin-left:20px;color:black;"><input type="radio" value="onlygirls" name="coed">&nbsp;&nbsp;Only Girls</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="float:left;margin-left:20px;color:black;"><input type="radio" name="coed" value="onlyboys">&nbsp;&nbsp;Only Boys</span>
						    </div>
							
							
					
						<div>
						   		<span><input type="submit" value="submit us" onclick="return validate()" name="su"></span>
						</div>
					    </form>
					    <?php
						
							
						
					    	if (isset($_POST["su"])) {
					    	$name=$_POST["name"];
					    	$address=$_POST["address"];
					    	$contact=$_POST["contact"];
					    	$email=$_POST["email"];
					    	$principal=$_POST["principal"];
					    	$board=$_POST["board"];
					    	$website=$_POST["website"];
					    	$fees=$_POST["fees"];
					    	$file=  (isset($_POST["dp"]["name"])) ? $_POST["dp"]["name"] : "fre.jpg";
							if ($file=="")
							{ $file="fre.jpg"; }
							$loc=$_FILES["dp"]["tmp_name"];
							move_uploaded_file($loc,"images/school/".$file);
						
							
					    	$query="insert into temp_institutes set Name='$name', Address='$address', Contact='$contact', Email='$email', Principal='$principal', Fees='$fees', Website='$website', Board='$board', image='$file'";
					    	$data = mysql_query($query);
						if ($data>0) echo "<script>alert('Entered In DB')</script>";					    	
						else echo "<script>alert('Not Entered In DB')</script>";
		
					    	$q = "select id from temp_institutes where Address='$address'";
					    	$d = mysql_query($q);
					    	$r = mysql_fetch_array($d);
					    	$instkiid = $r["id"];

					    	$f1=$_POST["f1"];
					    	$f2=$_POST["f2"];
					    	$f3=$_POST["f3"];
					    	$f4=$_POST["f4"];
					    	$f5=$_POST["f5"];
					    	$f6=$_POST["f6"];
					    	$f7=$_POST["f7"];
					    	$f8=$_POST["f8"];
					    	
					    	if ($f1!="" && $f1!=null && $f1!=" ") {
					    	 $q = "insert into temp_facilities values ('$instkiid','$f1');";
					    	 $d = mysql_query($q);
					    	}
					    	if ($f2!="" && $f2!=null && $f2!=" ") {
					    	 $q = "insert into temp_facilities values ('$instkiid','$f2');";
					    	 $d = mysql_query($q);
					    	}
					    	if ($f3!="" && $f3!=null && $f3!=" ") {
					    	 $q = "insert into temp_facilities values ('$instkiid','$f3');";
					    	 $d = mysql_query($q);
					    	}
					    	if ($f4!="" && $f4!=null && $f4!=" "){
					    	 $q = "insert into temp_facilities values ('$instkiid','$f4');";
					    	 $d = mysql_query($q);
					    	}
					    	if ($f5!="" && $f5!=null && $f5!=" "){
					    	 $q = "insert into temp_facilities values ('$instkiid','$f5');";
					    	 $d = mysql_query($q);
					    	}
					    	if ($f6!="" && $f6!=null && $f6!=" "){
					    	 $q = "insert into temp_facilities values ('$instkiid','$f6');";
					    	 $d = mysql_query($q);
					        }
					    	if ($f7!="" && $f7!=null && $f7!=" "){
					    		echo "f7 me aagya mai";
					    	 $q = "insert into temp_facilities values ('$instkiid','$f7');";
					    	 $d = mysql_query($q);
					    	}
					    	if ($f8!="" && $f8!=null && $f8!=" "){
					    	 $q = "insert into temp_facilities values ('$instkiid','$f8');";
					    	 $d = mysql_query($q);
					    	}
							
							$pool = isset($_POST['pool']) ? 'y' : 'n';
							$hostel = isset($_POST['hostel']) ? 'y' : 'n';
							$sports = isset($_POST['sports']) ? 'y' : 'n';
							$music = isset($_POST['music']) ? 'y' : 'n';
							$dance = isset($_POST['dance']) ? 'y' : 'n';
							$ac = isset($_POST['ac']) ? 'y' : 'n';
							$transport = isset($_POST['transport']) ? 'y' : 'n';
							$smartclass = isset($_POST['smartclass']) ? 'y' : 'n';
							$day = isset($_POST['day']) ? 'y' : 'n';
							
							$type = isset($_POST['type']) ? $_POST['type'] : 'n';
							$private = $govt = $charity = 'n';
							if ($type=="Government") $govt='y';
							else if ($type="Private") $private='y';
							else $charity='y';
							
							$affil = isset($_POST['affil']) ? $_POST['affil'] : 'n';
							$ugc = $csir = $state = 'n';
							if ($affil=="ugc")	$ugc='y';
							else if ($affil=="csir") $csir='y';
							else $state='y';
							
							$coed = isset($_POST['coed']) ? $_POST['coed'] : 'n';
							$co_ed = $girls = $boys = 'n';
							if ($coed=="coed") $co_ed='y';
							else if ($coed=="girls") $girls='y';	
							else $boys='y';
							
							$eng = isset($_POST['eng']) ? 'y' : 'n';
							$med = isset($_POST['med']) ? 'y' : 'n';
							$art = isset($_POST['art']) ? 'y' : 'n';
							$man = isset($_POST['man']) ? 'y' : 'n';
							
							$q = "insert into temp_filters values ('$instkiid','$pool','$hostel','$sports','$music','$dance','$ac','$transport','$smartclass','$govt','$private','$charity','$ugc','$csir','$state','$eng','$med','$art','$man','$co_ed','$girls','$boys','$day')";
							$d = mysql_query($q);
							
							$playschool = (isset($_POST['playschool'])) ? 'y' : 'n' ;
							$kindergarten = (isset($_POST['kindergarten'])) ? 'y' : 'n' ;
							$school = (isset($_POST['school'])) ? 'y' : 'n' ;
							$college = (isset($_POST['college'])) ? 'y' : 'n' ;
							if ($playschool=='y')
							{ $q = "insert into temp_links values ('1','$instkiid')";
							  $d = mysql_query($q);
							}
							if ($kindergarten=='y')
							{ $q = "insert into temp_links values ('2','$instkiid')";
							  $d = mysql_query($q);
							}
							if ($school=='y')
							{ $q = "insert into temp_links values ('3','$instkiid')";
							  $d = mysql_query($q);
							}
							if ($college=='y')
							{ $q = "insert into temp_links values ('4','$instkiid')";
							  $d = mysql_query($q);
							}
						}
					    ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>

</div>



</div>




<?php 
	include('foot.php');
?>


</body>

</html>
