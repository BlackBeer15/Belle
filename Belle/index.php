<!DOCTYPE html>
<html id="html">
<head>
	<title>Belle</title>
	<meta charset="utf-8" lang="ru"/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="styles/origin.css"/>
	<link rel="stylesheet" type="text/css" href="styles/header.css"/>
	<link rel="stylesheet" type="text/css" href="styles/aboutus.css"/>
	<link rel="stylesheet" type="text/css" href="styles/service.css"/>
	<link rel="stylesheet" type="text/css" href="styles/other.css"/>
	<link rel="stylesheet" type="text/css" href="styles/footer.css"/>
	<link rel="stylesheet" type="text/css" href="styles/alerts.css"/>

	<!-- Media -->
	<link rel="stylesheet" type="text/css" href="styles/media/mHeader.css"/>
	<link rel="stylesheet" type="text/css" href="styles/media/mAbout.css"/>
	<link rel="stylesheet" type="text/css" href="styles/media/mService.css"/>
	<link rel="stylesheet" type="text/css" href="styles/media/mOther.css"/>
	<link rel="stylesheet" type="text/css" href="styles/media/mFooter.css"/>
	<link rel="stylesheet" type="text/css" href="styles/media/mAlerts.css"/>
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/8b77c9bfea.js"></script>
	<!-- JQuery -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<!-- Fancybox -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<!-- SweetAlert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script type="text/javascript" src="js/pixvk.js"></script>
	<noscript>
		<img src="https://vk.com/rtrg?p=VK-RTRG-957632-htN0S" style="position:fixed; left:-999px;" alt=""/>
	</noscript>
	<script type="text/javascript" src="js/pixfb.js"></script>
	<noscript>
		<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=475179083749906&ev=PageView&noscript=1"/>
	</noscript>

</head>
<body>
	<div class="alert-call-container" id="myCall">
		<form method="POST" class="alert-call" id="myCallForm" name="CallForm">
			<div class="close">
				<i class="fas fa-times" id="myClose" onclick="closeAlertCall()"></i>
			</div>
			<div class="center-call">
				<input type="text" name="fio" placeholder="Имя невесты..." required />
				<input type="text" name="phoneNumber" placeholder="Номер телефона..." required/>
				<input type="text" name="time" / placeholder="В какое время позвонить..." required>
				<div class="line-call">
					<hr/>
					<div></div>
				</div>
				<input type="submit" name="btnCall" value="Заказать">
			</div>
		</form>
	</div>
	<div class="alert-service-container1" id="myService1">
		<div class="alert-back" onclick="closeAlertService1()"></div>
		<div class="alert-service">
			<div class="close">
				<i class="fas fa-times" onclick="closeAlertService1()"></i>
			</div>
			<p class="alert-notice-service">
				Выбирайте вариант готового пакета, который включает в себя красивое оформление зоны президиума, максимально учитываем Ваши пожелания и свадебную палитру
			</p>
			<p class="alert-head-service">Пакет «BASIC»</p>
			<p class="text-alert-service">
				Свадебный стол, фон за молодыми, флористические композиции из декоративных цветов, дополнительные элементы декора - свечи, кристаллы, подсвечники, световое сопровождение (диодная, прожекторная подсветка), монтаж/демонтаж, доставка до места торжества
			</p>
			<p class="alert-price-service">
				ЦЕНА: 14 500₽
			</p>
			<div class="alert-btn-service" onclick="openAlertReserv1()">
				Забронировать
			</div>
		</div>
	</div>
	<div class="alert-service-container2" id="myService2">
		<div class="alert-back" onclick="closeAlertService2()"></div>
		<div class="alert-service">
			<div class="close">
				<i class="fas fa-times" onclick="closeAlertService2()"></i>
			</div>
			<p class="alert-notice-service">
				Выбирайте вариант готового пакета, который включает в себя красивое оформление зоны президиума + гостевые зоны, максимально учитываем Ваши пожелания и свадебную палитру
			</p>
			<p class="alert-head-service">Пакет «PERSONAL»</p>
			<p class="text-alert-service">
				Свадебный стол, фон за молодыми, флористические композиции из декоративных цветов, дополнительные элементы декора - свечи, кристаллы, подсвечники, световое сопровождение (диодная, прожекторная подсветка), чехлы на стулья (max 50), композиции на гостевые столы (max 6), план рассадки, монтаж/демонтаж, доставка до места торжества
			</p>
			<p class="alert-price-service">
				ЦЕНА: 24 500₽
			</p>
			<div class="alert-btn-service" onclick="openAlertReserv2()">
				Забронировать
			</div>
		</div>
	</div>
	<div class="alert-service-container3" id="myService3">
		<div class="alert-back" onclick="closeAlertService3()"></div>
		<div class="alert-service">
			<div class="close">
				<i class="fas fa-times" onclick="closeAlertService3()"></i>
			</div>
			<p class="alert-notice-service">
				Выбирайте вариант готового пакета, который включает в себя красивое оформление зоны президиума + гостевые зоны + локация для выездной регистрации или фотозона + набор свадебных аксессуаров, максимально учитываем Ваши пожелания и свадебную палитру
			</p>
			<p class="alert-head-service">Пакет «PREMIUM»</p>
			<p class="text-alert-service3">
				Свадебный стол, фон за молодыми, флористические композиции из декоративных цветов, дополнительные элементы декора - свечи, кристаллы, подсвечники, световое сопровождение (диодная, прожекторная подсветка), чехлы на стулья (max 50), композиции на гостевые столы (max 6), план рассадки, выездная регистрация/фотозона (арка, флористические композиции из декоративных цветов, доп.элементы декора, напольное покрытие, стол или стойки), свадебные аксессуары (бокалы, шампанское, семейная казна), монтаж/демонтаж, доставка до места торжества
			</p>
			<p class="alert-price-service">
				ЦЕНА: 37 500₽
			</p>
			<div class="alert-btn-service" onclick="openAlertReserv3()">
				Забронировать
			</div>
		</div>
	</div>
	<div class="alert-reserv-container1" id="myReserv1">
		<div class="alert-back" onclick="closeAlertReserv1()"></div>
		<form class="alert-reserv" method="POST" id="myReservForm1" name="ReservForm">
			<div class="close">
				<i class="fas fa-times" onclick="closeAlertReserv1()"></i>
			</div>
			<p class="alert-notice-reserv">
				После отправки формы мы перезвоним вам для подтверждения данных
			</p>
			<div class="center-reserv">
				<input type="text" name="fiores" placeholder="ФИО..." required />
				<input type="text" name="area" placeholder="Банкетная площадка..." required />
				<input type="text" name="phoneres" placeholder="Номер телефона..." required />
				<input type="text" name="dateweed" placeholder="Дата свадьбы..." required />
				<input type="submit" name="btnReserv" value="Забронировать">
			</div>
		</form>
	</div>
	<div class="alert-reserv-container1" id="myReserv2">
		<div class="alert-back" onclick="closeAlertReserv2()"></div>
		<form class="alert-reserv" method="POST" id="myReservForm2" name="ReservForm2">
			<div class="close">
				<i class="fas fa-times" onclick="closeAlertReserv2()"></i>
			</div>
			<p class="alert-notice-reserv">
				После отправки формы мы перезвоним вам для подтверждения данных
			</p>
			<div class="center-reserv">
				<input type="text" name="fiores" placeholder="ФИО..." required />
				<input type="text" name="area" placeholder="Банкетная площадка..." required />
				<input type="text" name="phoneres" placeholder="Номер телефона..." required />
				<input type="text" name="dateweed" placeholder="Дата свадьбы..." required />
				<input type="submit" name="btnReserv" value="Забронировать">
			</div>
		</form>
	</div>
	<div class="alert-reserv-container1" id="myReserv3">
		<div class="alert-back" onclick="closeAlertReserv3()"></div>
		<form class="alert-reserv" method="POST" id="myReservForm3" name="ReservForm3">
			<div class="close">
				<i class="fas fa-times" onclick="closeAlertReserv3()"></i>
			</div>
			<p class="alert-notice-reserv">
				После отправки формы мы перезвоним вам для подтверждения данных
			</p>
			<div class="center-reserv">
				<input type="text" name="fiores" placeholder="ФИО..." required />
				<input type="text" name="area" placeholder="Банкетная площадка..." required />
				<input type="text" name="phoneres" placeholder="Номер телефона..." required />
				<input type="text" name="dateweed" placeholder="Дата свадьбы..." required />
				<input type="submit" name="btnReserv" value="Забронировать">
			</div>
		</form>
	</div>
	<header>
		<a href="index.php">
			<img src="images/logo.png"/>
		</a>
		<nav>
			<p onclick="openAlertCall()">Закажите звонок</p>
			<hr/>
			<div class="contact">
				<a href="https://wa.me/79609193234" target="_blank">
					<span class="whatsapp">
						<i class="fab fa-whatsapp"></i>
					</span>
				</a>
				<a href="https://vk.com/belle_anastasia" target="_blank">
					<span class="vk">
						<i class="fab fa-vk"></i>
					</span>
				</a>
				<a href="https://www.instagram.com/belle_nvkz/" target="_blank">
					<span class="inst">
						<i class="fab fa-instagram"></i>
					</span>
				</a>
			</div>
		</nav>
	</header>
	<main>
		<div class="aboutus">
			<span class="head-aboutus">О нас</span>
			<div class="text-about">
				Свадебная мастерская «Belle» - команда декораторов, которые превратят твоё торжество в красивую сказку! Мы несем ответственность за визуальную составляющую и атмосферу вашей свадьбы.
				Уютные классические свадьбы с декоративной флористикой – наш любимый стиль.
				Наша команда занимается полным спектром услуг по декору - оформление зоны президиума и гостевых зон, банкетного пространства, локации для выездной церемонии, фотозон, изготовлением свадебных аксессуаров.
			</div>
			<div class="line">
				<hr/>
				<div></div>
			</div>
			<div class="photo-container">
				<div class="myPhoto fade">
					<a data-fancybox="gallery" href="images/about/ph.jpg">
						<img src="images/about/ph.jpg"/>
					</a>
					<a data-fancybox="gallery" href="images/about/ph1.jpg">
						<img src="images/about/ph1.jpg"/>
					</a>
					<a data-fancybox="gallery" href="images/about/ph2.jpg">
						<img src="images/about/ph2.jpg"/>
					</a>
					<a data-fancybox="gallery" href="images/about/ph3.jpg">
						<img src="images/about/ph3.jpg"/>
					</a>
					<a data-fancybox="gallery" href="images/about/ph4.jpg">
						<img src="images/about/ph4.jpg"/>
					</a>
					<a data-fancybox="gallery" href="images/about/ph5.jpg">
						<img src="images/about/ph5.jpg"/>
					</a>
				</div>
				<div class="myPhoto fade">
					<a data-fancybox="gallery" href="images/about/ph6.jpg">
						<img src="images/about/ph6.jpg"/>
					</a>
					<a data-fancybox="gallery" href="images/about/ph7.jpg">
						<img src="images/about/ph7.jpg"/>
					</a>
					<a data-fancybox="gallery" href="images/about/ph8.jpg">
						<img src="images/about/ph8.jpg"/>
					</a>
					<a data-fancybox="gallery" href="images/about/ph9.jpg">
						<img src="images/about/ph9.jpg"/>
					</a>
					<a data-fancybox="gallery" href="images/about/ph10.jpg">
						<img src="images/about/ph10.jpg"/>
					</a>
					<a data-fancybox="gallery" href="images/about/ph11.jpg">
						<img src="images/about/ph11.jpg"/>
					</a>
				</div>
				<a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
			</div>
			<a name="service"></a>
			<div class="line">
				<hr/>
				<div></div>
			</div>
		</div>
		<div class="services">
			<span class="head-service">Услуги</span>
			<p></p>
			<div class="list-services">
				<div class="card-container">
					<div class="card">
						<div class="ph-card"></div>
						<div class="main-card">
							<p class="m-head">Пакет «BASIC»</p>
							<p class="text-card">
								Включает в себя красивое оформление зоны президиума
							</p>
							<span class="price">
								14 500₽
							</span>
							<div class="btn-card" onclick="openAlertService1()">
								Подробнее
							</div>
						</div>
					</div>
				</div>
				<div class="card-container">
					<div class="card">
						<div class="ph-card1"></div>
						<div class="main-card1">
							<p class="m-head">Пакет «PERSONAL»</p>
							<p class="text-card1">
								Включает в себя красивое оформление зоны президиума + гостевые зоны
							</p>
							<span class="price1">
								24 500₽
							</span>
							<div class="btn-card" onclick="openAlertService2()">
								Подробнее
							</div>
						</div>
					</div>
				</div>
				<div class="card-container">
					<div class="card">
						<div class="ph-card2"></div>
						<div class="main-card2">
							<p class="m-head">Пакет «PREMIUM»</p>
							<p class="text-card1">
								Включает в себя красивое оформление зоны президиума + гостевые зоны + локация для выездной регистрации или фотозона + набор свадебных аксессуаров
							</p>
							<span class="price2">
								37 500₽
							</span>
							<div class="btn-card" onclick="openAlertService3()">
								Подробнее
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="other-info">
			<div class="special">
				<img src="images/special/star.png">
				<div class="paral-container" id="toggleslide">
					<div class="paral"></div>
					<div class="text-paral">
						Воспользуйтесь специальным предложением!
						<i class="fas fa-sort-down"></i>
					</div>
				</div>
				<div class="text-special" id="txt-spec">
					Нашим молодожёнам, которые забронировали свою дату торжества через этот сайт, мы дарим скидку в размере 15 % НА ВСЕ наши услуги! Успевайте воспользоваться таким выгодным предложением.
					<div class="btn-special">
						<a href="#service">Воспользоваться</a>
					</div> 
				</div>
			</div>
			<div class="comments">
				<span class="head-comments">Отзывы о нас</span>
				<div class="comment-container">
					<img src="images/comments/comm.jpg" class="myCom fade">
					<img src="images/comments/comm1.jpg" class="myCom fade">
					<img src="images/comments/comm2.jpg" class="myCom fade">
					<img src="images/comments/comm3.jpg" class="myCom fade">
					<a class="prev-com" onclick="plusSlidesCom(-1)">❮</a>
					<a class="next-com" onclick="plusSlidesCom(1)">❯</a>
					<div class="dots">
  						<span class="dot" onclick="currentSlide(1)"></span> 
					  	<span class="dot" onclick="currentSlide(2)"></span> 
					  	<span class="dot" onclick="currentSlide(3)"></span>
					  	<span class="dot" onclick="currentSlide(4)"></span>  
					</div>
				</div>
			</div>
			<p class="anket">Получи ЧЕК-ЛИСТ НЕВЕСТЫ в подарок</p>
		</div>
	</main>
	<footer>
		<form method="POST" id="myFootForm" name="fForm">
			<input type="text" name="name" placeholder="Имя..." required />
			<input type="text" name="email" placeholder="Email..." required/>
			<input type="text" name="date" placeholder="Дата свадьбы..." required/>
			<input type="submit" name="btn" value="Получить">
		</form>
		<div class="full-size-container"></div>
		<video autoplay muted loop preload="auto">
			<source src="video/paint.mp4" type="video/mp4">
		</video>
	</footer>
</body>
<script type="text/javascript" src="js/alerts.js"></script>
<script type="text/javascript" src="js/slidephoto.js"></script>
<script type="text/javascript" src="js/slidespecial.js"></script>
<script type="text/javascript" src="js/slidecomments.js"></script>
<script type="text/javascript" src="js/callform.js"></script>
<script type="text/javascript" src="js/reservform.js"></script>
<script type="text/javascript" src="js/footform.js"></script>
</html>