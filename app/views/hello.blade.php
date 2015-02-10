<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>FIND ME</title>

	<link href='http://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="author" href="https://plus.google.com/107766061849006545830"/>
</head>
<body>

	<div id="intro">
		<h1 id="title">
			<span id="title-line1" class="title-line">Find</span>
			<span id="title-line2" class="title-line">My</span>
			<span id="title-line3" class="title-line">Pet</span>
		</h1>
	</div>

	<div id="title-info">
		<p id="desc">La mejor herramienta para encontrar a tu mascota!!!</p>
		<p class="credit">creado por <a href="http://www.kerberosits.com">Kerberos IT Services</a></p>
	</div>

	<p id="download">
		<span class="accent">&#9733;</span> OPCIÓNES <span class="accent">&#9733;</span><br />
		<a class="download" href="http://kerberosits.com/findme/public/users/login">Accesar</a>
		<a class="download" href="#">Escanear código</a>
	</p>



	<script type="text/javascript" src="{{ asset('js/greensock/TweenMax.min.js') }}"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="{{ asset('js/jquery-1.9.1.min.js') }}"><\/script>')</script>
  	<script src="{{ asset('js/jquery.lettering-0.6.1.min.js') }}"></script>
	<script src="{{ asset('js/jquery.superscrollorama.js') }}"></script>
	<script>
		$(document).ready(function() {
			// set rotation of flash
			TweenMax.set("#newversion", {rotation: 15});

			$('body').css('visibility','visible');

			// hide content until after title animation
			$('#content-wrapper').css('display','none');

			// lettering.js to split up letters for animation
			$('#title-line1').lettering();
			$('#title-line2').lettering();
			$('#title-line3').lettering();

			// TimelineLite for title animation, then start up superscrollorama when complete
			(new TimelineLite({onComplete:initScrollAnimations}))
				.from( $('#title-line1 span'), .4, {delay: 1, css:{right:'1000px'}, ease:Back.easeOut})
				.from( $('#title-line2'), .4, {css:{top:'1000px',opacity:'0'}, ease:Expo.easeOut})
				.append([
					TweenMax.from( $('#title-line3 .char1'), .25+Math.random(), {css:{top: '-200px', right:'1000px'}, ease:Elastic.easeOut}),
					TweenMax.from( $('#title-line3 .char2'), .25+Math.random(), {css:{top: '300px', right:'1000px'}, ease:Elastic.easeOut}),
					TweenMax.from( $('#title-line3 .char3'), .25+Math.random(), {css:{top: '-400px', right:'1000px'}, ease:Elastic.easeOut}),
					TweenMax.from( $('#title-line3 .char4'), .25+Math.random(), {css:{top: '-200px', left:'1000px'}, ease:Elastic.easeOut}),
					TweenMax.from( $('#title-line3 .char5'), .25+Math.random(), {css:{top: '200px', left:'1000px'}, ease:Elastic.easeOut})
				])
				.from("#newversion", .4, {scale: 5, autoAlpha: 0, ease: Elastic.easeOut})
				.to( $('#title-info'), .5, {css:{opacity:.99, 'margin-top':0}, delay:-1, ease:Quad.easeOut});

			function initScrollAnimations() {
				$('#content-wrapper').css('display','block');
				var controller = $.superscrollorama();

				// title tweens
				$('.title-line span').each(function() {
					controller.addTween(10, TweenMax.to(this, .5, {css:{top: Math.random()*-200-600, left: (Math.random()*1000)-500, rotation:Math.random()*720-360, 'font-size': Math.random()*300+150}, ease:Quad.easeOut}),200);
				});
				controller.addTween(10, TweenMax.to($('#title-line1'), .75, {css:{top: 600}, ease:Quad.easeOut}),200);
				controller.addTween(10, TweenMax.to($('#title-line2'), .75, {css:{top: 200}, ease:Quad.easeOut}),200);
				controller.addTween(10, TweenMax.to($('#title-line3'), .75, {css:{top: -100}, ease:Quad.easeOut},200));

			}
		});
	</script>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2821890-9']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

</body></html>
