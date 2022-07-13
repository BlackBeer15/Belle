$(document).ready(function () {
	$('#myFootForm').submit(function () {
		var th = $(this);
		if (document.fForm.name.value =='' || document.fForm.email.value =='' || document.fForm.date.value =='') {
			swal({
			  	title: "Упс...",
			  	text: "Поля не должны быть пустыми!",
			  	icon: "error",
			  	button: "Ок",
			});
		} else {
			$.ajax({
				type: 'POST',
				url: '../php/sendfoot.php',
				data: $(this).serialize()
			}).done(function () {
				swal({
			  		title: "Готово!",
			  		text: "Ваш ЧЕК-ЛИСТ НЕВЕСТЫ уже отправлен на вашу почту :)",
			  		icon: "success",
			  		button: "Ок!",
				});
				setTimeout(function() {
					th.trigger("reset");
				}, 1000);
			});
		}
		return false;
	});
});