$(document).ready(function () {
	$('#myReservForm1').submit(function () {
		var th = $(this);
		if (document.ReservForm.fiores.value =='' || document.ReservForm.area.value =='' || document.ReservForm.phoneres.value =='' || document.ReservForm.phoneres.value =='dateweed') {
			swal({
			  	title: "Упс...",
			  	text: "Поля не должны быть пустыми!",
			  	icon: "error",
			  	button: "Ок",
			});
		} else {
			$.ajax({
				type: 'POST',
				url: '../php/sendreserv1.php',
				data: $(this).serialize()
			}).done(function () {
				swal({
			  		title: "Готово!",
			  		text: "Ожидайте звонка для подтверждения брони :)",
			  		icon: "success",
			  		button: "Ок!",
				});
				setTimeout(function() {
					th.trigger("reset");
				}, 1000);
				let mc = document.getElementById('myReserv1');
				mc.style.display = "none";
			});
		}
		return false;
	});

	$('#myReservForm2').submit(function () {
		var th = $(this);
		if (document.ReservForm2.fiores.value =='' || document.ReservForm2.area.value =='' || document.ReservForm2.phoneres.value =='' || document.ReservForm2.phoneres.value =='dateweed') {
			swal({
			  	title: "Упс...",
			  	text: "Поля не должны быть пустыми!",
			  	icon: "error",
			  	button: "Ок",
			});
		} else {
			$.ajax({
				type: 'POST',
				url: '../php/sendreserv2.php',
				data: $(this).serialize()
			}).done(function () {
				swal({
			  		title: "Готово!",
			  		text: "Ожидайте звонка для подтверждения брони :)",
			  		icon: "success",
			  		button: "Ок!",
				});
				setTimeout(function() {
					th.trigger("reset");
				}, 1000);
				let mc = document.getElementById('myReserv2');
				mc.style.display = "none";
			});
		}
		return false;
	});

	$('#myReservForm3').submit(function () {
		var th = $(this);
		if (document.ReservForm3.fiores.value =='' || document.ReservForm3.area.value =='' || document.ReservForm3.phoneres.value =='' || document.ReservForm3.phoneres.value =='dateweed') {
			swal({
			  	title: "Упс...",
			  	text: "Поля не должны быть пустыми!",
			  	icon: "error",
			  	button: "Ок",
			});
		} else {
			$.ajax({
				type: 'POST',
				url: '../php/sendreserv3.php',
				data: $(this).serialize()
			}).done(function () {
				swal({
			  		title: "Готово!",
			  		text: "Ожидайте звонка для подтверждения брони :)",
			  		icon: "success",
			  		button: "Ок!",
				});
				setTimeout(function() {
					th.trigger("reset");
				}, 1000);
				let mc = document.getElementById('myReserv3');
				mc.style.display = "none";
			});
		}
		return false;
	});
});