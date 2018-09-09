<div class="header navbar-fixed-top" >
<div class="header_left" id="LOGO">
<img src="images/logo2.png" width="100%" height="100%" id="log" class="l"></div>
<?php
	if (!isset($_SESSION["name"]))
	{
?>
<div style="position:relative; float:right;">
<div class="header_right show_menu" style="padding: 15px 2% 15px 2%;">Menu</div>
<a href="login.php" style="text-decoration:none;">
<div class="header_right mob" style=""> 
Login
<div class="line_bottom" style="display:none;">
</div>
</div>

</a>
</div>
<?php
	}
	else
	{
?>


<div class="header_right" id="Login" > 
Hi <span style="font-size: 0.7em; font-variant: normal; font-weight: normal;"><?php echo $_SESSION["name"]; ?></span>
<span> <img src="upload/<?php echo $_SESSION["photo"]; ?>" class="img-circle img-adjust" /> </span>
<div class="line_bottom" style="display:none;">

</div>
</div>
<?php
	}
?>
<a href="test.php" style="text-decoration:none">
<div class="header_right mob" id="test"> 
Test
</div>
</a>
<a href="index.php" style="text-decoration:none">
<div class="header_right mob" >
<div class="homeb">
<img src="images/home_button.png" width="100%" height="100%"></div>
</div>

</a>
</div>

<div class="drop_it_down lul" style="box-shadow:   3px 3px 4px 2px palegoldenrod;">
<ul class="uls">
<li style="text-align:center;margin-bottom:10px;padding-top:10px;"><img src="upload/<?php echo $_SESSION["photo"]; ?>" class="img_circle" style="height:60px; width:auto;" />
<div style="margin-top:10px;">Member Since <?php echo $_SESSION["dayofreg"]; ?></span></li>
<hr style="border:1px solid black;">
<a href="edit_user.php?x=<?php echo $_SESSION["id"]; ?>" style="text-decoration:none;"><li style="margin-top:-10px;padding-left:10px;padding-bottom:5px;">Edit Account</li></a>
<a href="delete_user.php?x=<?php echo $_SESSION["id"]; ?>" style="text-decoration:none;"><li style="padding-left:10px;padding-bottom:5px;">Delete Account</li></a>
<a href="log_me_out.php" style="text-decoration:none;"><li style="padding-left:10px;padding-bottom:5px;">Logout</li></a>
</div>
</div>