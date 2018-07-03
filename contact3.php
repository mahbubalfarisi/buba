<!DOCTYPE html>
<html lang="en" class="no-js demo-7">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Contact - Buba</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="./css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="./css/demo.css" />
		<link rel="stylesheet" type="text/css" href="./css/component.css" />
		<link rel="stylesheet" type="text/css" href="./css/content.css" />
		<link rel="stylesheet" type="text/css" href="./css/w3.css" />
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div id="container" class="container">
			<section>
				<div class="mockup-content">
					<!-- Contact Section -->
					<div class="w3-container w3-padding-32" id="contact">
					    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
					    <p>Let's hang out and talk about anything :)</p>
					    <form action="/action_page.php" target="_blank">
					      	<input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
					      	<input class="w3-input w3-section w3-border" type="Email" placeholder="Email" required name="Email">
					      	<input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
					      	<input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
					      	<button class="w3-button w3-black w3-section" type="submit">
					        	<i class="fa fa-paper-plane"></i> SEND EMAIL
					      	</button>
					    </form>
					</div>
				</div>
			</section>
		</div><!-- /container -->
		<div class="morph-button morph-button-sidebar morph-button-fixed">
			<button class="w3-button w3-black w3-section" type="button">
	        	<h5 style="margin: 0"><i class="fa fa-comment"> Social Media</i></h5>
	      	</button>
			<div class="morph-content">
				<div class="content-style-sidebar">
					<span class="fa fa-angle-down close w3-display-topright" style="padding: 1em; cursor: pointer;"></span>
					<h2>Social Media</h2>
					<ul>
						<li><a href="https://www.linkedin.com/in/mahbub-haq-al-farisi/"><i class="fa fa-linkedin" style="margin-right: 1rem;"></i> LinkedIn</a></li>
						<li><a href="https://www.instagram.com/buba_alf/"><i class="fa fa-instagram" style="margin-right: 1rem;"></i> Instagram</a></li>
						<li><a href="https://twitter.com/mahbub_alfarisi"><i class="fa fa-twitter" style="margin-right: 1rem;"></i> Twitter</a></li>
						<li><a href="https://web.facebook.com/mahbub.haq.alfarisi"><i class="fa fa-facebook" style="margin-right: 1.2rem; margin-left: 0.2rem;"></i> Facebook</a></li>
					</ul>
				</div>
			</div>
		</div><!-- morph-button -->
		<script src="js/classie.js"></script>
		<script src="js/uiMorphingButton_fixed.js"></script>
		<script>
			(function() {
				var docElem = window.document.documentElement, didScroll, scrollPosition,
					container = document.getElementById( 'container' );

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();
				
				var el = document.querySelector( '.morph-button' );
				
				new UIMorphingButton( el, {
					closeEl : '.close',
					onBeforeOpen : function() {
						// don't allow to scroll
						noScroll();
						// push main container
						classie.addClass( container, 'pushed' );
					},
					onAfterOpen : function() {
						// can scroll again
						canScroll();
						// add scroll class to main el
						classie.addClass( el, 'scroll' );
					},
					onBeforeClose : function() {
						// remove scroll class from main el
						classie.removeClass( el, 'scroll' );
						// don't allow to scroll
						noScroll();
						// push back main container
						classie.removeClass( container, 'pushed' );
					},
					onAfterClose : function() {
						// can scroll again
						canScroll();
					}
				} );
			})();
		</script>
	</body>
</html>