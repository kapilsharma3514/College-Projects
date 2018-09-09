<?php  
	
	include('config.php');
	session_start();
	$topic= $_GET['topic'];
?>

<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html><head>
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
		<br/>
		<br/>

<!-- Header -->
				<header id="header">
				<nav id="nav">
						<ul>
							<li style="color:rgba(255, 255, 255, 0.75);"><a href="index.html">Home</a></li>
							<li style="color:rgba(255, 255, 255, 0.75);">
								<a href="#">GATE</a>
								<ul>
								
								<li style="color:rgba(255, 255, 255, 0.75);">Computer Science
								<ul><center><h4 style="color:rgba(255, 255, 255, 0.75);">GATE CSE</h4></center>
								<li style="color:rgba(255, 255, 255, 0.75);" class='active' >&nbsp&nbsp&nbsp Topics
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
   <li><a href='eli_cse.html'>Eligibility</a></li>
    <li><a href='examtips_cse.html'>Exam Tips</a></li>
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
	 <li ><a href='ebooks_ece.html'>Ebooks</a></li>
										
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
    <li><a href='examtips_cat.html'>Exam Tips</a></li>
	 <li ><a href='ebooks_cat.html'>Ebooks</a></li>						
										
									</li>
								
								</ul>
								</li>	
							<li><a href="#" class="button special">Sign Up</a></li>
						</ul>
					</nav>
				</header>
				
			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
						<?php 
						if($topic=='EM')
						{
							$head='ENGINEERING MATHEMATICS';
						}
                        if($topic=='CN')
						{
							$head='COMPUTER NETWORKS';
						}
                        if($topic=='OS')
						{
							$head='OPERATING SYSTEM';
						}
                        if($topic=='CD')
						{
							$head='COMPILER DESIGN';
						}
                        if($topic=='ALGO')
						{
							$head='ALGORITHMS';
						}
                        if($topic=='COA')
						{
							$head='COMPUTER ORGANISATION AND ARCHITECTURE';
						}
                        if($topic=='DL')
						{
							$head='DIGITAL LOGIC';
						}
                        if($topic=='DS')
						{
							$head='PROGRAMMING AND DATA STRUCTURE';
						}
                        if($topic=='TOC')
						{
							$head='THEORY OF COMPUTATION';
						}
						if($topic=='DB')
						{
							$head='DATABASE';
						}
	
						?>
							<h2><?php echo $head ?> </h2>
						</header>
						<div class="row 150%">
							<div class="4u 12u$(medium)">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
                                        
											<h3>GATE</h3>
											 <div id='cssmenu'>
<ul>
  <li><a href='#'>Home</a></li>
   <li><a href='prev_cse.html'>Previous Year Papers</a></li>
   	 <li ><a href='eli_cse.html'>Eligibility</a></li>
   <li ><a href='videos_gate_cse.php'>Video Lectures</a></li>
   <li ><a href='syll_cse.html'>Syllabus</a></li>
   <li ><a href='impdates_cse.html'>Important Dates</a></li>
   <li><a href='analysis_cse.html'>Analysis of Paper Pattern</a></li>
   <li><a href='examtips_cse.html'>Exam Tips</a></li>
   	<li><a href='ebooks_gate_cse.php'>Ebooks</a></li>
</ul>
</div>
											
										</section>	
										

							</div>
							<div class="8u$ 12u$(medium) important(medium)">

								<!-- Content -->
									<section id="content">
									
									<h3>Syllabus</h3>		
									
								<?php
// Attempt select query execution
$result = mysql_query("SELECT * FROM syllabus WHERE topic_id='$topic'");
if($result){
    if(mysql_num_rows($result) > 0){
        echo "<table>";
                  while($row = mysql_fetch_array($result)){ ?>
            <tr>
              <td>
			  <h4>
			  <?php echo $row['syllabus']?> 
			  </h4>
		   </td>             
			   </tr>
			   <?php
        }
     echo" </table>";
        // Close result set
        mysql_free_result($result);
    } else{
        echo "No links";
    }
} else{
    echo "ERROR: Could not able to execute $sql. ";
} 
?>	
			<h3>VIDEOS</h3>										
				<?php
// Attempt select query execution
$result = mysql_query("SELECT * FROM video_link WHERE topic_id='$topic'");
if($result){
    if(mysql_num_rows($result) > 0){
        echo "<table>";
                  while($row = mysql_fetch_array($result)){ ?>
            <tr>
              <td>
			  <a href="<?php echo $row['link']?>" target="_blank">
			<?php echo $row['name_head'] ?> 
			  </a>
		   </td>             
			   </tr>
			   <?php
        }
     echo" </table>";
        // Close result set
        mysql_free_result($result);
    } else{
        echo "No links";
    }
} else{
    echo "ERROR: Could not able to execute $sql. ";
} 
?>
<h3>EBOOKS</h3>										
				<?php
// Attempt select query execution
$result = mysql_query("SELECT * FROM book_cse WHERE topic_id='$topic'");
if($result){
    if(mysql_num_rows($result) > 0){
        echo "<table>";
                  while($row = mysql_fetch_array($result)){ ?>
            <tr>
              <td>
			  <a href="<?php echo $row['link']?>" target="_blank">
			<?php echo $row['name_head'] ?> 
			  </a>
		   </td>             
			   </tr>
			   <?php
        }
     echo" </table>";
        // Close result set
        mysql_free_result($result);
    } else{
        echo "No links";
    }
} else{
    echo "ERROR: Could not able to execute $sql";
}
?>	
<br/>
<h3>NOTES</h3>										
				<?php
// Attempt select query execution
$result = mysql_query("SELECT * FROM notes_cse WHERE topic_id='$topic'");
if($result){
    if(mysql_num_rows($result) > 0){
        echo "<table>";
                  while($row = mysql_fetch_array($result)){ ?>
            <tr>
              <td>
			  <a href="<?php echo $row['link']?>" target="_blank">
			<?php echo $row['name_head'] ?> 
			  </a>
		   </td>             
			   </tr>
			   <?php
        }
     echo" </table>";
        // Close result set
        mysql_free_result($result);
    } else{
        echo "No links";
    }
} else{
    echo "ERROR: Could not able to execute $sql";
}
?>	
<br/>
<h3>IMPORTANT QUESTION</h3>										
				<?php
// Attempt select query execution
$result = mysql_query("SELECT * FROM impques_cse WHERE topic_id='$topic'");
if($result){
    if(mysql_num_rows($result) > 0){
        echo "<table>";
                  while($row = mysql_fetch_array($result)){ ?>
            <tr>
              <td>
			  <a href="<?php echo $row['link']?>" target="_blank">
			<?php echo $row['name_head'] ?> 
			  </a>
		   </td>             
			   </tr>
			   <?php
        }
     echo" </table>";
        // Close result set
        mysql_free_result($result);
    } else{
        echo "No links";
    }
} else{
    echo "ERROR: Could not able to execute $sql";
}
mysql_close($link);
?>	

								</section>


							</div>
						</div>
					</div>
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