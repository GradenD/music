	//добавление музыки в плейлист 
	$('#music-list').on('click', 'div', function(e){
		var musicid = $(this).data("config");
        /*console.log(musicid);*/
        /* Добавление музыки */
		if ($(this).find('.fa-plus').length > 0) {
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
        }
        /* Удавление музыки */
		if ($(this).find('.fa-times').length > 0) {
			$(this).find('i').removeClass('fa-times');
            $(this).find('i').addClass('fa-check');
            $.ajax({
                url: 'library/dl-music-pr.php',
                type: "POST",
                data: { musicid : musicid },
                success: function(data) {
                    $('#add-otevet').html(data);
                }
            });
            $(this).find('i').parents('div li').css('display','none');
        }
        /* Повтор музыки */
        if ($(this).find('.fa-redo').length > 0) {
            if ($(this).find('.repeat-active').length > 0) {
                $(this).find('i').removeClass('repeat-active');
            }else{
                $(this).find('i').addClass('repeat-active');
            }
        }
	}); 