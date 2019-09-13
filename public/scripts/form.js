$(document).ready(function() {
	$('form').submit(function(event) {
		var json;
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
				json = jQuery.parseJSON(result);
				console.log(json.message)
				if (json.status == 'success')
				{
					$("#link").css("display", "block");
					$("#form_id").css("display", "none");
					$("#link").append( "<a href='"+json.message+"'>Тут ссылка на созданный элемент</a>");
				}
				else
				{
					$("#error").css("display", "block");
					$("#error").text(json.message)
				}
				
			},
		});
	});
});