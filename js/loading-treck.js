$("#file-sounds").change(function(){
    var files = this.files;
    for (var i = 0; i < files.length; i++) {
        readSOUNDS(files[i]);
    }
});

$("#file-poster").change(function(){
    readPOSTER(this);
    var files = this.files;
    for (var i = 0; i < files.length; i++) {
        posterText(files[i]);
    }
});


// превью трека
function readSOUNDS(file) {
    $('#info-file').html(file.name);
    $('#info-file2').val(file.name);
}

//превью постера
function readPOSTER(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#poster').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function posterText(file) {
    $('#poster-otvet').html(file.name);
    $('#poster-otvet2').val(file.name);
}


// загрузка трека и постера на сервер 
$('#form-add').submit(function(){
    // var poster
    var file_poster= $('#file-poster').prop('files')[0];
    var form_poster = new FormData();
    // var sound
    var file_sound= $('#file-sounds').prop('files')[0];
    var form_sound = new FormData();

    if(file_sound != undefined){
        if (($("#artist").val().length != 0) && ($("#tytle-treck").val().length != 0)) {
            //poster
            form_poster.append('file', file_poster);
            $.ajax({
                url: 'library/load-poster.php',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_poster,
                type: 'post'
            });
            //sound
            form_sound.append('file', file_sound);
            $.ajax({
                url: 'library/load-sounds.php',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_sound,
                type: 'post'
            });
            //добавление в бд
            $.ajax({
                type:'POST',
                url:'library/add-sound-user.php',
                data:$(this).serialize(),
                success:function(data){
                    $('#add-otvet').html(data);
                }
            });
        }else{
            $('#add-otvet').html("Заполните все поля!");
        }
    }else{
        $('#add-otvet').html("Выберите аудиозапись!");
    }
});