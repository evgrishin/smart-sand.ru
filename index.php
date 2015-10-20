<?php
//require '../sslib/Product.php';

$issubdomain = false;
$domain = $_SERVER['HTTP_HOST'];
$subdomain = current(explode('.', trim($_SERVER['HTTP_HOST']), 2));
$phone = "+7(960)165-25-55";
$mail = "";

if( $subdomain == "nn")
	$issubdomain = true;

if ($issubdomain == true)
{
	$city1 = "г.Нижний Новгород";
	$city2 = "Нижний Новгород";
	$city3 = "в Нижний Новгороде";
	$deliveryprice = "200 руб.";
	$freeshiping = "2500";
	$deliverybannerleft = '<div style="width:390px;height:200px;padding-top:20px;" class="img-thumbnail">
						<a href="#contact" class="highlight">Посмотреть пункт самовывоза!
						<img src="i/delivery.jpg" alt="Доставка"></a>
					</div>';
	$deliverybannerright = '<div style="width:390px;height:200px;padding-top:20px;" class="img-thumbnail">
						<div class="text-center highlight"><h3>Доставим <strong>в среду бесплатно!!!</strong><h3></div>
						<div class="text-center"><h4>при любой сумме заказа</h4></div>					
					</div>';
}else {
	$city1 = "Доставка по России";
	$city2 = "Доставка по России";
	$city3 = "по России";
	$deliveryprice = "зависит от города проживания.";
	$freeshiping = "5000";
	$deliverybannerleft = '';
	$deliverybannerright = '';
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="language" content="ru"/>
	
	<meta property="og:type" content="website">
	<meta property="og:title" content="Умный космический песок - <?=$city2?>">
	<meta property="og:description" content="Космический песок в наличии с доставкой <?=$city3?> - необычный материал для и игры, учебных процессов так и для терапевтических целей.">    
	<meta property="og:image" content="img/logo.png">
	<meta property="og:site_name" content="Умный песок | Космический песок |Кинетический песок | Kinetic Sand | Живой песок | Live Sand | <?=$city2?>">    	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate">
	<meta name="keywords" content="Космический песок, кинетический песок, развивающая игра, kinetic sand, waba fun, купить <?=$city3?>, живой песок, live Sand, умный песок">
	<meta name="description" content="Космический песок в наличии с доставкой <?=$city3?> - необычный материал для и игры, учебных процессов так и для терапевтических целей.">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<title>Умный космический кинетический песок - <?=$city2?> песок в наличии!</title>
		
<!-- CSS Files -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">

<!-- Colors -->
<!-- <link href="css/css-index.css" rel="stylesheet" media="screen">-->
<!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
<link href="css/css-index-red.css" rel="stylesheet" media="screen">
<!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
<!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

<!-- Google Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

	<meta name='yandex-verification' content='5ae88ebbe04e98fc' />
	<meta name="google-site-verification" content="Wr_Tx3d_2Qs1lDVIH7J9MXJjy9AhbpMpVBeo6Xh-LW4" />
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter33013929 = new Ya.Metrika({
	                    id:33013929,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true,
	                    trackHash:true,
	                    ecommerce:"dataLayer"
	                });
	            } catch(e) { }
	        });
	
	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/watch.js";
	
	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/33013929" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter --> 
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-68773075-1', 'auto');
	  ga('send', 'pageview');

	</script>  
	<style>
		.price
		{
		  /*  color: #d34a4a; 
    		 font-weight: 500;*/ 
		}
		.pricedrop
		{
		
		}
		.modalcb
		{
		}
	</style> 

</head>
  
<body data-spy="scroll" data-target="#navbar-scroll">

<div id="preloader"></div>
<div id="top"></div>

<div class="fullscreen landing parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
	
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					
					<div class="signup-header wow fadeInUp" style="background-color:#ffffff;">
	
						<!-- /.main title -->
							<h2 class="wow fadeInLeft highlight" style="color:#d34a4a;">
							<?=$city1?> - <span style="color:#00b121">песок в наличии!</span>
							</h2>
	
						<!-- /.header paragraph -->
						<div class="landing-text wow fadeInUp">
							<img src="i/b1.jpg">
						</div>				  
	
						<!-- /.header button -->
						<div class="head-btn wow fadeInLeft" style="padding-bottom:20px;">
							<a href="#best" class="modalcb btn-primary">Заказать набор!</a>
						</div>
					</div>

				</div> 
				
				<!-- /.signup form -->
				<div class="col-md-5">
				
					<div class="signup-header wow fadeInUp">
						<h3 class="form-title text-center">Оставить заявку</h3>
						<form class="form-header" action="ajax.php" role="form" method="POST" id="orderFormBest">
						<input type="hidden" name="id" id="id" value="best">
							<div class="form-group">
								<input class="form-control input-lg" name="name" id="name" type="text" placeholder="Ваше имя" required>
							</div>
							<div class="form-group">
								<input class="form-control input-lg" name="phone" id="phone" type="phone" placeholder="+7 (___) xxx-xx-xx" required>
							</div>
							<div class="form-group last">
								<button type="submit" class="btn btn-warning btn-block btn-lg" id="modalordersubmit1">Узнать о спец предложении</button>
							</div>
							<p class="privacy text-center">Мы не передаем Вашу персональную информацию третьим лицам.</p>
						</form>
					</div>				
				
				</div>
			</div>
		</div> 
	</div> 
</div>
 
<!-- NAVIGATION -->
<div id="menu">
	<nav class="navbar-wrapper navbar-default" role="navigation">
		<div class="container">
			  <div class="navbar-header" style="padding-right:20px;">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
				  <span class="sr-only">Меню</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand site-name" href="#top"><?=$domain?></a><br>
				<a href="#"><strong><?=$city1?></strong></a>
			  </div>
			  <div class="navbar-left" style="padding-top:8px;">
			  		<span><strong><i class="pe-7s-phone highlight"></i><a href="#callback" class="modalcb"> <?=$phone?></a></strong></span>
			  </div>
			  <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="#intro">Главная</a></li>
					<li><a href="#feature">О песке</a></li>
					<li><a href="#howtoplay">Как играть</a></li>					
					<li><a href="#package">Товары</a></li>
					<li><a href="#delivery">Доставка</a></li>
					<li><a href="#reviews">Отзывы</a></li>
					<li><a href="#contact">Контакты</a></li>
				</ul>
			  </div>
		</div>
	</nav>
</div>

<!-- /.intro section -->
<div id="intro">
	<div class="container">
		<div class="row">

		<!-- /.intro image -->
			<div class="col-md-6 intro-pic wow slideInLeft">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/w3il_aIDA4E" frameborder="0" allowfullscreen></iframe>
			</div>	
			
			<!-- /.intro content -->
			<div class="col-md-6 wow slideInRight">
				<h2>Кинетический песок - <br>песочница у вас дома</h2>
				<p>Кинетический песок похож на мокрый пляжный песок, но в то же время он мягкий и пушистый, может течь сквозь пальцы как в замедленной съемке, оставляя при этом руки чистыми и сухими. 
</p><p>Песок не рассыпается, а очень легко собирается после игры, даже если попадет на ковер. Абсолютно безопасен, не вызывает аллергии.
				</p>

					<div class="btn-section"><a href="#feature" class="btn-default">Узнать подробнее</a></div>
		
			</div>
		</div>			  
	</div>
</div>

<!-- /.feature section -->
<div id="feature">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 text-center feature-title">

			<!-- /.feature title -->
				<h2>Что такое Кинетический песок?</h2>
				<p>Это развивающая, увлекательная и веселая игра для детей и взрослых.</p>
				<p>Песочница дома имеет ряд приемуществ:</p>
			</div>
		</div>
		<div class="row row-feat">
			<div class="col-md-4 text-center">
			
			<!-- /.feature image -->
				<div class="feature-img">
					<img src="i/feature-image.jpg" alt="image" class="img-responsive wow fadeInLeft">
				</div>
			</div>
		
			<div class="col-md-8">
			
				<!-- /.feature 1 -->
				<div class="col-sm-6 feat-list">
					<i class="pe-7s-flag pe-5x pe-va wow fadeInUp"></i>
					<div class="inner">
						<h4>Безопасный и экологичный</h4>
						<p>Песок состоит на 98% из очищенного кварцевого песка и на 2% из полимерных материалов.
						</p>
					</div>
				</div>
			
				<!-- /.feature 2 -->
				<div class="col-sm-6 feat-list">
					<i class="pe-7s-flag pe-5x pe-va wow fadeInUp" data-wow-delay="0.2s"></i>
					<div class="inner">
						<h4>Без микробов</h4>
						<p>В отличии от песка, в который дети играют на улице, в космическом песке микробы не заводятся.</p>
					</div>
				</div>
			
				<!-- /.feature 3 -->
				<div class="col-sm-6 feat-list">
					<i class="pe-7s-flag pe-5x pe-va wow fadeInUp" data-wow-delay="0.4s"></i>
					<div class="inner">
						<h4>Не пачкаеться</h4>
						<p>Космический песок не прилипает к рукам и не пачкает одежду. Не оставляет пятен на любых поерхностях.</p>
					</div>
				</div>
			
				<!-- /.feature 4 -->
				<div class="col-sm-6 feat-list">
					<i class="pe-7s-flag pe-5x pe-va wow fadeInUp" data-wow-delay="0.6s"></i>
					<div class="inner">
						<h4>Занимает мало места</h4>
						<p>Песок не требует особых условий для хранения и занимает мало места.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- /.feature 2 section -->
<div id="feature-2">
	<div class="container">
		<div class="row">
	
			<!-- /.feature content -->
			<div class="col-md-6 wow fadeInLeft">
				<h2>Лучший материал для занятия с ребенком</h2>
				<p>Космический песок - это новый материал для игр, творчества и развития новых навоков ребенка.
				</p>
				<ul>
				<li>Изготовлено в России</li>
				<li>Развивает мелкую моторику рук</li>
				<li>Не вызыввает алергии</li>
				<li>Положительно влияет на нервную систему</li>
				<li>Развивает творческие навыки ребенка</li>
				</ul>
					<div class="btn-section"><a href="#howtoplay" class="btn-default">Далее...</a></div>
		
			</div>
			  
			<!-- /.feature image -->
			<div class="col-md-6 feature-2-pic wow fadeInRight">
				<img src="i/feature2-image.jpg" alt="macbook" class="img-responsive">
			</div>				  
		</div>			  
  
	</div>
</div>


<!-- /.download section -->
<div id="howtoplay">
	<div class="action fullscreen parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">
		<div class="overlay">
			<div class="container">
				<div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
				
					<!-- /.download title -->
					<h2 class="wow fadeInRight">Посмотрите видео игры с космическим песком!</h2>
					<p class="download-text wow fadeInLeft"><iframe width="560" height="315" src="https://www.youtube.com/embed/iweYQguzhD0" frameborder="0" allowfullscreen></iframe></p>
					
					<!-- /.download button -->
						<div class="download-cta wow fadeInLeft">
							<a href="#package" class="btn-secondary">Посмотреть товары...</a>
						</div>
				</div>	
			</div>	
		</div>
	</div>
</div>

<!-- /.pricing section -->
<div id="package">
	<div class="container">
		<div class="text-center">
		
			<!-- /.pricing title -->
			<h2 class="wow fadeInLeft">Все товары</h2>
			<div class="title-line wow fadeInRight"></div>
		</div>
		
		<div class="row package-option">

			<!-- /.package 1 -->
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/s1s.jpg" alt="..." class="img-thumbnail">
					<h3>Песок 0,5 кг</h3>
			   </div>
			   <ul class="price-feature text-center">
			   	  <li><strong>Цвет: </strong><select>
					  <option>Класический</option>
					  <option>Голубой</option>
					  <option>Розовый</option>
					  <option>Сиреневый</option>
					  <option>Зеленый</option>
					  <option>Желтый</option>
  					</select>		
				  </li>
				  <li><strike><strong>390 руб</strong></strike></li>			   
				  <li class="highlight"><strong>310 руб</strong></li>				  
			   </ul>
			   <!-- /.package button -->
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#2">Купить</a>
				</div>	
			  </div>
			</div>
			
			<!-- /.package 2 -->
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/s1s.jpg" alt="..." class="img-thumbnail">
					<h3>Песок 1 кг</h3>
			   </div>
			   <ul class="price-feature text-center">
			   	  <li><strong>Цвет: </strong><select>
					  <option>Класический</option>
					  <option>Голубой</option>
					  <option>Розовый</option>
					  <option>Сиреневый</option>
					  <option>Зеленый</option>
					  <option>Желтый</option>
  					</select>		
				  </li>			   
				  <li><strike><strong>650 руб</strong></strike></li>			   
				  <li class="highlight"><strong>550 руб</strong></li>				  
			   </ul>
			   <!-- /.package button -->
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#3">Купить</a>
				</div>	
			  </div>
			</div>
			
			<!-- /.package 3 -->
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/s1s.jpg" alt="..." class="img-thumbnail">
					<h3>Песок 2 кг</h3>
			   </div>
			   <ul class="price-feature text-center">
			   	  <li><strong>Цвет: </strong><select>
					  <option>Класический</option>
					  <option>Голубой</option>
					  <option>Розовый</option>
					  <option>Сиреневый</option>
					  <option>Зеленый</option>
					  <option>Желтый</option>
  					</select>		
				  </li>			   
				  <li><strike><strong>1150 руб</strong></strike></li>			   
				  <li class="highlight"><strong>1010 руб</strong></li>				  
			   </ul>
			   <!-- /.package button -->
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#4">Купить</a>
				</div>	
			  </div>
			</div>
			
			<!-- /.package 4 -->
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/s1s.jpg" alt="..." class="img-thumbnail">
					<h3>Песок 3 кг</h3>
			   </div>
			   <ul class="price-feature text-center">
			   	  <li><strong>Цвет: </strong><select>
					  <option>Класический</option>
					  <option>Голубой</option>
					  <option>Розовый</option>
					  <option>Сиреневый</option>
					  <option>Зеленый</option>
					  <option>Желтый</option>
  					</select>		
				  </li>			   
				  <li><strike><strong>1530 руб</strong></strike></li>			   
				  <li class="highlight"><strong>1380 руб</strong></li>				  
			   </ul>
			   <!-- /.package button -->
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#5">Купить</a>
				</div>	
			  </div>
			</div>

		</div>	
		
		<div class="row package-option">

			<!-- /.package 1 -->
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/nf1s.jpg" alt="Песок 1 кг" class="img-thumbnail">
					<h3>Песок 1 кг</h3>
			   </div>
			   <ul class="price-feature text-center">
			   	  <li><strong>Цвет: </strong><select>
					  <option>Класический</option>
					  <option>Голубой</option>
					  <option>Розовый</option>
					  <option>Сиреневый</option>
					  <option>Зеленый</option>
					  <option>Желтый</option>
  					</select>		
				  </li>					   
			      <li><strong>+ песочница</strong></li>
			      <li><strong>+ 6 формочек</strong></li>	   
				  <li><strike><strong>1040 руб</strong></strike></li>			   
				  <li class="highlight"><strong>930 руб</strong></li>				  
			   </ul>
			   <!-- /.package button -->
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#6">Купить</a>
				</div>	
			  </div>
			</div>

			<!-- /.package 2 -->
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/nf1s.jpg" alt="Песок 2 кг" class="img-thumbnail">
					<h3>Песок 2 кг</h3>
			   </div>
			   <ul class="price-feature text-center">
			   	  <li><strong>Цвет: </strong><select>
					  <option>Класический</option>
					  <option>Голубой</option>
					  <option>Розовый</option>
					  <option>Сиреневый</option>
					  <option>Зеленый</option>
					  <option>Желтый</option>
  					</select>		
				  </li>				   
			      <li><strong>+ песочница</strong></li>
			      <li><strong>+ 6 формочек</strong></li>		   
				  <li><strike><strong>1560 руб</strong></strike></li>			   
				  <li class="highlight"><strong>1430 руб</strong></li>				  
			   </ul>
			   <!-- /.package button -->
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#7">Купить</a>
				</div>	
			  </div>
			</div>
			
			<!-- /.package 3 -->
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/nf1s.jpg" alt="Песок 3 кг" class="img-thumbnail">
					<h3>Песок 3 кг</h3>
			   </div>
			   <ul class="price-feature text-center">
			   	  <li><strong>Цвет: </strong><select>
					  <option>Класический</option>
					  <option>Голубой</option>
					  <option>Розовый</option>
					  <option>Сиреневый</option>
					  <option>Зеленый</option>
					  <option>Желтый</option>
  					</select>		
				  </li>				   
			      <li><strong>+ песочница</strong></li>
			      <li><strong>+ 6 формочек</strong></li>		   
				  <li><strike><strong>2020 руб</strong></strike></li>			   
				  <li class="highlight"><strong>1910 руб</strong></li>				  
			   </ul>
			   <!-- /.package button -->
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#8">Купить</a>
				</div>	
			  </div>
			</div>			

			<!-- /.package 4 -->
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/nf1s.jpg" alt="Песок 6 кг" class="img-thumbnail">
					<h3>Песок 6 кг</h3>
			   </div>
			   <ul class="price-feature text-center">
			   	  <li><strong>Цвет: </strong><select>
					  <option>Класический</option>
					  <option>Голубой</option>
					  <option>Розовый</option>
					  <option>Сиреневый</option>
					  <option>Зеленый</option>
					  <option>Желтый</option>
  					</select>		
				  </li>				   
			      <li><strong>+ деревянная песочница 40х40см.</strong></li>
			      <li><strong>+ 6 формочек</strong></li>		   
				  <li><strike><strong>6150 руб</strong></strike></li>			   
				  <li class="highlight"><strong>5950 руб</strong></li>				  
			   </ul>
			   <!-- /.package button -->
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#9">Купить</a>
				</div>	
			  </div>
			</div>	
		
		</div>	
		
		<div class="text-center">
		
			<!-- /.pricing title -->
			<h2 class="wow fadeInLeft">Дополнительные аксесуары</h2>
			<div class="title-line wow fadeInRight"></div>
		</div>
		
		<div class="row package-option">	
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/ps1s.jpg" alt="..." class="img-thumbnail">
					<h3>Надувная песочница</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>1190 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#10">Купить</a>
				</div>	
			  </div>
			</div>
 
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/ps2s.jpg" alt="..." class="img-thumbnail">
					<h3>Надувная песочница</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>1190 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#11">Купить</a>
				</div>	
			  </div>
			</div>
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f1s.jpg" alt="..." class="img-thumbnail">
					<h3>Картины на песке</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>200 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#12">Купить</a>
				</div>	
			  </div>
			</div>		

			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f2s.jpg" alt="..." class="img-thumbnail">
					<h3>Крепость</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>300 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#13">Купить</a>
				</div>	
			  </div>
			</div>
		
		</div>	

		<div class="row package-option">	
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f3s.jpg" alt="..." class="img-thumbnail">
					<h3>Транспорт</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>300 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#14">Купить</a>
				</div>	
			  </div>
			</div>
 
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f4s.jpg" alt="..." class="img-thumbnail">
					<h3>Лесные люкс</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>200 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#15">Купить</a>
				</div>	
			  </div>
			</div>
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f5s.jpg" alt="..." class="img-thumbnail">
					<h3>Морские люкс</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>200 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#16">Купить</a>
				</div>	
			  </div>
			</div>		

			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f6s.jpg" alt="..." class="img-thumbnail">
					<h3>Disney Вместе с Винни</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>300 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#17">Купить</a>
				</div>	
			  </div>
			</div>
		
		</div>		
		
		<div class="row package-option">	
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f7s.jpg" alt="..." class="img-thumbnail">
					<h3>Disney русалочка</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>300 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#18">Купить</a>
				</div>	
			  </div>
			</div>
 
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f8s.jpg" alt="..." class="img-thumbnail">
					<h3>Disney тачки</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>300 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#19">Купить</a>
				</div>	
			  </div>
			</div>
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f9s.jpg" alt="..." class="img-thumbnail">
					<h3>Динозаврики</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>200 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#20">Купить</a>
				</div>	
			  </div>
			</div>		

			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f10s.jpg" alt="..." class="img-thumbnail">
					<h3>Зайка, Медведь, Слоник</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>200 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="btn btn-price modalcb" href="#21">Купить</a>
				</div>	
			  </div>
			</div>
		
		</div>		
		
		<div class="row package-option">	
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f11s.jpg" alt="..." class="img-thumbnail">
					<h3>Крепость</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>200 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="modalcb btn btn-price" href="#22">Купить</a>
				</div>	
			  </div>
			</div>
 
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f12s.jpg" alt="..." class="img-thumbnail">
					<h3>Морской микс</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>200 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="modalcb btn btn-price" href="#23">Купить</a>
				</div>	
			  </div>
			</div>
			
			<div class="col-sm-3">
			  <div class="price-box wow fadeInUp">
			   <div class="price-heading text-center">
					<img src="i/f13s.jpg" alt="..." class="img-thumbnail">
					<h3>Транспорт</h3>
			   </div>
			   <ul class="price-feature text-center">		   			   
				  <li class="highlight"><strong>200 руб</strong></li>				  
			   </ul>
			   <div class="price-footer text-center">
				 <a class="modalcb btn btn-price" href="#24">Купить</a>
				</div>	
			  </div>
			</div>		
		
		</div>						
		
	</div>
</div>

<!-- /.client section -->
<div id="delivery"> 
		<div class="container">
			<div class="row text-center">
		
			<!-- /.pricing title -->
				<h2 class="wow fadeInLeft">Условия доставки <?=$city3?></h2>
				<div class="title-line wow fadeInRight"></div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="wow fadeInUp">Стоимость доставки <?=$city3?> - <?=$deliveryprice?></div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-sm-4">
					<?=$deliverybannerleft?>
				</div>
				<div class="col-sm-4">
					<div style="width:390px;height:200px;padding-top:20px;" class="img-thumbnail">
						<div class="text-center"><h3>Доставка от <?=$freeshiping?> руб</h3></div>
						<div class="text-center highlight"><h4><strong>бесплатно</strong></h4></div>
					</div>					
				</div>				
				<div class="col-sm-4">
					<?=$deliverybannerright?>
				</div>
			</div>	
		</div>	
</div>

<!-- /.testimonial section -->
<div id="reviews">
	<div class="container">
		<div class="text-center">
			<h2 class="wow fadeInLeft">Отзывы наших клиентов</h2>
			<div class="title-line wow fadeInRight"></div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">	
			   <div id="owl-testi" class="owl-carousel owl-theme wow fadeInUp">
				 
					<!-- /.testimonial 1 -->
					<div class="testi-item">
						<div class="client-pic text-center">
						
							<!-- /.client photo -->
							<img src="i/k1.jpg" alt="client">
						</div>
						<div class="box">
						
							<!-- /.testimonial content -->
							<p class="message text-center">"Купили песок в наборе 3 кг плюс песочница для двух детей год и четыри года,мальчики. У старшего восторг. Играет вечерами на пролет,строит,лепит,машинки возит, загружает,разгужает, рушит,катает колбаски и делает снеговиков😊младший играет недолго, трогает,мнет и разбрасыват формочки,наблюдает за тем,как делать куличики,пытается стучать по формочкам, думаю к 1,5 годам интерес возрастет. Очень классная штука этот космический кинетический песок. Спасибо вашему магазину,долго искали где в Нижнем Новгороде купить кинетический песок с доставкой и не переплатить за бренд.
							"</p>
						</div>
						<div class="client-info text-center">
						
						<!-- /.client name -->
							Николай, <span class="company">Начальник отдела</span>	
						</div>
					</div>		
					
					<!-- /.testimonial 2 -->
					<div class="testi-item">
						<div class="client-pic text-center">

							<!-- /.client photo -->
							<img src="i/k2.jpg" alt="client">
						</div>
						<div class="box">

							<!-- /.testimonial content -->
							<p class="message text-center">"Спасибо магазин! Долго искали где в Нижнем Новгороде купить кинетический песок с доставкой и не переплатить за бренд. Нашли здесь, заказали привезли на следующий день, дозаказывали еще один кг голубого песка, забирали самовывозом! Отлично!!! Нам нравится и мусора на мой взгляд меньше чем от теста для лепки."</p>
						</div>
						<div class="client-info text-center">

							<!-- /.client name -->
							Лилия, <span class="company">Домохозяйка</span>	
						</div>
					</div>				
					
					<!-- /.testimonial 3 -->
					<div class="testi-item">
						<div class="client-pic text-center">

							<!-- /.client photo -->
							<img src="i/k3.jpg" alt="client">
						</div>
						<div class="box">

							<!-- /.testimonial content -->
							<p class="message text-center">"Играть в космический песок одно удовольствие и большим и маленьким. Наш годовалый сын на удивление проявил интерес к игре в песочек. Мнет,куличи научился лепить,тут они прекрасно получаются, строим рушим, весело проводим время с кинетический песком. Песок волшебный."</p>
						</div>
						<div class="client-info text-center">

							<!-- /.client name -->
							Евгений, <span class="company">Программист</span>	
						</div>
					</div>		
					
					<!-- /.testimonial 3 -->
					<div class="testi-item">
						<div class="client-pic text-center">

							<!-- /.client photo -->
							<img src="i/k4.jpg" alt="client">
						</div>
						<div class="box">

							<!-- /.testimonial content -->
							<p class="message text-center">"Сначала нас пугало то,что песок будет везде,и что только посадил ребенка в ванную можно будет не переживать,но нет,очень удобная песочница и почти нет мусора. Ребенку нравится,наш непоседа может около получаса один кататься в песочнице,и я не беспокоюсь,тк песок чистейший и безопасен. А сколько игр и фантазий в игре с космическим песком."</p>
						</div>
						<div class="client-info text-center">

							<!-- /.client name -->
							Александр, <span class="company">Мэнеджер</span>	
						</div>
					</div>								
				 
				</div>
			</div>	
		</div>	
	</div>
</div>

<!-- /.contact section -->
<div id="contact">
	<div class="contact fullscreen parallax" style="background-image:url('images/bg.jpg');" data-img-width="2000" data-img-height="1334" data-diff="100">
		<div class="overlay">
			<div class="container">
				<div class="row contact-row">
				
					<!-- /.address and contact -->
					<div class="col-sm-5 contact-left wow fadeInUp">
						<h2><span class="highlight"></span>Контакты:</h2>
							<ul class="ul-address">
							<li><i class="pe-7s-map-marker"></i>г. Нижний Новгород</br>
							ул. Белинского 32
							</li>
							<li><i class="pe-7s-phone"></i><?=$phone?>
							</li>
							<li><i class="pe-7s-mail"></i><a href="mailto:info@smart-sand.ru">info@smart-sand.ru</a></li>
							<li><i class="pe-7s-look"></i><a href="#">www.<?=$domain?></a></li>
							</ul>	
								
					</div>
					
					<!-- /.contact form -->
					<div class="col-sm-7 contact-right" style="height: 300px">
						
						<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=9CiC9td6-0Lidw0Edl2o1cxysYVzwuNn&width=100%&height=100%&lang=ru_RU&sourceType=constructor"></script>
	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
  
<!-- /.footer -->
<footer id="footer">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-4">
			<!-- /.social links -->
				<div class="social text-center">
					<ul>
						<li><a class="wow fadeInUp" href="https://vk.com/smartsandnn"><i class="fa fa-vk"></i></a></li>
						<li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
						<li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>	
			<div class="text-center wow fadeInUp" style="font-size: 14px;">© Магазин «www.smart-sand.ru.Ru» 2015<a href="#"></a></div>
			<a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
		</div>	
	</div>	
</footer>

<div id="modalOrder" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Заголовок модального окна -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Оформить заказ</h4>
      </div>
      <!-- Основной текст сообщения -->
      <div class="modal-body">
			<form class="form-header" action="ajax.php" role="form" method="POST" id="orderForm">
						<input type="hidden" name="id" class="iddialog" id="id" value="999">
							<div class="form-group">
								<input class="form-control input-lg" name="name" id="name" type="text" placeholder="Ваше имя" required="">
							</div>
							<div class="form-group">
								<input class="form-control input-lg" name="phone2" id="phone2" type="phone" placeholder="+7 (___) xxx-xx-xx" required="">
							</div>
							<div class="form-group last">
								<button type="submit" class="btn btn-warning btn-block btn-lg" id="modalordersubmit" title="Заказать">Заказать</button>
							</div>
			</form>
			<div class="row">
                        <div>
                            <div class="alert alert-info text-center" role="alert" id="success-message" style="display: none;"></div>
                        </div>
             </div>
      </div>

    </div>
  </div>
</div>
	
	<!-- /.javascript files -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script> 
    <script src="js/jquery.sticky.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script src="js/jquery.maskedinput.js"></script>
	<script>
	jQuery(function($){
	 
	   $("#phone").mask("+7 (999) 999-9999");
	   $("#phone2").mask("+7 (999) 999-9999");
	   
	});

	  $(document).ready(function(){
		var color = 0;
		var product = 0;
		  $('.modalcb').click(function () {
			    //metrikaReach('callback');
			    $('#orderForm').show();
                $('#success-message').hide()
	    		$("#modalOrder").modal('show');
	    		
                var pageNum = $(this).attr("href").replace('#', '');
                
                $('.iddialog').val(pageNum);
	    		
		  });

	      $('#orderFormBest').on('submit', function(event) {
			    event.preventDefault();
			    var values = $(this).serialize();

			    sendOrder(values,"best");
		  });

	      $('#orderForm').on('submit', function(event) {
			    event.preventDefault();
			    var values = $(this).serialize();

			    sendOrder(values,"");
			    
		  });
	  });

	  function sendOrder(values, t)
	  {
		  
	       $.ajax({
	            type: "POST",
	            data: values,
	            url: 'ajax.php',
	            dataType: "html",
	            success: function(data) {
					if(t=="best")
					{
                		alert(data);
					}
					else
					{
                		$('#orderForm').hide();
                    	$('#success-message').show().html(data);
                    	metrikaReach('createOrder');
					}

	            },
	            error: function() {
	                alert("Ошибка отправки данных на сервер!");
	            }
	        });			
	  }

	  function metrikaReach(goal_name) {
			for (var i in window) {
				if (/^yaCounter\d+/.test(i)) {
					window[i].reachGoal(goal_name);
				}
			}
	  }
	</script> 
		
  </body>
</html>