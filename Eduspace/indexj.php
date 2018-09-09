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
  <link href='https://fonts.googleapis.com/css?family=Play|Orbitron:700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'><link type="text/javascript" href="script/home.js">
<link rel="icon" href="images/icon.png">

<style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

.pac-container {
  font-family: Roboto;
}

#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}

#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}
 #target {
        width: 345px;
      }
    </style>
  
<script language="javascript">
function log_me_out() {
		window.location.href="log_me_out.php";
	}
</script>
<script src="script/jquery-1.11.3.min.js">
</script>
<script>





		var flag=0;
		var flag1=1;
	
	$(document).ready(function(){
		
		var childInputHasFocus = false;
		var childInputHasFocus2 = false;
		var childInputHasFocus3 = false;
		var childInputHasFocus4 = false;
	if(flag1==1){
		$("#sr").addClass('but_srch_active');
		$("#mp").removeClass('but_srch_active');
		}
		
	if(flag==1){
		$("#sr").removeClass('but_srch_active');
		$("#mp").addClass('but_srch_active');
		}
	
	$("#mp").click(function(){
		$("#sb").hide(700);
		$("#map").show(700);
	
	
	
	
	
	
		
		
		$("#sr").removeClass('but_srch_active');
		$("#mp").addClass('but_srch_active');
		
		
		
		
		});	
		
	$("#sr").click(function(){
		$("#map").hide(700);
		$("#sb").show(700);
		$("#sr").addClass('but_srch_active');
		$("#mp").removeClass('but_srch_active');
		
		});		
		

    $(window).scroll(function(){
		var scrollTop=$(window).scrollTop();
		var height= $(window).height();
		$(".Search_box").css({'opacity': ((height-scrollTop)/height)});
		
		});


		
	 $(window).scroll(function() { 
        var scroll = $(window).scrollTop();
		var scrol = $(window).scrollTop();
 
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
		
		if(scrol>200)
		{$(".bounce").removeClass('arrow');}
		else if(scrol<150)
		{$(".bounce").addClass('arrow');}
    });
	
	
	$("#Login").click(function(){
		$(".lul").toggle();
	});
		
		
		
		$(".ps").hover(function(){
			$("#kin").slideDown();
  
  $("#Search_button1").click(function(e){
if($("#ss1").val()==''){
$("#emsg1").html("Search field is blank.");
$("#lp1").fadeIn();
e.preventDefault();
	
}
else if($("#options1").val()=='')
{$("#lp1").fadeIn();
$("#emsg1").html("Search by option not selected.");
e.preventDefault();
}});
			
			
		}, function(){
			if (!childInputHasFocus) {
            	$("#kin").slideUp();
				$("#lp1").fadeOut();
        	}
		});		
		$(".sbox", this)
        .focus(function(){
            childInputHasFocus = true;
			$("#kinder").slideUp();
		$("#sch").slideUp();
		$("#coll").slideUp();
        })
        .blur(function(){
            childInputHasFocus = false;
        });
		
		
		$(".kg").hover(function(){
			$("#kinder").slideDown();
									$("#Search_button2").click(function(e){
if($("#ss2").val()==''){
	$("#emsg2").html("Search field is blank.");
	$("#lp2").fadeIn();
e.preventDefault();	

}
else if($("#options2").val()=='')
{$("#lp2").fadeIn();
$("#emsg2").html("Search by option not selected.");
e.preventDefault();
}});
		
		}, function(){
			if (!childInputHasFocus2) {
				$("#kinder").slideUp();
				$("#lp2").fadeOut();
			}
		});
		$(".sbox2", this)
        .focus(function(){
            childInputHasFocus2 = true;
      	$("#kin").slideUp();
		$("#sch").slideUp();
		$("#coll").slideUp();
	    })
        .blur(function(){
            childInputHasFocus2 = false;
        });

		
		$(".sc").hover(function(){
			$("#sch").slideDown();
						$("#Search_button3").click(function(e){
if($("#ss3").val()=='')
{$("#emsg3").html("Search field is blank.");
	$("#lp3").fadeIn();
e.preventDefault();	

}
else if($("#options3").val()=='')
{$("#lp3").fadeIn();
$("#emsg3").html("Search by option not selected.");
e.preventDefault();
}});
			
		}, function(){
			if (!childInputHasFocus3) {
				$("#sch").slideUp();
			$("#lp3").fadeOut();}
		});
		$(".sbox3", this)
        .focus(function(){
            childInputHasFocus3 = true;
			$("#kin").slideUp();
		$("#kinder").slideUp();
		$("#coll").slideUp();
        })
        .blur(function(){
            childInputHasFocus3 = false;
        });
	
		
		$(".co").hover(function(){
			$("#coll").slideDown();
									$("#Search_button4").click(function(e){
if($("#ss4").val()==''){
	$("#emsg4").html("Search field is blank.");
	$("#lp4").fadeIn();
e.preventDefault();	



}
else if($("#options4").val()=='')
{$("#lp4").fadeIn();
$("#emsg4").html("Search by option not selected.");
e.preventDefault();
}});
		
		}, function(){
			if (!childInputHasFocus4) {
				$("#coll").slideUp();
			$("#lp4").fadeOut();}
		});
		$(".sbox4", this)
        .focus(function(){
            childInputHasFocus4 = true;
			$("#kin").slideUp();
		$("#sch").slideUp();
		$("#kinder").slideUp();
        })
        .blur(function(){
            childInputHasFocus4 = false;
        });
		
	});


</script>
 <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 500px;
		width: 100%;
      }
    </style>

<title>EduSpace</title>

</head>

<body>


<?php
	include('head.php');
?>



<div id="faltu" class="container-fluid" style="height: auto;">
<div id="sr" class="button_search container-fluid" >
<p style="  font-size:16px; ">Search</p></div>

<div id="mp" class="button_search container-fluid" >
<p style= " font-size:16px; ">Maps</p>

</div>

<input id="pac-input" class="controls" type="text" placeholder="Search Box">
<div id="map" class="container-fluid" style="display:none;" ></div>
<script>
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -33.8688, lng: 151.2195},
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

var infoWindow = new google.maps.InfoWindow({map: map});

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('You are here..');
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // [START region_getplaces]
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
  // [END region_getplaces]
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKLsUNn3cMpHaWuMbFL9VtkJwZMOws4tI&libraries=places&callback=initAutocomplete"
         async defer></script>






<div class="Search_box" id="sb">
  
  <div class="a1 ps">
    <div id="kin" style="display:none;">
        <div class="Srch1 Srch" >
<form method="post">        
            <select id="options1" class="sbox optn" name="opt">
            <option selected="selected" hidden="hidden" value="">Search By</option>
            <option value="name">Name</option>
            <option value="localty">Localty</option>
            <option value="pincode">Pin Code</option>
           </select>
   <div class="inpt">
           <input type="text" placeholder="Search..."  name="playbox" width="100%" height="50%" class="sbox ss " id="ss1">
           <button type="submit" class="Search_button" id="Search_button1" name="su">
        <span class="glyphicon glyphicon-search"></span>
        </button>
          <input type="hidden" name="category" value="playschool">
  </form><div class="err container has-error" id="lp1" style="display:none;"><span class="glyphicon glyphicon-alert">
  <span id="emsg1"></span></span></div>
   </div>
   <?php
		if (isset($_POST["su"]))
		{
			$var1=$_POST["opt"];
			$var2=$_POST["playbox"];
			echo "<script>window.location.href='search.php?x=$var1&y=$var2&z=1'</script>";
		}
   ?>
   
  </div> 
 </div>
  <div id="Pl">  <center>Playschool</center></div>
 </div>
 
    <div class="a1 kg">
     <div id="kinder" style="display:none;">
    <div class="Srch2 Srch">
    <form method="post">
   <select id="options2" class="sbox2 optn" name="opt1">
   <option selected="selected" disabled="disabled" hidden="hidden">Search By</option>
    <option value="name">Name</option>
    <option value="localty">Localty</option>
    <option value="pincode">Pin Code</option>
   </select>
    <div class="inpt">
           <input type="text" placeholder="Search..."  name="kgbox" width="100%" height="50%" class="sbox2 ss" id="ss2">
           <button type="submit" class="Search_button" id="Search_button2" name="su1">
          <span class="glyphicon glyphicon-search"></span>
        
        </button>  <input type="hidden" name="category" value="kindergarten">
       </form>  <div class="err container has-error" id="lp2" style="display:none;"><p><span class="glyphicon glyphicon-alert"> <span id="emsg2"></span></span></p></div>
	<?php
		if (isset($_POST["su1"]))
		{
			$var1=$_POST["opt1"];
			$var2=$_POST["kgbox"];
			echo "<script>window.location.href='search.php?x=$var1&y=$var2&z=2'</script>";
		}
	?>
   </div>
   </div>
   </div>
    <div id="P1"><center>Kindergarten</center></div>
    </div>
    
    <div class="a1 sc">
    <div id="sch" style="display:none;">
    <div class="Srch3 Srch">
    <form method="post">
    <select id="options3" name="opt2" class="sbox3 optn">
    <option selected="selected" disabled="disabled" hidden="hidden">Search By</option>
    <option value="name">Name</option>
    <option value="localty">Localty</option>
    <option value="pincode">Pin Code</option>
    </select>
    <div class="inpt">
           <input type="text" placeholder="Search..." name="schoolbox" width="100%" height="50%" class="sbox3 ss" id="ss3"><button type="submit" id="Search_button3" class="Search_button" name="su2">
           
          <span class="glyphicon glyphicon-search"></span>
          
        </button>
          <input type="hidden" name="category" value="school">
        </form>
         <div class="err container has-error" id="lp3" style="display:none;"><p><span class="glyphicon glyphicon-alert"><span id="emsg3"></span></span></p></div>
   </div>
   <?php
		if (isset($_POST["su2"]))
		{
			$var1=$_POST["opt2"];
			$var2=$_POST["schoolbox"];
			echo "<script>window.location.href='search.php?x=$var1&y=$var2&z=3'</script>";
		}
	?>
  
    </div>
     </div>
     
    <div id="P1"><center>School</center></div></div>
    
    <div class="a1 co">
    <div id="coll" style="display:none;">
    <div class="Srch4 Srch">
    <form method="post"><select id="options4" name="opt3" class="optn">
    <option selected="selected" disabled="disabled" hidden="hidden">Search By</option>
    <option value="name">Name</option>
    <option value="localty">Localty</option>
    <option value="pincode">Pin Code</option>
    </select>
     <div class="inpt">
           <input type="text" name="collegebox" placeholder="Search..." width="100%" height="50%" class="sbox4 ss" id="ss4"><button type="submit" class="Search_button" id="Search_button4" name="su3">
          <span class="glyphicon glyphicon-search"></span>
        </button>
          <input type="hidden" name="category" value="college">
        
        </form>  <div class="err container has-error" id="lp4" style="display:none;"><p><span class="glyphicon glyphicon-alert"> <span id="emsg4"></span></span></p></div>
     <?php
		if (isset($_POST["su3"]))
		{
			$var1=$_POST["opt3"];
			$var2=$_POST["collegebox"];
			echo "<script>window.location.href='search.php?x=$var1&y=$var2&z=4'</script>";
		}
	 ?>        
   </div></div>
    </div>
    <div id="P1"><center>College</center></div></div>

<a href="#hc"><div class="arrow bounce" ></div></a>
</div>

</div>

<div class="tex">
<div class="showoff container-fluid" >
<div class="img1">
<center><img src="images/3.png" class="ig"><br>
<div class="tex1">Where Learning Begins</div></center>
</div>
<div class="img1">
<center><img src="images/2.png" class="ig" width="50%" height="50%">
<div class="tex1">School is a building which has four walls with tomorrow inside it.</div></center>
</div>
<div class="img1">
<center><img src="images/1.png" class="ig" width="50%" height="50%">
<div class="tex1">A college is a place where you explore and find yourself.</div></center>
</div>
<br><br><br>

<div class="container-fluid">
<br>

"A child is not an empty vessel to be filled, <br>but a fire to be lit"
</div>
</div>
</div>

<script>
window.addEventListener('scroll',para);
function para(){
	var ypos,img;
	ypos=window.pageYOffset;
	img=document.getElementById('faltu');
	img.style.top= ypos*0.8+'px';}
</script>


<div class="" style="">
<?php
	include('prefooter.php');
?>

</div>
<div class="main_footer">
<?php
	include('foot.php');
?>


</body>

</html>
