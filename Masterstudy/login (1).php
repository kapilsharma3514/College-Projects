<?php  
	
	include('config.php');
	session_start();

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Let's Start</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets4/bootstrap/css/bootstrap.min.css">
        <link rel="icon" href="assets4/img/log.png">
        <link rel="stylesheet" href="assets4/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets4/css/form-elements.css">
        <link rel="stylesheet" href="assets4/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
       
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets4/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets4/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets4/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets4/ico/apple-touch-icon-57-precomposed.png">

    </head>
<script> var flag=<?php echo $k;?>;

</script>
    <body style="background-image:url(assets4/img/backgrounds/1.jpg); background-repeat:repeat;">

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Login</strong> &amp; Registration Forms</h1>
                            <div class="description">
                            	<p>
	                            You will never win if you never begin.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -Helen Rowland
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
                                        <p id="er1" style="color:red; font-size:14px;"></p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" name="login" class="btn">Sign in!</button>
				                    </form>
                                 <?php   	if (isset($_POST["login"]))
			{
				$email = $_POST["form-username"];
				$password = $_POST["form-password"];
				$query = "select * from detail_user where email='$email' and password='$password'";
				$data = mysql_query($query);
				$num = mysql_num_rows($data);
				 $query1 = "select * from users where email='$email' and password='$password';";
				    	$data1 = mysql_query($query1);
			        	$num1 = mysql_num_rows($data1);
				if ($num>0)
				{ 
					$qrow = mysql_fetch_array($data);
				
					$_SESSION["uid"]=$qrow["uid"];
					$_SESSION["fname"] = $qrow["fname"];
					$_SESSION["lname"] = $qrow["lname"];
				$_SESSION["email"] = $qrow["email"];
					$_SESSION['stream']=$qrow['stream'];
					echo "<script>
					window.location.href='dash/index.php'
					</script>";
				}
				
				else if($num1>0)
					{  $qrow1 = mysql_fetch_array($data1);
						$k=$qrow1['active'];
						if($k==0)
					     {?><script>alert('Please verify your email first');</script><?php
							 }
						else
						{	$_SESSION["fname"] = $qrow1["fname"];
					$_SESSION["lname"] = $qrow1["lname"];
				$_SESSION["email"] = $qrow1["email"];
				$_SESSION['pass']=$qrow1['password'];
				?><script>window.location.href='detail_signup.php'</script><?php
							}
						}
				else
					echo "<script>alert('Wrong Email / Password')</script>";
				
			}?>
			                    </div>
		                    </div>
		                
		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="fblog.php">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p id="he">Fill in the form below to get instant access:</p>
                                        <p id="er" style="color:red; font-size:14px;"></p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" method="get" action="veri.php" onSubmit="validateform();" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group ">
				                        	<label class="sr-only" for="form-about-yourself">Sign up as</label>
				                        	<select name="form-about-yourself" style="cursor:pointer;"
				                        				class="form-about-yourself form-control" id="form-about-yourself">
                                                        <option value="" hidden selected>Sign up as...</option>
                                                  <option value="student">Student</option>
                                                  <option value="tutor">Tutor</option>      
                                                        
                                                        </select>
				                        </div>
				                        <button type="submit" name="sun" id="su" class="btn">Sign me up!</button>
				                    </form>
                                
                                  <b> <p id="act"></p></b>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>2016- MasterStudy.in</p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets4/js/jquery-1.11.1.min.js"></script>
        <script src="assets4/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets4/js/jquery.backstretch.min.js"></script>
        <script src="assets4/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets4/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>