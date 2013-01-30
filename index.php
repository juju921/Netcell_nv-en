<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="favicon.ico" />
	<title>Netcell</title>

	<!-- Included CSS Files (Uncompressed) -->
	<!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
-->

<link rel="stylesheet" href="css/default.css"  />

<!-- Nivo Slider  -->
<link rel="stylesheet" href="css/nivo-slider.css"  media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" ></script>
<script src="javascripts/jquery.nivo.slider.pack.js" ></script>

<!-- localscroll -->
<script src="javascripts/jquery.js"></script>
<script src="javascripts/jquery.scrollTo.js"></script>
<script type="text/javascript">
//<![CDATA[

$(document).ready(function() {
	$("#navi a").click(function() {
		$.scrollTo($(this).attr("href"), "slow");
		return false;
	});
});

//]]>
</script>

<!-- knacss -->
<link rel="stylesheet" href="css/knacss.css">
<script src="javascripts/modernizr.foundation.js"></script>

	<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="javascripts/googmal.js"></script>-->

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">
    $(document).ready(function() {
    	$('a.login-window').click(function() {

                //Getting the variable's value from a link 
                var loginBox = $(this).attr('href');

    //Fade in the Popup
    $(loginBox).fadeIn(300);
    
    //Set the center alignment padding + border see css style
    var popMargTop = ($(loginBox).height() + 24) / 2; 
    var popMargLeft = ($(loginBox).width() + 24) / 2; 
    
    $(loginBox).css({ 
    	'margin-top' : -popMargTop,
    	'margin-left' : -popMargLeft
    });
    
    // Add the mask to body
    $('body').append('<div id="mask"></div>');
    $('#mask').fadeIn(300);
    
    return false;
});

  // When clicking on the button close or the mask layer the popup closed
  $('a.close, #mask').live('click', function() { 
  	$('#mask , .login-popup').fadeOut(300 , function() {
  		$('#mask').remove();  
  	}); 
  	return false;
  });

  $('a.mobileex').click(function() {

		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(compati).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(compati).height() + 24) / 2; 
		var popMargLeft = ($(compati).width() + 24) / 2; 
		
		
		$(compati).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});

	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
		$('#mask , .login-popup').fadeOut(300 , function() {
			$('#mask').remove();  
		}); 
		return false;
	});
	
	
	
	
	$('a.analysis').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(analys).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(analys).height() + 24) / 2; 
		var popMargLeft = ($(analys).width() + 24) / 2; 
		
		
		$(analys).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
		$('#mask , .login-popup').fadeOut(300 , function() {
			$('#mask').remove();  
		}); 
		return false;
	});
	
	
	$('a.Monetization').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(Monay).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(Monay).height() + 24) / 2; 
		var popMargLeft = ($(Monay).width() + 24) / 2; 
		
		
		$(Monay).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
		$('#mask , .login-popup').fadeOut(300 , function() {
			$('#mask').remove();  
		}); 
		return false;
	});
	
	$('a.retention').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(reten).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(reten).height() + 24) / 2; 
		var popMargLeft = ($(reten).width() + 24) / 2; 
		
		
		$(reten).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
		$('#mask , .login-popup').fadeOut(300 , function() {
			$('#mask').remove();  
		}); 
		return false;
	});
	
	
});


</script>
</head>
<body>
	<div class="head"><!-- header -->
		<header> <a href="/" title="Netcell"> <img src="img/logo-netcell.png" alt="Netcell" width="130" height="130" > </a>
			<div class="buton"> <a href="acces-clients.html" title="Connexion"> <img src="img/Connexion.png" alt="Connexion" width="143" height="45"></a> </div>
			<nav id="navi"><!-- NAV -->
				<ul >
					<li><a href="#Accueil" title="Accueil">home</a></li>
					<li><a href="#nosmetier" title="Nos Métiers">our buisiness </a></li>
					<li><a href="#contact" title="Contacts">Contact us</a></li>
				</ul>
			</nav>
		</header>
	</div>
	<!-- header -->

	<div class="presentation" id="Accueil">
		<section>
			<header class="titre"><img src="img/Quisommesnous.png" alt="Netcell Qui sommes nous " width="241" height="38"></header>
			<article> 
				
				<!-- Then somewhere in the <body> section -->
				<div class="slider-wrapper theme-default">
					<div id="slider" class="nivoSlider " > <img src="img/appli.jpg" width="620" height="277"> <img src="img/transformation.jpg" width="620" height="277"> </div>
				</div>
				<!--				<div id="htmlcaption" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>-->
				<strong>A trusted partner with an experienced team</strong>
				<p> Since 2007, our team of web &amp; mobile marketing specialists, developers, designers and media buyers has developed everything in-house in order to control every step in the creation of our mobile products.</p>
				<p> Our expertise towards Brokers &amp; Publishers made us known well these past few years.
					Historically, we have the reputation as a reliable partner working closely with our affiliates in order to get the best results.
					Thanks to our expertise on various payment methods such as the "One Click SMS In App Purchase", we have established ourselves among the most influential players in the industry. </p>
				</article>
			</section>
		</div>
		<!-- Présentation -->

		<div class="Nosmetiers" id="nosmetier">
			<section>
				<header class="titre"><img src="img/Nosmetiers.png" alt="Netcell Nos metiers " width="141" height="28"></header>
				<article>
					<div class="mobile"> <img src="img/mobile.png" alt="Mobile Netcell" width="79" height="77">
						<h1>Mobile Expertise<img src="img/sepone.png" alt="séparation une " width="211" height="7"></h1>
						<p>Are you convinced of the potential of mobile media but unsure of which strategy to implement? Are you struggling to choose between apps, websites, sponsorships and media plans? </p>

					<!--  <p>
					Which operating system is right for you? Which type of content will set you apart from the pack? And what's the best way to take advantage of the unique benefits offered by the media?</p>--> 
					
					<br>
					<br>
					<br>
					<br>
					<br>
					<a href="#login-box" class="mobileex" title="Read more">Read more</a> </div>
					<!-- mobile -->

					<div class="Acquisition"> <img src="img/Acquisition.png" alt="Mobile Netcell" width="79" height="77">
						<h1>Analysis and reporting <img src="img/sepone.png" alt="séparation une " width="211" height="7"> </h1>
						<p> Knowledge is power. As we manage your mobile business you are provided with extensive reporting and analytic tools with a real-time view on your audience, their usage and the revenue you are earning from it. </p>
						<br>
						<br>
						<br>
						<br>
						<a href="#" class="analysis">Read more</a> </div>
						<div class="Monetisation"> <img src="img/menetisation.png" alt="Mobile Netcell" width="79" height="77">
							<h1>Audience Monetization <img src="img/sepone.png" alt="séparation une " width="211" height="7"> </h1>
							<p> Thanks to its know-how in audience monetization, <strong>NetCell</strong> can offer its partners the technical solutions they need to retain their millions of subscribers by providing them with entertainment they enjoy. </p>
					<!--<p><strong>NetCell</strong> currently operates in 10+ countries and is connected to some 40 operators, with links to more than 350 million SIM cards. Content and services are directly charged to end users on the operator's bill by means of SIM cards. 
				</p>--> 

				<br>
				<br>
				<br>
				<br>
				<a href="#" class="Monetization">Read more</a> </div>
				<div class="Monetisation"> <img src="img/fidelisation.png" alt="Mobile Netcell" width="79" height="77">
					<h1>Retention <img src="img/sepone.png" alt="séparation une " width="211" height="7"> </h1>
					<article>
						<p> With the mobile Internet, it's essential to retain subscribers wherever possible and to strengthen their attachment to your app. </p>
						<!--          <p> <strong>NetCell</strong> has designed products to secure the loyalty of your users or customers. They enable you to stay in regular contact with them and generate more revenue:

					</p>--> 

					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<a href="#" class="retention">Read more</a> </article>
				</div>
				<div class="clear"></div>
			</article>
		</section>
	</div>
	
	<section>
		<div id="contact"  class="contact">
			<header class="titre"><img src="img/Contact.png" alt="Netcell Contact " width="104" height="30"></header>
			<div class="contacter">
				<div class="adress">
					<h1>Contact Us : </h1>
					<br>
					<strong>E-mail</strong>
					<p> Business Development and Partnership : <a href="#login-box" class="login-window">cliquez ici </a> <br>
						<br>
						for other requests :<a href="#login-box" class="login-window">cliquez ici</a> </p>
					</div>
					<div class="tel"> <strong>Telephone</strong>
						<p> Tel : +33 (0)1 53 66 99 99 <br>
							<br>
							Fax : +33 (0)1 53 66 99 98 </p>
						</div>
						<div class="carte"> <strong>Come to see us :</strong>
							<address>
								14, rue Massue
							</address>
							<address>
								94 300 Vincennes
							</address>
						</div>
						<div class="transport">
							<p> <img src="img/metro1.png" width="59" height="27"  alt="Metro 1">Bérault </p>
							<p> <img src="img/rera.png" width="59" height="27"  alt="Metro 1">Vincennes </p>
						</div>
						<div id="googlecarte"> <strong>Plan</strong><br>
							<iframe width="350" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?oe=utf-8&amp;client=firefox-a&amp;q=14,+rue+Massue+94+300+Vincennes&amp;ie=UTF8&amp;hq=&amp;hnear=14+Rue+Massue,+94300+Vincennes,+Val-de-Marne,+%C3%8Ele-de-France&amp;gl=fr&amp;t=m&amp;z=14&amp;ll=48.847789,2.425777&amp;output=embed"></iframe>
							<br />
							<small><a href="https://maps.google.fr/maps?oe=utf-8&amp;client=firefox-a&amp;q=14,+rue+Massue+94+300+Vincennes&amp;ie=UTF8&amp;hq=&amp;hnear=14+Rue+Massue,+94300+Vincennes,+Val-de-Marne,+%C3%8Ele-de-France&amp;gl=fr&amp;t=m&amp;z=14&amp;ll=48.847789,2.425777&amp;source=embed" style="color:#0000FF;text-align:left">Agrandir le plan</a></small> </div>
						</div>

						<footer>
							<nav>
								<ul>
									<li><a href="legal.html" title="LEGAL NOTICES">LEGAL NOTICES</a></li>
								</ul>
							</nav>
						</footer>
						<div class="clear"></div>
					</div>
				</section>
				


					<!-- forulaire de connexion -->
					<div id="login-box" class="login-popup"> <a href="#" class="close"><img src="img/close_pop.png" alt="Close" width="32" height="32" class="btn_close" title="Close Window"></a>
								      <!--////////////////// PARTIE DYNAMIQUE ////////////////////-->
                <?php 
                $form	= "yes";
                $msg	= "";
                if(isset($_POST['mail']))
                {
					$type = 'no';
					if( $_SESSION['use_session'] != 'yes' )
					{$type = 'session';}
					elseif( (isset($_SESSION['contact'])) && (time()-$_SESSION['contact'] < TIME_LIMIT) )
					{$type = 'time';}
					else
					{
						if( (empty($_POST['lastname']))||(preg_match('#^[\<\>\$\%]+$#i',$_POST['lastname'])))
							{$fields[] = 'lastname'; $type='field';}
						if( (empty($_POST['firstname']))||(preg_match('#^[\<\>\$\%]+$#i',$_POST['firstname'])))
							{$fields[] = 'firstname'; $type='field';}
						if( 	(!preg_match('#^[a-zA-Z0-9]+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$#', $_POST['mail']) )	||	(verifmail($_POST['mail'])!==0)		)
							{$fields[] = '@mail'; $type='field';}
						if( (empty($_POST['objet']))||(preg_match('#^[\<\>\$\%]+$#i',$_POST['objet'])))
							{$fields[] = 'objet'; $type='field';}
						if( (empty($_POST['message']))	)
							{$fields[] = 'Message'; $type='field';}
						if( $type == 'no' )
						{
							require_once("includes/phpmailer.class.php");
							$mailer = new PHPMailer(true);
							try{
								$mailer->IsHTML(true); 
								$mailer->CharSet = 'UTF-8';   
								$mailer->Body=$_POST['message'];
								$mailer->AddAddress('helpdesk@bingo-sms.com', 'Bingo-SMS');
								$mailer->AddReplyTo($_POST['mail'], $_POST['firstname'].' '.$_POST['lastname']);
								$mailer->SetFrom($_POST['mail'], $_POST['firstname'].' '.$_POST['lastname']);
								$mailer->Subject = $_POST['objet'];
								$mailer->AltBody = 'Votre client mail n\'est pas compatible HTML.';
								$mailer->MsgHTML($_POST['message']);
								$mailer->Send();
								$_SESSION['contact'] = time();
							}catch(phpmailerException $e){
								$type = 'envoi';
							}
						}
					}
                    $form	= ($type==='no') ? 'no' : 'yes';
					if ($type==='no')
					{
						$msg = "<div style=\"text-align:center; font-size:1.6em; line-height:2.2em; margin: 25px auto 0 auto;\"> Message sended<br></div>";
					}else{
						$msg .="<div style=\"color:#F00; text-align:center; font-size:2em;\">";
						foreach($fields as $field)
						{
							$msg .="_".$field."<br>"; 
						}
						$msg .="</div>";
					}
                }
                print $msg;
                if($form==="yes"){	
                ?>	

						<form method="post" class="signin" action="<?php print $_SERVER['REQUEST_URI']; ?>" >
							<fieldset class="textbox">
								<label class="Nom"> <span>Nom : </span>
									<input id="username" name="username"  type="text" placeholder="Votre nom" required >
								</label>
								<label class="prenom"> <span>pr&eacute : </span>
									<input id="firstname" name="firstname"  type="text" placeholder="Votre nom" required >
								</label>
								<label class="Mail"> <span>Mail : </span>
									<input id="password" name="mail"  type="text" placeholder="Votre mail" required>
								</label>
								<label class="Sujet"> <span>Sujet : </span>
									<input id="sujet" name="sujet"   type="text" placeholder="sujet" required>
								</label>

								<label class="Message" name="message"> <span>Message : </span>
									<textarea></textarea>
								</label>
								<input type="submit" class="submit button"  >
							</input>
						</fieldset>
					</form>
				<?php
                }
                ?>
                <!--////////////////// PARTIE DYNAMIQUE ////////////////////-->
			</div>

			<!-- forulaire de connexion --> 

			<!-- Mobile Expertise -->
			<div id="compati" class="login-popup"> <a href="#" class="close"><img src="img/close_pop.png" alt="Close" width="32" height="32" class="btn_close" title="Close Window"></a>

				<h1>Mobile Expertise</h1>

				<p> Which operating system is right for you? Which type of content will set you apart from the pack? And what's the best way to take advantage of the unique benefits offered by the media?</p>
				<p><strong>NetCell brings together the:</strong>
				</p>
				<ul>
					<li> Most talented, pragmatic and passionate mobile marketing experts, who work with you to achieve results</li>
					<li> Best computer specialists, who design and adapt our technologies to meet your needs.</li>
				</ul>

			</div>
			<!-- Mobile Expertise --> 



			<!-- Mobile Expertise -->
			<div id="analys" class="login-popup"> <a href="#" class="close"><img src="img/close_pop.png" alt="Close" width="32" height="32" class="btn_close" title="Close Window"></a>

				<h1>Analysis and reporting</h1>

	<!--		<p> Which operating system is right for you? Which type of content will set you apart from the pack? And what's the best way to take advantage of the unique benefits offered by the media?</p>
			<p>NetCell brings together the:
			</p>
			<ul>
				<li> Most talented, pragmatic and passionate mobile marketing experts, who work with you to achieve results</li>
				<li> Best computer specialists, who design and adapt our technologies to meet your needs.</li>
			</ul>
		</p>-->
	</div>
	<!-- Mobile Expertise -->


	<!-- Monay -->
	<div id="Monay" class="login-popup"> <a href="#" class="close"><img src="img/close_pop.png" alt="Close" width="32" height="32" class="btn_close" title="Close Window"></a>
		
		<h1>Audience Monetization  </h1>
		
		<p><strong>NetCell</strong> currently operates in 10+ countries and is connected to some 40 operators, with links to more than 350 million SIM cards. Content and services are directly charged to end users on the operator's bill by means of SIM cards. 
		</p>

	</div>
	<!-- Monay -->

	<!-- retention -->
	<div id="reten" class="login-popup"> <a href="#" class="close"><img src="img/close_pop.png" alt="Close" width="32" height="32" class="btn_close" title="Close Window"></a>
		
		<h1>Retention</h1>
		
		<p> <strong>NetCell</strong> has designed products to secure the loyalty of your users or customers. They enable you to stay in regular contact with them and generate more revenue:

		</p>


	</div>
	<!-- Monay -->


	<script src="javascripts/jquery.nivo.slider.js" ></script> 
	<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
	</script>
</body>
</html>