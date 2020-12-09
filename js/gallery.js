$('#load').click(function(){
	$.ajax({
	  	type: "POST",
	  	url: 'pages/gallery-img.php',
	  	success: function(data) {
            for (let i = 0; i < 1; i++) {
                $('#load-block').append(data);
            }
	  	}
	});
});