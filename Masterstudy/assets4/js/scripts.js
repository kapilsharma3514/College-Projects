
jQuery(document).ready(function() {
	

	
	
	
	function validateEmail(sEmail) {
var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
if (filter.test(sEmail)) {
return true;
}
else {
return false;
}
}


    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/1.jpg");
    
    /*
        Login form validation
    */
    $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.login-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
				$("#er1").text('Please fill highlighted field..');
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
				
    		}
    	});
    	
    });
    
    /*
        Registration form validation
    */
    $('.registration-form input[type="text"], .registration-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.registration-form').on('submit', function(e) {
    	var sEmail = $('#form-email').val();
    	$(this).find('input[type="text"],#form-about-yourself').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
				$("#er").text('Please fill highlighted field..');
    			$(this).addClass('input-error');
				$flag=0;
    		}
			
			else if(!validateEmail(sEmail)){
				e.preventDefault();
				$("#er").text('Incorrect Email...');
				$("#form-email").addClass('input-error').css(background-color,red);
				
				}
			
    		else {
    			$(this).removeClass('input-error');
				
    		}
    	});
	
    
    });
	
    
    
});

