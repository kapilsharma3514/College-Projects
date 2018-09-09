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
		
		
	});
	
	function validate() {
		var j = document.register_form.pass.value;
		var k = document.register_form.repass.value;
		if (j!=k)
		{ alert('Passwords Dont Match !'); 
		  return false;
		}
		var e = document.register_form.name.value;
		if (e.match(/[0-9]/i)!=null)
		{ alert('Name Cant Contain Numbers !');
		  return false;	
		}
		var pattern = new RegExp(/[~`!#$@%\^.&*+=\-\[\]\\';,/{}|\:<>\?]/);
		if (pattern.test(e))
		{ alert('Invalid Name !');
		  return false;
		}
		var em = document.register_form.email.value;
		var lastAtPos = em.lastIndexOf('@');
		var lastDotPos = em.lastIndexOf('.');
		if ( (lastAtPos < lastDotPos && lastAtPos > 0 &&  lastDotPos > 0 && (str.length - lastDotPos) > 2)==false )
		{ alert('Invalid Email');
		  return false; 
		}
		var p = document.register_form.phone.value;
		if (isNaN(p) || p.length!=10)
		{ alert('Invalid Phone Number');
		  return false;
		}
		return true;
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
</script>

<title>EduSpace</title>

</head>

<body style="margin: 0px;">

<script>
var v1 = document.getElementById("col1");
if (v1.offsetWidth<=150) {
	v1.style.width="100%";
}
var v2 = document.getElementById("col2");
if (v2.offsetWidth<=150) {
	v2.style.width="100%";
}
</script>


<?php
	if (isset($_SESSION["name"]))
	{
		echo "<script>window.location.href='index2.php'</script>";
		
	}
?>

<?php @include('head.php'); ?>
<div class="faltu-2 container-fluid" style="padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;">

<div class="a2-1" style="padding: 10px 25px 10px 25px; opacity: 0.95; ">

<div style="font-size: 0.6em; text-align: center; width: auto; color: black; margin: 10px 15px 0px 15px;"> 
Login To Your Account
</div>
<hr style="color: black;"/>
<form style="font-size: 15px; color: green;" method="post">
<label>Email</label>
<div style="margin-bottom: 20px;"><input type="email" class="form_control" name="email" /></div>
<label>Password</label>
<div style="margin-bottom: 20px;"><input type="password" class="form_control" name="password" /></div>
<input type="Submit" value="Login" class="btn_login" name="log_me_in">
<a href="forgotpass.php" style="text-decoration:none;"><div class="forgot">Forgot Your Password ?</div></a>
</form>

<?php
			if (isset($_POST["log_me_in"]))
			{
				$email = $_POST["email"];
				$password = $_POST["password"];
				$query = "select * from users where Email='$email' and Pass='$password'";
				$data = mysql_query($query);
				$num = mysql_num_rows($data);
				
				if ($num>0)
				{ 
					$qrow = mysql_fetch_array($data);
					$_SESSION["name"] = $qrow["Name"];
					$_SESSION["phone"] = $qrow["Phone"];
					$_SESSION["email"] = $qrow["Email"];
					$_SESSION["photo"] = $qrow["Photo"];
					$_SESSION["id"] = $qrow["Id"];
					$_SESSION["dayofreg"] = $qrow["DayOfReg"];
					$_SESSION["pass"] = $qrow["Pass"];
					//echo "<script>alert('Logged In')</script>";
					echo "<script>window.location.href='index2.php'</script>";
				}
				
				else
				{
					echo "<script>alert('Wrong Email / Password')</script>";
				}
			}
		
?>
<hr style="color: black; clear: left;"/>
<div style="margin-bottom: 5px; text-align: center; font-size: 17px; color: black;">Don't have an account yet ?<br/>No Problem</div>
<div class="try" id="register">Register An Account</div>
</div>

<div class="a2-2" style="padding: 10px 25px 10px 25px; opacity: 0.95; ">

<div style="font-size: 0.6em; text-align: center; width: auto; color: black; margin: 10px 15px 0px 15px;"> 
Register An Account
</div>
<hr style="color: black;"/>
<form enctype="multipart/form-data" method="post" name="register_form">
<div class="roww">
<div class="col-sm6" id="col1">
	<div class="form_group">
		<label>Name</label>
		<input type="text" class="form_control" name="name" required />
	</div>
	<div class="form_group">
		<label>E-Mail</label>
		<input type="email" class="form_control" name="email" required />
	</div>
	<div class="form_group">
		<label>Password</label>
		<input type="password" class="form_control" name="pass" required />
	</div>
	<div class="form_group">
		<label>Confirm Password</label>
		<input type="password" class="form_control" name="repass" required />
	</div>
</div>
<div class="col-sm6" id="col2">
	<div class="form_group2">
		<label>Phone</label>
		<input type="text" class="form_control" name="phone" />
	</div>
	<div class="form_group2">
		<label>Profile Pic</label>
		<input type="file" class="form_control" name="dp" onchange="readURL(this)" />
	</div>
	<div class="form_group2">
		<label>Image Preview</label><br/>
		 <img src="images/fre.jpg" id="blah" style="max-width:90px; width: 100%; height: auto; border:1px solid black; padding:2px;" />
	</div>
</div>
</div>
<input type="Submit" class="btn_login" name="register_me" onclick="return validate()" />
</form>

<?php
	if (isset($_POST["register_me"]))
	{
			$name=$_POST["name"];
			$email=$_POST["email"];
			$phone=$_POST["phone"];
			$pass=$_POST["pass"];
			$cpass=$_POST["repass"];
						
			$query = "select * from users";
			$data = mysql_query($query);
			$flag = 0;
			while ($qrow=mysql_fetch_array($data))
			{
				if ($qrow["Email"]==$email)
				{ $flag=-1;
				  break;
				}
			}
			
			if ($flag==0)
			{
				$file=$_FILES["dp"]["name"];
				if ($file=="")
				{ $file="fre.jpg"; }
				  $loc=$_FILES["dp"]["tmp_name"];
				  move_uploaded_file($loc,"upload/".$file);
					    
				  $today = date('M j, Y');
				  $insert = "insert into users set Name='$name', Phone='$phone', Email='$email', Pass='$pass', Photo='$file', DayOfReg='$today'";
				  $data = mysql_query($insert);
				  if ($data>=1)
				  { echo "<script>alert('Profile Successfully Created')</script>"; }
				  else
				  { echo "<script>alert('Error Occured While Connection To Database')</script>"; }
				echo "<script>window.location.href='index2.php'</script>";
			}
					  
			else
			{  
			    echo "<script>alert('Email Already Exists !')</script>";
			}
			
	}
?>

<hr style="color: black; clear: left;"/>

</div>

</div>




<?php 
	include('foot.php');
?>


</body>

</html>
