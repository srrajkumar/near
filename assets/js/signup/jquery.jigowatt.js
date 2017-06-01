
jQuery(document).ready(function(){

	$('#contactform').submit(function(){

		var action = $(this).attr('action');
		var verify = '';
		$("#message").slideUp(750,function() {
		$('#message').hide();

 		$('#submit')
			.after('<img src="../assets/images/ajax-loader.gif" class="loader" />')
			.attr('disabled','disabled');
var $boxes = $('input[name=verify]:checked');
$boxes.each(function(){
    verify = 'yes';
});
		$.post(action, {
			name: $('#name').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			company: $('#company').val(),
			country: $('#country').val(),
			find: $('#find').val(),
			comments: $('#comments').val(),
			verify: verify
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				$('#message').slideDown('slow');
				$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
				$('#submit').removeAttr('disabled');
				if(data.match('success') != null) $('#contactform').slideUp('slow');

			}
		);

		});

		return false;

	});

});

(function($){
	
	"use strict";
	
    $(document).ready(function(){
		
		/* Parallax Effect
		================================================== */
		$('.parallax .parallax-banner-1').parallax("50%", 0.2);
		$('.newsletter').parallax("50%", 0.2);

	});
})(jQuery);