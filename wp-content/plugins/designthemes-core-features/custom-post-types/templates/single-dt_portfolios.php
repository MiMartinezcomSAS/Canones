<?php 
get_header();
$portfolio_settings = get_post_meta ( $post->ID, '_portfolio_settings', TRUE );
$portfolio_settings = is_array ( $portfolio_settings ) ? $portfolio_settings : array ();

$layout = isset( $portfolio_settings['layout'] ) ? $portfolio_settings['layout'] : 'single-portfloio-layout-one';
$container_start =  $container_middle =  $container_end = "";
if( $layout === "single-portfloio-layout-two" ) {
	$container_start	 =	'<div class="column dt-sc-one-half first">';
	$container_middle	 =	'</div>';
	$container_middle  .=	'<div class="column dt-sc-one-half">'; 
	$container_end	 =	'</div>';
	$post_thumbnail = 'portfolio-single';
}elseif( $layout === "single-portfloio-layout-three" ){
	$container_start	 =	'<div class="column dt-sc-one-half right-gallery">';
	$container_middle	 =	'</div>';
	$container_middle  .=	'<div class="column dt-sc-one-half first">'; 
	$container_end	 =	'</div>';
	$post_thumbnail = 'portfolio-single';
}elseif( $layout === "single-portfloio-layout-one" ) {
	$container_middle = "<div class='dt-sc-hr-invisible-toosmall'></div>";
	$post_thumbnail = 'portfolio-single-fullwidth';
}
?>
      
<div class="content-main">
    <!-- **Primary Section** -->
  <div class="fullwidth-section">
    <div class="container">
	<?php
    if( have_posts() ):
		while( have_posts() ):
		the_post();?>
		<!-- #post-<?php the_ID()?> starts -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-single content'); ?>>
        
			<?php echo $container_start; ?>
            <ul class="portfolio-slider">
				<?php
                if( array_key_exists("items_name",$portfolio_settings) ) {
					foreach( $portfolio_settings["items_name"] as $key => $item ){
						$current_item = $portfolio_settings["items"][$key];
						if( "video" === $item ) {
							echo "<li><div class='dt-video-wrap'>".wp_oembed_get( $current_item )."</div></li>";
						} else {
							$attachment_id = dt_get_attachment_id_from_url($current_item);
							$img_attributes = wp_get_attachment_image_src($attachment_id, $post_thumbnail);
							echo "<li><img src='".$img_attributes[0]."' width='".$img_attributes[1]."' height='".$img_attributes[2]."' /></li>";
						}
					}
				} 
				else {
					echo "<li> <img src='http://placehold.it/800x400' alt='' title=''/></li>";
                }
				?>
            </ul>
            <?php 
			echo $container_middle;
            
            the_title( '<h3 class="portfolio-single">', '</h3>' );
            
			if(array_key_exists("show-subtitle-category",$portfolio_settings)) {
				the_terms($post->ID,'portfolio_entries','<p class="tags"> <i class="fa fa-tags"></i>',', ','</p>');
			}
			
            the_content();?>
            <div class="dt-sc-hr-invisible-toosmall"> </div>
            
            <?php echo $container_end; ?>
            
            <div class="project-details">
            	<?php if( isset( $portfolio_settings["client-name"] ) && isset( $portfolio_settings["location"] ) && isset( $portfolio_settings["website-link"] )): ?>
                    <div class="dt-sc-three-fourth column first">
                    	<h5><?php echo __('Project Details', 'dt_themes'); ?></h5>
                    	<ul class="client-detail">
                        <?php if( isset( $portfolio_settings["client-name"] ) ): ?>
                        		<li> <p> <span class="fa fa-user"> </span> <strong> <?php echo __('Client Name :', 'dt_themes'); ?> </strong> 
								<?php echo esc_html($portfolio_settings["client-name"]); ?> </p> </li>
                        <?php endif; ?>
                        <?php if( isset( $portfolio_settings["location"] ) ): ?>
                        		<li> <p> <span class="fa fa-map-marker"> </span> <strong>  <?php echo __('Location :', 'dt_themes'); ?></strong> <?php echo esc_html($portfolio_settings["location"]);?> </p> </li>
                        <?php endif;?>
                        <?php if( isset( $portfolio_settings["website-link"] ) ): ?>
                        		<li> <p> <span class="fa fa-link"> </span> <strong> <?php echo __('Website :', 'dt_themes'); ?> </strong> <a href="<?php echo esc_url($portfolio_settings["website-link"]);?>" alt="" title=""> <?php echo esc_html($portfolio_settings["website-link"]);?> </a> </p> </li>
                        <?php endif;?>
                        		<li> <p> <span class="fa fa-upload"> </span> <strong> <?php echo __('Posted On :', 'dt_themes'); ?> </strong> 
								<?php echo the_date('d  F Y');
								 ?> </p> </li>
                                
</p>
                    </ul>
                   </div>
                <?php endif;?>
                
                <?php
                if(array_key_exists("show-social-share",$portfolio_settings)):
					echo '<div class="dt-sc-one-fourth column">';
					echo '	<h5>'.__('Share through', 'dt_themes').'</h5>';
					echo '	<div class="social-media">';
								dttheme_social_bookmarks('sb-portfolio');
					echo '	</div>';
					echo '</div>';
                endif;
                
                edit_post_link( __( 'Edit','dt_themes'));
                ?>
            </div>
            
            
            
            <!-- **Post Nav** -->
            <div class="post-nav-container">
				<div class="post-prev-link">
					<?php previous_post_link('%link','<i class="fa fa-arrow-circle-left"> </i> %title<span> ('.__('Prev Entry','dt_themes').')</span>');?>
                </div>
                <div class="post-next-link">
                	<?php next_post_link('%link','<span> ('.__('Next Entry','dt_themes').')</span> %title <i class="fa fa-arrow-circle-right"> </i>');?>
                </div>
            </div>
            
            <?php
            if(!dttheme_option('general', 'disable-portfolio-comment')): 
				comments_template();
            endif;
            ?>  
                       
            <div class="dt-sc-hr-invisible-small"></div>
             
		</article><!-- #post-<?php the_ID()?> Ends -->
		<?php endwhile;
    endif;
	wp_reset_query();?>
    
       </div>
       
        
<?php if(array_key_exists("show-related-items",$portfolio_settings)): ?>

    <!--<div class="recent-portfolio">-->
        <div class="recent-portfolio-bg container">
            <!--main-title starts-->
            <div class="border-title">
                <h2 class="aligncenter portfolio-single"> <?php _e('Similar Portfolio','dt_themes');?> </h2>
            </div>
        </div>
        <!--main-title ends-->
        
		<?php 
        $category_ids = array();
        $input  = wp_get_object_terms( $post->ID, 'portfolio_entries');
        
        foreach($input as $category) $category_ids[] = $category->term_id;
        
        $args = array('orderby' => 'rand',
                'showposts' => '4' ,
                'post__not_in' => array($post->ID),
                'tax_query' => array( array( 'taxonomy'=>'portfolio_entries', 'field'=>'id', 'operator'=>'IN', 'terms'=>$category_ids )));
                
        query_posts($args);
        if( have_posts() ):
            $count = 1;
            while( have_posts() ):
                the_post();
                $the_id = get_the_ID();
                
                $portfolio_item_meta = get_post_meta($the_id,'_portfolio_settings',TRUE);
                $portfolio_item_meta = is_array($portfolio_item_meta) ? $portfolio_item_meta  : array();
                
                $first = ( $count === 1 ) ? " first" : "";
				
				$even_cls = '';
				$no = $wp_query->current_post+1;
				if(($no%2) == 0) $even_cls .= ' even-item';
				?>
                
            <!--gallery-no-space starts-->
            <div class="portfolio column gallery dt-sc-one-fourth  no-space <?php echo esc_attr($even_cls); ?>">
                <figure> 
                    <?php 
					$popup = "http://placehold.it/800x400";
                    if( array_key_exists('items_name', $portfolio_item_meta) ) {
						$item =  $portfolio_item_meta['items_name'][0];
						$popup = $portfolio_item_meta['items'][0];
						if( "video" === $item ) {
							$items = array_diff( $portfolio_item_meta['items_name'] , array("video") );
							if( !empty($items) ) {
								echo "<img src='".$portfolio_item_meta['items'][key($items)]."' width='800' height='400'  alt='' />";	
							} else {
								echo '<img src="http://placehold.it/800" width="800" height="400" alt="" />';
							}
						} else {
							echo "<img src='".$portfolio_item_meta['items'][0]."' width='800' height='400' alt='' />";
						}
					} else {
						echo "<img src='{$popup}' alt='' />";
					}
					?>
                            
                    <figcaption>
                        <div class="fig-content">
                            <h5><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a></h5><br />
                            <a class="dt-sc-button" href="<?php the_permalink();?>"> <?php _e("VIEW project","dt_themes"); ?> <i class="fa fa-thumbs-o-up"></i> </a>
                        </div>
                    </figcaption>
                </figure> 
            </div>
            <!--gallery-no-space ends--> 
            
		<?php 			
			$count++;
			endwhile;
		endif;
		wp_reset_query();
		?>
        
    <!--</div>-->

<?php endif;?> 
<div class="dt-sc-hr-invisible"> </div>
</div><!-- **Primary Section** -->
</div>
<?php get_footer();?>