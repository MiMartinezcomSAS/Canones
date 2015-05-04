<?php /*Template Name: Portfolio Template*/?>
<?php get_header(); ?>

<?php
global $post;
dttheme_slider_section( $post->ID, 'page' );	
?>

<div class="content-main">
  <div class="container">

	<?php
	$tpl_default_settings = get_post_meta( $post->ID, '_tpl_default_settings', TRUE );
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
	}

	if ( $show_sidebar ):
		if ( $show_left_sidebar ): ?>
			<!-- Secondary Left -->
			<div id="secondary-left" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( 'left' );?></div><?php
		endif;
	endif;?>

	<!-- ** Primary Section ** -->
	<div id="primary" class="<?php echo esc_attr($page_layout);?>">
		<?php 
		get_template_part( 'framework/loops/content', 'tpl-portfolio' );		
		wp_link_pages( array('before' => '<div class="page-link">','after' =>'</div>', 'link_before' => '<span>', 'link_after' => '</span>', 'next_or_number' => 'number', 'pagelink' => '%', 'echo' => 1 ) );
		edit_post_link( __( ' Edit ','dt_themes' ) );					
		?>
	</div><!-- ** Primary Section End ** --><?php

	if ( $show_sidebar ):
		if ( $show_right_sidebar ): ?>
			<!-- Secondary Right -->
			<div id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( 'right' );?></div><?php
		endif;
	endif;?>
    
 </div>
</div>
<?php 
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
?>
<?php get_footer(); ?>