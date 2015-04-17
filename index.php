<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->

		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/forms.css">
		<link rel="stylesheet" href="css/links.css">
		<link rel="stylesheet" href="css/buttons.css">
		<link rel="stylesheet" href="css/type.css">

		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/navigation.css">
		<link rel="stylesheet" href="css/player.css">
		<link rel="stylesheet" href="css/browser.css">
		<link rel="stylesheet" href="css/timeline.css">

		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->



		<nav class="navigation">
			<ul>
				<li>KEXPlorer</li>
				<li>nav</li>
				<li>nav</li>
				<li>nav</li>
			</ul>
		</nav>

		
		<section class="player">
			<article class="now-playing">
				<a href="" class="now-playing__image-link">
					<img
					src="/img/album_art/1.jpg"
					alt=""
					class="now-playing__image">
				</a>
				<h1 class="now-playing__song"><a href="/artist.php#song-1">Lonely Love</a></h1>
				by <h2 class="now-playing__artist"><a href="/artist.php">The Bahamas</a></h5>

				<div>
					actions, listen now
				</div>
			</article>

			<div>
				discussion
			</div>
		</section>

		<section class="browser">
			
			<ul class="timeline">
				<?php foreach ([1,2,3,4,5,6,7,8,9,10] as $i => $value): ?>
					<li class="timeline__li">
						<article class="timeline__item">
							<div class="timeline__details">
								<h1 class="timeline__song-name"><a href="">Song Name</a></h1>
								by <h2 class="timeline__artist"><a href="">Artist</a></h2>
							</div>
							<a
							href=""
							class="timeline__img-link">
								<img
								src="/img/album_art/<?=$i?>.jpg"
								alt=""
								class="timeline__img">
							</a>
							<i class="timeline__dot"></i>
							<i class="timeline__timestamp">2:45pm</i>
						</article>
					</li>
				<?php endforeach ?>
			</ul>
		</section>

		<? // and now scripts ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>
		// window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
		</script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			// (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			// function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			// e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			// e.src='https://www.google-analytics.com/analytics.js';
			// r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			// ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script>
	</body>
</html>
