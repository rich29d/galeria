// JavaScript Document

$(document).ready(function(e) {
	
	
	$('.ok').click(function(e) {
		
		var inp = $('.campoSenha').val();
		
		if(inp == 'gal.123'){
        
			$('.login').css({'transform':'scale(1.5)'});
			$('.contLogin').fadeOut(400);
		
			
			$('#corpo').load('corpo.php');
			
			
			$('.load').each(function(index, element) {
				
				$(this).delay(Number(index)*300).fadeIn();
				
			});	
			
			
			
		}
		
	});
	
	
	
});