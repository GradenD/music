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

    new jPlayerPlaylist({
        jPlayer: "#jquery_jplayer_1",
        cssSelectorAncestor: "#jp_container_1"
    }, 
        [
            {
                title:"3D - 19",
                artist:"Obladaet",
                mp3:"music/Obladaet - 3D19.mp3",   
                poster: "img/music/obladaet.jpg" 
            },

            {
                title:"B.I.D",
                artist:"Markul",
                mp3:"music/Markul - B.I.D.mp3",   
                poster: "img/music/markul.jpg" 
            },

            {
                title:"Скалы",
                artist:"Markul",
                mp3:"music/Markul - Скалы.mp3",   
                poster: "img/music/masrk-skall.jpg" 
            },

            {
                title:"Mirrors",
                artist:"MARKUSPHOENIX",
                mp3:"music/MARKUSPHOENIX - Mirrors.mp3",   
                poster: "img/music/markus.jpg" 
            },

            {
                title:"Let Go",
                artist:"Beau Young Prince",
                mp3:"music/Beau Young Prince - Let Go.mp3",   
                poster: "img/music/let-go.jpg" 
            },

            {
                title:"Речная Часть",
                artist:"Mnogoznaal",
                mp3:"music/Mnogoznaal - Речная Часть.mp3",   
                poster: "img/music/mnogo.jpg" 
            },

            {
                title:"На Луне",
                artist:"Pharaoh",
                mp3:"music/Pharaoh - На Луне.mp3",   
                poster: "img/music/pharaoh_lune.jpg" 
            },
        ], 
        {
            supplied: "webmv, ogv, m4v, oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true
        }
    );

    $('#music-list li').click(function() {
        console.log('click');
        $(this).append(
            $('<div>', {
                'text': 'Текст...'
            })
        );
    });
});