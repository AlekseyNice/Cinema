<?php
  session_start();	
  
  $error = [];
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
		<!-- head -->	
		<?php include_once('../includes/head.php'); ?>
		<!-- head END -->
		<title>BaseGo - Как соединить домен с сервером?</title>
    </head>

    <body>
	
    	<div id="preloader">
    		<div class="book">
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>

    		</div>
    	</div>

		<!-- header -->	
		<?php include_once('../includes/header.php'); ?>
		<!-- header END -->

	    <section id="hero-area">
	        <div class="container">
			  <h1 class="fadeInUp text-center">Как соединить домен с сервером?</h1>
				<div class="row align-items-center">
					<p class="text-center" style="color: white; margin-top: 45px"><strong>МЫ С ВАМИ УЖЕ УМЕЕМ ПОДБИРАТЬ ДОМЕННОЕ ИМЯ И РЕГИСТРИРОВАТЬ ЕГО, ТАКЖЕ МЫ ВЫБРАЛИ 
					И АРЕНДОВАЛИ VPS СЕРВЕР. ОСТАЛОСЬ ИХ СОЕДИНИТЬ, ЧТОБЫ ВАШ ДОМЕН ССЫЛАЛСЯ НА ДАННЫЕ КОТОРЫЕ ЛЕЖАТ НА ВАШЕМ СЕРВЕРЕ. ЭТО НАЗЫВАЕТСЯ «ПРОПИСАТЬ DNS ЗАПИСИ» 
					И СЕЙЧАС МЫ ИХ ПРОПИШЕМ. ДЛЯ ЭТОГО ЕСТЬ 3 ВАРИАНТА:</strong></p>
				</div>
	        </div><!-- .container close -->
	    </section><!-- header close -->

        <!-- 
        About start
        ==================== -->
        <section id="screen-1" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<div style="margin-top: -50px">								
									<ul>
										<li style="margin-top: 20px">
										  <a href="#screen-1">&#9830 Вариант 1. Подключить домен к DDoS-Guard</a>
										</li>
										<li style="margin-top: 15px">
										  <a href="#screen-11">&#9830 Вариант 2. Подключить домен к CloudFlare</a>
										</li>
										<li style="margin-top: 15px">
										  <a href="#screen-30">&#9830 Вариант 3. Прописать DNS-записи в панели управления доменом</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<h2 class="text-center" style="color: black; margin-top: 30px">Вариант 1. Подключить домен к DDoS-Guard</h2>
							</div>
							<br>
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<br>
								<h2  style="color: black">Что такое DDoS-Guard?</h2>
								<br>
								<p align="justify">DDoS-Guard - это сервис, который специализируется на защите сайтов, серверов, дата-центров, сетей от DDoS-атак. 
								С недавнего времени (январь 2018 года) у сервиса появился бесплатный тариф с обширным набором функций. По информации от нескольких источников,
								именно DDoS-Guard защищал RuTracker в 2015-м году.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Что такое DDoS-Guard?" src="IMG-kak-soedinit-domen-s-serverom/step1.png">
								<button 
								class="btn btn-send" 
								style="max-width: 100%;">
								  <a style="color: white" href="https://ddos-guard.net"><span class="fa fa-external-link"> Регистрация</span></a>
								 </button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->

        <!-- 
        About start
        ==================== -->
        <section id="screen-2" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как работает DDoS-Guard?</h2>
								<br>
								<p align="justify">DDoS-Guard имеет распределенную сеть серверов по всему миру, потому с кэшированием Ваших файлов справится прекрасно. 
								Для начала работы Вам нужно зарегистрироваться. Вводить номер телефона не обязательно, достаточно подтвердить Ваш адрес электронной почты.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Как работает DDoS-Guard?" src="IMG-kak-soedinit-domen-s-serverom/step2.png">
								<button 
								class="btn btn-send" 
								style="max-width: 100%;">
								  <a style="color: white" href="https://ddos-guard.net"><span class="fa fa-external-link"> Регистрация</span></a>
								 </button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-3" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как добавить сайт в DDoS-Guard?</h2>
								<br>
								<p align="justify">Для добавления сайта в сервис DDoS-Guard, Вы должны зайти в раздел «Магазин услуг» - «Удаленная защита веб-сайтов» - «Free-тариф». 
								На бесплатном тарифе Вы будете иметь необходимый набор функций, для защиты Вашего сайта. В «Параметры тарифа» указываете Ваш домен сайта 
								и IP сервера, на котором он расположен. На сервере должен быть заранее сгенерирован SSL сертификат.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Как добавить сайт в DDoS-Guard?" src="IMG-kak-soedinit-domen-s-serverom/step3.png">
								<button 
								class="btn btn-send" 
								style="max-width: 100%;">
								  <a style="color: white" href="https://ddos-guard.net"><span class="fa fa-external-link"> Регистрация</span></a>
								 </button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-4" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как прописать DNS записи в DDoS-Guard?</h2>
								<br>
								<p align="justify">После добавления домена в DDoS-Guard, Вы должны дождаться обработки заказа. Обычно подтверждение происходит за пару минут и сразу можно 
								приступить к настройке DNS. Для этого Вы должны зайти в «Сервисы / Услуги» - «Управление DNS». Там уже будет минимально необходимый набор записей,
								однако для полной работы CinemaPress ACMS, нужно добавить еще парочку.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step4.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-5" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как прописать CNAME-запись мобильной версии в DDoS-Guard?</h2>
								<br>
								<p align="justify">Чтобы мобильная версия Вашего сайта была доступна на отдельном поддомене, Вы должны этот поддомен создать. Для этого нажмите справа вверху 
								«Добавить», затем в разделе «Name» - m.ВашДомен.com, «Type» - CNAME, «Content» - ВашДомен.com, и сохраните эту запись.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step5.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-6" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как прописать CNAME-запись статики в DDoS-Guard?</h2>
								<br>
								<p align="justify">Чтобы все картинки на Вашем сайте были доступны на Вашем отдельном поддомене, Вы должны этот поддомен создать. Для этого нажмите справа вверху 
								«Добавить», затем в разделе «Name» - st.ВашДомен.com, «Type» - CNAME, «Content» - st.kp.yandex.net, и сохраните эту запись.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step6.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-7" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как прописать MX-запись в DDoS-Guard?</h2>
								<br>
								<p align="justify">Чтобы получать письма на email Вашего домена, Вы должны прописать MX-записи. Для этого нажмите справа вверху «Добавить», затем в разделе 
								«Name» - ВашДомен.com, «Type» - MX, «Content» - mx.zoho.com, «Priority» - 10, и сохраните эту запись.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step7.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-8" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как прописать вторую MX-запись в DDoS-Guard?</h2>
								<br>
								<p align="justify">Нажмите справа вверху «Добавить», затем в разделе «Name» - ВашДомен.com, «Type» - MX, «Content» - mx2.zoho.com, «Priority» - 20, 
								и сохраните эту запись.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step8.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-9" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Какие DNS-записи должны быть прописаны в DDoS-Guard?</h2>
								<br>
								<p align="justify">Можете открыть скриншот справа и посмотреть, совпадает ли он с Вашими записями. IP и домены должны быть Ваши, hello.world 
								используется для примера.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step9.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-10" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Где прописать NS-записи от DDoS-Guard?</h2>
								<br>
								<p align="justify">Чтобы все эти DNS записи принялись в действие, Вы должны прописать NS от DDoS-Guard в настройках Вашего домена, обычно это делается в 
								панели управления регистратора домена. На freenom - «Management Tools» -> «Nameservers», на internetbs - «Update DNS List», на reg - 
								«DNS-серверы», и т.д. Прописываете следующие NS записи:</p>
								<div style="margin-left: 30px">
									<p>ns1.ddos-guard.net<br>
									ns2.ddos-guard.net<br>
									ns3.ddos-guard.net<br>
									ns4.ddos-guard.net<br>
									ns5.ddos-guard.net<br>
									ns6.ddos-guard.net<br></p>
								</div>
								<p>Подробнее можете прочитать на DDoS-Guard.</p>	
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step10.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-11" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<h2 class="text-center" style="color: black; margin-top: -50px">Вариант 2. Подключить домен к CloudFlare</h2>
							</div>
							<br>
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<br>
								<h2 style="color: black; margin-top: -30px">Что такое CloudFlare?</h2>
								<br>
								<p align="justify">CloudFlare.com является Сетью Доставки Контента (CDN) и DNS, которая предоставляет свои услуги бесплатно (есть платные тарифы) и не 
								имеет бесплатных аналогов в мире, на таком же уровне качества, в данный момент.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Что такое CloudFlare?" src="IMG-kak-soedinit-domen-s-serverom/step2-1.png">
								<button 
								class="btn btn-send" 
								style="max-width: 100%;">
								  <a style="color: white" href="https://www.cloudflare.com/a/sign-up"><span class="fa fa-external-link"> Регистрация</span></a>
								 </button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->

        <!-- 
        About start
        ==================== -->
        <section id="screen-12" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как работает CloudFlare?</h2>
								<br>
								<p align="justify">Схема работы довольно проста, когда к Вам на сайт заходит посетитель, его браузер запрашивает все внешние ресурсы Вашего сайта, это картинки,
								скрипты, стили и т.п. Если пользователь из России, а Ваш сервер находится например в США, то данным приходится пересечь в прямом смысле слова 
								целый океан, чтобы сайт отобразился в браузере посетителя. И так происходит с каждым зашедшим на Ваш сайт посетителем. CloudFlare же имеет сервера
								во всех точках мира и при посещении Вашего сайта пользователем из России, то данные будут идти не с Вашего сервера (в США), а с сервера CloudFlare,
								который находится как можно ближе к пользователю (возможно даже в его городе).</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Как работает CloudFlare?" src="IMG-kak-soedinit-domen-s-serverom/step2-2.png">
								<button 
								class="btn btn-send" 
								style="max-width: 100%;">
								  <a style="color: white" href="https://www.cloudflare.com/a/sign-up"><span class="fa fa-external-link"> Регистрация</span></a>
								 </button>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-13" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как добавить сайт в CloudFlare?</h2>
								<br>
								<p align="justify">Добавив сайт в CloudFlare, Вы можете экономить ресурсы своего сервера, доставлять данные для пользователя быстрее и еще иметь SSL
								сертификат для доступа сайта по https-протоколу. Плюсов довольно много, чтобы отказываться от такого прекрасного бесплатного сервиса как
								CloudFlare. После регистрации, Вы попадете на страницу добавления сайта в систему.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Как добавить сайт в CloudFlare?" src="IMG-kak-soedinit-domen-s-serverom/step2-3.png">
								<button 
								class="btn btn-send" 
								style="max-width: 100%;">
								  <a style="color: white" href="https://www.cloudflare.com/a/sign-up"><span class="fa fa-external-link"> Регистрация</span></a>
								 </button>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-14" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">ClodFlare может удалить Мой сайт?</h2>
								<br>
								<p align="justify">CloudFlare может отказать в обслуживании сайту на бесплатном тарифе на который идет сильная DDoS атака. В таком случае Вам могут предложить
								для отражения атаки перейти на платный тариф обслуживания.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-4.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-15" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Что если при добавлении, уже будут какие-то записи?</h2>
								<br>
								<p align="justify">Если Вы добавили сайт в CloudFlare и там уже есть какие-то записи, то не переживайте, их нужно просто все удалить и начать прописывать записи,
								которые требуются для функционирования сайта на CinemaPress ACMS.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-5.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-16" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как прописать DNS записи в CloudFlare?</h2>
								<br>
								<p align="justify">Когда в панели не будет ни одной записи, можно начать прописывать свои. Для этого в выпадающем меню Вы можете выбирать тип записи, 
								это может быть A, AAA, CNAME, MX и др. Сейчас мы подробно пройдемся по каждому из типов и добавим их в CloudFlare.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-6.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-17" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Что такое A-запись в DNS?</h2>
								<br>
								<p align="justify">A-запись является основной записью в DNS, так как благодаря ей, домен знает на какой IP ему ссылаться, а следовательно из какого сервера 
								получать данные. А-запись добавляется в таком порядке, вначале Вы указываете свой домен, а затем IP адрес Вашего сервера, на котором установлена
								CinemaPress ACMS (123.123.123.123 - это пример!).</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-7.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-18" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Что означает AAAA-запись в DNS?</h2>
								<br>
								<p align="justify">Запись АААA содержит информацию о IPv6 адресе сервера. Сейчас уже многие хостинг-провайдеры предоставляют IPv6 адреса, потому не 
								воспользоваться «протоколом будущего» просто нецелесообразно. Указав IPv6 адрес в CloudFlare Вы обеспечите доступность сайта по IPv6 протоколу.
								Если Ваш хостинг не предоставляет IPv6, пропускаете этот этап.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-8.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-19" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Что лучше, домен с www или без?</h2>
								<br>
								<p align="justify">CNAME запись в DNS отвечает за то, будет ли доступен сайт на поддомене «www» или нет. CinemaPress ACMS настроена таким образом, 
								что если CNAME «www» существует и пользователь заходит на домен с «www», система его перенаправит на домен без «www». Это сделано только в 
								эстетических целях, так как вводить легче/быстрее URL без «www» и никаких плюсов от его наличия в URL не будет.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-9.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-20" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как сделать мобильную версию сайта?</h2>
								<br>
								<p align="justify">Чтобы Ваш сайт имел мобильную версию, сайт должен быть доступен на поддомене «m». Для этого Вы должны добавить CNAME-запись с содержанием «m».
								Только после добавления этого поддомена Вы сможете активировать модуль «Моб. версия» в CinemaPress ACMS.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-10.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-21" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как загружать картинки со своего домена?</h2>
								<br>
								<p align="justify">Если Вы хотите, чтобы картинки (постеры, кадры) загружались на сайте с Вашего домена, Вы должны добавить CNAME запись «st» ведущую на 
								«st.kp.yandex.net», затем зайти в админ-панель CinemaPress ACMS - «Распределение нагрузки» - «Сервер картинок» и указать там адрес поддомена 
								«st.ваш_домен.ком». Другим подходом может быть загрузка картинок на свой сервер.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-11.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-22" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как использовать почту на своём домене?</h2>
								<br>
								<p align="justify">Для того, чтобы Вы могли читать почту со своего домена, Вы должны добавить сайт в сервис Zoho и затем прописать MX-записи. 
								MX-запись добавляется следующим образом, в первом поле указываете знак собачки «@», затем кликнув на второе, в открывшемся окне указываете
								адрес сервера «mx.zoho.com» и приоритет - 10.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-12.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-23" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Почему нужно несколько MX-записей?</h2>
								<br>
								<p align="justify">При недоступности почтового сервера с низким приоритетом, почта будет отправлена на почтовый сервер с приоритетом выше. 
								Поэтому чтобы быть уверенным, что Вы получите письмо, нужно указать несколько MX-записей, «mx2.zoho.com» с приоритетом - 20.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-13.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-24" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Третья MX-запись?</h2>
								<br>
								<p align="justify">Да, теперь пропишите еще и третью MX-запись с содержимым «mx3.zoho.com» и приоритетом - 50. Зачатую двух записей достаточно, 
								но Zoho видимо подстраховались.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-14.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-25" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Какие DNS-записи должны быть прописаны?</h2>
								<br>
								<p align="justify">Вот собственно и всё, Вы прописали все DNS-записи для Вашего домена, теперь он будет исправно работать на CloudFlare. Можете нажимать 
								«Continue» для перехода к выбору бесплатного тарифного плана.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-15.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-26" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<h2 style="color: black; margin-top: -50px">Какой тарифный план ClodFlare выбирать?</h2>
								<br>
								<p align="justify">Вы можете воспользоваться как бесплатным тарифным планом, так и платным. Платный тарифный план зачатую нужен в случаях атаки на сайт.
								Так как Вы только создали сайт и он еще новый, Вы вряд ли нажили себе врагов, потому выбираем бесплатный тарифный план.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-16.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-27" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Где прописать NS-записи?</h2>
								<br>
								<p align="justify">Осталось только изменить NS1 и NS2 записи Вашего домена на те, которые указал CloudFlare и Ваш сайт будет полностью работать.
								Для этого Вы должны зайти в панель управления доменом на сайте регистратора, найти там что-то связанное с «NS», «Nameservers» или «DNS»
								и заменить NS1 и NS2 записи на указанные на CloudFlare. На freenom - «Management Tools» -> «Nameservers», на internetbs - «Update DNS List»,
								на reg - «DNS-серверы», и т.д. После этого кликаете на «Continue» и ждете, пока изменения будут приняты.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-17.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->

        <!-- 
        About start
        ==================== -->
        <section id="screen-28" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как использовать SSL сертификат CloudFlare?</h2>
								<br>
								<p align="justify">Большим плюсов в глазах поисковых систем, будет возможность подключиться к Вашему сайту по шифрованному соединению, по HTTPS. 
								CloudFlare предлагает это сделать одним кликом. Для этого зайдите в раздел «Crypto» и выберите SSL - «Flexible». Это позволит подключаться 
								пользователям Вашего сайта по защищенному протоколу без каких либо настроек. Спуститесь немного ниже в разделе «Crypto» и активируйте пункт 
								«Always use HTTPS», этот пункт отвечает за переадресацию с HTTP на HTTPS. Если Вы захотите пользоваться собственным SSL сертификатом, который 
								можно сгенерировать в CinemaPress ACMS, тогда Вы должны будете отключить CloudFlare для A-записи, путем нажатия на «облако» напротив А-записи 
								в DNS и в разделе «Crypto» уберите пункт «Always use HTTPS», так как система будет делать переадресацию без использования CloudFlare. 
								Не используйте оба варианта создания HTTPS. Используйте либо сертификат CloudFlare, либо Свой. Рекомендуется использовать сертификат CloudFlare
								ввиду большей защищенности Вашего сайта.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-18.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-29" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как очистить кэш CloudFlare?</h2>
								<br>
								<p align="justify">CloudFlare настроен так, что все запросы к статическим файлам на Вашем сайте кэшируются на стороне CloudFlare. Потому, если Вы сделали
								какое-то изменение в файле стилей, скрипта или заменили какую-то картинку на сайте, то чтобы отобразилась новая, а не кэшированная, нужно
								произвести очистку кэша. Для этого заходите в раздел «Caching» и нажимаете «Purge everything».</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/step2-19.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->

		        <!-- 
        About start
        ==================== -->
        <section id="screen-30" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<h2 class="text-center" style="color: black; margin-top: -50px">Вариант 3. Прописать DNS-записи в панели управления доменом</h2>
							</div>
							<br>
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<br>
								<h2 style="color: black; margin-top: -30px">Как прописать DNS в InternetBS?</h2>
								<br>
								<p align="justify">Если Вы регистрировали доменное имя на InternetBS, тогда раздел, где можно изменить DNS-записи домена называется «DNS Management». 
								Вам нужно будет добавить все те же записи, что и были рассмотрены выше с сервисом CloudFlare.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/internetbs.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-31" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2  style="color: black">Как прописать DNS в Pananames?</h2>
								<br>
								<p align="justify">Если Вы регистрировали доменное имя на Pananames, тогда раздел, где можно изменить DNS-записи домена называется «Host Records». 
								Вам нужно будет добавить все те же записи, что и были рассмотрены выше с сервисом CloudFlare.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/pananames.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->

        <!-- 
        About start
        ==================== -->
        <section id="screen-32" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как прописать DNS в freenom?</h2>
								<br>
								<p align="justify">Если Вы регистрировали бесплатное доменное имя на freenom, тогда раздел, где можно изменить DNS-записи домена называется «Manage Freenom DNS».
								Вам нужно будет добавить все те же записи, что и были рассмотрены выше с сервисом CloudFlare.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/freenom.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->
		
        <!-- 
        About start
        ==================== -->
        <section id="screen-33" class="section">
			 <!-- Основной контент страницы -->
			<div class="container" style="margin-left: 20px">
				<div class="row">
					<div class="container main-container py-4">
						<div class="row align-items-center">
							<div class="col-md-7 col-sm-6 col-xs-12">
								<p class="mt-4 text-uppercase small text-primary font-weight-bold"></p>
								<h2 style="color: black; margin-top: -50px">Как прописать DNS в reg?</h2>
								<br>
								<p align="justify">В случае, если Ваш домен регистрировался через регистратора Reg.ru, Вы можете прописать DNS записи в разделе «Управление доменом» -> 
								«Управление зоной». Если там уже будут какие-то записи, Вы должны их все удалить. Вам нужно будет добавить все те же записи, что и были 
								рассмотрены выше с сервисом CloudFlare.</p>							
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
								<img style="max-width: 100%;"  alt="Домен" src="IMG-kak-soedinit-domen-s-serverom/reg.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Основной контент страницы КОНЕЦ -->
        </section><!-- #about close -->

		<hr>

		<!-- service -->	
		<?php include_once('../includes/service.php'); ?>
		<!-- service END -->
		
		<!-- contact -->	
		<?php include_once('../includes/contact.php'); ?>
		<!-- contact END -->

		<!-- footer + JS -->	
		<?php include_once('../includes/footer.php'); ?>
		<!-- footer + JS END -->

    </body>
</html>