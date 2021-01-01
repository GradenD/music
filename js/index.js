$(document).ready(function(){

    let i = 0;
    let trend= $('#trend-albums .trend-column');
    length =  $("#trend-albums .trend-column").length;
    
    //ширина экрана
    var obj1 = document.getElementById('devise');
    if(getComputedStyle(obj1).display == 'none'){
        col = 2;
    }
    else{
        col = 4;
    }

    //загрузка галереи 
	$.each(trend, function(){
        i = i + 1;
        //первый и последний элемент
        if (i == 1) {
            $(this).attr('id', 'trend-perv');
        }
        if (i == length) {
            $(this).attr('id', 'trend-last');
        }
        //видимый и невидимый
        if (i >  col) {
            $(this).addClass('trend-none');
        }else{
            $(this).addClass('trend-active');
            $(this).addClass('animate');
        }
    });
});

$('#trend-right').click(function(){
    let i = 0; //шаг
    let x = 0;
    let trend= $('#trend-albums .trend-column');
    if($('#trend-last').hasClass('trend-none')){
	    $.each(trend, function(){
            if(this.classList.contains('trend-active')){
                i = i + 1;
            }
            //скрытый блок
            if (i >= 1 && i < 2) {
                $(this).removeClass('trend-active');
                $(this).addClass('trend-none');
                $(this).removeClass('animate');
            }
            //активный блок
            if(this.classList.contains('trend-none') && (i > 1) && (x < 1)){
                x = x + 1;
                $(this).removeClass('trend-none');
                $(this).addClass('trend-active');
                $(this).addClass('animate');
            }
        });
    }
});

$('#trend-left').click(function(){
    let i = 0;
    let x = 0;
    let trend= $('#trend-albums .trend-column');
    if($('#trend-perv').hasClass('trend-none')){
	    $($(trend).get().reverse()).each(function(){
            if(this.classList.contains('trend-active')){
                i = i + 1;
            }
            if (i >= 1 && i < 2) {
                $(this).removeClass('trend-active');
                $(this).addClass('trend-none');
                $(this).removeClass('animate');
            }
            if(this.classList.contains('trend-none') && (i > 1) && (x < 1)){
                x = x + 1;
                $(this).removeClass('trend-none');
                $(this).addClass('trend-active');
                $(this).addClass('animate');
                // console.log('trend ' + x);
            }
        });
    }
});







//плейлист popular
$(document).ready(function(){
    $('#music-list li').click(function() {
        console.log('click');
        $(this).append(
            $('<div>', {
                'text': 'Текст...'
            })
        );
    });
});