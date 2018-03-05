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
		<?php wp_footer(); ?>
	</body>
</html>