<?php
//session_start();
require './sslib/Product.php';

// variables for template
$phone = "8(831)414-45-77; +7(910)396-37-91";
$city1 = "Доставка по России";
$city2 = "Доставка по России";
$city3 = "по России";
$deliveryprice = "500 руб в любой регион.";
$freeshiping = "2500";
$deliverybannerleft = '';
$deliverybannerright = '';
$addr = 'г. Москва ул. <br>Салтыковская, д. 27, <br>складской терминал "Новокосинский"';
$map = '<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=woAij1zdq0J0l75oE5eyK-kt3UDUic1d&width=100%&height=100%&lang=ru_RU&sourceType=constructor"></script>';
$domain = $_SERVER['HTTP_HOST'];
$subdomain = current(explode('.', trim($_SERVER['HTTP_HOST']), 2));


if (isset($_POST['ajax']))
{
	$host = gethostname();
	
	if(empty($_POST['name']))
		die("");
	
	$ptype = ($_POST['form_ptype']!='')?$_POST['form_ptype']:$_POST['ptype'];
	$name = $_POST['name'];
	$form_pname = $_POST['form_pname'];
	$form_addr = $_POST['form_addr'];
	$form_city = $_POST['form_city'];
	$phone = $_POST['phone'].$_POST['phone2'];
	$variant = $_POST['form_variant'];
	$price = $_POST['form_price'];
	$phone = '+'.preg_replace('#\D+#', '', $phone);
	
	// create email body and send it 
	$to1 = 'info@smart-sand.ru'; 
	$to2 = '';
	
	if ($subdomain == 'test')
		$form_city = "ТЕСТ ТЕСТ ТЕСТ";
	
	if ($ptype=='callback'){
		$email_subject = "ОБРАТНЫЙ ЗВОНОК: от $name - $phone ";
		$email_body = "ОБРАТНЫЙ ЗВОНОК:\r\n";	
	}else{
		$email_subject = "НОВЫЙ ЗАКАЗ: от $name - $phone ";
		$email_body = "НОВЫЙ ЗАКАЗ:\r\n";
	}
	$email_body .= "Город: $form_city \r\n".
	"Имя: $name \r\n".
	"Телефон: $phone \r\n";
	
	if ($ptype!='callback'){
		$email_body .= "Товар: $form_pname \r\n";
		if ($variant!='')
			$email_body .= "Вариант: $variant\r\n";
		$email_body .= "Цена: $price\r\n";
		if ($form_addr!='')
			$email_body .= "Адрес доставки: $form_addr\r\n";
	}
	
	$headers = "From: info@smart-sand.ru\n";
	$headers .= "Reply-To:"; 
	
	if ($subdomain != 'test')
	{
		mail($to1,$email_subject,$email_body,$headers);
	  //mail($to2,$email_subject,$email_body,$headers);
	}
	

	$request = "https://api.telegram.org/bot180676599:AAFTeyDWWXD8g9KM42zlka1mP-BLJXN_oII/sendMessage?chat_id=-142030598&text=".urlencode($email_body);
	$result = file_get_contents($request);
	
	if ($ptype=='callback')
		die ("Запрос на обратный звонок отправлен!");
	else 
		die ("Ваш заказ успешно отправлен!");
}

if( $subdomain == "nn")
{
	$city1 = "г.Нижний Новгород";
	$city2 = "Нижний Новгород";
	$city3 = "в Нижний Новгороде";
	$deliveryprice = "150 руб.";
	$freeshiping = "2500";
	$deliverybannerleft = '<div style="width:390px;height:200px;padding-top:20px;" class="img-thumbnail">
						<a href="#contact" class="highlight">Посмотреть пункт самовывоза!
						<img src="i/delivery.jpg" alt="Доставка"></a>
					</div>';
	$deliverybannerright = '<div style="width:390px;height:200px;padding-top:20px;" class="img-thumbnail">
						<div class="text-center highlight"><h3>Доставим <strong>в среду бесплатно!!!</strong><h3></div>
						<div class="text-center"><h4>при любой сумме заказа</h4></div>					
					</div>';
	$addr = 'г. Нижний Новгород</br>ул. Пискунова 18';
	$map = '<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=9CiC9td6-0Lidw0Edl2o1cxysYVzwuNn&width=100%&height=100%&lang=ru_RU&sourceType=constructor"></script>';
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

<?php 
if( $subdomain == "test")
{
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">

window.dataLayer=window.dataLayer||[];
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36870655 = new Ya.Metrika({
                    id:36870655,
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
<noscript><div><img src="https://mc.yandex.ru/watch/36870655" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php }else{?>	
	
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	
	window.dataLayer=window.dataLayer||[];
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
<?php }?>
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
						<div class="wow fadeInLeft highlight" style="color:#d34a4a; font-size: 1.8em;line-height: 1.4em;font-weight: 500;">
							Выгодное предложение
							</div>
							<img src="i/v1.jpg">
							<img src="i/v2.jpg">
						</div>				  
	
						<!-- /.header button -->
						<form action="" method="POST" class="modalcb">
						  <input type="hidden" name="id_product" id="id_product" value="99">
						  <input type="hidden" name="brand" id="brand" value="Волшебный мир">
						  <input type="hidden" name="ajax" id="ajax" value="ajax">
						  <input type="hidden" name="category" id="category" value="Набор">
						  <input type="hidden" name="bname" id="bname" value="Набор по акции">
						  <input type="hidden" name="bprice" id="bprice" value="2299">
						<div class="head-btn wow fadeInLeft">
							<button type="submit" class="modalcb btn-primary">Заказать набор!</button>
						</div>
						</form>
					</div>

				</div> 
				
				<!-- /.signup form -->
				<div class="col-md-5">
				
					<div class="signup-header wow fadeInUp">
						<h3 class="form-title text-center">Оставить заявку</h3>
						<form class="form-header" action="" role="form" method="POST" id="orderFormBest">
						<input type="hidden" name="ptype" id="ptype" value="callback">
						<input type="hidden" name="ajax" id="ajax" value="ajax">
						<input type="hidden" name="form_city" id="form_city" value="<?=$city1?>">
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
<!-- phone -->

<style type="text/css">
    @keyframes cbh-circle-anim {
        0% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
        }
        40% {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)";
            opacity: 0.9;
            transform: scale(1.2);
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            -ms-transform: scale(1.2);
        }
        100% {
            transform: scale(1.5);
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -o-transform: scale(1.5);
            -ms-transform: scale(1.5);
        }
    }

    @keyframes cbh-circle-fill-anim {
        0%, 100% {
            transform: scale(1.5);
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -o-transform: scale(1.5);
            -ms-transform: scale(1.5);
        }
        40% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
        }
    }

    @keyframes cbh-circle-img-anim {
        0%, 50%, 100% {
            transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
        }
        10%, 30% {
            transform: rotate(-25deg);
            -webkit-transform: rotate(-25deg);
            -moz-transform: rotate(-25deg);
            -o-transform: rotate(-25deg);
            -ms-transform: rotate(-25deg);
        }
        20%, 40% {
            transform: rotate(25deg);
            -webkit-transform: rotate(25deg);
            -moz-transform: rotate(25deg);
            -o-transform: rotate(25deg);
            -ms-transform: rotate(25deg);
        }
    }

    @-webkit-keyframes cbh-circle-anim {
        0% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
        }
        40% {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)";
            opacity: 0.9;
            transform: scale(1.2);
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            -ms-transform: scale(1.2);
        }
        100% {
            transform: scale(1.5);
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -o-transform: scale(1.5);
            -ms-transform: scale(1.5);
        }
    }

    @-webkit-keyframes cbh-circle-fill-anim {
        0%, 100% {
            transform: scale(1.5);
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -o-transform: scale(1.5);
            -ms-transform: scale(1.5);
        }
        40% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
        }
    }

    @-webkit-keyframes cbh-circle-img-anim {
        0%, 50%, 100% {
            transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
        }
        10%, 30% {
            transform: rotate(-25deg);
            -webkit-transform: rotate(-25deg);
            -moz-transform: rotate(-25deg);
            -o-transform: rotate(-25deg);
            -ms-transform: rotate(-25deg);
        }
        20%, 40% {
            transform: rotate(25deg);
            -webkit-transform: rotate(25deg);
            -moz-transform: rotate(25deg);
            -o-transform: rotate(25deg);
            -ms-transform: rotate(25deg);
        }
    }

    @-moz-keyframes cbh-circle-anim {
        0% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
        }
        40% {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)";
            opacity: 0.9;
            transform: scale(1.2);
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            -ms-transform: scale(1.2);
        }
        100% {
            transform: scale(1.5);
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -o-transform: scale(1.5);
            -ms-transform: scale(1.5);
        }
    }

    @-moz-keyframes cbh-circle-fill-anim {
        0%, 100% {
            transform: scale(1.5);
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -o-transform: scale(1.5);
            -ms-transform: scale(1.5);
        }
        40% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
        }
    }

    @-moz-keyframes cbh-circle-img-anim {
        0%, 50%, 100% {
            transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
        }
        10%, 30% {
            transform: rotate(-25deg);
            -webkit-transform: rotate(-25deg);
            -moz-transform: rotate(-25deg);
            -o-transform: rotate(-25deg);
            -ms-transform: rotate(-25deg);
        }
        20%, 40% {
            transform: rotate(25deg);
            -webkit-transform: rotate(25deg);
            -moz-transform: rotate(25deg);
            -o-transform: rotate(25deg);
            -ms-transform: rotate(25deg);
        }
    }
    

    #pozvonim-cover *,
    #pozvonim-cover *::before,
    #pozvonim-cover *::after,
    .pozvonim-button *,
    .pozvonim-button *::before,
    .pozvonim-button *::after,
    #pozvonim-wrapper *,
    #pozvonim-wrapper *::before,
    #pozvonim-wrapper *::after {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    #pozvonim-wrapper {
        position: fixed !important;
        z-index: 30000000 !important;
        min-width: 0 !important;
    }

    #pozvonim-wrapper iframe {
        -webkit-transition: all 300ms ease 0s;
        -moz-transition: all 300ms ease 0s !important;
        -o-transition: all 300ms ease 0s !important;
        transition: all 300ms ease 0s !important;
        display: block !important;
    }

    #pozvonim-wrapper .pozvonim-wrapper-opening {
        background-color: #e6e6e6 !important;
    }

    #pozvonim-wrapper .pozvonim-wrapper-toggler {
        position: absolute !important;
        background-position: 50% 50% !important;
        background-repeat: no-repeat !important;
        cursor: pointer !important;
    }

    #pozvonim-wrapper .pozvonim-wrapper-closing,
    #pozvonim-wrapper.opened .pozvonim-wrapper-opening {
        display: none !important;
    }

    #pozvonim-wrapper .pozvonim-wrapper-opening,
    #pozvonim-wrapper.opened .pozvonim-wrapper-closing {
        display: block !important;
    }

    #pozvonim-wrapper.TOP_LEFT {
        left: 0 !important;
        top: 0 !important;
        height: 100% !important;
    }

    #pozvonim-wrapper.TOP_LEFT iframe {
        height: 100% !important;
        overflow-y: auto !important;
        overflow-x: hidden !important;
        margin-left: -320px !important;
        width: 320px !important;
    }

    #pozvonim-wrapper.TOP_LEFT.opened iframe {
        margin-left: 0 !important;
    }

    #pozvonim-wrapper.TOP_LEFT .pozvonim-wrapper-toggler {
        margin-top: -32.5px !important;
        width: 25px !important;
        height: 65px !important;
        top: 50% !important;
    }

    #pozvonim-wrapper.TOP_LEFT .pozvonim-wrapper-opening {
        right: -25px !important;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAXCAYAAAAoRj52AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDoAABSCAABFVgAADqXAAAXb9daH5AAAAD0SURBVHjaXNExLwRRFIbhZ1ehUBGVCqGT0NlEYRU7CiIS+wPM7zCd+R/TqYRCRNysUiERSolCNAoqjYJgNNfkZk5zizffm3PP1xnsHxyiwHaoynNxurjEN3Yk08U9bjDM8mKyAaEqP3CFKQzSBIzwi90sLzopuIvKdcw1IOouMINemoDjqNvK8mIsBQ9xuz5mGxCq8gunUbeWJv63e8deGzzjBSttsIwFhDbYxDjOOnVdgywvJuInf9BPE6tYRMBbCoaoEUJV1t2omY7+R9ymJ+lhHqNQla8pyOJ70vQRNRt4wnVaVA9LOApV+dkGb7GPZv4GAHMLRBks9t3xAAAAAElFTkSuQmCC');
        border-radius: 0 3px 3px 0 !important;
    }

    #pozvonim-wrapper.TOP_LEFT .pozvonim-wrapper-closing {
        right: 0 !important;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAXCAYAAAAoRj52AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDoAABSCAABFVgAADqXAAAXb9daH5AAAADySURBVHjaXNItS8RBEIDx51bRcEXh0GCRE8RmEQRf2qEYLIcfyS/hB9CkIIJBi+U4DAZBQREMBoNwRoPI8VhmZfwvLBtm57c7w6CS9ob6oR4W/q89YA64zben1Vf1Qe3kjE2gC9wAoxzox3kNUJl59TmojkrNWAOWgStgBFCAFrAT5+kfHMyT+qK26y8LsA6sAGfAV00owD7wHT6ZelMf1dncngLcAwvAYk4oYc8AvSa1pL6rQ3WqUqgT6rE6VlfzG2PgMtiDTKF2g7urRdZASz0Jbjs3UeA8uF6miAI/1YHapjEMR+qPutUchgtgEtj9HQCxFOt2q53iKQAAAABJRU5ErkJggg==);
    }

    #pozvonim-wrapper.TOP_RIGHT {
        top: 0 !important;
        right: 0 !important;
        height: 100% !important;
    }

    #pozvonim-wrapper.TOP_RIGHT iframe {
        height: 100% !important;
        width: 320px !important;
        margin-right: -320px !important;
    }

    #pozvonim-wrapper.TOP_RIGHT.opened iframe {
        margin-right: 0 !important;
    }

    #pozvonim-wrapper.TOP_RIGHT .pozvonim-wrapper-toggler {
        top: 50% !important;
        width: 25px !important;
        height: 65px !important;
        margin-top: -32.5px !important;
    }

    #pozvonim-wrapper.TOP_RIGHT .pozvonim-wrapper-opening {
        left: -25px !important;
        border-radius: 3px 0 0 3px !important;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAXCAYAAAAoRj52AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAPlJREFUeNpi/P//PwMMuCXWeAOpLUDcwsSACvyA+A8Q72RCUi0IpEKA+CQQn0fW4QrEQkC8d9f8lq9MUNWMQCoAiP8B8R6QGEyHIhDbg4wA4nPIEhZALAXE20HGgCWAxjADaW+oMWtgFoJ0KACxA9Q115ElrKHGrAca8wtZIhiIP8BcgyxhAMRPgfgBusQuIFYBYn10ic1AzA7E7ugSINfcANkFdDo3ssQrqHGqQGwOlwA68T9U4j80dBmQg+QMEN8C2QM0TgQuAdT1EuoPJWi4MSDHxzpYnKFLHAXie0DsCDIOLgE07ieQWgbEOiDj0BPDdqjzLQACDABkKEGr78e33gAAAABJRU5ErkJggg==');
    }

    #pozvonim-wrapper.TOP_RIGHT .pozvonim-wrapper-closing {
        left: 0 !important;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAXCAYAAAAoRj52AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAO5JREFUeNpc0r9qAkEQx/G9M2ghgoIkhY0YELs0gYB/ukOxsBEfyZfIAySVgSCkMI2FIhYWgoUiWFoIsbQQOS7fOXZhvIHPbTHsb2eXM1EUDXFCHcbxjTFLPKJrdNEtYoMDMnrHH6aooOE2+Hb9tWtfR7k4idrhyUUZGzdBFa86SmoED+14VbNnscdW4vSOC75Qw5tv7kvOuaLnSYyqAmbIJXeUUcI62QiQj89SU6WxwBHPuvGCEB9I6aiBvfAPQn25lY2pxJPaRsvGfMLTjxjYmG95cPfsEjPHGQU3jHyauOE9+TN08ICxvum/AAMA77jboW0LeaAAAAAASUVORK5CYII=');
    }

    #pozvonim-wrapper.TOP_CENTER {
        left: 0 !important;
        top: 0 !important;
        height: auto !important;
        width: 100% !important;
    }

    #pozvonim-wrapper.TOP_CENTER iframe {
        overflow-y: auto !important;
        overflow-x: hidden !important;
        width: 100% !important;
        margin-top: -300px !important;
    }

    #pozvonim-wrapper.TOP_CENTER.opened iframe {
        margin: 0 !important;
        height: 300px !important;
    }

    #pozvonim-wrapper.TOP_CENTER .pozvonim-wrapper-toggler {
        top: auto !important;
        left: 50% !important;
        margin-left: -32.5px !important;
        height: 15px !important;
        width: 65px !important;
    }

    #pozvonim-wrapper.TOP_CENTER .pozvonim-wrapper-opening {
        bottom: -15px !important;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAGCAYAAAAooAWeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDoAABSCAABFVgAADqXAAAXb9daH5AAAADhSURBVHjapNGxK4VxFMbxz+8mBouJwSKDGK/ULUbeK4OB7mR6/R3X+P4f7z9ASRm8Bgzq2igbYVJKTAaDXsshdA1y6kznPN/nOZ2U5d0CPfSqsnj0z2pvbg2jieWU5d0HjOISR6j+ahTAWSxhES0MpCzvzmMFG5iM/RscYBtnVVm89AEOYgad0DfRwFPo9lJd1x/LQ1jAeiSYQsIVdsLsAhMxX4uEDdzjBLs4rMriGT7hP1KNYQ7t6Gm84hrjGAngMfbjZ7dVWXyD9YV/MUnxjxZWw+g8LjnFXVUWb7/p3wcAePZGK3bqMAgAAAAASUVORK5CYII=');
        border-radius: 0 0 3px 3px !important;
    }

    #pozvonim-wrapper.TOP_CENTER .pozvonim-wrapper-closing {
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAGCAYAAAAooAWeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDoAABSCAABFVgAADqXAAAXb9daH5AAAADXSURBVHjalJG9SoIBFIafD8IGl1xq8AbcxBAEp6iwQVq9E68goRsQwRtwc3Rx0aVoaGhokEh0SRDqAhrscfBIn4NSL5ztvM97fhKVA0qAU6AC3AI14AXoAw/AHFjtNe+BnwHlgNWAAvANvAN54ARYAGNgADwBM2AXpm7rWL1U2+pE/XGjN/VevVBzakltqo/qKno+1J7aiB5UUKvqnTr1V1O1E2HZ1ADpyqjF8D6ngr7UrlpP1GXc9RUYAcNY85O/KwucA9fAVfzoKFFbAfsv8FBQCbhZDwCN9MFYxMJfmAAAAABJRU5ErkJggg==');
        margin-top: 0 !important;
        bottom: 0 !important;
    }

    #pozvonim-wrapper.BOTTOM_CENTER {
        left: 0 !important;
        bottom: 0 !important;
        height: auto !important;
        width: 100% !important;
    }

    #pozvonim-wrapper.BOTTOM_CENTER iframe {
        overflow-y: auto !important;
        overflow-x: hidden !important;
        width: 100% !important;
        margin-bottom: -300px !important;
    }

    #pozvonim-wrapper.BOTTOM_CENTER.opened iframe {
        margin: 0 !important;
        height: 300px !important;
    }

    #pozvonim-wrapper.BOTTOM_CENTER .pozvonim-wrapper-toggler {
        margin-left: -32.5px !important;
        width: 65px !important;
        left: 50% !important;
        height: 15px !important;
    }

    #pozvonim-wrapper.BOTTOM_CENTER .pozvonim-wrapper-opening {
        top: -15px !important;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAGCAYAAAAooAWeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDoAABSCAABFVgAADqXAAAXb9daH5AAAADhSURBVHjalNCxK0VxGMbxz09isJgYLDKI8UopRu6RwUAm0zl/xz3j+T/OP0BJGRwDBnVtlI0wKSUmg0HH8o73hmd9e77P+zypbVvDlBVlwhRWsI0MNzjEFZ6buvoe5k+D4FlRTmM5YBkW8IUHzGASL7jACfp4auqqHQjPinIca9jFBuaRcB+fnuIWs3HfiUYjEXSJI5w1dfUBqZv3VrGFfcxF6GPADnDd1NXngHZjWMRe+DsR9B6+49TNe6+x6x3O0aDf1NWbPyorygksRaP1aDSaunmvis3+BfwlqIPNnwEAthFGK1lcy2EAAAAASUVORK5CYII=');
        border-radius: 3px 3px 0 !important;
        bottom: auto !important;
    }

    #pozvonim-wrapper.BOTTOM_CENTER .pozvonim-wrapper-closing {
        top: 0 !important;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAGCAYAAAAooAWeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDoAABSCAABFVgAADqXAAAXb9daH5AAAADUSURBVHjapJG9SoIBFIafD0KHb8nFBm+gTZRAcJIKG6TVO+kKErwBCboBt8YWF12MhoYGB5HElgQhL6BBH5dDGuhiL7zTeX845yRqC3gNfvN/pEAJuEnUBZAHRkAf6B1RlAJl4Bq4AirACWpVvVenbjFVH9RLNVXZw4xaDO+bugrvUn1UG7vibIR11LG6DvFEbas1NaeW1Dv1ZSfwS+2qzdCgkqj71jwDLoB68Bz4AT6AAnAKzIEB8BxnnAF/wg6F/87jHxXgNoregSdgCHwCq0PmzQCi5MFYiklGogAAAABJRU5ErkJggg==');
    }

    #pozvonim-wrapper.CENTER {
        width: 100% !important;
        height: 100% !important;
        left: 0 !important;
        top: 0 !important;
        visibility: hidden !important;
        background-color: rgba(0, 0, 0, 0.3) !important;
    }

    #pozvonim-wrapper.CENTER.opened {
        visibility: visible !important;
    }

    #pozvonim-wrapper.CENTER iframe {
        border-radius: 5px !important;
        height: 360px !important;
        margin: -175px auto 0 !important;
        position: relative !important;
        top: 50% !important;
        width: 570px !important;
        display: none !important;
    }

    #pozvonim-wrapper.CENTER.opened iframe {
        display: block !important;
    }

    #pozvonim-wrapper.CENTER .pozvonim-wrapper-toggler {
        display: none !important;
    }

    .pozvonim-button {

        opacity: 0;
        cursor: pointer !important;
        position: fixed;
        display: block;
        z-index: 10000000 !important;
        background: transparent none repeat scroll 0 0 !important;
        transform: scale( 1 ) !important;
    }

    

    
    .pozvonim-button.pozvonim-button-animation {
    transition: all 0.8s ease 0s;
    }

    .pozvonim-button * {
        transform-origin: center center 0 !important;
    }

    .pozvonim-button.pozvonim-draggable {
        transition: none 0s ease 0s !important;
    }

    .pozvonim-button .pozvonim-button-phone {
        -webkit-animation: cbh-circle-img-anim 1.2s ease-in-out 0s normal none infinite running ;
        -moz-animation: cbh-circle-img-anim 1.2s ease-in-out 0s normal none infinite running ;
        -o-animation: 1.2s ease-in-out 0s normal none infinite running cbh-circle-img-anim;
        animation: cbh-circle-img-anim 1.2s ease-in-out 0s normal none infinite running ;
        position: absolute !important;
        background-color: #68cafa !important;
        background-color: rgba(104, 202, 250, 0.8) !important;
        background-color: rgba(104, 202, 250, 0.8) !important;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEQAAABECAYAAAA4E5OyAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAJKSURBVHja7Nk7aBRRFIDh/8QHPvBBQNTGRgVNZ7AI2Ai+sBOLiAabINgKirWCjQQRQUtLC8FCgoUprERsVLAzRhAUo60WIWrgt3BFXTK7i9nZZJxz4DZzL7tzv7mvMxMqGb+jLwkSJEESJEESJEESJEESJEESJEESJEESJEESJCNBeggSEV0pwHbgOTALjAHLmurLCbWrpUv3tEF97d/xUF1X1n3/Kkt1ytwAdjZdOwJMqGtK/eelNkLUQ7aOm2WOkOj2d5mFzm/1BbCnVRNgAHj13+8y6mAbDIAARuuy7e7osN2BuoC8bEyJdrGrFiARMQmc76BpaTvNkltUG2vJCeA2sLagySywujZH94i4Cxxt0WSqdrlMRDwGJguqn9YORO0DthZUj9cx2z0GrJ/n+jQwUSsQdRVwpaD6ekTM1W2EXAV2z3P9HXCrbsndSIvE7njZ6X9PQNSN6pYOMPapXwsw7pX5IHsCom5W76hzjU49UjcVYAypnwsw3qv9lQZRB9VP83RuSt3W1LlT6kwBxqw6VPZULxVEPah+abEWfFTPqMPqeJsXQiO9WPtKe0EEHAYeACu68FsXIuJaEUglkjvgDT/fmC80LkfEpVa7Y1VAZrqQiV6MiLF2x4WqHMzOLRDzZDuMyh3M1NE/ttpO45k6sFj33Yttd7/6tgOIafWsunwxH2RPPkOoK4HTwDCwF+gHvgMfgCeNNP5+RHz7l5FdlUW10pFf/xMkQRIkQRIkQRIkQRIkQRIkQRIkQRIkQRIkI0FaxI8BAMGiej+TuldEAAAAAElFTkSuQmCC');
        border-radius: 100% !important;
        height: 70px !important;
        width: 70px !important;
        left: 44px !important;
        top: 44px !important;
        z-index: 10000000 !important;
    }

    .pozvonim-button:hover .pozvonim-button-phone {
        background-color: #79D000 !important;
        background-color: rgba(121, 208, 0, 0.8) !important;
        background-color: rgba(121, 208, 0, 0.8) !important;
    }

    .pozvonim-button .pozvonim-button-border-inner {
        -webkit-animation: 2.3s ease-in-out 0s normal none infinite running cbh-circle-fill-anim;
        -moz-animation: 2.3s ease-in-out 0s normal none infinite running cbh-circle-fill-anim;
        -o-animation: 2.3s ease-in-out 0s normal none infinite running cbh-circle-fill-anim;
        animation: 2.3s ease-in-out 0s normal none infinite running cbh-circle-fill-anim;
        border: 1px solid #68cafa !important;
        border: 1px solid #68cafa !important;
        border-radius: 100% !important;
        opacity: 0.5 !important;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)" !important;
        height: 70px !important;
        left: 44px !important;
        top: 44px !important;
        width: 70px !important;
        position: absolute !important;
        z-index: 10000000 !important;
    }

    .pozvonim-button .pozvonim-button-border-outer {
        -webkit-animation: 2.3s ease-in-out 0s normal none infinite running cbh-circle-anim;
        -moz-animation: 2.3s ease-in-out 0s normal none infinite running cbh-circle-anim;
        -o-animation: 2.3s ease-in-out 0s normal none infinite running cbh-circle-anim;
        animation: 2.3s ease-in-out 0s normal none infinite running cbh-circle-anim;
        border: 1px solid #68cafa !important;
        border: 1px solid #68cafa !important;
        border-radius: 100% !important;
        width: 100px !important;
        height: 100px !important;
        left: 30px !important;
        top: 30px !important;
        position: absolute !important;
        z-index: 10000000 !important;
    }

    .pozvonim-button:hover .pozvonim-button-border-inner {
        border: 1px solid #68cafa !important;
        border: 1px solid #68cafa !important;
    }

    .pozvonim-button:hover .pozvonim-button-border-outer {
        border: 1px solid #b7de69 !important;
        border: 1px solid #68cafa !important;
    }

    
    .pozvonim-button:hover .pozvonim-button-phone {
        display: none;
    }

    .pozvonim-button:hover .pozvonim-button-border-inner {
        height: 90px !important;
        left: 33px !important;
        top: 33px !important;
        width: 90px !important;
    }

    .pozvonim-button:hover .pozvonim-button-border-outer {
        height: 100px !important;
        left: 28px !important;
        top: 28px !important;
        width: 100px !important;
    }

    .pozvonim-button:hover .pozvonim-button-text {
        display: block;
    }

    .pozvonim-button .pozvonim-button-text {
        background-color: rgba(121, 208, 0, 0.8) !important;
        color: #ffffff !important;
        border-radius: 100% !important;
        display: none;
        width: 90px !important;
        height: 90px !important;
        left: 33px !important;
        top: 33px !important;
        margin: 0 !important;
        position: absolute;
        text-align: center !important;
        font-size: 14px !important;
        font-family: "Open Sans", "Helvetica Neue", "Helvetica", arial, sans-serif !important;
        font-weight: 500 !important;
        line-height: 19px !important;

    }

    .pozvonim-button .pozvonim-button-center-text {
        vertical-align: middle;
        text-align: center;
        display: table-cell;
        height: 90px;
        width: 90px;
        word-break: break-all !important;
        font-size: 14px !important; font-weight: 500 !important;
        font-family: "Open Sans", "Helvetica Neue", "Helvetica", arial, sans-serif !important;
        white-space: pre-wrap !important;
    }


    
    .pozvonim-button .pozvonim-button-wrapper {
        width: 160px;
        height: 160px;
    }

    #pozvonim-cover {
        background-color: rgba(0, 0, 0, 0.25) !important;
        display: none;
        height: 100% !important;
        position: fixed !important;
        top: 0 !important;
        width: 100% !important;
        z-index: 20000000 !important;
    }    
</style>

<div class="callback pozvonim-button BOTTOM_RIGHT pozvonim-button-animation" style="position: fixed; bottom: 30px;right: 50px;z-index: 999;; cursor: pointer; opacity: 1; display: block;">
    <div class="pozvonim-button-wrapper actionShow">    
        <div class="pozvonim-button-border-inner"></div>
        <div class="pozvonim-button-border-outer"></div>
        <div class="pozvonim-button-text">
            <span class="pozvonim-button-center-text">Перезвонить мне</span>
        </div>
        <div class="pozvonim-button-phone"></div>
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
			  		<span><strong><i class="pe-7s-phone highlight"></i><a href="#callback" class="callback"> <?=$phone?></a></strong></span>
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
			<?php Product::getProduct(1,'Песок 0,5 кг','s3s.jpg', 'color', 370, 450,'Песок');?>			
			<!-- /.package 2 -->
			<?php Product::getProduct(2,'Песок 1 кг','s3s.jpg', 'color', 595, 650,'Песок');?>
			<!-- /.package 3 -->
			<?php Product::getProduct(3,'Песок 2 кг','s2s.jpg', 'color', 1080, 1250,'Песок');?>			
			<!-- /.package 4 -->
			<?php Product::getProduct(4,'Песок 3 кг','s2s.jpg', 'color', 1440, 1630,'Песок');?>
		</div>	
		
		<div class="row package-option">
			<!-- /.package 1 -->
			<?php Product::getProduct(5,'Песок 1 кг','nf1s.jpg', 'color', 990, 1140,'Песок',array('+ песочница', '+ 6 формочек'));?>
			<!-- /.package 2 -->
			<?php Product::getProduct(6,'Песок 2 кг','nf2s.jpg', 'color', 1520, 1660,'Песок',array('+ песочница', '+ 6 формочек'));?>		
			<!-- /.package 3 -->
			<?php Product::getProduct(7,'Песок 3 кг','nf2s.jpg', 'color', 1960, 2120,'Песок',array('+ песочница', '+ 6 формочек'));?>
			<!-- /.package 4 -->
			<?php Product::getProduct(8,'Песок 6 кг','nf1s.jpg', 'color', 5950, 6150,'Песок',array('+ деревянная песочница 40х40см.', '+ 6 формочек'));?>		
		</div>	
		
		
		<div class="text-center">
		
			<!-- /.pricing title -->
			<h2 class="wow fadeInLeft">Дополнительные аксесуары</h2>
			<div class="title-line wow fadeInRight"></div>
		</div>
		
		<div class="row package-option">	
			
			<?php Product::getProduct(15,'Морские люкс','f5s.jpg','', 200, 0,'Аксесуары',0);?>
			
			<?php Product::getProduct(16,'Морской микс','f12s.jpg','', 200, 0,'Аксесуары',0);?>
			
			<?php Product::getProduct(17,'Крепость','f11s.jpg','', 190, 0,'Аксесуары',0);?>

			<?php Product::getProduct(18,'Замок','18.jpg','', 290, 0,'Аксесуары',0);?>			
		
		</div>	

		<div class="row package-option">	
			
			<?php Product::getProduct(19,'Дворец','19.jpg','', 290, 0,'Аксесуары',0);?>
			
			<?php Product::getProduct(20,'Ролик для песка','20.jpg','', 250, 0,'Аксесуары',0);?>
			
			<?php Product::getProduct(21,'Набор инструментов для лепки','21.jpg','', 100, 0,'Аксесуары',0);?>

			<?php Product::getProduct(22,'7 чудес света','22.jpg','', 280, 0,'Аксесуары',0);?>			
		
		</div>
		
		<div class="row package-option">	
			
			<?php Product::getProduct(29,'Морские животные','29.jpg','', 140, 0,'Аксесуары',0);?>
			
			<?php Product::getProduct(23,'Мамонт','23.jpg','', 290, 0,'Аксесуары',0);?>
			
			<?php Product::getProduct(24,'Космос','24.jpg','', 290, 0,'Аксесуары',0);?>
			
			<?php Product::getProduct(25,'3D автомобили','25.jpg','', 290, 0,'Аксесуары',0);?>
		
		</div>			

		<div class="row package-option">	
			
			<?php Product::getProduct(26,'Динозавры','26.jpg','', 290, 0,'Аксесуары',0);?>
			
			<?php Product::getProduct(27,'Животные','27.jpg','', 290, 0,'Аксесуары',0);?>
			
			<?php Product::getProduct(28,'Зверята','28.jpg','', 100, 0,'Аксесуары',0);?>
			
			
			<?php //Product::getProduct(30,'Динозавр','30.jpg','', 290, 0,'Аксесуары',0);?>
		
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
		
		<div class="container">
			<div class="row text-center">
		
			<!-- /.pricing title -->
				<h2 class="wow fadeInLeft">Оплата</h2>
				<div class="title-line wow fadeInRight"></div>
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
							Лилия, <span class="company">г. Нижний Новгород</span>	
						</div>
					</div>				
					 
									 
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
							Николай, <span class="company">г. Москва</span>	
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
							Евгений, <span class="company">г. СПБ</span>	
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
							Александр, <span class="company">г. Самара</span>	
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
							<li><i class="pe-7s-map-marker"></i><?=$addr?>
							</li>
							<li><i class="pe-7s-phone"></i><?=$phone?>
							</li>
							<li><i class="pe-7s-mail"></i><a href="mailto:info@smart-sand.ru">info@smart-sand.ru</a></li>
							<li><i class="pe-7s-look"></i><a href="#">www.<?=$domain?></a></li>
							</ul>	
								
					</div>
					
					<!-- /.contact form -->
					<div class="col-sm-7 contact-right" style="height: 300px">
						
						<?=$map?>
	
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
			<form class="form-header" action="" role="form" method="POST" id="orderForm">
						<input type="hidden" name="form_id_product" id="form_id_product" value="">
						<input type="hidden" name="form_pname" id="form_pname" value="">
						<input type="hidden" name="form_variant" id="form_variant" value="">
						<input type="hidden" name="form_ptype" id="form_ptype" value="">
						<input type="hidden" name="form_city" id="form_city" value="<?=$city1?>">
						<input type="hidden" name="form_price" id="form_price" value="">
						<input type="hidden" name="form_brand" id="form_brand" value="">
						<input type="hidden" name="ajax" id="ajax" value="ajax">
						<input type="hidden" name="form_category" id="form_category" value="">
							<div class="form-group">
								<input class="form-control input-lg" name="name" id="name" type="text" placeholder="Ваше имя" required="">
							</div> 
							<div class="form-group">
								<input class="form-control input-lg" name="phone2" id="phone2" type="phone" placeholder="+7 (___) xxx-xx-xx" required="">
							</div>
							<div class="form-group" id="delivery_layer">
								<label>Нужна доставка (<?=$deliveryprice?> от <?=$freeshiping?> бесплатно!)<input name="form_addr_check" id="form_addr_check" type="checkbox"></label>
								
								<div class="addr_layer" style="display:none;"><input class="form-control input-lg" name="form_addr" id="form_addr" type="text" placeholder="Адрес доставки"></div>
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
	<script src="js/m.js"></script>
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

		  $('#form_addr_check').change(function () {
			    if (this.checked) 
			    {
			    	$('.addr_layer').fadeIn();
			        return;
			    }
			    $('.addr_layer').fadeOut();
			});
			
		  $('.modalcb').on('submit', function(event) {
			    event.preventDefault();
			    
			    $('#orderForm').show();
                $('#success-message').hide();
	    		$('#modalOrder').modal('show');
                $('#delivery_layer').show();

                var id_product = $(this).find('#id_product').val();
                var pname = ($(this).find("h3").text()=='')?$(this).find('#bname').val():$(this).find("h3").text();
                var variant = (!!$(this).find('select').val())?$(this).find('select').val():'';
                var price = ($(this).find(".price").text()=='')?$(this).find('#bprice').val():$(this).find(".price").text();
			    var brand = $(this).find('#brand').val();
			    var category = $(this).find('#category').val();
			    $('#form_id_product').val(id_product);
			    $('#form_pname').val(pname);
			    $('#form_variant').val(variant);
			    $('#form_price').val(price);
			    $('#form_brand').val(brand);
			    $('#form_category').val(category);	
			    $('#form_city').val('<?=$city1?>');	
			    $('#form_ptype').val('');	    
			    dataDisplay(id_product,pname,variant,price,category,brand,"","");
	    		
		  });

	      $('#orderFormBest').on('submit', function(event) {
			    event.preventDefault();
			    sendOrder($(this).serialize(),"callbackf");
		  });

		  $('.callback').click(function () {
			    metrikaReach('callback'); 
			    $('#form_ptype').val('callback');
			    $('#orderForm').show();
              	$('#success-message').hide()
	    		$("#modalOrder").modal('show');	  
              	$('#delivery_layer').hide();  		
		  });

	      $('#orderForm').on('submit', function(event) {
			    event.preventDefault();
			    var phone = $(this).find('#phone2').val();
			    var id_product = $(this).find('#form_id_product').val();
			    var pname = $(this).find('#form_pname').val();
			    var price = $(this).find('#form_price').val();
			    var variant = $(this).find('#form_variant').val();
			    var brand = $(this).find('#form_brand').val();
			    var category = $(this).find('#form_category').val();
			    sendOrder($(this).serialize(), "");
			    dataPurchaseFast("", phone, id_product, pname, price,1, variant, brand, category, 0);
		  });
	  });

	  function sendOrder(values,t)
	  {
		  
	       $.ajax({
	            type: "POST",
	            data: values,
	            url: 'index.php',
	            dataType: "html",
	            success: function(data) {
					if(t=="callbackf")
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