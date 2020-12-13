$(document).ready(function(){ // функция будет выполнена при полной загрузке страницы
	$('#pr').click();
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