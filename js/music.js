$(document).ready(function(){

    let i = 0;
    trend= $('#songs-content .songs-block');
    length =   trend.length;
    console.log(length);
    
    //ширина экрана
    var obj1 = document.getElementById('devise');
    if(getComputedStyle(obj1).display == 'none'){
        col = 1;
    }
    else{
        col = 1;
    }

    //загрузка галереи 
	$.each(trend, function(){
        //первый и последний элемент
        if (i == 0) {
            $(this).attr('id', 'trend-perv');
        }
        if (i == length - 1) {
            $(this).attr('id', 'trend-last');
        }
        //видимый и невидимый
        if (i >=  col) {
            $(this).addClass('songs-none');
        }else{
            $(this).addClass('songs-active');
            $(this).addClass('animate');
        }
        i = i + 1;
    });
});

$('#popular-right').click(function(){
    let i = 0; //шаг
    let x = 0;
    if($('#trend-last').hasClass('songs-none')){
	    $.each(trend, function(){
            //активный блок
            if(this.classList.contains('songs-none') && (i == 1) && (x < 1)){
                x = x + 1;
                $(this).removeClass('songs-none');
                $(this).addClass('songs-active');
                $(this).addClass('animate');
                console.log("acriv");
            }
            if(this.classList.contains('songs-active')){
                i = i + 1;
            }
            //скрытый блок
            if (i >= 1 && i < 2) {
                $(this).removeClass('songs-active');
                $(this).addClass('songs-none');
                $(this).removeClass('animate');
                console.log("none");
            }
        });
    }
});

$('#popular-left').click(function(){
    let i = 0;
    let x = 0;
    if($('#trend-perv').hasClass('songs-none')){
	    $($(trend).get().reverse()).each(function(){
            if(this.classList.contains('songs-none') && (i == 1) && (x < 1)){
                x = x + 1;
                $(this).removeClass('songs-none');
                $(this).addClass('songs-active');
                $(this).addClass('animate');
                // console.log('trend ' + x);
            }
            if(this.classList.contains('songs-active')){
                i = i + 1;
            }
            if (i >= 1 && i < 2) {
                $(this).removeClass('songs-active');
                $(this).addClass('songs-none');
                $(this).removeClass('animate');
            }
        });
    }
});

//загрузка блока новых релизов
$('#relize-load').click(function(){
	$.ajax({
	  	type: "POST",
	  	url: 'pages/new-relaze.php',
	  	success: function(data) {
            for (let i = 0; i < 2; i++) {
                $('#relize').append(data);
            }
	  	}
	});
});