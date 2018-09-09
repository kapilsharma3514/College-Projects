<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('config.php');
$fn=$_SESSION['fname'];
$ln=$_SESSION['lname'];
$em=$_SESSION['email'];
$pass=$_SESSION["pass"]
?>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration Form</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
        <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets1/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets1/css/form-elements.css">
        <link rel="stylesheet" href="assets1/css/style.css">
        <link rel="stylesheet" href="assets1/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets1/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets1/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets1/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets1/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets1/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
		
		<!-- Top menu -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Eduspace</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								Follow us: 
							</span> 
							<span class="li-social">
								<a href="http://www.facebook.com/pages/Azmindcom/196582707093191" target="_blank"><i class="fa fa-facebook"></i></a> 
								<a href="http://twitter.com/anli_zaimi" target="_blank"><i class="fa fa-twitter"></i></a> 
								<a href="https://plus.google.com/101131425868807087570" target="_blank"><i class="fa fa-google-plus"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>
        
        <!-- Description -->
		<div class="description-container">
	        <div class="container">
	        	<div class="row">
	                <div class="col-sm-12 description-title">
	                    <h2>Registration Form</h2>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-12 description-text">
	                    <p>
	                    	You are just few steps away from a totally new world..
	                    </p>
	                    <div class="divider-1">. . . . . . . . . . . . . . . .</div>
	                </div>
	            </div>
			</div>
		</div>
		
		<!-- Multi Step Form -->
		<div class="msf-container">
	        <div class="container">
	        	<div class="row">
	                <div class="col-sm-12 msf-title">
	                    <h3>Fill In The Form</h3>
	                    <p>Please complete the form below to get instant access to our website and all its features:</p>
	                </div>
	            </div>
               
	            <div class="row">
	                <div class="col-sm-12 msf-form">
	                    
	                    <form role="form" action="" method="post" enctype="multipart/form-data" class="form-inline">
	                    	 
	                    	<fieldset id="st">
	            				<h4>Introduction <span class="step">(Step 1 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="first-name">First Name:</label><br>
				                    <input type="text" name="first-name" id="first-name" value="<?php echo $fn; ?>" class="first-name form-control" id="first-name">
				                </div>
				                <div class="form-group">
				                    <label for="last-name">Last Name:</label><br>
				                    <input type="text" name="last-name" value="<?php echo $ln;?>" class="last-name form-control" id="last-name">
				                </div>
                                
                             <div class="form-group">
				                   <label for="last-name">Profile Picture:</label><br>
                                  
		 <img src="assets/img/fre.jpg" id="blah" name="dp" style="max-width:90px; width: 100%; height: auto; border:1px solid white; 
         padding:2px 0px 2px 0px; float:leftl "  />
<script>
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
}
</script>

                                  
                                   
				                   <input type="file" class="form-control" name="dp" onchange="readURL(this)" style=" margin:28px; float:right; min-width:30%;"/>
				                </div>    
                                <br>

                                
                                
				                <div class="form-group">
				                    <label for="height">Select Exam:</label><br>
				                    <select name="height" class="height form-control" id="height" style="cursor:pointer;">
                                   <option value="" selected hidden=""></option>
                                   <option value="gate">GATE</option>
                                   <option value="cat">CAT</option>
                                    </select>
				                </div>
				                <div class="form-group">
				                    <label for="weight">Select Stream:</label><br>
				                    <select type="text" name="weight" class="weight form-control" id="weight" style="cursor:pointer; "  >
                                     <option value="a" selected hidden=""></option>
                                    <option value="cse">Computer Science Engineering</option>
                                    <option value="ece">Electronics & Communication Engineering</option>
                                    <option value="cat" hidden="">CAT</option>
                                    </select>
				                </div>
	            				<br>
	            				<button type="button" id="sub1" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			<fieldset>
	            				<h4>Introduction <span class="step">(Step 2 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="birth-city">Gender:</label><br>
				                    <select name="gender" class="birth-city form-control" id="birth-city" style="cursor:pointer;">
                                   <option value=""
 selected hidden=""></option>                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    </select>
                                
				                </div>
				                <div class="form-group">
				                    <label for="birth-state">Institution Name:</label><br>
				                    <input type="text" name="birth-state" class="birth-state form-control" id="birth-state">
				                </div>
				                <div class="form-group">
				                    <label for="birth-country">Current Year:</label><br>
				                    <select name="birth-country" style="cursor:pointer;" class="birth-country form-control" id="birth-country">
                                    <option value="" selected hidden=""></option>
                                    <option value="3">III</option>
                                    <option value="4">IV</option>
                                    <option value="Completed">Completed</option>
                                    </select>
				                </div>
				                <div class="form-group">
				                    <label for="birth-date">Date (YYYY/MM/DD):</label><br>
				                    <input type="text" name="birth-date" class="birth-date form-control" id="birth-date">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	            			<fieldset>
	            				<h4>Address and Contact Information <span class="step">(Step 3 / 7)</span></h4>
	            				<div class="form-group">
				                    <label for="address">Address:</label><br>
				                    <input type="text" name="address" class="address form-control" id="address">
				                </div>
				                <div class="form-group">
				                    <label for="address-city">City:</label><br>
				                    <input type="text" name="address-city" class="address-city form-control" id="address-city">
				                </div>
				                <div class="form-group">
				                    <label for="address-state">State / Province:</label><br>
				                    <input type="text" name="address-state" class="address-state form-control" id="address-state">
				                </div>
				                <div class="form-group">
				                    <label for="address-country">Country:</label><br>
				                    <input type="text" name="address-country" class="address-country form-control" id="address-country">
				                </div>
				                <div class="form-group">
				                    <label for="address-postal-code">Postal Code:</label><br>
				                    <input type="text" name="address-postal-code" class="address-postal-code form-control" id="address-postal-code">
				                </div>
				                <div class="form-group">
				                    <label for="telephone">Telephone:</label><br>
				                    <input type="text" name="telephone" class="telephone form-control" id="telephone">
				                </div>
				                <div class="form-group">
				                    <label for="mobile-phone">Mobile Phone:</label><br>
				                    <input type="text" name="mobile-phone" class="mobile-phone form-control" id="mobile-phone">
				                </div>
				                <div class="form-group">
				                    <label for="email">Email:</label><br>
				                    <input type="text" disabled name="email" value="<?php echo $em; ?>" class="email form-control" id="email">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	                    	
	                    	<fieldset>
<h4>Your Topics of Strengths <span class="step">(Step 4 / 7)</span></h4>
<div class="form-group">
        <div id="cse_math">   
             <label for="social-twitter">Engineering Mathematics:</label><br>
         <label class="checkbox-inline">
	     <input type="checkbox" name="checkboxes-1-options[]" value="Discrete Mathematics">Discrete Mathematics
         </label>
         <label class="checkbox-inline">                  
         <input type="checkbox" name="checkboxes-1-options[]" value="Linear Algebra">Linear Algebra           
         </label>
         <label class="checkbox-inline">                  
         <input type="checkbox" name="checkboxes-1-options[]" value="Calculus">Calculus
         </label>
         <label class="checkbox-inline">                  
         <input type="checkbox" name="checkboxes-1-options[]" value="Probability">Probability  
         </label>
         </div>
        <div id="cat_qa" >  
           <label for="social-twitter">Quantitative Aptitude:</label><br>
	       <label class="checkbox-inline">
	       <input type="checkbox" name="checkboxes-1-options[]" value="Arithmetic">Arithmetic
           </label>                     
           <label class="checkbox-inline">
		   <input type="checkbox" name="checkboxes-1-options[]" value="Algebra">Algebra
           </label>                     
           <label class="checkbox-inline">
           <input type="checkbox" name="checkboxes-1-options[]" value="Geometry">Geometry
           </label>                     
           <label class="checkbox-inline">
	       <input type="checkbox" name="checkboxes-1-options[]" value="Commercial Mathematics">Commercial Mathematics
           </label>                     
           <label class="checkbox-inline">
		   <input type="checkbox" name="checkboxes-1-options[]" value="Miscellaneous">Miscellaneous
           </label>                     
          </div>  
         <div id="cat_da">
            <label for="social-twitter">Data Interpretation and Logical Reasoning:</label><br>
			<label class="checkbox-inline">
			<input type="checkbox" name="checkboxes-1-options[]" value="Logical Reasoning">Logical Reasoning
             </label>       
            <label class="checkbox-inline">
			<input type="checkbox" name="checkboxes-1-options[]" value="Data Interpretation">Data Interpretation
			</label>  
            <label class="checkbox-inline">
			<input type="checkbox" name="checkboxes-1-options[]" value="Sufficiency">Sufficiency
			</label>      
         </div>              
        <div id="cat_va">
          <label for="social-twitter">	Verbal Ability:</label><br>
				                   <label class="checkbox-inline">
					           <input type="checkbox" name="checkboxes-1-options[]" value="Reading Comprehension">Reading Comprehension
                             
					                </label>       
                 <label class="checkbox-inline">
					           <input type="checkbox" name="checkboxes-1-options[]" value="Verbal Logic">Verbal Logic
					                </label>  
                                    
                                    <label class="checkbox-inline">
					           <input type="checkbox" name="checkboxes-1-options[]" value="Vocabulary">Vocabulary
					                </label> 
                                    <label class="checkbox-inline">
					           <input type="checkbox" name="checkboxes-1-options[]" value="Grammar Correction">Grammar Correction
					                </label> 
        </div>
        <div id="ece_math">  
           <label for="social-twitter">Engineering Mathematics:</label><br>
    <label class="checkbox-inline">
					           <input type="checkbox" name="checkboxes-1-options[]" value="Linear Algebra">Linear Algebra
                             
					                </label>
                  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Differential Equations">Differential Equations            </label>
                          <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Calculus">Calculus            </label>
                          <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Probability">Probability            </label>
                           <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Vector Analysis">Vector Analysis            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Complex Analysis">Complex Analysis            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Numerical Methods">Numerical Methods            </label>
                                    
				               
        </div> 
        </div>                     
        <div id="cse">
		<div class="form-group">
				                     <label for="social-twitter">Computer Science & Technology:</label><br>
				                     <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Digital Logic">Digital Logic            </label>
                          <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Computer Organization & Architecture">Computer Organization & Architecture            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Programming & Data Structure">Programming & Data Structure            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Algorithms">Algorithms            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Theory of Computation">Theory of Computation            </label><br>
 <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Operating System">Operating System            </label>
                        <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Databases">Databases            </label>
                        <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Computer Networks">Computer Networks            </label>
				                </div>
        </div>
                                
       <div id="ec">
		<div class="form-group">
				                     <label for="social-twitter">Electronics & Communication:</label><br>
				                     <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Networks, Signals and Systems">Networks, Signals and Systems            </label>
                          <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Electronic Devices">Electronic Devices           </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Analog Circuits">Analog Circuits            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Digital Circuits">Digital Circuits            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Control Systems">Control Systems            </label><br>
 <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Communications">Communications            </label>
                        <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkboxes-1-options[]" value="Electromagnetics">Electromagnetics           </label>
                       
				                </div>                         
                                
       </div>
        <b>  <label id="eer" for="social-twitter">Please Select Stream in Step 1.</label></b>
        <br>
	    <br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	            			<fieldset>
	            				<h4>Topics which need efforts<span class="step">(Step 5 / 7)</span></h4>
	     <div class="form-group">
         <div id="cse_math1">  
          <label for="social-twitter">Engineering Mathematics:</label><br>
				                   <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Discrete Mathematics">Discrete Mathematics
                             
					                </label>
                  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Linear Algebra">Linear Algebra            </label>
                          <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Calculus">Calculus            </label>
                          <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Probability">Probability            </label>
                         
                                    
		 </div>
         <div id="cat_qa1" >  
           <label for="social-twitter">Quantitative Aptitude:</label><br>
				                   <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Arithmetic">Arithmetic
                             
					                </label>                     
               <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Algebra">Algebra
                             
					                </label>                     
                                                   
                                
                    <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Geometry">Geometry
                             
					                </label>                     
                                              
                     <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Commercial Mathematics">Commercial Mathematics
                             
					                </label>                     
                                    
                          <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Miscellaneous">Miscellaneous
                             
					                </label>                     
                                
                                             
                                
                                
                    
         </div>  
         <div id="cat_da1">
           <label for="social-twitter">Data Interpretation and Logical Reasoning:</label><br>
				                   <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Logical Reasoning">Logical Reasoning
                             
					                </label>       
                 <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Data Interpretation">Data Interpretation
					                </label>   
                                    
               <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Sufficiency">Sufficiency
					                </label>      
                
         </div>              
         <div id="cat_va1">
          <label for="social-twitter">	Verbal Ability:</label><br>
				                   <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Reading Comprehension">Reading Comprehension
                             
					                </label>       
                 <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Verbal Logic">Verbal Logic
					                </label>  
                                    
                                    <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Vocabulary">Vocabulary
					                </label> 
                                    <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Grammar Correction">Grammar Correction
					                </label> 
                             
         </div>
         <div id="ece_math1">  
                         <label for="social-twitter">Engineering Mathematics:</label><br>
    <label class="checkbox-inline">
					           <input type="checkbox" name="checkbox[]" value="Linear Algebra">Linear Algebra
                             
					                </label>
                  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Differential Equations">Differential Equations            </label>
                          <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Calculus">Calculus            </label>
                          <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Probability ">Probability            </label>
                           <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Vector Analysis">Vector Analysis            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Complex Analysis">Complex Analysis            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Numerical Methods">Numerical Methods            </label>
                                    
		 </div>                      
         </div>
        <div id="cse1">
		      <div class="form-group">
				                     <label for="social-twitter">Computer Science & Technology:</label><br>
				                     <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Digital Logic">Digital Logic            </label>
                          <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Computer Organization & Architecture">Computer Organization & Architecture            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Programming & Data Structure">Programming & Data Structure            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Algorithms">Algorithms            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Theory of Computation">Theory of Computation            </label><br>
 <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Operating System">Operating System            </label>
                        <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Databases">Databases            </label>
                        <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Computer Networks">Computer Networks            </label>
				                </div>
        </div>
                                
       <div id="ec1">
				                <div class="form-group">
				                     <label for="social-twitter">Electronics & Communication:</label><br>
				                     <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Networks, Signals and Systems">Networks, Signals and Systems            </label>
                          <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Electronic Devices">Electronic Devices           </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Analog Circuits">Analog Circuits<br>
            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Digital Circuits">Digital Circuits            </label>  <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Control Systems">Control Systems            </label><br>
 <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Communications">Communications            </label>
                        <label class="checkbox-inline">                  
                                    
                        <input type="checkbox" name="checkbox[]" value="Electromagnetics">Electromagnetics           </label>
                       
				                </div>                         
                                
                                
	 </div>
                           <b>  <label id="eer1" for="social-twitter">Please Select Stream in Step 1.</label></b><br>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next<i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			<fieldset>
	            				<h4>Change Password <span class="step">(Step 6 / 7)</span></h4>
	            				<div class="form-group">
									<label for="why-join">Current Password:</label><br>
				                    <input type="password" name="why-join" value="<?php echo $pass; ?>" class="why-join form-control" id="cp" disabled>
                                    
                                    <br>
<label for="why-join">New Password:</label><br>
				                    <input type="password" name="n-pass" class="why-join form-control" id="np"><br>

                                    <label for="why-join">Confirm Password:</label><br>
				                    <input type="password" name="c-pass" class="why-join form-control" id="cop">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	            			<fieldset>
	            				<h4>Terms and Condition <span class="step">(Step 7 / 7)</span></h4>
				               <div>
                                <textarea name="about-you" class="about-you form-control" id="tc">
                                This agreement was written in English (US). To the extent any translated version of this agreement conflicts with the English version, the English version controls.  Please note that Section 16 contains certain changes to the general terms for users outside the United States.
Date of Last Revision: January 30, 2015
Statement of Rights and Responsibilities
This Statement of Rights and Responsibilities ("Statement," "Terms," or "SRR") derives from the Facebook Principles, and is our terms of service that governs our relationship with users and others who interact with Facebook, as well as Facebook brands, products and services, which we call the “Facebook Services” or “Services”. By using or accessing the Facebook Services, you agree to this Statement, as updated from time to time in accordance with Section 13 below. Additionally, you will find resources at the end of this document that help you understand how Facebook works.
Because Facebook provides a wide range of Services, we may ask you to review and accept supplemental terms that apply to your interaction with a specific app, product, or service. To the extent those supplemental terms conflict with this SRR, the supplemental terms associated with the app, product, or service govern with respect to your use of such app, product or service to the extent of the conflict.
Privacy

Your privacy is very important to us. We designed our Data Policy to make important disclosures about how you can use Facebook to share with others and how we collect and can use your content and information. We encourage you to read the Data Policy, and to use it to help you make informed decisions. 
 
Sharing Your Content and Information

You own all of the content and information you post on Facebook, and you can control how it is shared through your privacy and application settings. In addition:
For content that is covered by intellectual property rights, like photos and videos (IP content), you specifically give us the following permission, subject to your privacy and application settings: you grant us a non-exclusive, transferable, sub-licensable, royalty-free, worldwide license to use any IP content that you post on or in connection with Facebook (IP License). This IP License ends when you delete your IP content or your account unless your content has been shared with others, and they have not deleted it.
When you delete IP content, it is deleted in a manner similar to emptying the recycle bin on a computer. However, you understand that removed content may persist in backup copies for a reasonable period of time (but will not be available to others).
When you use an application, the application may ask for your permission to access your content and information as well as content and information that others have shared with you.  We require applications to respect your privacy, and your agreement with that application will control how the application can use, store, and transfer that content and information.  (To learn more about Platform, including how you can control what information other people may share with applications, read our Data Policy and Platform Page.)
When you publish content or information using the Public setting, it means that you are allowing everyone, including people off of Facebook, to access and use that information, and to associate it with you (i.e., your name and profile picture).
We always appreciate your feedback or other suggestions about Facebook, but you understand that we may use your feedback or suggestions without any obligation to compensate you for them (just as you have no obligation to offer them).
 
Safety

We do our best to keep Facebook safe, but we cannot guarantee it. We need your help to keep Facebook safe, which includes the following commitments by you:
You will not post unauthorized commercial communications (such as spam) on Facebook.
You will not collect users' content or information, or otherwise access Facebook, using automated means (such as harvesting bots, robots, spiders, or scrapers) without our prior permission.
You will not engage in unlawful multi-level marketing, such as a pyramid scheme, on Facebook.
You will not upload viruses or other malicious code.
You will not solicit login information or access an account belonging to someone else.
You will not bully, intimidate, or harass any user.
You will not post content that: is hate speech, threatening, or pornographic; incites violence; or contains nudity or graphic or gratuitous violence.
You will not develop or operate a third-party application containing alcohol-related, dating or other mature content (including advertisements) without appropriate age-based restrictions.
You will not use Facebook to do anything unlawful, misleading, malicious, or discriminatory.
You will not do anything that could disable, overburden, or impair the proper working or appearance of Facebook, such as a denial of service attack or interference with page rendering or other Facebook functionality.
You will not facilitate or encourage any violations of this Statement or our policies.
 
Registration and Account Security

Facebook users provide their real names and information, and we need your help to keep it that way. Here are some commitments you make to us relating to registering and maintaining the security of your account:
You will not provide any false personal information on Facebook, or create an account for anyone other than yourself without permission.
You will not create more than one personal account.
If we disable your account, you will not create another one without our permission.
You will not use your personal timeline primarily for your own commercial gain, and will use a Facebook Page for such purposes.
You will not use Facebook if you are under 13.
You will not use Facebook if you are a convicted sex offender.
You will keep your contact information accurate and up-to-date.
You will not share your password (or in the case of developers, your secret key), let anyone else access your account, or do anything else that might jeopardize the security of your account.
You will not transfer your account (including any Page or application you administer) to anyone without first getting our written permission.
If you select a username or similar identifier for your account or Page, we reserve the right to remove or reclaim it if we believe it is appropriate (such as when a trademark owner complains about a username that does not closely relate to a user's actual name).
 
Protecting Other People's Rights

We respect other people's rights, and expect you to do the same.
You will not post content or take any action on Facebook that infringes or violates someone else's rights or otherwise violates the law.
We can remove any content or information you post on Facebook if we believe that it violates this Statement or our policies.
We provide you with tools to help you protect your intellectual property rights. To learn more, visit our How to Report Claims of Intellectual Property Infringement page.
If we remove your content for infringing someone else's copyright, and you believe we removed it by mistake, we will provide you with an opportunity to appeal.
If you repeatedly infringe other people's intellectual property rights, we will disable your account when appropriate.
You will not use our copyrights or Trademarks or any confusingly similar marks, except as expressly permitted by our Brand Usage Guidelines or with our prior written permission.
If you collect information from users, you will: obtain their consent, make it clear you (and not Facebook) are the one collecting their information, and post a privacy policy explaining what information you collect and how you will use it.
You will not post anyone's identification documents or sensitive financial information on Facebook.
You will not tag users or send email invitations to non-users without their consent. Facebook offers social reporting tools to enable users to provide feedback about tagging.
 
Mobile and Other Devices

We currently provide our mobile services for free, but please be aware that your carrier's normal rates and fees, such as text messaging and data charges, will still apply.
In the event you change or deactivate your mobile telephone number, you will update your account information on Facebook within 48 hours to ensure that your messages are not sent to the person who acquires your old number.
You provide consent and all rights necessary to enable users to sync (including through an application) their devices with any information that is visible to them on Facebook.
 
Payments

If you make a payment on Facebook, you agree to our Payments Terms unless it is stated that other terms apply.
 
Special Provisions Applicable to Developers/Operators of Applications and Websites 

If you are a developer or operator of a Platform application or website or if you use Social Plugins, you must comply with the Facebook Platform Policy.
About Advertisements and Other Commercial Content Served or Enhanced by Facebook

Our goal is to deliver advertising and other commercial or sponsored content that is valuable to our users and advertisers. In order to help us do that, you agree to the following:
You give us permission to use your name, profile picture, content, and information in connection with commercial, sponsored, or related content (such as a brand you like) served or enhanced by us. This means, for example, that you permit a business or other entity to pay us to display your name and/or profile picture with your content or information, without any compensation to you. If you have selected a specific audience for your content or information, we will respect your choice when we use it.
We do not give your content or information to advertisers without your consent.
You understand that we may not always identify paid services and communications as such.
 
Special Provisions Applicable to Advertisers 

If you use our self-service advertising creation interfaces for creation, submission and/or delivery of any advertising or other commercial or sponsored activity or content (collectively, the “Self-Serve Ad Interfaces”), you agree to our Self-Serve Ad Terms. In addition, your advertising or other commercial or sponsored activity or content placed on Facebook or our publisher network will comply with our Advertising Policies.
Special Provisions Applicable to Pages

If you create or administer a Page on Facebook, or run a promotion or an offer from your Page, you agree to our Pages Terms.
 
Special Provisions Applicable to Software

If you download or use our software, such as a stand-alone software product, an app, or a browser plugin, you agree that from time to time, the software may download and install upgrades, updates and additional features from us in order to improve, enhance, and further develop the software.
You will not modify, create derivative works of, decompile, or otherwise attempt to extract source code from us, unless you are expressly permitted to do so under an open source license, or we give you express written permission.

Amendments

We’ll notify you before we make changes to these terms and give you the opportunity to review and comment on the revised terms before continuing to use our Services.
If we make changes to policies, guidelines or other terms referenced in or incorporated by this Statement, we may provide notice on the Site Governance Page.
Your continued use of the Facebook Services, following notice of the changes to our terms, policies or guidelines, constitutes your acceptance of our amended terms, policies or guidelines.
 
Termination

If you violate the letter or spirit of this Statement, or otherwise create risk or possible legal exposure for us, we can stop providing all or part of Facebook to you. We will notify you by email or at the next time you attempt to access your account. You may also delete your account or disable your application at any time. In all such cases, this Statement shall terminate, but the following provisions will still apply: 2.2, 2.4, 3-5, 9.3, and 14-18. 
 
Disputes

You will resolve any claim, cause of action or dispute (claim) you have with us arising out of or relating to this Statement or Facebook exclusively in the U.S. District Court for the Northern District of California or a state court located in San Mateo County, and you agree to submit to the personal jurisdiction of such courts for the purpose of litigating all such claims. The laws of the State of California will govern this Statement, as well as any claim that might arise between you and us, without regard to conflict of law provisions.
If anyone brings a claim against us related to your actions, content or information on Facebook, you will indemnify and hold us harmless from and against all damages, losses, and expenses of any kind (including reasonable legal fees and costs) related to such claim. Although we provide rules for user conduct, we do not control or direct users' actions on Facebook and are not responsible for the content or information users transmit or share on Facebook. We are not responsible for any offensive, inappropriate, obscene, unlawful or otherwise objectionable content or information you may encounter on Facebook. We are not responsible for the conduct, whether online or offline, of any user of Facebook.
WE TRY TO KEEP FACEBOOK UP, BUG-FREE, AND SAFE, BUT YOU USE IT AT YOUR OWN RISK. WE ARE PROVIDING FACEBOOK AS IS WITHOUT ANY EXPRESS OR IMPLIED WARRANTIES INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. WE DO NOT GUARANTEE THAT FACEBOOK WILL ALWAYS BE SAFE, SECURE OR ERROR-FREE OR THAT FACEBOOK WILL ALWAYS FUNCTION WITHOUT DISRUPTIONS, DELAYS OR IMPERFECTIONS. FACEBOOK IS NOT RESPONSIBLE FOR THE ACTIONS, CONTENT, INFORMATION, OR DATA OF THIRD PARTIES, AND YOU RELEASE US, OUR DIRECTORS, OFFICERS, EMPLOYEES, AND AGENTS FROM ANY CLAIMS AND DAMAGES, KNOWN AND UNKNOWN, ARISING OUT OF OR IN ANY WAY CONNECTED WITH ANY CLAIM YOU HAVE AGAINST ANY SUCH THIRD PARTIES. IF YOU ARE A CALIFORNIA RESIDENT, YOU WAIVE CALIFORNIA CIVIL CODE §1542, WHICH SAYS: A GENERAL RELEASE DOES NOT EXTEND TO CLAIMS WHICH THE CREDITOR DOES NOT KNOW OR SUSPECT TO EXIST IN HIS OR HER FAVOR AT THE TIME OF EXECUTING THE RELEASE, WHICH IF KNOWN BY HIM OR HER MUST HAVE MATERIALLY AFFECTED HIS OR HER SETTLEMENT WITH THE DEBTOR. WE WILL NOT BE LIABLE TO YOU FOR ANY LOST PROFITS OR OTHER CONSEQUENTIAL, SPECIAL, INDIRECT, OR INCIDENTAL DAMAGES ARISING OUT OF OR IN CONNECTION WITH THIS STATEMENT OR FACEBOOK, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. OUR AGGREGATE LIABILITY ARISING OUT OF THIS STATEMENT OR FACEBOOK WILL NOT EXCEED THE GREATER OF ONE HUNDRED DOLLARS ($100) OR THE AMOUNT YOU HAVE PAID US IN THE PAST TWELVE MONTHS. APPLICABLE LAW MAY NOT ALLOW THE LIMITATION OR EXCLUSION OF LIABILITY OR INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO THE ABOVE LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU. IN SUCH CASES, FACEBOOK'S LIABILITY WILL BE LIMITED TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW.
 
Special Provisions Applicable to Users Outside the United States

We strive to create a global community with consistent standards for everyone, but we also strive to respect local laws. The following provisions apply to users and non-users who interact with Facebook outside the United States:
You consent to having your personal data transferred to and processed in the United States.
If you are located in a country embargoed by the United States, or are on the U.S. Treasury Department's list of Specially Designated Nationals you will not engage in commercial activities on Facebook (such as advertising or payments) or operate a Platform application or website. You will not use Facebook if you are prohibited from receiving products, services, or software originating from the United States.
Certain specific terms that apply only for German users are available here.
Definitions

By "Facebook" or” Facebook Services” we mean the features and services we make available, including through (a) our website at www.facebook.com and any other Facebook branded or co-branded websites (including sub-domains, international versions, widgets, and mobile versions); (b) our Platform; (c) social plugins such as the Like button, the Share button and other similar offerings; and (d) other media, brands, products, services, software (such as a toolbar), devices, or networks now existing or later developed. Facebook reserves the right to designate, in its sole discretion, that certain of our brands, products, or services are governed by separate terms and not this SRR.
By "Platform" we mean a set of APIs and services (such as content) that enable others, including application developers and website operators, to retrieve data from Facebook or provide data to us.
By "information" we mean facts and other information about you, including actions taken by users and non-users who interact with Facebook.
By "content" we mean anything you or other users post, provide or share using Facebook Services.
By "data" or "user data" or "user's data" we mean any data, including a user's content or information that you or third parties can retrieve from Facebook or provide to Facebook through Platform.
By "post" we mean post on Facebook or otherwise make available by using Facebook.
By "use" we mean use, run, copy, publicly perform or display, distribute, modify, translate, and create derivative works of.
By "application" we mean any application or website that uses or accesses Platform, as well as anything else that receives or has received data from us.  If you no longer access Platform but have not deleted all data from us, the term application will apply until you delete the data.
By “Trademarks” we mean the list of trademarks provided here. 
 
Other

If you are a resident of or have your principal place of business in the US or Canada, this Statement is an agreement between you and Facebook, Inc.  Otherwise, this Statement is an agreement between you and Facebook Ireland Limited.  References to “us,” “we,” and “our” mean either Facebook, Inc. or Facebook Ireland Limited, as appropriate.
This Statement makes up the entire agreement between the parties regarding Facebook, and supersedes any prior agreements.
If any portion of this Statement is found to be unenforceable, the remaining portion will remain in full force and effect.
If we fail to enforce any of this Statement, it will not be considered a waiver.
Any amendment to or waiver of this Statement must be made in writing and signed by us.
You will not transfer any of your rights or obligations under this Statement to anyone else without our consent.
All of our rights and obligations under this Statement are freely assignable by us in connection with a merger, acquisition, or sale of assets, or by operation of law or otherwise.
Nothing in this Statement shall prevent us from complying with the law.
This Statement does not confer any third party beneficiary rights.
We reserve all rights not expressly granted to you.
You will comply with all applicable laws when using or accessing Facebook.

By using or accessing Facebook Services, you agree that we can collect and use such content and information in accordance with the Data Policy as amended from time to time. You may also want to review the following documents, which provide additional information about your use of Facebook:
Payment Terms: These additional terms apply to all payments made on or through Facebook, unless it is stated that other terms apply.
Platform Page: This page helps you better understand what happens when you add a third-party application or use Facebook Connect, including how they may access and use your data.
Facebook Platform Policies: These guidelines outline the policies that apply to applications, including Connect sites.
Advertising Policies: These guidelines outline the policies that apply to advertisements placed on Facebook.
Self-Serve Ad Terms: These terms apply when you use the Self-Serve Ad Interfaces to create, submit, or deliver any advertising or other commercial or sponsored activity or content.
Promotions Guidelines: These guidelines outline the policies that apply if you offer contests, sweepstakes, and other types of promotions on Facebook.
Facebook Brand Resources: These guidelines outline the policies that apply to use of Facebook trademarks, logos and screenshots.
How to Report Claims of Intellectual Property Infringement
Pages Terms: These guidelines apply to your use of Facebook Pages.
Community Standards: These guidelines outline our expectations regarding the content you post to Facebook and your activity on Facebook.

To access the Statement of Rights and Responsibilities in several different languages, change the language setting for your Facebook session by clicking on the language link in the left corner of most pages.  If the Statement is not available in the language you select, we will default to the English version.</textarea><br>

                               
                         <center>   <label class="checkbox-inline">    <input type="checkbox" id="term" name="terms" value="">Yes, I agree to the above mentioned terms and conditions.            </label></center>   <br>
</div>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="submit" id="sub" name="subt" class="btn">Submit</button>
	            			</fieldset>
	                    	<br>
<br>
                           <label for="why-join">Following fields cannot be left blank:</label><br>
	                    <p id="er" style="background-color:#F4EF8E; color:red; opacity:50%;"></p>
	                    </form>
                        <?php
						if(isset($_POST['subt']))
						 
						{  $exam=$_POST['height'] ;
						   $stream=$_POST['weight'] ;
						   $gender=$_POST['gender'] ;
						   $insname=$_POST['birth-state'] ;
						   $current=$_POST['birth-country'] ;
						   $dob=$_POST['birth-date'] ;
						   $add=$_POST['address'] ;
						   $add_city=$_POST['address-city'] ;
						   $add_state=$_POST['address-state'] ;
						   $country=$_POST['address-country'] ;
						   $postal=$_POST['address-postal-code'] ;
						   $tele=$_POST['telephone'] ;
						   $mobile=$_POST['mobile-phone'] ;
							$we=implode(",",$_POST['checkbox']); 
							$st=implode(",",$_POST['checkboxes-1-options']);
							
							$cpass=$_POST['c-pass'];
							$file=$_FILES["dp"]["name"];
				if ($file=="")
				{ $file="fre.jpg"; }
				  $loc=$_FILES["dp"]["tmp_name"];
				  move_uploaded_file($loc,"dash/upload/".$file);
				
							
							
							$q="insert into detail_user values('','$fn','$ln','$cpass','$em','$exam','$stream','$file','$gender','$insname','$current',0,'$add','$add_city','$add_state','$country',$postal,$tele,$mobile,'$st','$we');";
							
							
							if(mysql_query($q))
							{?><script>alert('Your Profile Was Successfully Created.');
							window.location.href='dash/index.php';</script><?php }
 							}
						?>
	                </div>
	            </div>
			</div>
		</div>
		
		

        <!-- Javascript -->
        <script src="assets1/js/jquery-1.11.1.min.js"></script>
        <script src="assets1/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets1/js/jquery.backstretch.min.js"></script>
        <script src="assets1/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets1/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
