$('.form button').click(function() {
	var link = $(this).data('url');
	

	$.ajax({
		type: 'POST',
		url: 'ajax.php',
		data: { url_article: link },
		success: function(data) {
			$('button[data-url="'+link+'"]').html('Vous aimez');
			$('button[data-url="'+link+'"]').attr('disabled');
		}
	}); 
});