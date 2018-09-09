<?php
	session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/search_config.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link href='https://fonts.googleapis.com/css?family=Play|Orbitron:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/sidenav.css">
<link type="text/javascript" href="script/home.js">
<link rel="icon" href="images/icon.png">
<script src="script/jquery-1.11.3.min.js">
</script>
<script>

	$(document).ready(function(){
		
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
</script>

<title>Terms of use</title>

</head>

<body >


<?php
	include('head.php');
?>



<div class="about_us container-fluid" style="height:auto; text-align:center; margin-top:100px;">
<div class="page_title"><h1>TERMS OF USE</h1></div>
<div class="im" style="border-radius:3px;">
<img src="images/Terms-of-Use.png" height="50%" width="100%"></div>

<div class="txt">
Terms and Conditions of Website Usage - EduSpace</h1>
<p>Welcome to our website. If you continue to browse and use this website you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern EduSpace's relationship with you in relation to this website.</p>
<p>The term "EduSpace" or "us" or "we" refers to the owner of the website. The term "you" refers to the user or viewer of our website.</p>
<p>The use of this website is subject to the following terms of use:</p>
<ul class="list">
<li>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li>
<li>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li>
<li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.</li>
<li>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</li>
<li>All trademarks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.</li>
<li>Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.</li>
<li>From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).</li>
<li>You may not create a link to this website from another website or document without EduSpace's prior written consent.</li>
<li>Your use of this website and any dispute arising out of such use of the website is subject to the laws of England and Wales.</li>
</ul>
<p>EduSpace reserves the right to modify this agreement or any part thereof at any time. Any modification shall be made effective by the posting of the new agreement and notifying the posting on the home page for 30 days. Continued use of the website shall be deemed acceptance of the modified agreement.</p>

</div>





</div>




<?php
	include('foot.php');
?>



</body>
</html>
