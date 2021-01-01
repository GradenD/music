$(document).ready(function(){
	$('.preloader').fadeOut();

	$('.carouselExampleIndicators').carousel({
		interval: 5000
	});

	[].forEach.call(document.querySelectorAll('img[data-src]'), function(img)
	{
    	img.setAttribute('src', img.getAttribute('data-src'));
    	img.onload = function() {
    		img.removeAttribute('data-src');
 		};
	});

	
	//добавление музыки в плейлист 
	$('#music-list').on('click', 'div', function(e){
		var musicid = $(this).data("config");
		/*console.log(musicid);*/
		$(this).find('i').removeClass('fa-plus');
		$(this).find('i').addClass('fa-check');
		$.ajax({
			url: 'library/add-music-avtor.php',
			type: "POST",
			data: { musicid : musicid },
			success: function(data) {
				$('#add-otevet').html(data);
			}
		});
	}); 
});