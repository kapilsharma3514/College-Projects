
function scroll_to_class(chosen_class) {
	var nav_height = $('nav').outerHeight();
	var scroll_to = $(chosen_class).offset().top - nav_height;

	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 1000);
	}
}


jQuery(document).ready(function() {

	/*
	    Fullscreen background
	*/
	$.backstretch("assets1/img/backgrounds/2.jpg");
	/*
	    Multi Step Form
	*/
	$('.msf-form form fieldset:first-child').fadeIn('slow');
$('#weight').prop('disabled',true).css('background-color','grey').css('cursor','default');
	$('#height').on('change',function(){
		 var selectedValue = $(this).val();
		if(selectedValue=='cat')
		{
			$('#weight').val('cat').prop('hidden',false);
		$('#weight').prop('disabled','true');
		$('#weight').css('cursor','default');}
		else if(selectedValue=='gate')
		{$('#weight').css('background-color','');
		$('#weight').prop('disabled',false);
		$('#weight').val('');
		}
		});
		
		
	$('#eer').show();
	$('#eer1').show();
			$('#ece_math').hide();
		$('#ec').hide();
		$('#cse_math').hide();
		$('#cse').hide();
		$('#ece_math1').hide();
		$('#ec1').hide();
		$('#cse_math1').hide();
		$('#cse1').hide();
		$('#cat_qa').hide();
		$('#cat_da').hide();
		$('#cat_va').hide();
				$('#cat_qa1').hide();
		$('#cat_da1').hide();
		$('#cat_va1').hide();
		
		$('#height').on('change',function(){
		 var selectedValue1 = $(this).val();
		 if(selectedValue1=='cat')
	{$('#eer').hide();
	$('#eer1').hide();
			$('#ece_math').hide();
		$('#ec').hide();
		$('#cse_math').hide();
		$('#cse').hide();
		$('#ece_math1').hide();
		$('#ec1').hide();
		$('#cse_math1').hide();
		$('#cse1').hide();
		$('#cat_qa').show();
		$('#cat_da').show();
		$('#cat_va').show();
		
		$('#cat_qa1').show();
		$('#cat_da1').show();
		$('#cat_va1').show();
		}
		 });
		 
		 
$('#sub').prop('disabled',true);
$('#sub').click(function(){
	if($('#sub').prop('disabled')==true)
	{window.alert('Please agree to Terms and Conditions to proceed');
		}
	});
		 
	$('#term').on('change',function(){	 if($('#term').prop('checked')==true)
		 {$('#sub').prop('disabled',false);
			 }});
		
$('#weight').on('change',function(){
		 var selectedValue = $(this).val();
	
		 if(selectedValue=='cse')
		{$('#cse').show();
		$('#cse_math').show();
		$('#ece_math').hide();
		$('#ec').hide();
		$('#eer').hide();
			$('#eer1').hide();
		$('#cse1').show();
		$('#cse_math1').show();
		$('#ece_math1').hide();
		$('#ec1').hide();
		
				$('#cat_qa').hide();
		$('#cat_da').hide();
		$('#cat_va').hide();		$('#cat_qa1').hide();
		$('#cat_da1').hide();
		$('#cat_va1').hide();	}
		else if(selectedValue=='ece')
		{$('#cse').hide();
		$('#cse_math').hide();
		$('#ece_math').show();
		$('#ec').show();
		$('#eer').hide();
			$('#eer1').hide();
		$('#cse1').hide();
		$('#cse_math1').hide();
		$('#ece_math1').show();
		$('#ec1').show();
				$('#cat_qa').hide();
		$('#cat_da').hide();
		$('#cat_va').hide();		$('#cat_qa1').hide();
		$('#cat_da1').hide();
		$('#cat_va1').hide();
			}	
			
		});
	
	$('.msf-form form .btn-next').on('click', function() {
		$(this).parents('fieldset').fadeOut(400, function() {
	    	$(this).next().fadeIn();
			scroll_to_class('.msf-form');
	    });
	});
	
	// previous step
	$('.msf-form form .btn-previous').on('click', function() {
		$(this).parents('fieldset').fadeOut(400, function() {
			$(this).prev().fadeIn();
			scroll_to_class('.msf-form');
		});
	});

});
