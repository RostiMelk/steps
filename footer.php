			<footer class="footer" role="contentinfo" style="background-color: <?php the_field('color', 'options');?>">
				<div class="inner-footer row">
					<div class="small-10 large-8 small-centered columns">
						<div class="small-6">
							<img src="<?php the_field('footer_logo', 'options'); ?>" class="footer-logo" />
						</div>
						<div class="small-6 columns copyright-wrapper">
							<p class="copyright">Design & code: <a href="https://rosti.no" target="_blank">Rostislav Melkumyan</a></p>
						</div>
					</div>
				</div> 
			</footer>
			<script type="text/javascript">
				jQuery(document).ready(function( $ ) {  
					$(document).ready(function () {
						$('body').sectionScroll(); 
					})          
				});    
			</script>
				<script type="text/javascript">
				jQuery(document).ready(function( $ ) {  
					window.sr = ScrollReveal();
					sr.reveal('.map-text-wrapper', {delay: '200', origin: 'bottom', distance: '200px', duration: 600});
					sr.reveal('.action-animation-wrapper', {delay: '100', duration: 600});		
					sr.reveal('.hero-heading-wrapper', {delay: '1600', duration: 1000});
					sr.reveal('.hero-text-wrapper', {delay: '1680', duration: 1000});
					sr.reveal('.arrow-down', {delay: '2200', duration: 1000});	
				});    
			</script>
		<?php wp_footer(); ?>
	</body>
</html>