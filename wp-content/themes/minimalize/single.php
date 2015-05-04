<?php get_header(); ?>

<div class="container">
	
    <?php
	$tpl_default_settings = get_post_meta( $post->ID, '_dt_post_settings', TRUE );
	$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();

	$page_layout  = array_key_exists( "layout", $tpl_default_settings ) ? $tpl_default_settings['layout'] : "content-full-width";
	$show_sidebar = $show_left_sidebar = $show_right_sidebar =  false;
	$sidebar_class = "";

	switch ( $page_layout ) {
		case 'with-left-sidebar':
			$page_layout = "with-sidebar with-left-sidebar";
			$show_sidebar = $show_left_sidebar = true;
			$sidebar_class = "secondary-has-left-sidebar";
		break;

		case 'with-right-sidebar':
			$page_layout = "with-sidebar with-right-sidebar";
			$show_sidebar = $show_right_sidebar	= true;
			$sidebar_class = "secondary-has-right-sidebar";
		break;

		case 'both-sidebar':
			$page_layout = "with-sidebar with-both-sidebar";
			$show_sidebar = $show_right_sidebar	= $show_left_sidebar = true;
			$sidebar_class = "secondary-has-both-sidebar";
		break;

		case 'content-full-width':
		default:
			$page_layout = "content-full-width";
		break;
	}?>

	<?php if ( $show_sidebar ):
        if ( $show_left_sidebar ): ?>
            <div id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( 'left' );?></div><?php
        endif;
    endif;?>
    
    <!-- ** Primary Section ** -->
    <div id="primary" class="<?php echo esc_attr($page_layout);?>">
        <?php
        #Top code section
        $dttheme_options = get_option(IAMD_THEME_SETTINGS);
        $dttheme_integration = $dttheme_options['integration'];
        if(isset($dttheme_integration['enable-single-post-top-code'])){
			$single_post_top_code =  stripslashes($dttheme_integration['single-post-top-code']);
			echo wp_kses($single_post_top_code, array(
									   'a' => array(
											   'href' => array(),
											   'title' => array()
									   ),
									   'br' => array(),
									   'em' => array(),
									   'h1' => array('class' => array()), 
										'h2' => array('class' => array()),
										'h3' => array('class' => array()),
										'h4' => array('class' => array()),
										'h5' => array('class' => array()),
										'h6' => array('class' => array()),
									   'strong' => array(),
							   ));
		}
        #Top code section
        ?>
        <?php 
        if( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part( 'framework/loops/content', 'single' );
            endwhile;
        endif;
        ?>
        <?php
        #Bottom code section 
        $dttheme_integration = $dttheme_options['integration'];
        if(isset($dttheme_integration['enable-single-post-bottom-code'])){
			$single_post_bottom_code =  stripslashes($dttheme_integration['single-post-bottom-code']);
			echo wp_kses($single_post_bottom_code, array(
									   'a' => array(
											   'href' => array(),
											   'title' => array()
									   ),
									   'br' => array(),
									   'em' => array(),
									   'h1' => array('class' => array()), 
										'h2' => array('class' => array()),
										'h3' => array('class' => array()),
										'h4' => array('class' => array()),
										'h5' => array('class' => array()),
										'h6' => array('class' => array()),
									   'strong' => array(),
							   ));
		}
        ?>
    </div><!-- ** Primary Section End ** -->
    
    <?php if ( $show_sidebar ):
        if ( $show_right_sidebar ): ?>
            <div id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( 'right' );?></div>
        <?php  endif;
        endif;?>
        
</div>   
<?php get_footer(); ?>