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
  <link href='https://fonts.googleapis.com/css?family=Play|Orbitron:700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css">
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

	function checkname() {
		var n = document.getElementsByName("userName")[0].value;
		var pattern = new RegExp(/[~`!#$@%\^.&*+=\-\[\]\\';,/{}|\:<>\?]/);
		if (n=="")
		{	document.getElementById("wrongname").style.display = 'block';
			document.getElementsByName("userName")[0].style.borderColor = 'red';
			return;
		}
		if (n.match(/[0-9]/i)!=null)
		{ 	document.getElementById("wrongname").style.display = 'block';
			document.getElementsByName("userName")[0].style.borderColor = 'red';
			return;	
		}
		if (pattern.test(n)) 
		{	document.getElementById("wrongname").style.display = 'block';
			document.getElementsByName("userName")[0].style.borderColor = 'red';
			return;
		}
		document.getElementById("wrongname").style.display = 'none';
		document.getElementsByName("userName")[0].style.borderColor = 'green';
	}
	
	function checkemail() {
		var n = document.getElementsByName("userEmail")[0].value;
		var lastAtPos = n.lastIndexOf('@');
		var lastDotPos = n.lastIndexOf('.');
		if ( (lastAtPos>0 && lastAtPos < lastDotPos && lastAtPos > 0 &&  lastDotPos > 0 && (str.length - lastDotPos) > 2)==false )
		{ 	document.getElementById("wrongemail").style.display = 'block';
			document.getElementsByName("userEmail")[0].style.borderColor = 'red';
			return;
		}
		document.getElementById("wrongemail").style.display = 'none';
		document.getElementsByName("userEmail")[0].style.borderColor = 'green';
	}
	
	function checkphone() {
		var n = document.getElementsByName("userPhone")[0].value;
		var pattern = new RegExp(/[~`!#$@%\^.&*+=\-\[\]\\';,/{}|\:<>\?]/);
		if (isNaN(n))
		{ 	document.getElementById("wrongphone").style.display = 'block';
			document.getElementsByName("userPhone")[0].style.borderColor = 'red';
			return;	
		}
		document.getElementById("wrongphone").style.display = 'none';
		document.getElementsByName("userPhone")[0].style.borderColor = 'green';
	}
	
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
	
	$("#Login").click(function(){
		$(".lul").toggle();
	});
	
});


</script>
 <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 500px;
		width: 100%;
      }
    </style>

<title>EduSpace</title>

</head>

<body>


<?php
	include('head.php');
?>



<div class="contactbg container-fluid" style="padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;">

<div class="contactus" style="height:auto; text-align:center; margin-top:125px;">
<div style="font-family: 'Orbitron', sans-serif;"><h1><u>CONTACT US</u></h1></div>
</div>


<div class="wrap">
	<div class="main">
		<div class="content">
			<!-- start contact -->
			<div class="contact">				
				<div class="contact_left">
					<div class="contact_info">
			    	 	<h3 style="text-decoration: underline">Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3><u>Company Information :</u></h3>
						    	<p id="p">D-124, Street No 00<br/>Laxmi Nagar, Delhi - 110092<br/>India
				   		<p id="p">Phone: (+9111) 225 523 45<br/>
						Fax: (+91) 8826 00 1234
				 	 	<br/>Email: <a href="mailto:eduspace.helpdesk@gmail.com" style="color: blue">eduspace.helpdesk@gmail.com</a></p>
				   		<p id="p">Follow on: <a href="https://www.facebook.com/JIITbuzz" style="color: blue;">Facebook</a>, <a href="https://twitter.com/spearkapilspear" style="color: blue">Twitter</a></p>
				   </div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
				  	<h3 style="text-decoration: underline">Contact Us</h3>
					    <form method="post" name="myForm">
					    	<div>
						    	<span style="color: black;"><label>name *</label></span>
						    	<span style="color: black;"><input name="userName" type="text" class="textbox" onfocusout="checkname()"></span>
						    <div style="display:none; font-size:0.8em; margin-top:-5px; margin-bottom: -20px; float:right; padding-right:4%;" id="wrongname"><p>XX--&nbsp;&nbsp; Enter Valid Name &nbsp;&nbsp;--XX</p></div>
							</div>
						   	<div>
						    	<span style="color: black;"><label>e-mail *</label></span>
						    	<span style="color: black;"><input name="userEmail" type="text" class="textbox" onfocusout="checkemail()"></span>
						    <div style="display:none; font-size:0.8em; margin-top:-5px; margin-bottom: -20px; float:right; padding-right:4%;" id="wrongemail"><p>XX--&nbsp;&nbsp; Enter Valid EMail &nbsp;&nbsp;--XX</p></div>
							</div>
						    <div>
						     	<span style="color: black;"><label>mobile</label></span>
						    	<span><input name="userPhone" type="text" class="textbox" onfocusout="checkphone()"></span>
						    <div style="display:none; font-size:0.8em; margin-top:-5px; margin-bottom: -20px; float:right; padding-right:4%;" id="wrongphone"><p>XX--&nbsp;&nbsp; Enter Valid Phone Number &nbsp;&nbsp;--XX</p></div>
							</div>
						    <div>
						    	<span style="color: black;"><label>subject</label></span>
						    	<span style="color: black;"><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" onclick="return validate()" value="submit us" name="su"></span>
						  </div>
					    </form>
						
						<?php
							if (isset($_POST["su"]))
							{	
								$name = $_POST["userName"];
								$email = $_POST["userEmail"];
								$mobile = $_POST["userPhone"];
								$enq = $_POST["userMsg"];
								$query = "insert into contactus set name='$name', email='$email', mobile='$mobile', enq='$enq'";
					            $data = mysql_query("$query");
								if ($data>0)
								{	
									$to = "shubhanshu12@gmail.com";
$sub = "Contact Request";
$msg = "\n"."Someone wants to contact you :"."\n\n"."Name  ->  $name"."\n"."EMail  ->  $email"."\n"."Phone  ->  $mobile"."\n"."Subject  ->  $enq";
$header = "From: eduspace.net";
if (mail($to,$sub,$msg,$header))
{
									echo "<script>alert('Contact Submitted & Mailed To The Admin'}</script>";
}
else
{
echo "<script>alert('Query Submitted'}</script>";
}
								}
								else
								{
									echo "<script>alert('Error Submitting Query')</script>";
								}
							}
						?>
						
				    </div>
  				</div>		
  				<div class="clear"></div>		
		  </div>
		  <!-- end contact -->
		</div>
	</div>
</div>


</div>





<?php
	
	include('foot.php');
?>


</body>

</html>
