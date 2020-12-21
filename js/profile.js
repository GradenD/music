$(document).ready(function(){ // функция будет выполнена при полной загрузке страницы
	$('#pr').click();
	$('#sounds-all').click();
});

$('.block-config').click(function(){
	$('.param').removeClass('confg-active');
	$(this).find(".param").addClass('confg-active');
});

$('.param').click(function(){
	$.ajax({
        type: "POST",
        url: $(this).attr("formaction"),
	  	success: function(data) {
            $('#info-user').html(data);
	  	}
	});
});

$('.recordings').click(function(){
	$('.recordings').removeClass('record-active');
	$(this).addClass('record-active');
});

$('.recordings').click(function(){
	$.ajax({
        type: "POST",
        url: $(this).attr("formaction"),
	  	success: function(data) {
            $('#music-action').html(data);
	  	}
	});
});