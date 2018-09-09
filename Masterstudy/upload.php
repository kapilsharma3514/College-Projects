<!DOCTYPE HTML>
<?php
	include('config.php');
	echo "<script>var p;
	p = prompt('Enter Password To Gain Access To Create Account');
if (p!='masterstudy')
{
	alert('Wrong Password');
	window.location.href='index.php';
}
</script>";
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
				<nav id="nav">
						<ul>
							<li style="color:rgba(255, 255, 255, 0.75);"><a href="index.php">Home</a></li>
							<li style="color:rgba(255, 255, 255, 0.75);">
								<a href="#">GATE</a>
								<ul>
								
								<li style="color:rgba(255, 255, 255, 0.75);">Computer Science
								<ul><center><h4 style="color:rgba(255, 255, 255, 0.75);">GATE CSE</h4></center>
								<li style="color:rgba(255, 255, 255, 0.75);" >&nbsp&nbsp&nbsp Topics
	 <ul><center><h4 style="color:rgba(255, 255, 255, 0.75);">Topics</h4></center>
	<li><a href='topic.php?topic=EM'>Engineering Mathematics</a></li>
    <li ><a href='topic.php?topic=DL'>Digital Logic</a></li>
    <li ><a href='topic.php?topic=COA'>Computer Organization and Architecture</a></li>
    <li><a href='topic.php?topic=DS'>Programming and Data Structures</a></li>
    <li><a href='topic.php?topic=ALGO'>Algorithms</a></li>
    <li ><a href='topic.php?topic=TOC'>Theory of Computation</a></li>
	<li ><a href='topic.php?topic=CD'>Compiler Design</a></li>
	<li ><a href='topic.php?topic=OS'>Operation System</a></li>
	<li ><a href='topic.php?topic=DB'>Database</a></li>
	<li ><a href='topic.php?topic=CN'>Compute Networks</a></li>
	
	</ul>
	</li>
	<li ><a href='prev_cse.html'>Previous Year Papers</a></li>
   <li ><a href='videos_gate_cse.php'>Video Lectures</a></li>
   <li ><a href='syll_cse.html'>Syllabus</a></li>
   <li><a href='impdates_cse.html'>Important Dates</a></li>
   <li ><a href='eli_cse.html'>Eligibility</a></li>
    <li class='active'><a href='examtips_cse.html'>Exam Tips</a></li>
	<li><a href='analysis_cse.html'>Analysis</a></li>
	 <li ><a href='ebooks_gate_cse.php'>Ebooks</a></li>						
										</ul>
									</li>
								<li style="color:rgba(255, 255, 255, 0.75);">Electronics & Communication
									<ul>
									<center><h4 style="color:rgba(255, 255, 255, 0.75);">GATE ECE</h4></center>
									<li ><a href='prev_ece.html'>Previous Year Papers</a></li>
									<li ><a href='eli_ece.html'>Eligibilty</a></li>
   <li ><a href='#'>Video Lectures</a></li>
   <li ><a href='syll_ece.html'>Syllabus</a></li>
   <li><a href='impdates_ece.html'>Important Dates</a></li>
   <li ><a href='analysis_ece.html'>Analysis</a></li>
    <li><a href='examtips_ece.html'>Exam Tips</a></li>
	 <li ><a href='ebooks_ece.php'>Ebooks</a></li>
										
										</ul>
										</li>
								</ul>
								</li>
									
							<li style="color:rgba(255, 255, 255, 0.75);">
								<a href="#">CAT</a>
								<ul>
								
								<li>
								<center><h4 style="color:rgba(255, 255, 255, 0.75);">CAT</h4></center>
									<li ><a href='prev_cat.html'>Previous Year Papers</a></li>
    <li ><a href='#'>Video Lectures</a></li> 
   <li ><a href='syll_cat.html'>Syllabus</a></li>
   <li ><a href='eli_cat.html'>Eligibilty</a></li>
   <li ><a href='analysis_cse.html'>Analysis</a></li>
   <li><a href='impdates_cat.html'>Important Dates</a></li>
    <li class='active'><a href='examtips_cat.html'>Exam Tips</a></li>
	 <li ><a href='ebooks_cat.php'>Ebooks</a></li>						
										
									</li>
								
								</ul>
								</li>	
							<li><a href="#" class="button special">Sign Up</a></li>
						</ul>
					</nav>
				</header>

						<header class="major">
						<br/><br/>
							<h3>UPLOAD FILES FOR GATE CSE</h3>
							</header>
				<?php
 // define variables and set to empty values
$nameErr = $linkErr = $topicErr = $typeErr = "";
$name = $link = $topic = $type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else { 
    $name = test_input($_POST["name"]);
    /// check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$name)) {
      $nameErr = "Only alphanumeric and white space allowed"; 
    }
  }
  if (empty($_POST["topic"])) {
    $topicErr = " Topic is required";
  } else {
    $topic = test_input($_POST["topic"]);
     }
  if (empty($_POST["type"])) {
    $typeErr = " Type is required";
  } else {
    $type = test_input($_POST["type"]);
     }
    
  if (empty($_POST["link"])) 
  {
    $linkErr = "link is required";
  } else {
    $link = test_input($_POST["link"]);
     }
	 if(empty($nameErr) && empty($linkErr) &&empty($topicErr) && empty($typeErr))
 {
	$result= mysql_query("insert into $type values('','$topic','$link','$name')");
	 echo $result;
							if($result)
							{?><script>alert('Your data Was Successfully inserted.');
							window.location.href='upload.php';</script><?php }
 	 
 }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div style="width:1100px; margin-left:2cm; " >
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <h4>Name: </h4><input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br>
  <h4>Link :</h4> <input type="text" name="link" value="<?php echo $link;?>" >
  <span class="error">* <?php echo $linkErr;?></span>
  <br>
  <h4>Topic:</h4> 
       <select name="topic" style="cursor:pointer; width:500px;">
                                    <option value="" selected hidden=""></option>
                                    <option value='EM'>Engineering Mathematics</option>
									<option value='DL'>Digital Logic</option>
									<option value='COA'>Computer Organization and Architecture</option>
									<option value=' DS'>Programming and Data Structures</option>
									<option value='ALGO'>Algorithms</option>
									<option value='TOC'>Theory of Computation</option>
									<option value='CD'>Compiler Design</option>
									<option value='OS'>Operation System</option>
									<option value='DB'>Database</option>
									<option value='CN'>Computer Networks</option>
                                    </select>
<span class="error">* <?php echo $topicErr;?></span>
  <br>
  <h4>Type:</h4> 
       <select name="type" style="cursor:pointer; width:500px;">
                                    <option value="" selected hidden=""></option>
                                    <option value="book_cse">BOOKS </option>
									<option value="notes_cse">NOTES</option>
                                    <option value="video_link">VIDEO</option>
									<option value="impques_cse">IMPORTANT QUESTION</OPTION>
                                    </select><span class="error">*<?php echo $typeErr;?></span>
  
 <div align="center">
  <input type="submit" name="submit" value="Submit">  
  </div>
</form>
</div>


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