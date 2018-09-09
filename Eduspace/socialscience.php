<?php
	session_start();
	if (!isset($_SESSION["name"]))
	{
		echo "<script>window.location.href='index.php'</script>";
	}
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
<link rel="stylesheet" type="text/css" href="css/quizkliye.css">
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
	
	$("#expandit1").click(function(){
		$("#hideit1").slideToggle();
	});
	
	$("#expandit2").click(function(){
		$("#hideit2").slideToggle();
	});
	
	$("#expandit3").click(function(){
		$("#hideit3").slideToggle();
	});
	
	$("#Login").click(function(){
		$(".lul").toggle();
	});
	
	$("#start_quiz").click(function(){
		$("#ques1").removeClass('hidekar');
		$("#optiona1").removeClass('hidekar');
		$("#optionb1").removeClass('hidekar');
		$("#optionc1").removeClass('hidekar');
		$("#optiond1").removeClass('hidekar');
		$("#buttons1").removeClass('hidekar');
		$("#tymleft").removeClass('hidekar');
		$("#start_quiz").addClass('hidekar');
		$("#list").removeClass('hidekar');
	});
	
	$(".su").click(function(){
		var num = $(this).attr('data-num');
		if (num==15)
		{
			
			var correct=0;
			var wrong=0;
			var unans=0;
			for (var i=1; i<=15; i++)
			{
				var ans = $("#ques"+i).attr('data-ans');
				var oa = $("#oa"+i).is(':checked');
				var ob = $("#ob"+i).is(':checked');
				var oc = $("#oc"+i).is(':checked');
				var od = $("#od"+i).is(':checked');
				if (oa==true)
				{
					if ($("#oa"+i).attr('value')==ans)
					{ correct++; }
					else
					{ wrong++; }
				}
				else if (ob==true)
				{
					if ($("#ob"+i).attr('value')==ans)
					{ correct++; }
					else
					{ wrong++; }
				}	
				else if (oc==true)
				{
					if ($("#oc"+i).attr('value')==ans)
					{ correct++; }
					else
					{ wrong++;}
				}	
				else if (od==true)
				{
					if ($("#od"+i).attr('value')==ans)
					{ correct++; }
					else
					{ wrong++; }
				}	
				else
				{
					unans++;
				}
			}
			//alert('Correct Answers : '+correct+'\nWrong Answers : '+wrong+'\nUnanswered : '+unans);
			
			localStorage.setItem("correctans",correct);
			localStorage.setItem("wrongans",wrong);
			localStorage.setItem("unans",unans);
			localStorage.setItem("topic","Social Science");
			window.location.href="result.php";
		}
		var oa = $("#oa"+num).is(':checked');
		var ob = $("#ob"+num).is(':checked');
		var oc = $("#oc"+num).is(':checked');
		var od = $("#od"+num).is(':checked');
		if ( (oa==true && ob==false && oc==false && od==false) || 
			 (ob==true && oa==false && oc==false && od==false) || 
			 (oc==true && oa==false && ob==false && od==false) ||
			 (od==true && oa==false && ob==false && oc==false) )
		{
			$("#q"+num).css("backgroundColor","green");
		}
		else if (oa==false && ob==false && oc==false && od==false)
		{
			$("#q"+num).css("backgroundColor","black");
		}
		else 
		{
			$("#q"+num).css("backgroundColor","black");
			alert("Select 1 Option Or Don't Select At All");
			return;
		}
		$("#ques"+num).addClass('hidekar');
		$("#buttons"+num).addClass('hidekar');
		$("#optiona"+num).addClass('hidekar');
		$("#optionb"+num).addClass('hidekar');
		$("#optionc"+num).addClass('hidekar');
		$("#optiond"+num).addClass('hidekar');
		num++;
		$("#ques"+num).removeClass('hidekar');
		$("#buttons"+num).removeClass('hidekar');
		$("#optiona"+num).removeClass('hidekar');
		$("#optionb"+num).removeClass('hidekar');
		$("#optionc"+num).removeClass('hidekar');
		$("#optiond"+num).removeClass('hidekar');
	});
	
	$(".qlist").click(function(){
		var callerid = $(this).attr('id');
		for (var j=1; j<=15; j++)
		{	var strj = "q";
			strj+=j
			if (strj==callerid)
			{
				$("#ques"+j).removeClass('hidekar');
				$("#buttons"+j).removeClass('hidekar');
				$("#optiona"+j).removeClass('hidekar');
				$("#optionb"+j).removeClass('hidekar');
				$("#optionc"+j).removeClass('hidekar');
				$("#optiond"+j).removeClass('hidekar');
			}
			else
			{	
				var oa = $("#oa"+j).is(':checked');
				var ob = $("#ob"+j).is(':checked');
				var oc = $("#oc"+j).is(':checked');
				var od = $("#od"+j).is(':checked');
				if ( (oa==true && ob==false && oc==false && od==false) || 
					(ob==true && oa==false && oc==false && od==false) || 
					(oc==true && oa==false && ob==false && od==false) ||
					(od==true && oa==false && ob==false && oc==false) )
				{
					$("#q"+j).css("backgroundColor","grey");
				}
				else if (oa==false && ob==false && oc==false && od==false)
				{
					$("#q"+j).css("backgroundColor","#9C9");
				}
				else 
				{
					$("#q"+j).css("backgroundColor","#9C9");
					alert("Select one option or none");
					return;
				}
				$("#ques"+j).addClass('hidekar');
				$("#buttons"+j).addClass('hidekar');
				$("#optiona"+j).addClass('hidekar');
				$("#optionb"+j).addClass('hidekar');
				$("#optionc"+j).addClass('hidekar');
				$("#optiond"+j).addClass('hidekar');
			}
		}
	});
	
	$(".fi").click(function(){
		//Evaluate Results
		var correct=0;
		var wrong=0;
		var unans=0;
		for (var i=1; i<=15; i++)
		{
			var ans = $("#ques"+i).attr('data-ans');
			var oa = $("#oa"+i).is(':checked');
			var ob = $("#ob"+i).is(':checked');
			var oc = $("#oc"+i).is(':checked');
			var od = $("#od"+i).is(':checked');
			if (oa==true)
			{
				if ($("#oa"+i).attr('value')==ans)
				{ correct++; }
				else
				{ wrong++; }
			}
			else if (ob==true)
			{
				if ($("#ob"+i).attr('value')==ans)
				{ correct++; }
				else
				{ wrong++; }
			}
			else if (oc==true)
			{
				if ($("#oc"+i).attr('value')==ans)
				{ correct++; }
				else
				{ wrong++;}
			}
			else if (od==true)
			{
				if ($("#od"+i).attr('value')==ans)
				{ correct++; }
				else
				{ wrong++; }
			}
			else
			{
				unans++;
			}
		}
		//alert('Correct Answers : '+correct+'\nWrong Answers : '+wrong+'\nUnanswered : '+unans);
		/*$.ajax({
			url: 'create_session.php',
			success: function(data) {
				alert('Directory created');
			}
		});*/
		localStorage.setItem("correctans",correct);
		localStorage.setItem("wrongans",wrong);
		localStorage.setItem("unans",unans);
		localStorage.setItem("topic","Social Science");
		window.location.href="result.php";
	});
	
});


</script>

<title>EduSpace</title>

</head>

<body>

<script>
var counter = 900;
var timer = setInterval("tictac()", 1000);
var min,sec;
function tictac(){
	if($("#start_quiz").css('display')=='none') { 
    counter--;
	min = Math.floor(counter/60);
	sec = counter%60;
	if (sec<10)
    $("#tymleft").html("Time Left - "+min+":0"+sec);
	else
	$("#tymleft").html("Time Left - "+min+":"+sec);
	if (min==0 && sec==0)
	{ alert('Time is over..'); 
	  window.location.href='test.php';
	} }
}
</script>



<?php
	include('head.php');
?>


<div style="background-color: white; overflow:hidden;">


<div style="overflow: hidden; font-variant:small-caps; font-size:3.2em; text-align:center; margin-top:100px; font-weight:bold; margin-bottom: 10px;">
	<span>
		Proficiency Test
	</span>
</div>
<div style="overflow: hidden; font-variant:small-caps; font-size:1.7em; text-align:center; margin: -10px auto 40px auto; font-weight:bold; margin-bottom: 10px;">
		Social Science
</div>



<div id="quiz screen" style="margin-top:40px;margin-left:auto;margin-right:auto;margin-bottom:60px;width:80%;background-color:palegoldenrod;overflow:hidden;">

	<center><div id="start_quiz" style="width:230px;background-color:#0C6;color:ghostwhite;border:1px solid white;border-radius:5px;padding:15px 25px;margin-top:50px;margin-bottom:50px;font-size:2.5em;cursor:pointer;">
		Start Quiz !
	</div></center>

	<div class="hidekar" id="tymleft" style="font-size:1.5em;width:215px;margin:5px auto 25px auto;padding:5px 20px;overflow:hidden;background-color:#099;color:ghostwhite;">
			Time Left - 15:00
	</div>
	<form method="post">
<?php
	$query = "select * from questionbank where subjectno=4 order by rand() limit 15;";
	$data = mysql_query($query);
	$flag = 1;
	while ($rows = mysql_fetch_array($data))
	{
	
?>
	<div class="hidekar" id="ques<?php echo $flag ?>" data-ans="<?php echo $rows['CORRECTANS'] ?>" style="margin:10px auto 5px auto;overflow:hidden;font-size:1.2em;padding:5px 20px;">
			<b><?php echo $flag.". ".$rows['QUES'] ?></b>
	</div>
	<div class="hidekar" id="optiona<?php echo $flag ?>"style="margin-left:20px;margin-top:10px;overflow:hidden;">
		<input type="checkbox" id="oa<?php echo $flag ?>" name="a" value="<?php echo $rows['A1'] ?>"/>&nbsp;&nbsp;<?php echo $rows['A1'] ?>
	</div>
	<div class="hidekar" id="optionb<?php echo $flag ?>" style="margin-left:20px;margin-top:10px;overflow:hidden;">
		<input type="checkbox" id="ob<?php echo $flag ?>" name="b" value="<?php echo $rows['A2'] ?>"/>&nbsp;&nbsp;<?php echo $rows['A2'] ?>
	</div>
	<div class="hidekar" id="optionc<?php echo $flag ?>" style="margin-left:20px;margin-top:10px;overflow:hidden;">
		<input type="checkbox" id="oc<?php echo $flag ?>" name="c" value="<?php echo $rows['A3'] ?>"/>&nbsp;&nbsp;<?php echo $rows['A3'] ?>
	</div>
	<div class="hidekar" id="optiond<?php echo $flag ?>" style="margin-left:20px;margin-top:10px;overflow:hidden;">
		<input type="checkbox" id="od<?php echo $flag ?>" name="d" value="<?php echo $rows['A4'] ?>"/>&nbsp;&nbsp;<?php echo $rows['A4'] ?>
	</div>
	<div id="buttons<?php echo $flag ?>" class="hidekar" style="margin-top:20px;margin-left:20px;margin-right:20px;overflow:hidden">
		<input type="button" class="su" id="submit<?php echo $flag ?>" value="Next" data-num="<?php echo $flag ?>" name="su" style="float:left;" />
		<input type="button" class="fi" id="finish<?php echo $flag ?>" value="Finish" name="fi" style="float:right;" />
	</div>
<?php
		$flag++;
	}
?>
	</form>
	<div class="hidekar" id="list" style="margin:20px 10px 10px 20px;overflow:hidden;">
		<center><?php for ($i=1; $i<=15; $i++) { ?>
		<span class="qlist" id="q<?php echo $i ?>" style="margin:10px;background-color:#9C9;color:white;padding:10px 10px;cursor:pointer;text-align:center; border-radius:80%; font-size:1.2em;">
			<b><?php if ($i<10) echo "0".$i; else echo $i; ?></b>
		</span>
		<?php } ?>
		</center>
	</div>
</div>






</div>



<?php
	
	include('foot.php');
?>


</body>

</html>
