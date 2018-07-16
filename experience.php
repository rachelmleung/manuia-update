<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Manuia Polynesian Revue
 * @since Manuia Polynesian Revue
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
            
            
			<?php endwhile; // end of the loop. ?>

            <?php while ( have_posts() ) : the_post();	
            
            	   $experience_1_image = get_field('experience_1_image');
            	   $experience_2_image = get_field('experience_2_image');
            	   $experience_3_image = get_field('experience_3_image');
            
                   $experience_1 = get_field('experience_1');
                   $experience_2 = get_field('experience_2');
                   $experience_3 = get_field('experience_3');
            
                   $experience_1_info = get_field('experience_1_info');
                   $experience_2_info = get_field('experience_2_info');
                   $experience_3_info = get_field('experience_3_info');
            
                   $experience_title = get_field('experience_title');
                   $experience = get_field('experience');
                   $clients_include = get_field('clients_include');
                   $clients = get_field('clients');
                   $booking = get_field('booking');
            
                   $size = "medium"; ?>  
            
                <?php endwhile; // end of the loop. ?>
            
		</div><!-- .main-content -->
	</div><!-- #primary -->

            <div class="experiences">
                <div class="experience-1">
                <?php if($experience_1_image){ 
                    echo wp_get_attachment_image( $experience_1_image, $size ); }
            ?>
                <h4><?php echo $experience_1; ?></h4>
                <p><?php echo $experience_1_info; ?></p>
                </div>
                
                 <div class="experience-2">
                <?php if($experience_2_image){ 
                    echo wp_get_attachment_image( $experience_2_image, $size ); }
            ?>
                <h4><?php echo $experience_2; ?></h4>
                <p><?php echo $experience_2_info; ?></p>
                </div>
                
                 <div class="experience-3">
                <?php if($experience_3_image){ 
                    echo wp_get_attachment_image( $experience_3_image, $size ); }
            ?>
                <h4><?php echo $experience_3; ?></h4>
                <p><?php echo $experience_3_info; ?></p>
            
                </div>
                
            </div> <!--end services-->


<?php get_footer(); ?>
