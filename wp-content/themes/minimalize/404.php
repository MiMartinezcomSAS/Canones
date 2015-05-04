<?php get_header();?>

<div class="content-main">
  <div class="container">

	<?php 
	$page_layout =  dttheme_option('specialty','not-found-404-layout');
	$show_sidebar = $show_left_sidebar = $show_right_sidebar =  false;
	$sidebar_class="";

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
		<div class="error-info">
			<?php $error_page_code = stripcslashes(dttheme_option('specialty','404-message'));
					echo wp_kses($error_page_code, array(
											   'a' => array(
													   'href' => array(),
													   'title' => array()
											   ),
											   'h1' => array('class' => array()), 
											   'h2' => array('class' => array()),
											   'h3' => array('class' => array()),
											   'h4' => array('class' => array()),
											   'h5' => array('class' => array()),
											   'h6' => array('class' => array()),
											   'p' => array(),
											   'br' => array(),
											   'em' => array(),
											   'strong' => array(),
									   ));
			
			
			?>
            <?php get_search_form();?>
			<a href="<?php echo home_url();?>" title="" class="dt-sc-button small"><?php _e('Back to Home','dt_themes');?></a> 
		</div>
	</div ><!-- ** Primary Section End ** --><?php

	if ( $show_sidebar ):
		if ( $show_right_sidebar ): ?>
			<!-- Secondary Right -->
			<div id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( 'right' );?></div><?php
		endif;
	endif; ?>
  </div>    
</div>

<?php get_footer(); ?>