/**
 * scripts.js
 */
(function($) {
	$( document ).ready(function() {

		$('.btn-filtro').on('click', function(e){
			e.preventDefault();
			var classe = $(this).attr('data-class');
			$('.btn-filtro').removeClass('active');
			$(this).addClass('active');
			if( classe == "todos" ){
				$('.item-trabalho').show(100);
			}else{
				$('.item-trabalho').hide(100);
				$('.item-trabalho.'+classe).show(100);
			}
		});

		/*
		 * Modal Trabalho 
		 * Next e Prev
		 */
		 var contTrabalhos = $('.thumbnail').length;
		$('.thumbnail').on('click',function(){
		    $('.modal-body').empty();
		    var title = $(this).attr("title");
		    $('.modal-title').html(title);
		    $($(this).parents('div').html()).appendTo('.modal-body');
		    $('#myModal').modal({show:true});
		});

		$('#next-btn').on('click',function() {
		    var number = $('.modal-body a').attr('data-modal');
		    console.log(number);
		    console.log( contTrabalhos );
		    if( number < contTrabalhos ) {
		    	number++;
		    	$('.modal-body').html( $('a[data-modal="'+number+'"]').parents('div').html() );
		    	$('.modal-title').text( $('a[data-modal="'+number+'"]').attr('title') );
		    }
		});

		$('#prev-btn').click(function() {
		    var number = $('.modal-body a').attr('data-modal');
		    console.log(number);
		    console.log( contTrabalhos );
		    if( number <= contTrabalhos && number > 1 ) {
		    	number--;
		    	$('.modal-body').html( $('a[data-modal="'+number+'"]').parents('div').html() );
		    	$('.modal-title').text( $('a[data-modal="'+number+'"]').attr('title') );
		    }
		});
	});
})(jQuery);