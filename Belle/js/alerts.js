let call = document.getElementById('myCall');
let html = document.getElementById('html');
let service1 = document.getElementById('myService1');
let service2 = document.getElementById('myService2');
let service3 = document.getElementById('myService3');
let reserv1 = document.getElementById('myReserv1');
let reserv2 = document.getElementById('myReserv2');
let reserv3 = document.getElementById('myReserv3');

// Call

function openAlertCall() {
  	call.style.display = "flex";
  	html.style.overflow = "hidden";
}

function closeAlertCall() {
	call.style.display = "none";
	html.style.overflow = "auto";
}

// Services

function openAlertService1() {
	service1.style.display = "flex";
}

function closeAlertService1() {
	service1.style.display = "none";
}

function openAlertService2() {
	service2.style.display = "flex";
}

function closeAlertService2() {
	service2.style.display = "none";
}

function openAlertService3() {
	service3.style.display = "flex";
}

function closeAlertService3() {
	service3.style.display = "none";
}

// Reservation
function openAlertReserv1() {
	reserv1.style.display = "flex";
	service1.style.display = "none";
}

function closeAlertReserv1() {
	reserv1.style.display = "none";
}

function openAlertReserv2() {
	reserv2.style.display = "flex";
	service2.style.display = "none";
}

function closeAlertReserv2() {
	reserv2.style.display = "none";
}

function openAlertReserv3() {
	reserv3.style.display = "flex";
	service3.style.display = "none";
}

function closeAlertReserv3() {
	reserv3.style.display = "none";
}