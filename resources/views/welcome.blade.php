<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AidCollective</title>
		<meta name="description" content="AidCollective is a complete digital service team, based in São Paulo, Brazil." />
		<meta name="keywords" content="Innovation,Planning,Web Development,Webdesign,Design System,User Interface,User Experience,Interaction Design" />
		<meta name="author" content="AidCollective" />
		<meta property="og:image" content="{{ asset('img/3.png') }}" />
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link href="{{ asset('css/base.css?v=1') }}" rel="stylesheet" />
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;700&family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	</head>
	<body>
		
		<main>

			<div class="content">

				<img id="trigger" src="{{ asset('img/3.png') }}"/>

				<div class="sidebar">
					<nav id="navbar" class="menu">
						<a href="#contact" class="menu__item">Contact</a>
						<a href="#helping" class="menu__item">Helping Teams</a>
						<a href="#collaboration" class="menu__item">Collaboration</a>
						<a href="#digital" class="menu__item">Digital Strategy</a>
						<a href="#collective" class="menu__item menu__item--current">Collective</a>
					</nav>
				</div>

				<div class="slideshow">

					<h2 id="collective">Collective</h2>

						<div class="box-item">

							<img class="img_1" src="{{ asset('img/1.png') }}"/>

							<p>We’re a passionate team of creative thinkers, digital experts, designers, developers and marketeers based in São Paulo.</p>
							
						</div>

						<div class="box-item">

							<div>

								<p>We work with companies of all sizes, from small startups to medium-sized business, delivering both B2B and B2C digital solutions for our clients in a variety of channels.</p>

							</div>

						</div>

					<h2 id="digital">Digital Strategy</h2>

						<div class="box-item">

							<div class="upper">

								<p><b>Services</b></p>
								<p>Innovation;</p>
								<p>Planning; Strategy;</p>
								<p>Design Thinking; User Experience;</p>
								<p>Branding; Illustration;</p>
								<p>Design System; User Interface;</p>
								<p>Interaction Design;</p>

							</div>

							<img class="img_2" src="{{ asset('img/2.png') }}"/>
							

						</div>

						<div class="box-item">

							<div>

								<p>Our digital marketing solutions include media in social networks, content writing, SEO, SEM and email campaigns. Contact for more.</p>

							</div>

						</div>

						<div class="box-item">

							<div class="upper">
							
								<p><b>Web Development </br>& Web Design</b></p>
								<p>Inventory, Clients & Services Systems;</p>
								<p>Apps;</p>
								<p>LMS; CMS; Small ERP & CRM Solutions;</p>
								<p>E-Commerce;</p>

							</div>

							<div class="upper">
							
								<p><b>Technologies</b></p>
							    <p>Vue; Angular;</p>
							    <p>Node; Laravel; Wordpress;</p>
							    <p>GraphQL; APIs; Payment Methods;</p>
							    <p>Woocomerce; OpenCart; VTex; Wix;</p>

						    </div>

					    </div>

						<img class="img_4" src="{{ asset('img/4.png') }}"/>

					<h2 id="collaboration">Collaboration</h2>

						<div class="box-item">

							<div>

								<p>What sets us apart is our team’s rich history in the advertising, user experience, art and programming. This experience influences our thinking, providing strategic advantages to our clients.</p>

							</div>
						
						</div>

						<div class="box-item box-cli">

							<img class="cli_item" src="{{ asset('img/cli/cli_1.png') }}"/>
							<img class="cli_item" src="{{ asset('img/cli/cli_2.png') }}"/>
							<img class="cli_item" src="{{ asset('img/cli/cli_3.png') }}"/>
							<img class="cli_item" src="{{ asset('img/cli/cli_4.png') }}"/>
							<img class="cli_item" src="{{ asset('img/cli/cli_5.png') }}"/>
							<img class="cli_item" src="{{ asset('img/cli/cli_6.png') }}"/>
							<img class="cli_item" src="{{ asset('img/cli/cli_7.png') }}"/>
							<img class="cli_item" src="{{ asset('img/cli/cli_8.png') }}"/>
							<img class="cli_item" src="{{ asset('img/cli/cli_9.png') }}"/>
							<img class="cli_item" src="{{ asset('img/cli/cli_10.png') }}"/>
							<img class="cli_item" src="{{ asset('img/cli/cli_11.png') }}"/>
							<img class="cli_item" src="{{ asset('img/cli/cli_12.png') }}"/>

						</div>

					<h2 id="helping">Helping Teams</h2>

						<div class="box-item">

							<div>

								<p>We know how hard is the reality of a digital team.</p>

								<p>AidCollective has people and teams for helping you temporary with small fixes, repairs and changes to put out the fire when you have a hot week.</p>

							</div>

						</div>

						<div class="box-item">
						
							<img class="img_5" src="{{ asset('img/5.png') }}"/>

						</div>

						<div class="box-item center">

							<p class="colored">Sometimes, we just need friends to help us on the weekend :)</p>

						</div>

					<h2 id="contact">Contact</h2>

						<div class="box-item">
				
							<div>

								<p>We like to help and make business with friends!</p>

								<p class="colored">
									
									<a href="mailto:hello@aidcollective.com">Click here to send us a mail</a>
									
									or 

									<a href="https://wa.me/5511970828949">whatsapp message</a>

								</p>

							</div>

							<img class="img_6" src="{{ asset('img/6.png') }}"/>

						</div>

				</div>

			</div>

			<div class="intro">
				
				<div class="intro__box"></div>

				<a href="#collective" class="enter1 intro__logo">
					<img class="logo" src="{{ asset('img/logo.png') }}"/>
				</a>

				<div class="intro__title-wrap">
					<h1 class="enter2 intro__title animatable shake">Aid</br>Collective</h1>
					<div class="intro__subtitle-wrap animatable">
						<!-- <h3 class="intro__subtitle">Collapsing Logo Effect</h3> -->
						<p class="intro__info">Helping Teams, Helping People</p>
					</div>					
					<a class="enter3 intro__enter animatable shake">
						click to enter
						<img src="{{ asset('img/3.png') }}"/>
					</a>
				</div>

				<div class="intro__content intro__content--second animatable">
					<h3 class="intro__content-title animatable">Philosophy</h3>
					<p class="intro__content-text animatable">
					We believe that collaboration and user experience is what differentiates companies in the digital age;</br>
					Layered design with tailor-made technologies, natural and fun interactivity that works across all devices.</p>
				</div>
				
				<div class="intro__content intro__content--forth animatable">
					<h3 class="intro__content-title animatable">About</h3>
					<p class="intro__content-text animatable">
					AidCollective is a complete digital service team, founded in São Paulo, Brazil</br>
					- We look for new and exciting ways to do attractive things on computers. This is what we do!</p>
				</div>

				<div class="intro__location animatable">
					<p>
						<a href="tel:+5511970828949">+5511970828949 </a>
						<a href="mailto:hello@aidcollective.com"> hello@aidcollective.com</a>
					</p>
				</div>
				
				<div class="intro__social animatable">
                    
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="intro__social-item">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="intro__social-item">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 intro__social-item">Registrar</a>
                            @endif
                        @endif
                    @endif

				</div>

				<a class="intro__github animatable" target="_blank" href="https://github.com/aidcollective/" title="Find this project on GitHub">GitHub</a>

			</div>

		</main>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

		<script src="{{ asset('js/anime.min.js') }}"></script>

		<script src="{{ asset('js/demo.js') }}"></script>

		<script type="text/javascript">

			$(document).ready(function () {
			    setTimeout( function(){
			        $('#trigger').css("display", "none");
			    },100);
			});
			
			document.querySelectorAll('.menu a[href^="#"]').forEach(anchor => {
			    anchor.addEventListener('click', function (e) {
			        e.preventDefault();

			        document.querySelector(this.getAttribute('href')).scrollIntoView({
			            behavior: 'smooth',
			            block: 'center'
			        });
			    });
			});

			document.querySelectorAll('.intro a[href^="#"]').forEach(anchor => {
			    anchor.addEventListener('click', function (e) {
			        e.preventDefault();

			        document.querySelector(this.getAttribute('href')).scrollIntoView({
			            behavior: 'smooth',
			            block: 'end'
			        });
			    });	
			});

			var prevScrollpos = window.pageYOffset;
			window.onscroll = function() {
				var currentScrollPos = window.pageYOffset;
				if (prevScrollpos > currentScrollPos) {
					document.getElementById("navbar").style.top = "0";
				} else {
					document.getElementById("navbar").style.top = "-140px";
				}
				prevScrollpos = currentScrollPos;
			}

		</script>

	</body>

</html>