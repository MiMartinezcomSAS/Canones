<?php
/*
Template Name: One Page Template
*/
?>
<?php get_header(); ?>
            
    <?php
    #To get sections for one page 
    $sections = dttheme_onepage_sections();

    #Begin Section Loop
    $sections_args = array( 'posts_per_page' => -1,'post__in' => (array) $sections,'orderby' => 'post__in', 'post_type'=>array('page'));
    $sections_query = new WP_Query($sections_args);
      
    if( $sections_query->have_posts() ):
        while( $sections_query->have_posts() ):
            $sections_query->the_post();
            
            $section_name = $post->post_name;
            $section_title = $post->post_title;
			
			$template = get_post_meta( $post->ID, '_wp_page_template', true );
			$tpl_default_settings = get_post_meta( $post->ID, '_tpl_default_settings', true );

			if( get_the_content() != '' || isset($tpl_default_settings['page-main-title-shortcode']) ) {
            ?>
                <section id="<?php echo esc_attr($section_name);?>" class="content">
                    <?php
					global $post;
                    if ( $template == "tpl-portfolio.php"  ) :
                     	dttheme_page_main_title_section( $post->ID);
                        get_template_part( 'framework/loops/content', 'tpl-portfolio' );
                        
                        if(isset($tpl_default_settings['portfolio-bottom-section']) && $tpl_default_settings['portfolio-bottom-section'] != ''):
							echo wp_kses(do_shortcode($tpl_default_settings['portfolio-bottom-section']), array(
												'a' => array('href' => array(),'title' => array()),
												'div' => array('class' => array()),
												'ul' => array('class' => array()),
												'li' => array('class' => array()),
												'ol' => array('class' => array()),
												'i' => array('class' => array()),
												'figure' => array('class' => array()),
												'figcaption' => array('class' => array()),
												'blockquote' => array('class' => array()),
												'pullquote' => array('class' => array()),
												'q' => array(),
												'cite' => array(),
												'span' => array('class' => array()),
												'img' => array('src' => array(),'alt' => array()),
												'h1' => array('class' => array()), 
												'h2' => array('class' => array()),
												'h3' => array('class' => array()),
												'h4' => array('class' => array()),
												'h5' => array('class' => array()),
												'h6' => array('class' => array())) );
                        endif;
                        
                    elseif ( $template == "tpl-blog.php"  ) : 
                    	dttheme_page_main_title_section( $post->ID);
                        get_template_part( 'framework/loops/content', 'tpl-blog' );
                        
                        if(isset($tpl_default_settings['blog-bottom-section']) && $tpl_default_settings['blog-bottom-section'] != ''):
						   $blog_bottom_section_code =  do_shortcode($tpl_default_settings['blog-bottom-section']);
						   wp_kses($blog_bottom_section_code, array(
												'a' => array('href' => array(),'title' => array()),
												'div' => array('class' => array()),
												'ul' => array('class' => array()),
												'li' => array('class' => array()),
												'ol' => array('class' => array()),
												'i' => array('class' => array()),
												'figure' => array('class' => array()),
												'figcaption' => array('class' => array()),
												'blockquote' => array('class' => array()),
												'pullquote' => array('class' => array()),
												'q' => array(),
												'cite' => array(),
												'span' => array('class' => array()),
												'img' => array('src' => array(),'alt' => array()),
												'h1' => array('class' => array()), 
												'h2' => array('class' => array()),
												'h3' => array('class' => array()),
												'h4' => array('class' => array()),
												'h5' => array('class' => array()),
												'h6' => array('class' => array())) );
                        endif;
                        
                    elseif ( $template == "tpl-fullwidth.php"  ) :
						dttheme_page_main_title_section( $post->ID); 
                    	echo '<div class="content-main">';
						 		 the_content();
					   	echo '</div>';
						
                    else:
						dttheme_page_main_title_section( $post->ID);
                       	echo '<div class="content-main">';
						echo '	<div class="container">';
						 			the_content();
                       	echo '	</div>';
					   	echo '</div>';
                        
                    endif;
                    wp_link_pages(array('before' => '<div class="page-link"><strong>'.__('Pages:', 'dt_themes').'</strong> ', 'after' => '</div>', 'next_or_number' => 'number'));
                    edit_post_link(__( ' Edit ','dt_themes' ),'','',$post->ID);	
                    ?>
                </section>
         <?php
			}
        endwhile;
    endif;	
    ?>
    
<?php get_footer(); ?>