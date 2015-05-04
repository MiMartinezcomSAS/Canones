<?php get_header(); ?>

<div class="container">

	<?php
	$page_layout 	= dttheme_option('specialty','portfolio-archives-layout');
  	$page_layout 	= !empty($page_layout) ? $page_layout : "content-full-width";
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

		<div class="dt-sc-clear"></div>
		<!-- Start loop to show Portfolio Items -->
		<?php 
		$post_layout = dttheme_option('specialty','portfolio-archives-post-layout'); 
		$post_layout = !empty($post_layout) ? $post_layout : "one-column";
		$post_class = "";

			#TO SET POST LAYOUT
			switch($post_layout):

				case 'one-column':
					$post_class = $show_sidebar ? " gallery column portfolio dt-sc-one-column with-sidebar" : " gallery column portfolio dt-sc-one-column ";
					$columns = 1;
				break;

				case 'one-half-column';
					$post_class = $show_sidebar ? " gallery column portfolio dt-sc-one-half with-sidebar " : " gallery column portfolio dt-sc-one-half ";
					$columns = 2;
				break;
				
				case 'one-third-column':
					$post_class = $show_sidebar ? " gallery column portfolio dt-sc-one-third with-sidebar " : " gallery column portfolio dt-sc-one-third ";
					$columns = 3;
				break;

				case 'one-fourth-column':
					$post_class = $show_sidebar ? " gallery column portfolio dt-sc-one-fourth with-sidebar " : "gallery column portfolio dt-sc-one-fourth";
					$columns = 4;
				break;
			endswitch;			

		?>

		<!-- **Portfolio Container** -->
		<div class="dt-sc-portfolio-container no-space"><?php

			if( have_posts() ):
				$i = 1;
				while( have_posts() ):
					the_post();

					$temp_class = "";
					if($i == 1) $temp_class = $post_class." first"; else $temp_class = $post_class;
					if($i == $columns) $i = 1; else $i = $i + 1;

					$the_id = get_the_ID();

					$portfolio_item_meta = get_post_meta($the_id,'_portfolio_settings',TRUE);
					$portfolio_item_meta = is_array($portfolio_item_meta) ? $portfolio_item_meta  : array();

					?>
					<!-- Portfolio Item -->
					<div id="<?php echo "portfolio-{$the_id}";?>" class="no-space <?php echo esc_attr($temp_class);?>">
						<figure>
							<?php $popup = "http://placehold.it/800x400";
									if( array_key_exists('items_name', $portfolio_item_meta) ) {
									$item =  $portfolio_item_meta['items_name'][0];
									$popup = $portfolio_item_meta['items'][0];

									if( "video" === $item ) {
										$items = array_diff( $portfolio_item_meta['items_name'] , array("video") );
										if( !empty($items) ) {
											echo "<img src='".$portfolio_item_meta['items'][key($items)]."' width='800' height='400' alt='' />";	
										} else {
											echo '<img src="http://placehold.it/800x400" width="800" height="400" alt="" />';
										}
									} else {
										echo "<img src='".$portfolio_item_meta['items'][0]."' width='800' height='400' alt='' />";
									}
								} else {
									echo "<img src='{$popup}' width='800' height='400' alt='' />";
								}?>
                                
                            <figcaption>
                              <div class="fig-content">
                                <h5><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a></h5><br />
                                <a class="dt-sc-button" href="<?php the_permalink();?>"> <?php _e("VIEW project","dt_themes"); ?> <i class="fa fa-thumbs-o-up"></i> </a>
                              </div>
                        	</figcaption>
								
						</figure>
					</div><!-- Portfolio Item -->
				<?php endwhile;
			endif;?></div><!-- **Portfolio Container** -->

			<div class="dt-sc-clear"></div>
			<div class="dt-sc-hr-invisible"> </div>
	
			<!-- **Pagination** -->
			<div class="pagination">
				<div class="prev-post"><?php previous_posts_link('<span class="fa fa-angle-double-left"></span> Prev');?></div>
				<?php echo dttheme_pagination();?>
				<div class="next-post"><?php next_posts_link('Next <span class="fa fa-angle-double-right"></span>');?></div>
			</div><!-- **Pagination - End** -->
               
		<!-- End loop to show Portfolio Items -->

	</div><!-- ** Primary Section End ** --><?php

	if ( $show_sidebar ):
		if ( $show_right_sidebar ): ?>
			<!-- Secondary Right -->
			<div id="secondary-right" class="secondary-sidebar <?php echo esc_attr($sidebar_class);?>"><?php get_sidebar( 'right' );?></div><?php
		endif;
	endif;?>

</div>
<?php get_footer(); ?>