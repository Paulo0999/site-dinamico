$(function(){
	$('nav.mobile').click(function(){


	    var listaMenu = $('nav.mobile ul');
	    if(listaMenu.is(':hidden') == true){
	    listaMenu.fadeIn();
		}
	    else{
	    	listaMenu.fadeOut();
	    }
	});

	if ($('target').length > 0) {
		//o elemento existe por tando vai dar excroll
		var elemento = '#'+$('target').attr('target');
		var divscroll = $(elemento).offset().top;
		$('html,body').animate({scrolltop:divscroll},2000);
	}
})
