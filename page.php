<?php get_header(); ?>
	
	<section id="hero" style="background-image: url(<?php the_field('hero_image'); ?>)">
        <div class="background-overlay"></div>
        <div class="row hero-container">
            <div class="small-12 columns">
                <img class="header-logo" src="<?php the_field('header_logo', 'options'); ?>" />
                <div class="hero-inner">
                    <div class="small-12 columns">
                        <div class="hero-heading-wrapper">
                            <h1><?php the_field('hero_heading'); ?></h1>
                        </div>
                    </div>
                    <div class="small-12 medium-8 medium-centered columns">
                        <div class="hero-text-wrapper">
                            <h4><?php the_field('hero_text'); ?></h4>
                        </div>
                    </div>
                </div>
                <div class="hero-arrow-wrapper">
                        <a href="#content"><i class="material-icons arrow-down hero-arrow" style="background-color: <?php the_field('color', 'options'); ?>">arrow_downward</i></a>
                    </div>
            </div>
        </div>
    </section>


    <section id="content">
        <?php if( have_rows('section') ):
            while ( have_rows('section') ) : the_row(); ?>
                <div class="map scrollable-section" data-section-title="<?php the_sub_field('section_bullet_title'); ?>" tabindex="0">
                    <div class="row">
                        <span style="display: none;"><?php echo ++$i; ?></span>
                        <div class="small-12 columns section-wrapper">    
                            <span class="stage-number" style="color: <?php the_field('color', 'options'); ?>">
                                <?php if( !get_sub_field('section_image') ): ?>    
                                    <?php
                                        $num = +$i;
                                        $num_padded = sprintf("%02d", $num);
                                        echo $num_padded;
                                    ?>
                                <?php endif; ?>
                            </span>
                            <?php if( get_sub_field('section_image') ): ?>  
                                <div class="small-12 medium-6 columns section-image-parent">
                                    <div class="section-image-wrapper">
                                        <?php the_sub_field('noround'); ?>                                        
                                            <?php $image = get_sub_field('section_image');
                                            $size = 'square';
                                            if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                                        <?php if( get_sub_field('noround') ): ?>                                          
                                            </span>  
                                        <?php endif; ?>                                      
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if( !get_sub_field('section_image') ): ?>                                                                        
                                <div class="medium-6 columns section-spacer"></div>
                            <?php endif; ?>                            
                            <div class="small-12 medium-6 columns map-text-wrapper">
                                <div class="map-text-inner-wrapper">
                                    <div class="map-heading-wrapper">
                                        <h2><?php the_sub_field('section_heading') ?></h2>
                                    </div>
                                    <div class="map-info-wrapper">
                                        <?php the_sub_field('section_text') ?>
                                    </div>
                                    <?php if( get_sub_field('section_button_text') ): ?>
                                        <a href="<?php the_sub_field('section_button'); ?>" class="button action-button" style="color: <?php the_field('color', 'options'); ?>; border-color: <?php the_field('color', 'options'); ?>" <?php the_sub_field('new_tab'); ?>><?php the_sub_field('section_button_text'); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endwhile; 
        endif; ?>
    </section>

    <?php the_field('hide_action'); ?>
        <section id="action" style="background: linear-gradient(white, <?php the_field('color', 'options');?>40)">
            <div class="row">
                <div class="small-10 medium-8 small-centered columns action-wrapper">
                    <div class="action-inner">
                        <div class="action-animation-wrapper">
                            <div class="action-title-wrapper">
                                <h2><?php the_field('action_title'); ?></h2>
                            </div>
                            <div class="action-text-wrapper">
                                <p><?php the_field('action_text'); ?></p>
                            </div>
                            <?php if( get_field('action_button_url') ): ?>
                                <a href="<?php the_field('action_button_url'); ?>" class="button action-button-filled" <?php the_field('new_tab'); ?> style="background-color: <?php the_field('color', 'options'); ?>"><?php the_field('action_button_text'); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php if( get_field('hide_action') ): ?>                                          
        </span>  
    <?php endif; ?>    
    

    <?php get_footer(); ?>
