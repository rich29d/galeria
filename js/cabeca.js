// JavaScript Document

$(document).ready(function(e) {
    
	
	/*-------------------------------------------------------------upLoad automatico Foto*/
	$('#inputUpLoad').change(function(e){ 
	
		$('#contLoadingUpLoad').fadeIn();
		
		$('#formArq').ajaxForm({
			uploadProgress: 
				function(event, position, total, percentComplete) {
					$('#loadingUpLoad')
					.css({'width':Number(percentComplete-2)+'%'})
					.html(percentComplete+'%');
				},
			success: 
				function(data) {
					$('#contItens').prepend(data);
					$('#contLoadingUpLoad').fadeOut();
					$('#loadingUpLoad').css({'width':'0%'});
					setTimeout(function(){ 
					
						$('.novoItem').css({'transform':'scale(1)'});
					
					}, 1000);
					
					setTimeout(function(){ 
					
						$('.erro')
						.css({'transform':'scale(0)'})
						.fadeOut();
					
					}, 5000);
					
				}   
		}).submit(); 
		 
	 });
	 
	 
	 
	 /*-------------------------------------------------------------exibição*/
	 
	 
	 $('#btLAL').click(function(e) {
        
		$(this)
		.children('.quadBtExibLAL')
		.css({'background':'#FFF'});
		
		$('.quadBtExibCas').css({'background':'#758cbe'});
		
		$('.contItemLis')
		.addClass('contItemLAL')
		.removeClass('contItemLis');
		
		$('#formArq').attr('action','insereImagem.php?pasta=upLoad&class=contItemLAL');
		
    });
	
	 $('#btCas').click(function(e) {
        
		$(this)
		.children('.quadBtExibCas')
		.css({'background':'#FFF'});
		
		$('.quadBtExibLAL').css({'background':'#758cbe'});
		
		$('.contItemLAL')
		.addClass('contItemLis')
		.removeClass('contItemLAL');
		
		$('#formArq').attr('action','insereImagem.php?pasta=upLoad&class=contItemLis');
		
    });
	 
	 
	 
	 
	
	
});