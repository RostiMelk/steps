<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article class="article column column-block">					
	
	<a href="<?php the_permalink() ?>">
		<div class="article-top-image" style="background-image: url(<?php the_field('hero_image'); ?>)">
			<div class="article-content">
				<div class="title-wrapper">
					<div class="small-10 no-padding columns">
						<h4><?php the_title(); ?></h4>
					</div>
					<div class="small-2 no-padding columns">
						<i class="material-icons arrow-article">arrow_forward</i>
					</div>
				</div>
				<p><?php the_field('hero_text'); ?></p>
			</div>
		</div>
	</a>
	<div class="colored-line" style="background-color: <?php the_field('color', 'options'); ?>"></div>	

				    						
</article> <!-- end article -->