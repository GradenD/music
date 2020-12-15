$('#form-auth').submit(function(){
    $.ajax({
        type:'POST',
        url:'library/register.php',
        data:$(this).serialize(),
        success:function(data){
            $('#php-otvet').html(data);
            if (data == "Вы успешно зарегистрированны!") {
                location='index.php';
            }
        }
     });
 });