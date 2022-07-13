$(document).ready(function () {
	$('#myCallForm').submit(function () {
		var th = $(this);
		if (document.CallForm.fio.value =='' || document.CallForm.phoneNumber.value =='' || document.CallForm.time.value =='') {
			swal({
			  	title: "Упс...",
			  	text: "Поля не должны быть пустыми!",
			  	icon: "error",
			  	button: "Ок",
			});
		} else {
			$.ajax({
				type: 'POST',
				url: '../php/sendcall.php',
				data: $(this).serialize()
			}).done(function () {
				swal({
			  		title: "Готово!",
			  		text: "Мы позвоним вам в назначенное время!",
			  		icon: "success",
			  		button: "Ок!",
				});
				setTimeout(function() {
					th.trigger("reset");
				}, 1000);
				let mc = document.getElementById('myCall');
				mc.style.display = "none";
				html.style.overflow = "auto";
			});
		}
		return false;
	});
});