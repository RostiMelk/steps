<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- Google Fonts & Icoins -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,400i,500,500i,700" rel="stylesheet">

		<!-- Chrome mobile URL-bar color -->
		<meta name="theme-color" content="<?php the_field('color', 'options'); ?>">

		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- PHP styling -->	
		<style>
			.section-bullets li a:before {
				background-color:<?php the_field('color', 'options'); ?>;
			}
			a.action-button:hover, a.action-button:focus {
				background-color: <?php the_field('color', 'options'); ?> !important;
			} 
			a.action-button-filled:hover, a.action-button-filled:focus {
				background-color: <?php the_field('second_color', 'options'); ?> !important;
			}
			.map {
				background-image: url('<?php echo site_url(); ?>/wp-content/themes/steps/assets/images/bg-right.png');
			}
			.map:nth-child(odd) {
				background-image: url('<?php echo site_url(); ?>/wp-content/themes/steps/assets/images/bg-left.png');
			}
			*::selection {
				background-color: <?php the_field('color', 'options'); ?>;
			}
			.article-top-image:hover .arrow-article {
				color:  <?php the_field('color', 'options'); ?>;
			}
			@keyframes pulse {
				0% {
					box-shadow: 0 0 0 0 <?php the_field('color', 'options'); ?>88;
				}
				70% {
					box-shadow: 0 0 0 22px <?php the_field('color', 'options'); ?>00;
				}
				100% {
					box-shadow: 0 0 0 0 <?php the_field('color', 'options'); ?>00;
				}
			}
		</style>	
	</head>
			
	<body <?php body_class(); ?>>

		<div class="preloader-wrapper">
			<div class="preloader">
				<svg version="1.1" id="L5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 100" enable-background="new 0 0 0 0" xml:space="preserve">
					<circle fill="<?php the_field('color', 'options'); ?>" stroke="none" cx="6" cy="50" r="6">
						<animateTransform 
						attributeName="transform" 
						dur="1s" 
						type="translate" 
						values="0 15 ; 0 -15; 0 15" 
						repeatCount="indefinite" 
						begin="0.1"/>
					</circle>
					<circle fill="<?php the_field('color', 'options'); ?>" stroke="none" cx="30" cy="50" r="6">
						<animateTransform 
						attributeName="transform" 
						dur="1s" 
						type="translate" 
						values="0 10 ; 0 -10; 0 10" 
						repeatCount="indefinite" 
						begin="0.2"/>
					</circle>
					<circle fill="<?php the_field('color', 'options'); ?>" stroke="none" cx="54" cy="50" r="6">
						<animateTransform 
						attributeName="transform" 
						dur="1s" 
						type="translate" 
						values="0 5 ; 0 -5; 0 5" 
						repeatCount="indefinite" 
						begin="0.3"/>
					</circle>
				</svg>
			</div>
		</div>


