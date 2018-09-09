<?php
	include('config.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
          
	<link href="assets3/css/bootstrap.css" rel="stylesheet" />
	<link href="css/pop.css" rel="stylesheet" />
    	  
	<!-- FONTAWESOME STYLE CSS -->
    <link href="assets3/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="assets3/css/font-awesome-animation.css" rel="stylesheet" />	  
	<!-- CUSTOM STYLE CSS -->
    <link href="assets3/css/style.css" rel="stylesheet" />
	
    <!-- ===========================
    THEME INFO
    =========================== -->
    <meta name="description" content="A free Bootstrap powerd HTML template exclusively crafted for the super lazy designers like me who designed thousand of websites till today but never got a chance to build one himself.">
    <meta name="keywords" content="Free Portfolio Template, Free Template, Free Bootstrap Template, Dribbble Portfolio Template, Free HTML5 Template">
    <meta name="author" content="EvenFly Team">
    
   

    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>MasterStudy</title><!-- This is what you see on your browser tab-->
    
    <!-- ===========================
    FAVICONS
    =========================== -->
    <link rel="icon" href="img/log.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />
     
    <!-- ===========================
    STYLESHEETS
    =========================== -->    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
        
    <!-- ===========================
    ICONS: 
    =========================== -->
    <link rel="stylesheet" href="css/simple-line-icons.css">    
    
    <!-- ===========================
    GOOGLE FONTS
    =========================== -->    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  <!-- ===========================
   GOOGLE ANALYTICS (Optional)
   =========================== -->
    
    <!--Replace this line with your analytics code-->
     
    <!-- Analytics end-->
	
	
	<script src="js/jquery-1.11.3.min.js"></script>
	<script>
	$(function() {
		$('#csesyll').on('click',function() {
			$('#csesyllabus').css('display','block');
			$('#ecesyllabus').css('display','none');
			$('#eesyllabus').css('display','none');
			$('#csesyll').css('background-color','orange');
			$('#ecesyll').css('background-color','green');
			$('#eesyll').css('background-color','green');
		});
		$('#ecesyll').on('click',function() {
			$('#ecesyllabus').css('display','block');
			$('#eesyllabus').css('display','none');
			$('#csesyllabus').css('display','none');
			$('#ecesyll').css('background-color','orange');
			$('#csesyll').css('background-color','green');
			$('#eesyll').css('background-color','green');
		});
		$('#eesyll').on('click',function() {
			$('#eesyllabus').css('display','block');
			$('#ecesyllabus').css('display','none');
			$('#csesyllabus').css('display','none');
			$('#eesyll').css('background-color','orange');
			$('#ecesyll').css('background-color','green');
			$('#csesyll').css('background-color','green');
		});
		
		
		$('#gateimp').on('click',function() {
			$('#gateimportant').css('display','block');
			$('#catimportant').css('display','none');
			$('#gateimp').css('background-color','orange');
			$('#catimp').css('background-color','green');
		});
		$('#catimp').on('click',function() {
			$('#catimportant').css('display','block');
			$('#gateimportant').css('display','none');
			$('#catimp').css('background-color','orange');
			$('#gateimp').css('background-color','green');
		});
		
		
		$('#gatetip').on('click',function() {
			$('#gatetips').css('display','block');
			$('#cattips').css('display','none');
			$('#gatetip').css('background-color','orange');
			$('#cattip').css('background-color','green');
		});
		$('#cattip').on('click',function() {
			$('#cattips').css('display','block');
			$('#gatetips').css('display','none');
			$('#cattip').css('background-color','orange');
			$('#gatetip').css('background-color','green');
		});
		
		
		$('#gatecsebook').on('click',function() {
			$('#gatecsebooks').css('display','block');
			$('#gateecebooks').css('display','none');
			$('#catbooks').css('display','none');
			$('#gatecsebook').css('background-color','orange');
			$('#gateecebook').css('background-color','green');
			$('#catbook').css('background-color','green');
		});
		$('#gateecebook').on('click',function() {
			$('#gateecebooks').css('display','block');
			$('#gatecsebooks').css('display','none');
			$('#catbooks').css('display','none');
			$('#gateecebook').css('background-color','orange');
			$('#gatecsebook').css('background-color','green');
			$('#catbook').css('background-color','green');
		});
		$('#catbook').on('click',function() {
			$('#catbooks').css('display','block');
			$('#gatecsebooks').css('display','none');
			$('#gateecebooks').css('display','none');
			$('#catbook').css('background-color','orange');
			$('#gatecsebook').css('background-color','green');
			$('#gateecebook').css('background-color','green');
		});
		
		
		$('#gatecsepaper').on('click',function() {
			$('#gatecsepapers').css('display','block');
			$('#gateecepapers').css('display','none');
			$('#gateeepapers').css('display','none');
			$('#catpapers').css('display','none');
			$('#gatecsepaper').css('background-color','orange');
			$('#gateecepaper').css('background-color','green');
			$('#gateeepaper').css('background-color','green');
			$('#catpaper').css('background-color','green');
		});
		$('#gateecepaper').on('click',function() {
			$('#gateecepapers').css('display','block');
			$('#gatecsepapers').css('display','none');
			$('#gateeepapers').css('display','none');
			$('#catpapers').css('display','none');
			$('#gateecepaper').css('background-color','orange');
			$('#gatecsepaper').css('background-color','green');
			$('#gateeepaper').css('background-color','green');
			$('#catpaper').css('background-color','green');
		});
		$('#gateeepaper').on('click',function() {
			$('#gateeepapers').css('display','block');
			$('#gateecepapers').css('display','none');
			$('#gatecsepapers').css('display','none');
			$('#catpapers').css('display','none');
			$('#gateeepaper').css('background-color','orange');
			$('#gateecepaper').css('background-color','green');
			$('#gatecsepaper').css('background-color','green');
			$('#catpaper').css('background-color','green');
		});
		$('#catpaper').on('click',function() {
			$('#catpapers').css('display','block');
			$('#gateecepapers').css('display','none');
			$('#gateeepapers').css('display','none');
			$('#gatecsepapers').css('display','none');
			$('#catpaper').css('background-color','orange');
			$('#gateecepaper').css('background-color','green');
			$('#gateeepaper').css('background-color','green');
			$('#gatecsepaper').css('background-color','green');
		});
		
		
		$('#gateeligible').on('click',function() {
			$('#gateeligibility').css('display','block');
			$('#cateligibility').css('display','none');
			$('#gateeligible').css('background-color','orange');
			$('#cateligible').css('background-color','green');
		});
		$('#cateligible').on('click',function() {
			$('#cateligibility').css('display','block');
			$('#gateeligibility').css('display','none');
			$('#cateligible').css('background-color','orange');
			$('#gateeligible').css('background-color','green');
		});
		
		//----- OPEN
		$('[data-popup-open]').on('click', function(e)  {
			var targeted_popup_class = jQuery(this).attr('data-popup-open');
			$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
	
			e.preventDefault();
		});
 
		//----- CLOSE
		$('[data-popup-close]').on('click', function(e)  {
			var targeted_popup_class = jQuery(this).attr('data-popup-close');
			$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
 
			e.preventDefault();
		});
	});
	</script>
	
	
	
	
  
   </head>
    <body data-spy="scroll">
        <!-- Preloader -->
        <div id="preloader">           
            <div id="status">
                <div class="loadicon icon-graduation wow tada infinite" data-wow-duration="8s"></div>
            </div>
        </div>
        
       <header>               
        <!-- ===========================
        HERO AREA
        =========================== -->
        <div id="hero" class="container-fluid">           
      <div class="flip-container" style="float:left;" ontouchstart="this.classList.toggle('hover');">
	
    <div class="flipper">
		<div class="front" style=" font-family: 'Raleway', sans-serif; font-size:28px; padding-top:25px; letter-spacing:2px; ">
			<b>GATE</b>
            <img src="img/1.png" width="100%" style="margin-top:40px;">
		</div>
		<div class="back" style="color:black; padding-top:5px; margin-bottom:auto;">
			Graduate Aptitude Test in Engineering (GATE) is an all India examination that primarily tests the comprehensive understanding of various undergraduate subjects in Engineering and Technology. GATE is conducted jointly by the Indian Institute of Science and seven IITs.
		</div>
	</div>
</div>
           <div class="container herocontent" style="float:left; ">               
                <h2 class="wow fadeInUp" data-wow-duration="2s" style="margin-left:3%;">MasterStudy</h2>                
                <h4 class="wow fadeInDown" data-wow-duration="3s">The Most Powerful Way to study for competetive exams.</h4>
            <img class="heroshot wow bounceInUp" data-wow-duration="4s" src="img/ll.png" style="height:70%;  width:75%;">        
             </div>
     <!-- Featured image on the Hero area -->
            
           
                      <div class="flip-container" style="float:right;" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front" style=" font-family: 'Raleway', sans-serif; background-color:#EBCC52; font-size:28px; padding-top:25px; letter-spacing:2px; ">
			<b>CAT</b>
            <img src="img/graduate.png" width="100%" style="padding-top:40px;">
		</div>
		<div class="back" style="color:black; padding-top:30px; margin-bottom:auto;">
			The Common Admission Test (CAT) is a computer based test held in India. The Indian Institutes of Management (IIMs) started this exam and use the test for selecting students for their business administration programs.
		</div>
        </div>
	</div>

            
        </div><!--HERO AREA END-->        
        
        <!-- ===========================
         NAVBAR START
         =========================== -->
        <?php include('header.php');?>
    <!-- ===========================
    FEATURED CLIENTS SECTION START
    =========================== -->
     <div id="clients">
         <div class="container" style="background-color:#E8E8E8; " width="100%">
             <!--<div class="col-md-3">
                 <h4>Connect With Us :</h4>
             </div>-->
            <div style="background-color: #efefef;width:700px; margin-left:auto;margin-right:auto;margin-top:-20px;margin-bottom:-160px;">
                 <ul>
				 <li><i class="fa fa-twitter faa-bounce  icon-round bk-color-black" style="transform:scale(0.5,0.5);"></i>
                     </li>      <!-- animated removed--> 
                
                <li> <i class="fa fa-facebook  faa-pulse  icon-round bk-color-blue" style="transform:scale(0.5,0.5);"></i>
                 </li><li><i class="fa fa-linkedin  faa-pulse  icon-round bk-color-red" style="transform:scale(0.5,0.5);"></i>
                  </li><li><i class="fa fa-instagram  faa-bounce  icon-round bk-color-brown" style="transform:scale(0.5,0.5);"></i>
				</li> </ul>
				 <!--//  <ul><!--CLIENTS LOGO-->
                     <!--//  <li><img src="img/payoneer.png" alt="Payoneer"></li>
                     <li><img src="img/amazon.png" alt="Amazon"></li>
                     <li><img src="img/elance-odesk.png" alt="Elance-oDesk"></li>
                     <li><img src="img/curb.png" alt="Curb Envy"></li>                     
                 </ul><!--CLIENTS LOGO END-->
             </div>
         </div>
         <hr><!-- SECTION SEPARETOR LINE -->
     </div><!--FEATURED CLIENTS SECTION END-->
     
    
    <!-- ===========================
    ABOUT SECTION START
    =========================== -->
 <!--//    <div id="about" class="container">
        
        <!-- LEFT PART OF THE ABOUT SECTION -->
  <!--//       <div class="col-md-6">
            <div class="row">
             <h2 class="wow fadeInDown" data-wow-duration="2s">I'm Mamun Srizon from Bangladesh</h2>

             <h4 class="wow fadeInUp" data-wow-duration="3s">A freelance UI/UX wizard as well as a Daydreamer who workes on the Graveyard Shift and sleeps all the day!</h4>
             
             <p class="wow fadeInDown" data-wow-duration="3s">I'm gonna build me an airport, put my name on it. Why, Michael? So you can fly away from your feelings? I don't care if it takes from now till the end of Shrimpfest.</p>
             <p class="wow fadeInDown" data-wow-duration="3s">Bugger bag egg's old boy willy jolly scrote munta skive pillock, bloody shambles nose rag blummin' scrote narky ever so, Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
             
             <a class="dribbble-follow-button wow bounce" href="http://dribbble.com/srizon">Follow</a>
             </div> <!-- ABOUT INFO END -->
             
            
  <!--//          <div class="myapps row">
                <h5>Tools and apps I use everyday:</h5>
                
                <ul><!-- FAVORITE APP ICONS START -->
  <!--//                  <li><img class="wow animated bounceInUp" data-wow-duration="1s" src="img/photoshop.svg" alt="Photoshop"></li>
                    <li><img class="wow bounceInUp" data-wow-duration="2s" src="img/illustrator.svg" alt="Illustrator"></li>
                    <li><img class="wow bounceInUp" data-wow-duration="3s" src="img/flash.svg" alt="Adobe Flash"></li>
                    <li><img class="wow animated bounceInUp" data-wow-duration="4s" src="img/after_effects.svg" alt="After Effects"></li>
                    <li><img class="wow bounceInUp" data-wow-duration="5s" src="img/indesign.svg" alt="InDesign"></li>
                </ul><!-- FAVORITE APP ICONS END -->
 <!--//           </div>
         </div><!-- LEFT PART OF THE ABOUT SECTION END -->
        <!--Left part end-->
         
         <!-- RIGHT PART OF THE ABOUT SECTION -->
  <!--//       <div class="col-md-6 wow fadeInUp myphoto" data-wow-duration="4s">
             <img src="img/user.png" alt="Mamun Srizon">
         </div><!-- RIGHT PART OF THE ABOUT SECTION END -->        
    <!--// </div><!-- ABOUT SECTION END -->
  <!--//      
    <hr><!-- SECTION SEPARETOR LINE -->
        
    <!-- ===========================
    SERVICE SECTION START
    =========================== -->
    <div id="services" class="container" style="padding-bottom:60px;">
       
        <!-- SERVICE SECTION HEADING START -->
        <div class="sectionhead  row wow fadeInUp">
            <span class="bigicon icon-cup "></span>
            <h3>Our Services</h3>
            <hr class="separetor">
         </div><!--SERVICE SECTION HEADING END-->
         
        <!-- SERVICE ITEMS START -->
        <div><center>
                <!--<a data-popup-open="popup-3" href="#" style="text-decoration:none;color:black;"><div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                --><a data-popup-open="popup-3" href="#" style="text-decoration:none;color:black;"><div class="wow fadeInUp" data-wow-duration="3s" style="float:left;">
                   
                   <img src="img/service_02.png" alt="">
                   <h4>GATE</h4>
                   <p>Graduate Aptitude Test in Engineering</p>
                
                 
                </div></a> <!-- ITEM END -->
        <div class="wow fadeInUp" style="float:left; width:75%; height:185px; background-color:#efefef; padding:0px 10px 0px 10px; border-radius:5px;">
    <a data-popup-open="popup-15" href="#" style="text-decoration:none;color:black;">    <div class="k" style="width:12.5%; padding:40px 5px 30px 5px; position:relative; height:185px; float:left;">
       <p style="  
       position:absolute;
       top: 50%;color:black;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)">  Previous Year Question Papers</p>
        </div></a>
      <a data-popup-open="popup-14" href="#" style="text-decoration:none;color:black;">   <div class="k" style="width:12.5%; padding:40px 5px 30px 5px; height:185px; position:relative; float:left;">
         <p style="  
       position:absolute;
       top: 50%;
    left: 50%;color:black;
    margin-right: -50%;
    transform: translate(-50%, -50%)">Eligibility</p>
        </div></a>
      <a href="videos_gate_cse.php" style="text-decoration:none;color:black;"><div class="k" style="width:12.5%; padding:40px 5px 30px 5px; position:relative; height:185px; float:left;">
        <p style="  
       position:absolute;
       top: 50%;
    left: 50%;color:black;
    margin-right: -50%;
    transform: translate(-50%, -50%)"> Video Lectures</p>
        </div></a>
     <a data-popup-open="popup-13" href="#" style="text-decoration:none;color:black;">    <div class="k" style="width:12.5%; height:185px; position:relative; float:left;padding:40px 5px 30px 5px;">
        <p style="  
       position:absolute;
       top: 50%;color:black;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)"> Syllabus</p>
        </div></a>
          <a data-popup-open="popup-12" href="#" style="text-decoration:none;color:black;"><div class="k" style="width:12.5%; height:185px; position:relative; float:left;padding:40px 5px 30px 5px;">
       
        <p style="  
       position:absolute;
       top: 50%;
    left: 50%;color:black;
    margin-right: -50%;
    transform: translate(-50%, -50%)">Important Dates</p>
        </div>
     <a data-popup-open="popup-11" href="#" style="text-decoration:none;color:black;">    <div class="k" style="width:12.5%; height:185px; position:relative; float:left;padding:40px 5px 30px 5px;">
        <p style="  
       position:absolute;
       top: 50%;color:black;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)"> Analysis of Paper Pattern</p>
        </div></a>
      <a data-popup-open="popup-10" href="#" style="text-decoration:none;color:black;">  <div class="k" style="width:12.5%; height:185px; position:relative;  float:left;padding:40px 5px 30px 5px;">
       <p style="  
       position:absolute;
       top: 50%;
    left: 50%;
    color:black;
    margin-right: -50%;
    transform: translate(-50%, -50%)">
      Exam Tips</p>
        </div></a>
      <a data-popup-open="popup-9" href="#" style="text-decoration:none;color:black;"> <div class="k" style="width:12.5%; height:185px; float:left;padding:40px 5px 30px 5px; position:relative;">
        <p style="  
       position:absolute;
       top: 50%;color:black;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)"> E Books</p>
        </div>
        </a>
        </div></center>

                <!--<a data-popup-open="popup-1" href="#" style="text-decoration:none;color:black;"><div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                
                -->
        <center>       <a href="cat.html" style="text-decoration:none;color:black;"><div class="wow fadeInUp" 
                data-wow-duration="3s" style="float:left; margin-left:5%; margin-top:2%;">
                  <div >  <img src="img/service_03.png" alt="">
                   <h4>CAT</h4>
                   <p>Common Aptitude Test          </p>
                </div></div>
                 </a> <!-- ITEM END -->
                 <div class="wow fadeInUp" style="float:left; margin-left:4.75%; width:75%; height:185px; margin-top:2%; padding:0px 10px 0px 10px;border-radius:5px; background-color:#efefef;" data-wow-duration="3s">
      <a href="prev_cat.html">    <div style="width:12.5%; padding:40px 5px 30px 5px; position:relative; height:185px; float:left;">
       <p style="  
       position:absolute;
       top: 50%;color:black;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)">  Previous Year Question Papers</p>
        </div></a>
       <a href="eli_cat.html">   <div style="width:12.5%; padding:40px 5px 30px 5px; height:185px; position:relative; float:left;">
         <p style="  
       position:absolute;
       top: 50%;
    left: 50%;color:black;
    margin-right: -50%;
    transform: translate(-50%, -50%)">Eligibility</p>
        </div></a>
          <div style="width:12.5%; padding:40px 5px 30px 5px; position:relative; height:185px; float:left;">
        <p style="  
       position:absolute;
       top: 50%;
    left: 50%;color:black;
    margin-right: -50%;
    transform: translate(-50%, -50%)"> Video Lectures</p>
        </div>
        <a href="syll_cat.html">  <div style="width:12.5%; height:185px; position:relative; float:left;padding:40px 5px 30px 5px;">
        <p style="  
       position:absolute;
       top: 50%;color:black;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)"> Syllabus</p>
        </div></a>
       <a href="impdates_cat.html">   <div style="width:12.5%; height:185px; position:relative; float:left;padding:40px 5px 30px 5px;">
       
        <p style="  
       position:absolute;
       top: 50%;
    left: 50%;color:black;
    margin-right: -50%;
    transform: translate(-50%, -50%)">Important Dates</p>
        </div></a>
       <a href="analysis_cat.html">   <div style="width:12.5%; height:185px; position:relative; float:left;padding:40px 5px 30px 5px;">
        <p style="  
       position:absolute;
       top: 50%;color:black;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)"> Analysis of Paper Pattern</p>
        </div></a>
      <a href="examtips_cat.html">   <div style="width:12.5%; height:185px; position:relative;  float:left;padding:40px 5px 30px 5px;">
       <p style="  
       position:absolute;
       top: 50%;
    left: 50%;
    color:black;
    margin-right: -50%;
    transform: translate(-50%, -50%)">
      Exam Tips</p>
        </div></a>
       <a href="ebooks_cat.php"> <div style="width:12.5%; height:185px; float:left;padding:40px 5px 30px 5px; position:relative;">
        <p style="  
       position:absolute;
       top: 50%;color:black;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)"> E Books</p>
        </div>
        </a>
        </div></center>

        </div></center>
</center>
               <!-- ITEM END -->
<!--//
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                   <img src="img/s5.png" alt="">
                   <h4>Brand Identity Design</h4>
                   <p>Grinder affogato, dark, sweet carajillo, flavour seasonal aroma single origin cream. Percolator. Eligendi impedit dolores nulla.</p>
                </div> <!-- ITEM END -->
<!--//
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                   <img src="img/s6.png" alt="">
                   <h4>CMYK Print Design</h4>
                   <p>Grinder affogato, dark, sweet carajillo, flavour seasonal aroma single origin cream. Percolator. Eligendi impedit dolores nulla.</p>
                </div> <!-- ITEM END -->
        </div><!-- SERVICE ITEMS END-->
    </div><!-- SERVICE SECTION END -->
    
    <!-- ===========================
    PORTFOLIO SECTION START
    =========================== -->
  <!--//  <div id="portfolio">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
          <span class="bigicon icon-rocket"></span>
           <h3>What our users said</h3>
           <hr class="separetor">            
        </div><!-- PORTFOLIO SECTION HEAD END -->   
        
        <!-- PORTFOLIO ITEMS START -->
  <!--//      <div class="portfolioitems container">
            <ul><div id="shotsByPlayerId"> </div></ul><!--REFER TO THE js/drifolio.js-->
  <!--//      </div><!-- PORTFOLIO ITEMS END -->
        
        <!--Replace the URL below with your dribbble profile URL-->
 <!--//       <a class="btn btn-default wow fadeInUp" href="http://dribbble.com/srizon" role="button">
            <span class="btnicon icon-social-dribbble"></span>
            <span class="button_text">View all items</span>
        </a> 
    </div><!-- PORTFOLIO SECTION END -->

    <!-- ===========================
    TESTIMONIAL SECTION START
    =========================== -->
    <div id="testimonials" class="container">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
           <span class="bigicon icon-bubbles"></span>
           <h3>What our users said</h3>
           <h4>Don't take our word. See our testimonials</h4>
           <hr class="separetor">            
        </div><!-- TESTIMONIAL SECTIONHEAD END -->
        
        <!-- TESTIMONIAL ITEMS START -->
      <div class="row">
        <?php
			$q = "select * from review, detail_user where review.uid=detail_user.uid";
			$d = mysql_query($q);
			while ( $r = mysql_fetch_array($d) )
			{ 
			
		?>
		
		    <!-- 1ST TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="2s">
                <div class="clientsphoto">
                    <img src="dash/upload/<?php echo $r['pic']; ?>" alt="Img">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p><?php echo $r['review']; ?></p>                        
                    </blockquote>
                    <h5><?php echo $r['fname']." ".$r['lname']; ?></h5>
                    <p><?php echo $r['state'].", ".$r['country']; ?></p>
                </div>                
            </div><!-- 1ST TESTIMONIAL ITEM END -->
        <?php
		
			}
		?>		
            <!-- 2ND TESTIMONIAL ITEM -->
            
                    
    </div>        
    </div><!-- TESTIMONIAL SECTION END -->
       
    <!-- ===========================
    FOOTER START
    =========================== -->    
    <footer>
        <div class="container">
            <span class="bigicon icon-speedometer "></span>
             
            <div class="footerlinks"><!-- FOOTER LINKS START -->            
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="#testimonials">Reviews</a></li>

                    <!--replace the email address below with your email address-->
                    <li><a href="mailto:shubhanshu12.5@gmail.com">Contact</a></li>                   
                </ul>
            </div><!-- FOOTER LINKS END -->
             
            <div class="copyright"><!-- FOOTER COPYRIGHT START -->
                <p><a href="#">EduSpace</a> stands for Dribbble-Portolio. This is a free HTML template designed and coded by <a href="http://evenfly.com">EvenFly Team</a>. All logo and images in this template used for preview purpose only. You are free to use the template but make sure to use your own images.</p>
            </div><!-- FOOTER COPYRIGHT END -->
             
          <!--//  <div class="footersocial wow fadeInUp" data-wow-duration="3s"><!-- FOOTER SOCIAL ICONS START -->
          <!--//      <ul>
                    <li><a href="http://facebook.com/MamunSrizon"><span class="icon-social-facebook"></span></a></li>
                    <li><a href="http://twitter.com/MamunSrizon"><span class="icon-social-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-social-youtube"></span></a></li>
                    <li><a href="http://dribbble.com/srizon"><span class="icon-social-dribbble"></span></a></li>
                    <li><a href="#"><span class="icon-social-tumblr"></span></a></li>
                 </ul>
             </div><!-- FOOTER SOCIAL ICONS END -->
         </div>
     </footer><!-- FOOTER END -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <!--Other necessary scripts-->
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.jribbble-1.0.1.ugly.js"></script>
    <script src="js/drifolio.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script> 






 <div class="popup" data-popup="popup-1" style="display:none">
    <div class="popup-inner">
        <h2><center>Syllabus</center></h2>
       <center> <p style="margin-top:10px;margin-bottom:50px;">
			<span id="csesyll" style="border-radius:5px;padding:4px 8px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">GATE - CSE
			</span>
			<span id="ecesyll" style="border-radius:5px;margin-left:30px; padding:4px 8px; background-color:green; color:white; font-weight:bold;cursor:pointer;">GATE - ESE
			</span>
			<span id="eesyll" style="border-radius:5px;margin-left:30px; padding:4px 8px; background-color:green; color:white; font-weight:bold;cursor:pointer;">GATE - EE
			</span>
		<br/></p></center>
		
<!---------------------------------------------------------------------------------------
CSE GATE ka SYLLABUS
---------------------------------------------------------------------------------------->		
		
		<div id="csesyllabus" style="">
		
<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section1: Engineering Mathematics</span><br/><br>

<b>Discrete Mathematics:</b> Propositional and first order logic. Sets, relations, functions, partial 

orders and lattices. Groups. Graphs: connectivity, matching, coloring. Combinatorics: 

counting, recurrence relations, generating functions. <br/><br/>

<b>Linear Algebra:</b> Matrices, determinants, system of linear equations, eigenvalues and 

eigenvectors, LU decomposition.<br/><br/>

<b>Calculus:</b> Limits, continuity and differentiability. Maxima and minima. Mean value 

theorem. Integration. <br/><br/>

<b>Probability:</b> Random variables. Uniform, normal, exponential, poisson and binomial 

distributions. Mean, median, mode and standard deviation. Conditional probability and 

Bayes theorem. <br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 2: Digital Logic</span><br/><br/>

Boolean algebra. Combinational and sequential circuits. Minimization. Number 

representations and computer arithmetic (fixed and floating point).<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 3: Computer Organization and Architecture</span><br/><br/>

Machine instructions and addressing modes. ALU, data-path and control unit. Instruction 

pipelining. Memory hierarchy: cache, main memory and secondary storage; I/O 

interface (interrupt and DMA mode). <br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 4: Programming and Data Structures </span><br/><br/>

Programming in C. Recursion. Arrays, stacks, queues, linked lists, trees, binary search

trees, binary heaps, graphs.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 5: Algorithms </span><br/><br/>

Searching, sorting, hashing. Asymptotic worst case time and space complexity. 

Algorithm design techniques: greedy, dynamic programming and divide-and-conquer. 

Graph search, minimum spanning trees, shortest paths.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 6: Theory of Computation </span><br/><br/>

Regular expressions and finite automata. Context-free grammars and push-down 

automata. Regular and contex-free languages, pumping lemma. Turing machines and 

undecidability.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 7: Compiler Design</span><br/><br/>

Lexical analysis, parsing, syntax-directed translation. Runtime environments. Intermediate 

code generation. <br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 8: Operating System </span><br/><br/>

Processes, threads, inter-process communication, concurrency and synchronization. 

Deadlock. CPU scheduling. Memory management and virtual memory. File systems.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 9: Databases </span><br/><br/>

ER-model. Relational model: relational algebra, tuple calculus, SQL. Integrity constraints, 

normal forms. File organization, indexing (e.g., B and B+ trees). Transactions and 

concurrency control.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 10: Computer Networks </span><br/><br/>

Concept of layering. LAN technologies (Ethernet). Flow and error control techniques, 

switching. IPv4/IPv6, routers and routing algorithms (distance vector, link state). TCP/UDP 

and sockets, congestion control. Application layer protocols (DNS, SMTP, POP, FTP, HTTP). 

Basics of Wi-Fi. Network security: authentication, basics of public key and private key 

cryptography, digital signatures and certificates, firewalls.<br/></div>
		</div>
		
<!---------------------------------------------------------------------------------------
ECE GATE ka SYLLABUS
---------------------------------------------------------------------------------------->	
		<div id="ecesyllabus" style="display:none;">
		
<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 1 - Engineering Mathematics</span><br/><br/>

<b>Linear Algebra:</b> Vector space, basis, linear dependence and independence, matrix 

algebra, eigen values and eigen vectors, rank, solution of linear equations - existence 

and uniqueness.<br/><br/>

<b>Calculus:</b> Mean value theorems, theorems of integral calculus, evaluation of definite and 

improper integrals, partial derivatives, maxima and minima, multiple integrals, line, surface 

and volume integrals, Taylor series.<br/><br/>

<b>Differential Equations:</b> First order equations (linear and nonlinear), higher order linear 

differential equations, Cauchy's and Euler's equations, methods of solution using variation 

of parameters, complementary function and particular integral, partial differential 

equations, variable separable method, initial and boundary value problems.<br/><br/>

<b>Vector Analysis:</b> Vectors in plane and space, vector operations, gradient, divergence and 

curl, Gauss's, Green's and Stoke's theorems. <br/><br/>

<b>Complex Analysis:</b> Analytic functions, Cauchy's integral theorem, Cauchy's integral 

formula; Taylor's and Laurent's series, residue theorem.<br/><br/>

Numerical Methods: Solution of nonlinear equations, single and multi-step methods for 

differential equations, convergence criteria.<br/><br/>

<b>Probability and Statistics:</b> Mean, median, mode and standard deviation; combinatorial 

probability, probability distribution functions - binomial, Poisson, exponential and normal; 

Joint and conditional probability; Correlation and regression analysis.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 2 - Networks, Signals and Systems</span><br/><br/>

<b>Network solution methods:</b> nodal and mesh analysis; Network theorems: superposition, 

Thevenin and Norton's, maximum power transfer; Wye-Delta transformation; Steady state

sinusoidal analysis using phasors; Time domain analysis of simple linear circuits; Solution of

network equations using Laplace transform; Frequency domain analysis of RLC circuits;

Linear 2-port network parameters: driving point and transfer functions; State equations for

networks.<br/><br/>

<b>Continuous-time signals:</b> Fourier series and Fourier transform representations, sampling 

theorem and applications; Discrete-time signals: discrete-time Fourier transform (DTFT), 

DFT, FFT, Z-transform, interpolation of discrete-time signals; LTI systems: definition and 

properties, causality, stability, impulse response, convolution, poles and zeros, parallel and 

cascade structure, frequency response, group delay, phase delay, digital filter design 

techniques.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 3 - Electronic Devices</span><br/><br/>

Energy bands in intrinsic and extrinsic silicon; Carrier transport: diffusion current, drift 

current, mobility and resistivity; Generation and recombination of carriers; Poisson and 

continuity equations; P-N junction, Zener diode, BJT, MOS capacitor, MOSFET, LED, photo 

diode and solar cell; Integrated circuit fabrication process: oxidation, diffusion, ion 

implantation, photolithography and twin-tub CMOS process.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 4 - Analog Circuits</span><br/><br/>

Small signal equivalent circuits of diodes, BJTs and MOSFETs; Simple diode circuits: 

clipping, clamping and rectifiers; Single-stage BJT and MOSFET amplifiers: biasing, bias 

stability, mid-frequency small signal analysis and frequency response; BJT and MOSFET 

amplifiers: multi-stage, differential, feedback, power and operational; Simple op-amp 

circuits; Active filters; Sinusoidal oscillators: criterion for oscillation, single-transistor and op-
amp configurations; Function generators, wave-shaping circuits and 555 timers; Voltage 

reference circuits; Power supplies: ripple removal and regulation.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 5 - Digital Circuits</span><br/><br/>

Number systems; Combinatorial circuits: Boolean algebra, minimization of functions using 

Boolean identities and Karnaugh map, logic gates and their static CMOS 

implementations, arithmetic circuits, code converters, multiplexers, decoders and PLAs; 

Sequential circuits: latches and flip-flops, counters, shift-registers and finite state machines; 

Data converters: sample and hold circuits, ADCs and DACs; Semiconductor memories: 

ROM, SRAM, DRAM; 8-bit microprocessor (8085): architecture, programming, memory and 

I/O interfacing.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 6 - Control Systems</span><br/><br/>

Basic control system components; Feedback principle; Transfer function; Block diagram 

representation; Signal flow graph; Transient and steady-state analysis of LTI systems; 

Frequency response; Routh-Hurwitz and Nyquist stability criteria; Bode and root-locus plots; 

Lag, lead and lag-lead compensation; State variable model and solution of state 

equation of LTI systems.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 7 - Communications</span><br/><br/>

Random processes: autocorrelation and power spectral density, properties of white noise, 

filtering of random signals through LTI systems; Analog communications: amplitude 

modulation and demodulation, angle modulation and demodulation, spectra of AM and 

FM, superheterodyne receivers, circuits for analog communications; Information theory: 

entropy, mutual information and channel capacity theorem; Digital communications: 

PCM, DPCM, digital modulation schemes, amplitude, phase and frequency shift keying 

(ASK, PSK, FSK), QAM, MAP and ML decoding, matched filter receiver, calculation of 

bandwidth, SNR and BER for digital modulation; Fundamentals of error correction, 

Hamming codes; Timing and frequency synchronization, inter-symbol interference and its 

mitigation; Basics of TDMA, FDMA and CDMA.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 8 - Electromagnetics</span><br/><br/>

Electrostatics; Maxwell's equations: differential and integral forms and their interpretation, 

boundary conditions, wave equation, Poynting vector; Plane waves and properties: 

reflection and refraction, polarization, phase and group velocity, propagation through 

various media, skin depth; Transmission lines: equations, characteristic impedance, 

impedance matching, impedance transformation, S-parameters, Smith chart; 

Waveguides: modes, boundary conditions, cut-off frequencies, dispersion relations; 

Antennas: antenna types, radiation pattern, gain and directivity, return loss, antenna 

arrays; Basics of radar; Light propagation in optical fibers.<br/></div>
		</div>
		
		
<!---------------------------------------------------------------------------------------
ECE GATE ka SYLLABUS
---------------------------------------------------------------------------------------->	
		<div id="eesyllabus" style="display:none;">
	
<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 1 - Engineering Mathematics</span><br/><br/>

<b>Linear Algebra:</b> Matrix Algebra, Systems of linear equations, Eigenvalues, Eigenvectors.<br/><br/>

<b>Calculus:</b> Mean value theorems, Theorems of integral calculus, Evaluation of definite and 

improper integrals, Partial Derivatives, Maxima and minima, Multiple integrals, Fourier 

series, Vector identities, Directional derivatives, Line integral, Surface integral, Volume 

integral, Stokes's theorem, Gauss's theorem, Green's theorem.<br/><br/>

<b>Differential equations:</b> First order equations (linear and nonlinear), Higher order linear 

differential equations with constant coefficients, Method of variation of parameters, 

Cauchy's equation, Euler's equation, Initial and boundary value problems, Partial 

Differential Equations, Method of separation of variables.<br/><br/>

<b>Complex variables:</b> Analytic functions, Cauchy's integral theorem, Cauchy's integral 

formula, Taylor series, Laurent series, Residue theorem, Solution integrals.

Probability and Statistics: Sampling theorems, Conditional probability, Mean, Median, 

Mode, Standard Deviation, Random variables, Discrete and Continuous distributions, 

Poisson distribution, Normal distribution, Binomial distribution, Correlation analysis, 

Regression analysis.<br/><br/>

<b>Numerical Methods:</b> Solutions of nonlinear algebraic equations, Single and Multi-step 

methods for differential equations.<br/><br/>

<b>Transform Theory:</b> Fourier Transform, Laplace Transform, z-Transform.

Electrical Engineering<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 2 - Electric Circuits</span> <br/><br/>

Network graph, KCL, KVL, Node and Mesh analysis, Transient response of dc and ac 

networks, Sinusoidal steady-state analysis, Resonance, Passive filters, Ideal current and 

voltage sources, Thevenin's theorem, Norton's theorem, Superposition theorem, Maximum 

power transfer theorem, Two-port networks, Three phase circuits, Power and power factor 

in ac circuits.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 3 - Electromagnetic Fields</span> <br/><br/>

Coulomb's Law, Electric Field Intensity, Electric Flux Density, Gauss's Law, Divergence, 

Electric field and potential due to point, line, plane and spherical charge distributions, 

Effect of dielectric medium, Capacitance of simple configurations, Biot-Savart's law, 

Ampere's law, Curl, Faraday's law, Lorentz force, Inductance, Magnetomotive force, 

Reluctance, Magnetic circuits,Self and Mutual inductance of simple configurations.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 4 - Signals and Systems</span> <br/><br/>

Representation of continuous and discrete-time signals, Shifting and scaling operations, 

Linear Time Invariant and Causal systems, Fourier series representation of continuous 

periodic signals, Sampling theorem, Applications of Fourier Transform, Laplace Transform 

and z-Transform.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 5 - Electrical Machines</span><br/><br/>

Single phase transformer: equivalent circuit, phasor diagram, open circuit and short circuit 

tests, regulation and efficiency; Three phase transformers: connections, parallel operation; 

Auto-transformer, Electromechanical energy conversion principles, DC machines: 

separately excited, series and shunt, motoring and generating mode of operation and 

their characteristics, starting and speed control of dc motors; Three phase induction 

motors: principle of operation, types, performance, torque-speed characteristics, no-load

and blocked rotor tests, equivalent circuit, starting and speed control; Operating principle 

of single phase induction motors; Synchronous machines: cylindrical and salient pole 

machines, performance, regulation and parallel operation of generators, starting of 

synchronous motor, characteristics; Types of losses and efficiency calculations of electric 

machines.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 6 - Power Systems</span><br/><br/>

Power generation concepts, ac and dc transmission concepts, Models and performance 

of transmission lines and cables, Series and shunt compensation, Electric field distribution 

and insulators, Distribution systems, Per-unit quantities, Bus admittance matrix, Gauss-
Seidel and Newton-Raphson load flow methods, Voltage and Frequency control, Power 

factor correction, Symmetrical components, Symmetrical and unsymmetrical fault 

analysis, Principles of over-current, differential and distance protection; Circuit breakers, 

System stability concepts, Equal area criterion.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 7 - Control Systems</span><br/><br/>

Mathematical modeling and representation of systems, Feedback principle, transfer 

function, Block diagrams and Signal flow graphs, Transient and Steady-state analysis of 

linear time invariant systems, Routh-Hurwitz and Nyquist criteria, Bode plots, Root loci, 

Stability analysis, Lag, Lead and Lead-Lag compensators; P, PI and PID controllers; State 

space model, State transition matrix.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 8 - Electrical and Electronic Measurements</span><br/><br/>

Bridges and Potentiometers, Measurement of voltage, current, power, energy and power 

factor; Instrument transformers, Digital voltmeters and multimeters, Phase, Time and 

Frequency measurement; Oscilloscopes, Error analysis.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 9 - Analog and Digital Electronics</span><br/><br/>

Characteristics of diodes, BJT, MOSFET; Simple diode circuits: clipping, clamping, rectifiers; 

Amplifiers: Biasing, Equivalent circuit and Frequency response; Oscillators and Feedback 

amplifiers; Operational amplifiers: Characteristics and applications; Simple active filters, 

VCOs and Timers, Combinational and Sequential logic circuits, Multiplexer, Demultiplexer, 

Schmitt trigger, Sample and hold circuits, A/D and D/A converters, 8085Microprocessor: 

Architecture, Programming and Interfacing.<br/>
</div><br/><br/>

<div style="background-color:lightgrey;padding:10px 10px;">
<span style="font-weight:bold;font-size:1.2em">Section 10 - Power Electronics</span><br/><br/>

Characteristics of semiconductor power devices: Diode, Thyristor, Triac, GTO, MOSFET, 

IGBT; DC to DC conversion: Buck, Boost and Buck-Boost converters; Single and three 

phase configuration of uncontrolled rectifiers, Line commutated thyristor based 

converters, Bidirectional ac to dc voltage source converters, Issues of line current 

harmonics, Power factor, Distortion factor of ac to dc converters, Single phase and three 

phase inverters, Sinusoidal pulse width modulation.<br/></div>
		</div>
		
		
		
		
        <p><a data-popup-close="popup-1" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
    </div>
</div>



<!----------------------------------------------------------------------------------------------------------
POPUP FOR IMPORTANT DATES
----------------------------------------------------------------------------------------------------------->

<div class="popup" data-popup="popup-2" style="display:none">
    <div class="popup-inner">
        <h2><center>Important Dates</center></h2>
       <center> <p style="margin-top:10px;margin-bottom:50px;">
			<span id="gateimp" style="border-radius:5px;padding:4px 8px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">GATE
			</span>
			<span id="catimp" style="border-radius:5px;margin-left:30px; padding:4px 8px; background-color:green; color:white; font-weight:bold;cursor:pointer;">CAT
			</span>
		<br/></p></center>
		<div id="gateimportant" style="">
			<center><table border="1" style="color:black;">
			<tr style="background-color:lightgrey;">
				<td style="padding:5px 10px;">Gate Online Application Processing System<br/>Website Opens for Enrollment,
Application Filling, Application Submission</td>
				<td style="padding:5px 10px;">September 1, 2015<br/>Tuesday</td>
			</tr>
			<tr>
				<td style="padding:5px 10px;">Last Date for Submission of Online Application through Website</td>
				<td style="padding:5px 10px;">October 8, 2015<br/>Thursday</td>
			</tr>
			<tr style="background-color:lightgrey;">
				<td style="padding:5px 10px;">Last Date for Request for Change in the Choice of Examination City via GOAPS login</td>
				<td style="padding:5px 10px;">November 20, 2015<br/>Friday</td>
			</tr>
			<tr>
				<td style="padding:5px 10px;">Availability of Admit Card on the Online 
Application Interface for printing</td>
				<td style="padding:5px 10px;">December 29, 2015<br/>Tuesday</td>
			</tr>
			<tr style="background-color:lightgrey;">
				<td style="padding:5px 10px;">GATE 2016 Online Examination<br/>
Forenoon : 9.00 AM to 12.5.00 Noon<br/>
Afternoon : 2.00 PM to 5.00 PM<br/>
(On Saturdays & Sundays only)</td>
				<td style="padding:5px 10px;">January 30 to February 07, 2016</td>
			</tr>
			<tr>
				<td style="padding:5px 10px;">Announcement of Results on the Online Application Website</td>
				<td style="padding:5px 10px;">March 19, 2016<br/>Saturday</td>
			</tr>
			</table></center>
		</div>
		
		<div id="catimportant" style="display:none;">
			<center><table border="1" style="color:black;">
			<tr style="background-color:lightgrey;">
				<td style="padding:5px 10px;">Date of release of official notification</td>
				<td style="padding:5px 10px;">By last week of July, 2016</td>
			</tr>
			<tr>
				<td style="padding:5px 10px;">CAT 2016 online registrations to commence from</td>
				<td style="padding:5px 10px;">First week of August 2016</td>
			</tr>
			<tr style="background-color:lightgrey;">
				<td style="padding:5px 10px;">Online registration to end in</td>
				<td style="padding:5px 10px;">Last week of September 2016</td>
			</tr>
			<tr>
				<td style="padding:5px 10px;">Admit Card to be available from</td>
				<td style="padding:5px 10px;">Last week of October 2016</td>
			</tr>
			<tr style="background-color:lightgrey;">
				<td style="padding:5px 10px;">Due date of CAT 2016</td>
				<td style="padding:5px 10px;">Last week of November 2016</td>
			</tr>
			<tr>
				<td style="padding:5px 10px;">Announcement of CAT result</td>
				<td style="padding:5px 10px;">First week of January 2017</td>
			</tr>
			</table></center>
		</div>
				<br/><br/><br/>
		<p><a data-popup-close="popup-2" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-2" href="#">x</a>
    </div>
</div>


<!----------------------------------------------------------------------------------------------------------
POPUP FOR EXAM TIPS
----------------------------------------------------------------------------------------------------------->
<!--
<div class="popup" data-popup="popup-3" style="display:none">
    <div class="popup-inner">
        <h2><center>Exam Tips</center></h2>
       <center> <p style="margin-top:10px;margin-bottom:50px;">
			<span id="gatetip" style="border-radius:5px;padding:4px 8px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">GATE
			</span>
			<span id="cattip" style="border-radius:5px;margin-left:30px; padding:4px 8px; background-color:green; color:white; font-weight:bold;cursor:pointer;">CAT
			</span>
		<br/></p></center>
		<div id="gatetips" style="">
			<span style="font-size:1.3em; font-weight:bold;">Important tips for GATE Exam</span><br/><br/></span>
			<ul>
			<li>GATE Exam is not looking for any syllabus completion from the candidate. A good understanding of the basic concepts and their
application is required. By understanding, it is implied that candidate is not supposed to just be able to mug up & explain but rather 
this exam needs candidate to have a feel/common sense.</li><br/>
			<li>As a thumb rule, while solving any GATE problem, if the solution takes more than 8 steps, u must re-look at the approach.
(Generally GATE problems are not lengthy).</li><br/>
			<li>While solving the problem, students must have balance between speed & accuracy.</li><br/>
			<li>Preparation time for GATE is subjective and depends on the so many factors such as individual�s aptitude, fundamentals,
attitude, concentration level etc., Typically, a rigorous preparation of 4-6 months is considered good enough for getting into IISc or 
IITs.</li><br/>
			<li>Keep a check on your performance; it is compulsory to directly jump upon the previous GATE question on the topic you just finished.
You can try to solve some examples in model papers also.</li><br/>
			<li>Any problem can be tackled in number of ways. So being innovative and intuitive also helps to reach the correct option quickly. This
means, it is not at all compulsory to solve question in typical way. Practice comes handy to solve questions quicker so that the 
balance time can be utilized in some really thought provoking questions (all few questions fall in this category).</li><br/>
			<li>You should have done sufficient study/ discussion, so that the moment you start reading the question you should have an intuition
on whether you can solve it. One way, is to read multiple books on the same subjects, especially for subjects of your interest or the 
thrust portion in GATE exam pattern. Also, to support your study with some self notes is good idea. This helps in final revisions.</li><br/>
			<li>While preparing always keep your goal in thought and fancy being in the place like top institutes wherever you want to have
admission. Always remember "You can get, if you really want". So positive mind is the key. Mild tension can be helpful to have 
kind of motivation or a sense of duty.� But you should avoid thoughts of loosing which can cause loss of concentration and low 
performance. Read only when you are reading.</li><br/>
			<li>In the last days of preparation, if you have any doubts about any topic/formula, you can have a look on these sections. Always
remember, more doubts lead to more concept building.</li><br/>
			<li>Leave all the books few days before the exam. Have some good time and relax.</li>
			</ul>
		</div>
		
		<div id="cattips" style="display:none;">
			<span style="font-size:1.3em; font-weight:bold;">Important tips for CAT Exam</span><br/><br/></span>
			<ul>
			<li>If you are doing your Graduation than start preparing from second year of graduation.</li><br/>
			<li>If you completed Graduation and ready to give the Cat in next coming November, Prepare ar least 10-
14 hours daily and seriously.</li><br/>
			<li>Minimum 10 hours study required before the 6 months of Cat exams.</li><br/>
			<li>Minimum 10,000 Vocabulary (new databank) required to prepare.</li><br/>
			<li>Daily two hours required to study newspapers and Editorials. (English)</li><br/>
			<li>Read at least two magazines, one novel each week.</li><br/>
			<li>Try for the shortcuts of mathematics. Calculations must be strong.</li><br/>
			<li>See any type of graph in any where you find, try to interpret that as fast as possible.</li><br/>
			<li>Change your attitude. Make one decision strictly. And only try for right decision or don't answer in
case of ambiguity.</li><br/>
			<li>Read whatever you love. But try to read on different subjects articles.</li><br/>
			<li>Before three months of Cat, Daily solve one set of available question paper.</li><br/>
			<li>Try to make logical sense everywhere.</li><br/>
			<li>Try to solve calculations mentally.</li>
			</ul>
		</div>
		
		
				<br/><br/><br/>
		<p><a data-popup-close="popup-3" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-3" href="#">x</a>
    </div>
</div>
 -->
 
 <div class="popup" data-popup="popup-3" style="display:none">
    <div class="popup-inner">
        <center> <p style="margin-top:200px;margin-bottom:50px;">
			<a href="prev_cse.html" style="text-decoration:none;color:none;"><span id="gatetip" style="font-size:2em;border-radius:5px;padding:14px 18px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">CSE
			</span></a>
			<a href="prev_ece.html" style="text-decoration:none;color:none;"><span id="cattip" style="font-size:2em;border-radius:5px;margin-left:30px; padding:14px 18px; background-color:green; color:white; font-weight:bold;cursor:pointer;">ECE
			</span></a>
		<br/></p></center>
		
				<br/>
		<p><a data-popup-close="popup-3" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-3" href="#">x</a>
    </div>
</div>

 <div class="popup" data-popup="popup-9" style="display:none">
    <div class="popup-inner">
        <center> <p style="margin-top:200px;margin-bottom:50px;">
			<a href="ebooks_gate_cse.php" style="text-decoration:none;color:none;"><span id="gatetip" style="font-size:2em;border-radius:5px;padding:14px 18px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">CSE
			</span></a>
			<a href="ebooks_gate_ece.php" style="text-decoration:none;color:none;"><span id="cattip" style="font-size:2em;border-radius:5px;margin-left:30px; padding:14px 18px; background-color:green; color:white; font-weight:bold;cursor:pointer;">ECE
			</span></a>
		<br/></p></center>
		
				<br/>
		<p><a data-popup-close="popup-9" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-9" href="#">x</a>
    </div>
</div>

  <div class="popup" data-popup="popup-10" style="display:none">
    <div class="popup-inner">
        <center> <p style="margin-top:200px;margin-bottom:50px;">
			<a href="examtips_cse.html" style="text-decoration:none;color:none;"><span id="gatetip" style="font-size:2em;border-radius:5px;padding:14px 18px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">CSE
			</span></a>
			<a href="examtips_ece.html" style="text-decoration:none;color:none;"><span id="cattip" style="font-size:2em;border-radius:5px;margin-left:30px; padding:14px 18px; background-color:green; color:white; font-weight:bold;cursor:pointer;">ECE
			</span></a>
		<br/></p></center>
		
				<br/>
		<p><a data-popup-close="popup-10" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-10" href="#">x</a>
    </div>
</div>

 <div class="popup" data-popup="popup-11" style="display:none">
    <div class="popup-inner">
        <center> <p style="margin-top:200px;margin-bottom:50px;">
			<a href="analysis_cse.html" style="text-decoration:none;color:none;"><span id="gatetip" style="font-size:2em;border-radius:5px;padding:14px 18px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">CSE
			</span></a>
			<a href="analysis_ece.html" style="text-decoration:none;color:none;"><span id="cattip" style="font-size:2em;border-radius:5px;margin-left:30px; padding:14px 18px; background-color:green; color:white; font-weight:bold;cursor:pointer;">ECE
			</span></a>
		<br/></p></center>
		
				<br/>
		<p><a data-popup-close="popup-11" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-11" href="#">x</a>
    </div>
</div>

<div class="popup" data-popup="popup-12" style="display:none">
    <div class="popup-inner">
        <center> <p style="margin-top:200px;margin-bottom:50px;">
			<a href="impdates_cse.html" style="text-decoration:none;color:none;"><span id="gatetip" style="font-size:2em;border-radius:5px;padding:14px 18px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">CSE
			</span></a>
			<a href="impdates_ece.html" style="text-decoration:none;color:none;"><span id="cattip" style="font-size:2em;border-radius:5px;margin-left:30px; padding:14px 18px; background-color:green; color:white; font-weight:bold;cursor:pointer;">ECE
			</span></a>
		<br/></p></center>
		
				<br/>
		<p><a data-popup-close="popup-12" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-12" href="#">x</a>
    </div>
</div>

<div class="popup" data-popup="popup-13" style="display:none">
    <div class="popup-inner">
        <center> <p style="margin-top:200px;margin-bottom:50px;">
			<a href="syll_cse.html" style="text-decoration:none;color:none;"><span id="gatetip" style="font-size:2em;border-radius:5px;padding:14px 18px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">CSE
			</span></a>
			<a href="syll_ece.html" style="text-decoration:none;color:none;"><span id="cattip" style="font-size:2em;border-radius:5px;margin-left:30px; padding:14px 18px; background-color:green; color:white; font-weight:bold;cursor:pointer;">ECE
			</span></a>
		<br/></p></center>
		
				<br/>
		<p><a data-popup-close="popup-13" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-13" href="#">x</a>
    </div>
</div>

<div class="popup" data-popup="popup-14" style="display:none">
    <div class="popup-inner">
        <center> <p style="margin-top:200px;margin-bottom:50px;">
			<a href="eli_cse.html" style="text-decoration:none;color:none;"><span id="gatetip" style="font-size:2em;border-radius:5px;padding:14px 18px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">CSE
			</span></a>
			<a href="eli_ece.html" style="text-decoration:none;color:none;"><span id="cattip" style="font-size:2em;border-radius:5px;margin-left:30px; padding:14px 18px; background-color:green; color:white; font-weight:bold;cursor:pointer;">ECE
			</span></a>
		<br/></p></center>
		
				<br/>
		<p><a data-popup-close="popup-14" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-14" href="#">x</a>
    </div>
</div>

<div class="popup" data-popup="popup-15" style="display:none">
    <div class="popup-inner">
        <center> <p style="margin-top:200px;margin-bottom:50px;">
			<a href="prev_cse.html" style="text-decoration:none;color:none;"><span id="gatetip" style="font-size:2em;border-radius:5px;padding:14px 18px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">CSE
			</span></a>
			<a href="prev_ece.html" style="text-decoration:none;color:none;"><span id="cattip" style="font-size:2em;border-radius:5px;margin-left:30px; padding:14px 18px; background-color:green; color:white; font-weight:bold;cursor:pointer;">ECE
			</span></a>
		<br/></p></center>
		
				<br/>
		<p><a data-popup-close="popup-15" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-15" href="#">x</a>
    </div>
</div>
<!----------------------------------------------------------------------------------------------------------
POPUP FOR LAST YEAR PAPERS
----------------------------------------------------------------------------------------------------------->

<div class="popup" data-popup="popup-4" style="display:none">
    <div class="popup-inner">
        <h2><center>Previous Year Papers</center></h2>
       <center> <p style="margin-top:10px;margin-bottom:50px;">
			<span id="gatecsepaper" style="border-radius:5px;padding:4px 8px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">GATE-CSE
			</span>
			<span id="gateecepaper" style="border-radius:5px;margin-left:30px; padding:4px 8px; background-color:green; color:white; font-weight:bold;cursor:pointer;">GATE-ECE
			</span>
			<span id="gateeepaper" style="border-radius:5px;margin-left:30px; padding:4px 8px; background-color:green; color:white; font-weight:bold;cursor:pointer;">GATE-EE
			</span>
			<span id="catpaper" style="border-radius:5px;margin-left:30px; padding:4px 8px; background-color:green; color:white; font-weight:bold;cursor:pointer;">CAT
			</span>
		<br/></p></center>
		
		
		<div id="gatecsepapers" style=";">
			<span style="font-size:1.3em; font-weight:bold;">GATE previous year papers for CSE</span><br/><br/></span>
			<ul>
			<li><a href="papers/gate/cse/CS-2015-01.pdf">GATE - CSE Paper 1, 2015</a></li><br/>
			<li><a href="papers/gate/cse/CS-2015-02.pdf">GATE - CSE Paper 2, 2015</a></li><br/>
			<li><a href="papers/gate/cse/CS-2015-03.pdf">GATE - CSE Paper 3, 2015</a></li><br/>
			<li><a href="papers/gate/cse/CS-2014-01.pdf">GATE - CSE Paper 1, 2014</a></li><br/>
			<li><a href="papers/gate/cse/CS-2014-02.pdf">GATE - CSE Paper 2, 2014</a></li><br/>
			<li><a href="papers/gate/cse/CS-2014-03.pdf">GATE - CSE Paper 3, 2014</a></li><br/>
			<li><a href="papers/gate/cse/CS-2013">GATE - CSE Paper, 2013</a></li><br/>
			<li><a href="papers/gate/cse/CS-2012.5">GATE - CSE Paper, 2012.5</a></li><br/>
			<li><a href="papers/gate/cse/CS-2011">GATE - CSE Paper, 2011</a></li><br/>
			<li><a href="papers/gate/cse/CS-2010">GATE - CSE Paper, 2010</a></li><br/>
			<li><a href="papers/gate/cse/CS-2009">GATE - CSE Paper, 2009</a></li><br/>
			<li><a href="papers/gate/cse/CS-2008">GATE - CSE Paper, 2008</a></li><br/>
			<li><a href="papers/gate/cse/CS-2007">GATE - CSE Paper, 2007</a></li><br/>
			<li><a href="papers/gate/cse/CS-2006">GATE - CSE Paper, 2006</a></li>
			</ul>
		</div>
		<div id="gateecepapers" style="display:none;">
			<span style="font-size:1.3em; font-weight:bold;">GATE previous year papers for ECE</span><br/><br/></span>
			<!--<p>Chhod yaar.. Kya krega papers dhundke..<br/>Selection toh vaise bhi nhi hona ;)</p>
			--><ul>
			<li><a href="papers/gate/ece/EC-2015-01.pdf">GATE - ECE Paper, 2015(1)</a></li><br/>
			<li><a href="papers/gate/ece/EC-2015-02.pdf">GATE - ECE Paper, 2015(2)</a></li><br/>
			<li><a href="papers/gate/ece/EC-2015-03.pdf">GATE - ECE Paper, 2015(3)</a></li><br/>
			<li><a href="papers/gate/ece/EC-2014-04.pdf">GATE - ECE Paper, 2014(4)</a></li><br/>
			<li><a href="papers/gate/ece/EC-2014-03.pdf">GATE - ECE Paper, 2014(3)</a></li><br/>
			<li><a href="papers/gate/ece/EC-2014-02.pdf">GATE - ECE Paper, 2014(2)</a></li><br/>
			<li><a href="papers/gate/ece/EC-2014-01.pdf">GATE - ECE Paper, 2014(1)</a></li><br/>
			<li><a href="papers/gate/ece/EC-2013.pdf">GATE - ECE Paper, 2013</a></li><br/>
			<li><a href="papers/gate/ece/EC-2012.5.pdf">GATE - ECE Paper, 2012.5</a></li><br/>
			<li><a href="papers/gate/ece/EC 2011.pdf">GATE - ECE Paper, 2011</a></li><br/>
			<li><a href="papers/gate/ece/EC 2010.pdf">GATE - ECE Paper, 2010</a></li><br/>
			<li><a href="papers/gate/ece/EC 2009.pdf">GATE - ECE Paper, 2009</a></li><br/>
			<li><a href="papers/gate/ece/EC 2008.pdf">GATE - ECE Paper, 2008</a></li><br/>
			<li><a href="papers/gate/ece/EC 2007.pdf">GATE - ECE Paper, 2007</a></li><br/>
			<li><a href="papers/gate/ece/EC 2006.pdf">GATE - ECE Paper, 2006</a></li><br/>
			<li><a href="papers/gate/ece/EC 2005.pdf">GATE - ECE Paper, 2005</a></li><br/>
			<li><a href="papers/gate/ece/EC 2004.pdf">GATE - ECE Paper, 2004</a></li><br/>
			<li><a href="papers/gate/ece/EC 2003.pdf">GATE - ECE Paper, 2003</a></li>

			</ul>
		</div>
		<div id="gateeepapers" style="display:none;">
			<span style="font-size:1.3em; font-weight:bold;">GATE previous year papers for EE</span><br/><br/></span>
			<!--<p>Tujhe nhi milenge papers.. Kahi aur se le bc..<br/>Tere baap ki site nhi hai..
			jb dekho aa jaega..<br/>Actually tere baap ki hi hai :*</p>
			--><ul>
			<li><a href="#">GATE - EE Paper, 2014</a></li><br/>
	    	<li><a href="#">GATE - EE Paper, 2014</a></li><br/>
			<li><a href="#">GATE - EE Paper, 2014</a></li><br/>
			<li><a href="#">GATE - EE Paper, 2014</a></li><br/>
			<li><a href="#">GATE - EE Paper, 2014</a></li><br/>
			<li><a href="#">GATE - EE Paper, 2014</a></li><br/>
			<li><a href="#">GATE - EE Paper, 2014</a></li><br/>	
			<li><a href="#">GATE - EE Paper, 2014</a></li><br/>
			<li><a href="#">GATE - EE Paper, 2013</a></li><br/>
			<li><a href="#">GATE - EE Paper, 2012.5</a></li><br/>
			<li><a href="#">GATE - EE Paper, 2011</a></li><br/>
			<li><a href="#">GATE - EE Paper, 2010</a></li><br/>
			<li><a href="#">GATE - EE Paper, 2009</a></li><br/>
			<li><a href="#">GATE - EE Paper, 2008</a></li>
			</ul>
		</div>
		<div id="catpapers" style="display:none;">
			<span style="font-size:1.3em; font-weight:bold;">CAT previous year papers</span><br/><br/></span>
			<ul>
				<li><a href="papers/cat/CAT-Paper-2014.pdf"target="_blank">CAT Paper, 2014</a></li><br/>
			<li><a href="papers/cat/CAT-Paper-2012.5.pdf" target="_blank">CAT Paper, 2012.5</a></li><br/>
			<li><a href="papers/cat/CAT-Paper-2011.pdf" target="_blank">CAT Paper, 2011</a></li><br/>
			<li><a href="papers/cat/CAT-Paper-2010.pdf" target="_blank">CAT Paper, 2010</a></li><br/>
			<li><a href="papers/cat/CAT-Paper-2009.pdf" target="_blank">CAT Paper, 2009</a></li><br/>
			<li><a href="papers/cat/CAT-Paper-2008.pdf" target="_blank">CAT Paper, 2008</a></li><br/>
			<li><a href="papers/cat/CAT-Paper-2007.pdf" target="_blank">CAT Paper, 2007</a></li><br/>
			<li><a href="papers/cat/CAT-Paper-2006.pdf" target="_blank">CAT Paper, 2006</a></li><br/>
			<li><a href="papers/cat/CAT-Paper-2005.pdf" target="_blank">CAT Paper, 2005</a></li><br/>
			<li><a href="papers/cat/CAT-Paper-2004.pdf" target="_blank">CAT Paper, 2004</a></li><br/>
			<li><a href="papers/cat/CAT-Paper-2003.pdf" target="_blank">CAT Paper, 2003</a></li><br/>
                        <li><a href="papers/cat/CAT-Paper-2002.pdf" target="_blank">CAT Paper, 2002</a></li><br/>
			<li><a href="papers/cat/CAT-Paper-2001.pdf" target="_blank">CAT Paper, 2001</a></li>
			</ul>
		</div>
		
		
				<br/><br/><br/>
		<p><a data-popup-close="popup-4" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-4" href="#">x</a>
    </div>
</div>


<!----------------------------------------------------------------------------------------------------------
POPUP FOR EBOOKS
----------------------------------------------------------------------------------------------------------->

<div class="popup" data-popup="popup-5" style="display:none">
    <div class="popup-inner">
        <h2><center>E-Books</center></h2>
       <center> <p style="margin-top:10px;margin-bottom:50px;">
			<span id="gatecsebook" style="border-radius:5px;padding:4px 8px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">GATE-CSE
			</span>
			<span id="gateecebook" style="border-radius:5px;margin-left:30px; padding:4px 8px; background-color:green; color:white; font-weight:bold;cursor:pointer;">GATE-ECE
			</span>
			<span id="catbook" style="border-radius:5px;margin-left:30px; padding:4px 8px; background-color:green; color:white; font-weight:bold;cursor:pointer;">CAT
			</span>
		<br/></p></center>
		
		
		<div id="gatecsebooks" style=";">
			<span style="font-size:1.3em; font-weight:bold;">GATE preparation books for CSE</span><br/><br/></span>
			<ul>
			<li><a href="https://app.box.com/s/3zzakyl7q4pzywwao8x1w6v7wa07q9ve">Theory of Recursive Functions and Effective Computability: Hartley Rogers, Jr.</a></li><br/>
			<li><a href="https://app.box.com/s/imas2lyq5tcqopeuz0cuyi73efhfc4b1">Hacking: The Art of Exploitation by John Erickson</a></li><br/>
			<li><a href="https://app.box.com/s/chen33ndximhvdj6go35kf3oxkhrvcvv">Introduction to Algorithms: CLRS</a></li><br/>
			<li><a href="https://app.box.com/s/2e9cz0kyiixe79c1zp60cs2hcgoih7vu">Operating System Principles: Galvin</a></li><br/>
			<li><a href="https://app.box.com/s/pvqaiz4psevs641bx21oz6lhxlyxrb27">DBMS: Korth</a></li><br/>
			<li><a href="https://app.box.com/s/8wxycuah68pn4zzseq4b774adn7uak2p">Computer Architecture: Morris mano</a></li><br/>
			<li><a href="https://app.box.com/s/wt7a9rmjkhrjqs5ir59dwjtibvl9axkg">Computer Organization: Zacky,hamacher</a></li><br/>
			<li><a href="https://app.box.com/s/so417nrgx1u7va9oyhg8fc0etwklwdoy">Computer Organization Hardware/Software Interface: Hennessey and Patterson</a></li><br/>
			<li><a href="https://app.box.com/s/yoeu4ziokaje6ezgaddirwqldey7izf3">Compiler Design: Ullman</a></li><br/>
			<li><a href="https://app.box.com/s/qqgu7d5vnh5uyhsr0dnikg91zkersv78">Discrete Mathematics and Its Applications: Kenneth H. Rosen</a></li><br/>
			<li><a href="https://app.box.com/s/r4vimmcjx29wpp3b2tt64noy1yhrj6wi">DBMS:NAVATHE</a></li><br/>
			<li><a href="https://app.box.com/s/vpbg9z8dqnepmpruagcfyhw8a1u8w71n">Theory of Computation: Ullman</a></li><br/>
			<li><a href="https://app.box.com/s/fb0hoa00zb9ydhq6ezj2we5rgbnwpboo">Computer Networking: A top-down approach by Kurose-Ross</a></li><br/>
			<li><a href="https://app.box.com/s/oxs9z720j6cw4pfi55kkivf0kgvmbb6r">The C Programming Language</a></li><br/>
			<li><a href="https://app.box.com/s/75mhaa39r505gllhyek2kfn3qyz6qxtn">Digital Logic and Design: Morris Mano</a></li>
		
			</ul>
		</div>
		<div id="gateecebooks" style="display:none;">
			<span style="font-size:1.3em; font-weight:bold;">GATE preparation books for ECE</span><br/><br/></span>
			<!--<p>Chhod yaar.. Kya krega papers dhundke..<br/>Selection toh vaise bhi nhi hona ;)</p>
			--><ul>
			<li><a href="https://app.box.com/s/wd0pz58g7quq2yd7tk59hravuue0b2zw">Electronic Devices and Circuit Theory</a></li><br/>
			<li><a href="books/gate/ece/Electric Power Distribution Systems Operations">Electric Power Distribution Systems Operations</a></li><br/>
            <li><a href="https://app.box.com/s/rumop8nd8uyu4ma6pgl3g4x39rluzgv8">Signals And Systems Schaum Series </a></li><br/>
		    <li><a href="https://app.box.com/s/yg8w0yrwb2a8k9pegz7l3m4sofjbsvxv">Richard C. Dorf, James A. Svoboda Introduction to Electric Circuits  2013 </a></li><br/>	
             <li><a href="https://app.box.com/s/4g2lswbfrc2ixw1txi0tffy573tm5ek2">Principles of Communication Systems by Taub Schilling </a></li><br/>
              <li><a href="https://app.box.com/s/jv3ezqgv5j9wpktn662ewmm2chzgw54l">Morris Mano Digital Design 3rd Edition </a></li><br/>
               <li><a href="https://app.box.com/s/1m9g4te2ghrsuabr6hrc2pbi73lfos2k">Modern digital and analog communication - B P Lathi </a></li><br/>
                <li><a href="https://app.box.com/s/7imqoze1vpun6m7vwhn97f5gdh3476kp">Microwave Engineering David M Pozar 4ed Wiley 2012.5 </a></li><br/>
                 <li><a href="https://app.box.com/s/c2ss3zvky2rqnjftfor82vg71r6ufkyw">Principles of Electronics by V. K. Mehta </a></li><br/>
            
            
            
            <!--<li><a href="#">GATE - ECE Paper, 2012.5</a></li><br/>
			<li><a href="#">GATE - ECE Paper, 2011</a></li><br/>
			<li><a href="#">GATE - ECE Paper, 2010</a></li><br/>
			<li><a href="#">GATE - ECE Paper, 2009</a></li><br/>
			<li><a href="#">GATE - ECE Paper, 2008</a></li> -->
			</ul>
		</div>
		
		<div id="catbooks" style="display:none;">
			<span style="font-size:1.3em; font-weight:bold;">CAT preparation books</span><br/><br/></span>
			<ul>
			<li><a href="https://app.box.com/s/kyajz4r80x21v7kqcuttbzf1yknvduat">Data interpretation and logical reasoning by Arun sharma</a></li><br/>
			<li><a href="https://app.box.com/s/d38xnvof3dt5zqvp2o84evsp51x0vk86">Quantitative Aptitude By Arun Sharma</a></li><br/>
			<li><a href="https://app.box.com/s/kyajz4r80x21v7kqcuttbzf1yknvduat">VERBAL AND NON VERBAL REASONING BY R.S. AGGARWAL</a><li><br/>
            <li><a href="https://app.box.com/s/9ha6gw3ok77584pud7dd599j609myjjq">Arun Sharma - Verbal Ability</a><li><br/>
			<!--<li><a href="#">CAT Paper, 2011</a></li><br/>
						<li><a href="papers/cat/CAT-Paper-2015.pdf" target="_blank">CAT Paper, 2015</a></li><br/>
		
			</ul>
		</div>
		
		
				<br/><br/><br/>
		<p><a data-popup-close="popup-5" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-5" href="#">x</a>
    </div>
</div>


<!----------------------------------------------------------------------------------------------------------
POPUP FOR ELIGIBILITY
----------------------------------------------------------------------------------------------------------->

<div class="popup" data-popup="popup-6" style="display:none">
    <div class="popup-inner">
        <h2><center>Eligibility Criteria</center></h2>
       <center> <p style="margin-top:10px;margin-bottom:50px;">
			<span id="gateeligible" style="border-radius:5px;padding:4px 8px; background-color:orange; color:white; font-weight:bold;cursor:pointer;">GATE-CSE
			</span>
			<span id="cateligible" style="border-radius:5px;margin-left:30px; padding:4px 8px; background-color:green; color:white; font-weight:bold;cursor:pointer;">CAT
			</span>
		<br/></p></center>
		
		
		<div id="gateeligibility" style=";">
			<span style="font-size:1.3em; font-weight:bold;">Eligibility Criteria for GATE</span><br/><br/></span>
			<ul>
			<li>Bachelor's degree holders in Engineering/ Technology/ Architecture (4 years after 10+2/ Post-B.Sc./ Post-
Diploma) and those who are in the final year of such programs.</li><br/>
			<li>Master's degree holders in any branch of Science/ Mathematics/ Statistics/ Computer Applications or
equivalent and those who are in the final year of such programs.</li><br/>
			<li>Candidates in the second or higher year of Four-year integrated master&#39;s degree programs (Post-B.Sc.) in
Engineering/ Technology.</li><br/>
			<li>Candidates in the fourth or higher year of Five-year integrated master&#39;s degree programs or Dual Degree
programs in Engineering/Technology.</li><br/>
			<li>Candidates with qualifications obtained through examinations conducted by professional societies
recognized by UPSC/AICTE (e.g. AMIE by iE(i), AMICE(i) by the institute of Civil Engineers (India)-iCE(i))
as equivalent to B.E./B.Tech.</li>
			</ul>
		</div>
		<div id="cateligibility" style="display:none;">
			<span style="font-size:1.3em; font-weight:bold;">Eligibility Criteria for CAT</span><br/><br/></span>
			<!--<p>Chhod yaar.. Kya krega papers dhundke..<br/>Selection toh vaise bhi nhi hona ;)</p>
			--><ul>
			<li>The candidate must hold a Bachelor's Degree passed with at least 50% marks or equivalent
CGPA (45% in case of the candidates belonging to SC/ST/PWD/DA categories) or must
possess an equivalent qualification as recognized by the Ministry of HRD, including AMICE.</li><br/>
			<li>No age limitation to appear for the test.</li><br/>
			<li>The candidates appearing for their final year exams of the qualifying degree can also apply
for CAT 2016. They will be allowed to join the programme provisionally, only if they will
submit a certificate issued by the Principal/Registrar of their College/Institute stating that
he/she has completed all the requirements for obtaining the bachelor's degree/equivalent
qualification on the date of the issue of the certificate. This certificate should be submitted by
the aspirant on or before 30 June 2016.</li>
			</ul>
		</div>
		
		
		
				<br/><br/><br/>
		<p><a data-popup-close="popup-6" href="#">Close</a></p>
        <a class="popup-close" data-popup-close="popup-6" href="#">x</a>
    </div>
</div>


	
  </body>
</html>