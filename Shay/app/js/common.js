$(function() {

	$('#my-menu').mmenu({
		extensions: [ 'pagedim-black', 'effect-menu-slide' ],
		offCanvas: {
			position: 'right'
		}		
	});
	
	var api = $('#my-menu').data('mmenu');
	api.bind('opened', function() {
		$('.hamburger').addClass('is-active');
	}).bind('closed', function() {
		$('.hamburger').removeClass('is-active');
	});

	$("#selectize , #i-plan-to , #proper-type").selectize();

  $('#licensed-in').selectize({
      plugins: ['remove_button'],
      delimiter: ',',
      persist: false,
      create: function(input) {
          return {
              value: input,
              text: input
          }
      }
  });
  
  $('.selectize-input input').prop('disabled', true);

});

