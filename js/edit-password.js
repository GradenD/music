$('#form-auth').submit(function(){
    $.ajax({
        type:'POST',
        url:'library/edit-password.php',
        data:$(this).serialize(),
        success:function(data){
            $('#php-otvet').html(data);
            if (data == "Все Ок!") {}
        }
     });
 });