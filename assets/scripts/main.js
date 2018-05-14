/**
 * scripts.js
 */
(function($) {
	$( document ).ready(function() {

		$('.btn-filtro').on('click', function(e){
			e.preventDefault();
			var classe = $(this).attr('data-class');
			if( classe == "todos" ){
				$('.item-trabalho').show(100);
			}else{
				$('.item-trabalho').hide(100);
				$('.item-trabalho.'+classe).show(100);
			}
		});
		
	});
})(jQuery);