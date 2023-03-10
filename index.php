<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="digital" content="разработка сайтов, диджитал агентство в г. Кемерово, разработка сайтов в г. Кемерово, диджитал агентство">
	<title>Skyweb - разработка и продвижение сайтов</title>
	<link rel="icon" href="/favicon02.ico" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/4773f4b6b9.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
	  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
  ></script>
</head>
<body>


<form action="send.php" method="POST" class="wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.8s">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-center">
          <div class="name-modal"><h5 class="modal-title" id="exampleModalLabel">Связаться с нами</h5></div>
        </div>
        <button type="button" class="btn-close btn-form" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        <div class="modal-body border-form">
          <div class="justify-content-center ">
            <div class="number-form d-flex justify-content-center align-items-center mb-4">
                <a class="" href="tel:+79069333633">Позвонить</a>
            </div>
              <div class="form-icon-flex">
                <a target="_blank" href="https://vk.com/skyweb42"><i class="fa fa-vk fa-2x fa-nav list-services-icon pb-0" aria-hidden="true"></i></a>
                <a target="_blank" href=""><i class="fa fa-instagram fa-2x fa-nav list-services-icon ms-3 pb-0" aria-hidden="true"></i></a>
                <a target="_blank" href="https://tele.click/{@noval00}"><i class="fa fa-telegram fa-2x fa-nav list-services-icon ms-3 pb-0" aria-hidden="true"></i></a>
              </div>
          </div> 
        </div>
        <div class="modal-body">
			<div class="row mb-3 center_block">
				<div class="col-sm-10">
					<div class="form-floating mb-3">
						<input type="name" name="name" class="form-control" id="floatingInput" placeholder="Ваше имя" required>
						<label for="floatingInput" class="text-white">Ваше имя</label>
					</div>
				</div>
			</div>
          	<div class="form-floating">
				<div class="row mb-3 center_block">
					<div class="col-sm-10">
						<div class="form-floating mb-3 justify-content-center">
							<input type="email" name="email" class="form-control" id="floatingInput" placeholder="Ваш Email" required>
							<label for="floatingInput" class="text-white">Ваш Email</label>
						</div>
						<div class="form-floating">
							<textarea class="form-control" type="message" name="message" placeholder="Сообщение" id="floatingTextarea" required style="height: 100px"></textarea>
							<label for="floatingTextarea" class="text-white">Сообщение</label>
						</div>
					</div>
				</div>
          	</div>
        </div>
        <div class="modal-footer justify-content-center">
			<div class="input-mail">
	  			<input type="submit" value="Отправить" class="btn btn-lg text-center btn-outline-secondary01 btn-outline-secondary02">
	  		</div>
        </div>
      </div>
    </div>
  </div>
</form>

		<nav class="navbar navbar-expand-xl navbar-light bg-light fixed-top">
		  <div class="container">
		    <a class="navbar-brand" href="#"><img src="img/logo-new.png" alt=""></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarBasic">
		      <ul class="navbar-nav me-auto mb-2 mb-xl-0">
		        <li class="nav-item">
		          <a class="nav-link js-scroll-trigger" href="#1">Главная</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link js-scroll-trigger" href="#2">О компании</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link js-scroll-trigger" href="#offer" tabindex="-1" aria-disabled="true">Что мы предлагаем</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link js-scroll-trigger" href="#4" tabindex="-1" aria-disabled="true">Наши преимущества</a>
		        </li>
		      </ul>
		      <button type="button" class="btn btn-primary btn-focus" data-bs-toggle="modal" data-bs-target="#exampleModal">
			    <a class="text-white my-3 mx-3 js-scroll-trigger" href="#!">Оставить заявку</a>
			    <svg class="text-align" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
	  				<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
				</svg>
			</button>
				<ul class="navbar-icon-ind mt-4">
					<li class="subtitle-footer">
						<a class="" href="tel:+79069333633”">
						<i class="fa fa-phone fa-2x" aria-hidden="true"></i>
						</a>
					</li>
					<li class="subtitle-footer">
						<a class="" target="_blank" href="mailto:digital42@list.ru">
						<i class="fa fa-envelope fa-2x ps-3" aria-hidden="true"></i>
						</a>
					</li>
					<li class="subtitle-footer">
						<a class="" href="#">
							<i class="fa fa-map-marker fa-2x ps-3" aria-hidden="true"></i>
						</a>
					</li>
					<li class="subtitle-footer">
						<a target="_blank" class="" href="https://api.whatsapp.com/send/?phone=79069333633">
							<i class="fa fa-instagram fa-2x ps-3" aria-hidden="true"></i>
						</a>
					</li>
					<li class="subtitle-footer">
						<a target="_blank" class="" href="https://vk.com/skyweb42">
						<i class="fa fa-vk fa-2x ps-3" aria-hidden="true"></i>
						</a>
					</li>
					<li class="subtitle-footer">
						<a target="_blank" class="" href="https://tele.click/{@noval00}">
						<i class="fa fa-telegram fa-2x ps-3" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
		    </div>
		  </div>
		</nav>
<!--  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	  <div class="container">
	    <a class="navbar-brand" href="#">Skyweb</a>
	    <div class="collapse navbar-collapse show" id="navbarNavAltMarkup">
			<ul class="navbar-nav">
				<li><a class="a" href="#1">Главная</a>
				<li><a class="a" href="#2">О компании</a>
				<li><a class="a" href="#offer">Что мы предлагаем</a>
				<li><a class="a" href="#4">Наши преимущества</a>
			</ul>
	    </div>
	  </div>
	</nav> -->

	<div class="container">
		<!-- <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden >
		<nav class="nav" id="nav">
				<label for="nav-toggle" class="nav-toggle" onclick="open_menu()"></label>
			    <h2 class="logo"> 
			        <a href="#">Skyweb</a> 
			    </h2>
			    <ul>
			        <li><a class="a" href="#1" onclick="close_menu()">Главная</a></li>
			        <li><a class="a" href="#2" onclick="close_menu()">О компании</a></li>
			        <li><a class="a" href="#offer" onclick="close_menu()">Что мы предлагаем</a></li>
			        <li><a class="a" href="#4" onclick="close_menu()">Наши преимущества</a></li>
			    </ul>
			<button type="button" class="btn btn-primary btn-focus mt-5">
			    <a class="text-white my-3 mx-3" href="#application">Оставить заявку</a>
			    <svg class="text-align" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
	  				<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
				</svg>
			</button>
				<ul class="navbar-icon-ind mt-5">
					<li class="subtitle-footer">
						<a class="" href="tel:+79069333633”">
						<i class="fa fa-phone fa-2x" aria-hidden="true"></i>
						</a>
					</li>
					<li class="subtitle-footer">
						<a class="" target="_blank" href="mailto:digital42@list.ru">
						<i class="fa fa-envelope fa-2x ps-3" aria-hidden="true"></i>
						</a>
					</li>
					<li class="subtitle-footer">
						<a class="" href="#">
							<i class="fa fa-map-marker fa-2x ps-3" aria-hidden="true"></i>
						</a>
					</li>
					<li class="subtitle-footer">
						<a target="_blank" class="" href="https://api.whatsapp.com/send/?phone=79069333633">
							<i class="fa fa-instagram fa-2x ps-3" aria-hidden="true"></i>
						</a>
					</li>
					<li class="subtitle-footer">
						<a target="_blank" class="" href="https://vk.com/novel00">
						<i class="fa fa-vk fa-2x ps-3" aria-hidden="true"></i>
						</a>
					</li>
					<li class="subtitle-footer">
						<a target="_blank" class="" href="https://tele.click/{@noval00}">
						<i class="fa fa-telegram fa-2x ps-3" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
		</nav> -->
	</div>
	<main>
		<div class="bg-image pt-767px" id="1">
			<div class="container">
				<div class="row wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.5s">
					<div class="col text-white text-center text-uppercase text-block-one">digital Skyweb</div>
				</div>
				<div class="row wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.5s">
					<div class="col text-white text-center subtitle-block-one">Повседневная практика.</div>
				</div>
				<div class="row text-center wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.5s">
					<div class="col">
						<button type="button" class="btn btn-lg btn-outline-secondary text-center mt-5">
							<a class="text-white my-3 mx-3 outline-a" href="#offer">Что мы предлагаем</a>
							<svg class="text-align text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
						  		<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
							</svg>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-color d-flex-100vh">
			<div class="row center-767-adv">
				<ul class="col-md center-block pl-ind-0 pt-5 ">
					<li class="row about-company mb-5 pt-5 wow animate__animated animate__fadeInUp center-767-adv" style="visibility: hidden;" data-wow-delay="0.5s" id="2">О компании</li>
					<li class="row text-center about_company_text mb-2 fs-12px wow animate__animated animate__zoomIn center-767-adv" style="visibility: hidden;" data-wow-delay="0.5s">Мы диджитал агентство, занимаемся полным циклом продвижения компаний в интернете.</li>
					<li class="border-company mb-5 wow animate__animated animate__zoomIn" style="visibility: hidden;" data-wow-delay="0.5s"></li>
					<li class="row text-center about_company_text mb-2 fs-12px wow animate__animated animate__zoomIn center-767-adv" style="visibility: hidden;" data-wow-delay="0.5s">Разработка сайтов – Сделаем уникальный дизайн согласно вашему фирменному стилю. Напишем чистый код, без использования конструкторов.</li>
					<li class="border-company mb-5 wow animate__animated animate__zoomIn" style="visibility: hidden;" data-wow-delay="0.5s"></li>
					<li class="row text-center about_company_text mb-2 fs-12px wow animate__animated animate__zoomIn center-767-adv" style="visibility: hidden;" data-wow-delay="0.5s">Продвижение – поможем вам быстро добиться желаемого результата, обеспечим постоянный приток новых заявок.</li>
					<li class="border-company mb-5 wow animate__animated animate__zoomIn" style="visibility: hidden;" data-wow-delay="0.5s"></li>
					<ul class="row d-flex-company">
						<li class="col-md-2 subtitle-footer">
							<a class="" href="tel:+79069333633">
								<i class="fa fa-phone fa-2x" aria-hidden="true"></i>
							</a>
						</li>
						<li class="col-md-2 subtitle-footer ps-3">
							<a class="" target="_blank" href="mailto:digital42@list.ru">
								<i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
							</a>
						</li>
						<li class="col-md-2 subtitle-footer ps-3">
							<a class="" href="#">
								<i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
							</a>
						</li>
						<li class="col-md-2 subtitle-footer ps-3">
							<a target="_blank" class="" href="https://api.whatsapp.com/send/?phone=79069333633">
								<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
							</a>
						</li>
						<li class="col-md-2 subtitle-footer ps-3">
							<a target="_blank" class="" href="https://vk.com/skyweb42">
								<i class="fa fa-vk fa-2x" aria-hidden="true"></i>
							</a>
						</li>
						<li class="col-md-2 subtitle-footer ps-3">
							<a target="_blank" class="" href="https://tele.click/{@noval00}">
								<i class="fa fa-telegram fa-2x" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</ul>
			</div>	
		</div>
		<div class="bg-block-about_us pt-5 pb-5" id="offer">
			<div class="container">
				<div class="row mb-5 mt-5 wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.5s">
					<div class="col text-center text-uppercase text-white text_block_2 pt5vh">Что мы предлагаем</div>
				</div>
				<div class="row text-center border-b flex-end">
					<div class="col-md pt-5 pb-5 border-r pt-ind-0 wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award1.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">Высокий уровень исполнения</div>
					</div>
					<div class="col-md pt-5 pb-5 border-r wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award2.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">Гарантируем качество работы</div>
					</div>
					<div class="col-md pt-5 pb-5 border-r wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award3.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">Выполним работу быстро</div>
					</div>
					<div class="col-md pt-5 pb-5 border-r wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award4.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">Обеспечим поток заявок</div>
					</div>
					<div class="col-md pt-5 pb-5 wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award5.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">Автоматизируем работу</div>
					</div>
				</div>
				<div class="row text-center border-b">
					<div class="col-md pt-5 pb-5 border-r wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award6.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">Разработаем уникальный дизайн</div>
					</div>
					<div class="col-md pt-5 pb-5 border-r wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award7.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">Напишем чистый код </div>
					</div>
					<div class="col-md pt-5 pb-5 border-r wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award8.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">Контекстная реклама</div>
					</div>
					<div class="col-md pt-5 pb-5 border-r wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award9.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">Третированная реклама </div>
					</div>
					<div class="col-md pt-5 pb-5 wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award10.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">SEO продвижение</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md border-r wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s"></div>
					<div class="col-md pt-5 pb-5 wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award11.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">Продвижение в социальных сетях</div>
					</div>
					<div class="col-md center_block border-l border-r wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<button type="button" class="btn btn-xs text-center btn-outline-secondary01 btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
							<a class="text-white my-3 mx-3 fs-12px" href="#application">Подробнее</a>
							<svg class="text-align text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
						  		<path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
							</svg>
						</button>
					</div>
					<div class="col-md pt-5 pb-5 d-none-767 wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
						<img src="img/award2.png" alt="" class="img-fluid text-center pb-3">
						<div class="text-row fs-12px">Высокий уровень исполнения </div>
					</div>
					<div class="col-md border-l wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s"></div>
				</div>
			</div>
		</div>
		<div class="bg-block-advantages" id="4">
			<div class="container pb-5">
				<div class="row mb-5 pt-5 wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.1s">
					<div class="col-md-12 text-center text_block_2 pt5vh text-uppercase">Наши преимущества</div>
				</div>
				<div class="row">
					<div class="col-md-6 img-50 d-flex mt-5 mt-ind-0 wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.8s">
						<img class="img-fluid text-center" src="img/advantages1.png" alt="">
						<div class="text-advantages fs-12px">Сделаем адаптивный дизайн, под любой вид устройств</div>
					</div>
					<div class="col-md-6 img-50 d-flex mt-5 wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="0.8s">
						<img class="img-fluid text-center" src="img/advantages01.png" alt="">
						<div class="text-advantages fs-12px">Установим на сайт счетчики аналитики и настроим возможность отслеживать результаты прямо с вашего мобильного телефона</div>
					</div>
				</div>
				<div class="row pb-ind">
					<div class="col-md-6 img-50 d-flex mt-5 wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="1s">
						<img class="img-fluid text-center" src="img/advantages2.png" alt="">
						<div class="text-advantages fs-12px">Настроим все возможные способы обратной связи. Заявки на почту, подключим онлайн консультанта, настроим телефонный звон с сайта, подключим Whatsapp к сайту</div>
					</div>
					<div class="col-md-6 img-50 d-flex mt-5 wow animate__animated animate__fadeInUp" style="visibility: hidden;" data-wow-delay="1s">
						<img class="img-fluid text-center" src="img/advantages02.png" alt="">
						<div class="text-advantages fs-12px">Проведем анализ вашей сферы и конкурентов, предложим лучшие инструменты для продвижения в интернете</div>
					</div>
				</div>
			</div>
		</div>	
	</main>
	<footer>
		<div class="bg-footer">
			<div class="container">
				<div class="row">
					<ul class="col-md-4 style-none">
						<li class="text-name-footer pb-5 pt-5">Контакты</li>
						<li class="subtitle-footer">
							<i class="fa fa-phone fa-2x pe-2" aria-hidden="true"></i>
							<a class="ps-4" href="tel:+79069333633”">+7 906 933 36 33</a>
						</li>
						<li class="subtitle-footer">
							<i class="fa fa-envelope fa-2x pe-2 mt-4" aria-hidden="true"></i>
							<a class="mt-4 ps-4" target="_blank" href="mailto:digital42@list.ru">digital42@list.ru</a>
						</li>
						<li class="subtitle-footer">
							<i class="fa fa-map-marker fa-2x pe-2 mt-4" aria-hidden="true"></i>
							<a class="ps-8 mt-4" href="#">г. Кемерово</a>
						</li>
					</ul>
					<div class="col-md-4 align-items-center justify-content-center d-flex none-767px-f">
						<img src="img/logo-new.png" alt="" class="img-fluid">
					</div>
					<ul class="col-md-4 style-none text-end">
						<li class="text-name-footer pb-5 pt-5">Соц. сети</li>
						<li class="subtitle-footer end-t reverse">
							<a target="_blank" class="pe-4" href="https://api.whatsapp.com/send/?phone=79069333633">WhatsApp</a>
							<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
						</li>
						<li class="subtitle-footer end-t reverse">
							<a target="_blank" class="pe-4 mt-4" href="https://vk.com/skyweb42">Vkontakte</a>
							<i class="fa fa-vk fa-2x mt-4" aria-hidden="true"></i>
						</li>
						<li class="subtitle-footer pb-5 end-t reverse">
							<a target="_blank" class="pe-6 mt-4" href="https://tele.click/{@noval00}">Telegram</a>
							<i class="fa fa-telegram fa-2x mt-4" aria-hidden="true"></i>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>	
	<div class="section-skyweb pt-2 pb-2">
        <div class="container">
          <div class="row text-center">
            <div class="col-md">
              <div class="copyright">Copyright 2022</div>
              <div class="created">Created by <a href="https://vk.com/skyweb42">skyweb</a></div>
            </div>
          </div>
        </div>
    </div> 
	<script type="text/javascript">
		$('.js-scroll-trigger').click(function() {
			$('.navbar-collapse').collapse('hide');
		})
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script>
	    new WOW().init();
	</script>

</html>