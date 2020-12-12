$('#form-auth').submit(function(){
    $.ajax({
        type:'POST',
        url:'library/user.php',
        data:$(this).serialize(),
        success:function(data){
            $('#php-otvet').html(data);
            if (data == "Вы вошли в систему!</br> Через несколько секунд вы будете перенаправлены на главную страницу сайта!") {
                location='index.php';
            }
        }
     });
 });