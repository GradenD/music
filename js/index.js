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








$(document).ready(function(){

    new jPlayerPlaylist({
    jPlayer: "#jquery_jplayer_1",
    cssSelectorAncestor: "#jp_container_1"
    }, [
    {
    title:"Cro Magnon Man",
    mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
    oga:"http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
    },
    {
    title:"Your Face",
    mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
    oga:"http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg"
    },
    {
    title:"Cyber Sonnet",
    mp3:"http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
    oga:"http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg"
    },
    {
    title:"Tempered Song",
    mp3:"http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3",
    oga:"http://www.jplayer.org/audio/ogg/Miaow-01-Tempered-song.ogg"
    },
    {
    title:"Hidden",
    mp3:"http://www.jplayer.org/audio/mp3/Miaow-02-Hidden.mp3",
    oga:"http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg"
    },
    {
    title:"Lismore",
    mp3:"http://www.jplayer.org/audio/mp3/Miaow-04-Lismore.mp3",
    oga:"http://www.jplayer.org/audio/ogg/Miaow-04-Lismore.ogg"
    },
    {
    title:"The Separation",
    mp3:"http://www.jplayer.org/audio/mp3/Miaow-05-The-separation.mp3",
    oga:"http://www.jplayer.org/audio/ogg/Miaow-05-The-separation.ogg"
    },
    {
    title:"Thin Ice",
    mp3:"http://www.jplayer.org/audio/mp3/Miaow-10-Thin-ice.mp3",
    oga:"http://www.jplayer.org/audio/ogg/Miaow-10-Thin-ice.ogg"
    }
    ], {
    swfPath: "../../dist/jplayer",
    supplied: "oga, mp3",
    wmode: "window",
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true
    });
   });