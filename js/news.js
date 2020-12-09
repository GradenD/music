$('.tags').click(function(){
	$('.tags').removeClass('tags-avtive');
    $(this).addClass('tags-avtive');
});

$('#load').click(function(){
	$.ajax({
	  	type: "POST",
	  	url: 'pages/news-config.php',
	  	success: function(data) {
            for (let i = 0; i < 1; i++) {
                $('#load-block').append(data);
            }
	  	}
	});
});