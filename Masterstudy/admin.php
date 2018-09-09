<!DOCTYPE HTML>
<?php
session_start();
include('config.php');
?>
<html>
<head>
		<title>MasterStudy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets_left/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="mainside.css">	
    <link rel="stylesheet" href="assets_left/css/main.css" />
        <link rel="stylesheet" href="css/tablestyle.css">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets_left/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets_left/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">MasterStudy</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#">GATE</a>
								<ul>
								
								<li>Computer Science
								<ul><center><h4>GATE CSE</h4></center>
									<li class='active'><a href='prev_cse.html'>Previous Year Papers</a></li>
   <li ><a href='vids.html'>Video Lectures</a></li>
   <li ><a href='syll_cse.html'>Syllabus</a></li>
   <li><a href='impdates_cse.html'>Important Dates</a></li>
    <li><a href='examtips_cse.html'>Exam Tips</a></li>
	 <li ><a href='ebooks_cse.html'>Ebooks</a></li>
										
										</ul>
									</li>
								<li>Electronics & Communication
									<ul>
									<center><h4>GATE ECE</h4></center>
									<li ><a href='prev_ece.html'>Previous Year Papers</a></li>
   <li ><a href='vids.html'>Video Lectures</a></li>
   <li ><a href='syll_ece.html'>Syllabus</a></li>
   <li><a href='impdates_cse.html'>Important Dates</a></li>
    <li><a href='examtips_ece.html'>Exam Tips</a></li>
	 <li ><a href='ebooks_ece.html'>Ebooks</a></li>
										
										</ul>
										</li>
								</ul>
								</li>
							
							<li><a href="#" class="button special">Sign Up</a></li>
						</ul>
					</nav>
				</header>
			<!-- Main -->
						<header class="major">
						<br/><br/>
							<h3>ADMIN</h3>
							</header>
				<?php
 // define variables and set to empty values
$nameErr = $name="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "PASSWORD is required";
  } else if($_POST["name"]=='1234maikyubtau4321') 
		
        { $_SESSION['checkit']='hehe';	?>		<script>window.location.href='upload.php';</script><?php }
		else
		{	
			echo "<script> window.location.href='index.php'</script>"; 
		}
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div style="width:500px; margin:2px auto 20px auto; "  align="center">
 <h4>ENTER YOUR PASSWORD </h4><input type="password" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br>
</div>    
 <div align="center">
  <input type="submit" name="submit" value="Submit">  
  </div>
</form>
				

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets_left/js/jquery.min.js"></script>
			<script src="assets_left/js/jquery.scrolly.min.js"></script>
			<script src="assets_left/js/jquery.dropotron.min.js"></script>
			<script src="assets_left/js/jquery.scrollex.min.js"></script>
			<script src="assets_left/js/skel.min.js"></script>
			<script src="assets_left/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets_left/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets_left/js/main.js"></script>

	</body>
</html>