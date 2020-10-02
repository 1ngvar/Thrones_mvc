<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Game of Thrones</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>/css/style.css" />
		<script src="<?php echo BASE_URL ?>/js/jquery-1.6.2.js" type="text/javascript"></script>
		<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) { return Math.floor( Math.random()*(number+1) ); };
		
		// show random quote
		$(document).ready(function() {
			var quotes = $('.quote');
			quotes.hide();
			
			var qlen = quotes.length; //document.write( random(qlen-1) );
			$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
		});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="menu">
					<ul>
						<li class="first active"><a href="<?php echo BASE_URL ?>">Houses</a></li>
						<li><a href="<?php echo BASE_URL ?>/portfolio">Портфолио</a></li>
						<li class="last"><a href="<?php echo BASE_URL ?>/contacts">Contacts</a></li>
                        <li><a href="<?php echo BASE_URL ?>/services">404</a></li>
                    </ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Random quote</h3>
						<p align="justify" class="quote">
						«Сайт, как живой организм, изменяется и развивается.
						Нельзя сразу написать идеальный вариант и на этом откланяться - это утопия»
						</p>
						<p align="justify" class="quote">
						«Всё должно быть очень просто, как текстовый файл, и при этом функционально –
						и тогда пользователи от нас уйдут»
						</p>
						<p align="justify" class="quote">
						«Критика – это когда критик объясняет автору, как сделал бы он, если бы умел»
						</p>
						<p align="justify" class="quote">
						«Сумасшедшим становится тот, кто попытался разобраться в этом сумасшедшем мире»
						</p>
						<p align="justify" class="quote">
						«Опытный разработчик знает, какой выбор ведет к поставленной цели, в то время как
						новичок каждый раз делает шаг в неизвестность»
						</p>
					</div>
					<div class="side-box">
                        <br>
						<h3>Inner workings</h3>
						<?php
                        echo "Model: " . $GLOBALS['model_name '] . "<br>";
                        echo "Controller: " . $GLOBALS['controller_name '] . "<br>";
                        echo "Action: " . $GLOBALS['action_name '] . "<br>";
						?>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>My contacts</h3>
					<ul class="list">
						<li class="first">LinkedIn: <a href="https://www.linkedin.com/in/igor-prymak-69b239b4/" title="ingvar"> Igor Prymak</a> </li>
						<li>github: <a href="https://github.com/1ngvar" title="ingvar">ingvar</a> </li>
						<li class="last">email:  1ngvar@protonmail.com</li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>About me</h3>
					<p>
                        As a freelancer I’ve developed and took part in development of dozens of websites both static and powered by Wordpress, Joomla, Drupal and OpenCart.
                        <br/>
                        I also have experience writing custom MVC backend and React/JQuery Frontend
                        <br/>
                        This experience has taught me that key ability in my field is being able to trace and cope with any kind of issue whenever and wherever it arises
                    </p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="https://www.linkedin.com/in/igor-prymak-69b239b4/"> Igor Prymak</a> &copy; <?php echo date('Y'); ?></a>
		</div>
	</body>
</html>