<?php 
$tpl_postid = $post->ID;
$tpl_default_settings = get_post_meta( $post->ID, '_tpl_default_settings', TRUE );
$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
?>

<?php 
$post_layout	=	isset( $tpl_default_settings['portfolio-post-layout'] ) ? $tpl_default_settings['portfolio-post-layout'] : "one-half-column";
$post_per_page	=	isset( $tpl_default_settings['portfolio-post-per-page'] ) ? $tpl_default_settings['portfolio-post-per-page'] : -1;

$page_layout  = array_key_exists( "layout", $tpl_default_settings ) ? $tpl_default_settings['layout'] : "content-full-width";

if(is_page_template('tpl-onepage.php')) {
	$page_layout = 'fullwidth';
}

#TO SET POST LAYOUT
switch($post_layout):
	case 'one-half-column';
		$post_class = "gallery column portfolio dt-sc-one-half ";
		$columns = 2;
	break;
	
	case 'one-third-column':
		$post_class = "gallery column portfolio dt-sc-one-third ";
		$columns = 3;
	break;

	case 'one-fourth-column':
	default:
		$post_class = "gallery column portfolio dt-sc-one-fourth";
		$columns = 4;
	break;
endswitch;


$categories =	isset($tpl_default_settings['portfolio-categories']) ? array_filter($tpl_default_settings['portfolio-categories']) : "";
if(empty($categories)):
	$categories = get_categories('taxonomy=portfolio_entries&hide_empty=1&pad_counts=1');
else:
	$args = array('taxonomy'=>'portfolio_entries','hide_empty'=>1,'include'=>$categories,'pad_counts' =>1);
	$categories = get_categories($args);
endif;  
        
    if(is_page_template('tpl-onepage.php')) {
		echo '<div class="content-main">';
		echo '	<div class="fullwidth-section">';
	}
	 
        $portfolio_posts = get_post($post->ID);
    	echo do_shortcode($portfolio_posts->post_content); ?>
    	
        <div class="dt-sc-hr-invisible-toosmall"></div>
        <?php if( sizeof($categories) > 1 ) :
                if( array_key_exists("filter",$tpl_default_settings) && (!empty($categories)) ):
                    $post_class .= " all-sort ";?>
                    <div class="dt-sc-sorting-container animate" data-delay="100" data-animation="fadeInUp"><?php
                      if(is_page_template('tpl-onepage.php')) { ?>
                         <a href="#" class="dt-sc-button small active-sort" data-filter=".all-sort"><?php _e('All','dt_themes');?></a><?php
					  }else{ ?>
						  <a href="#" class="dt-sc-tooltip-top dt-sc-button small active-sort" title="<?php echo wp_count_posts( 'dt_portfolios' )->publish; ?>" data-filter=".all-sort"><?php _e('All','dt_themes');?></a><?php
					  } ?>
					  
               <?php foreach( $categories as $category ): 
                        if(is_page_template('tpl-onepage.php')) { ?>
                        	<a href='#' class="dt-sc-button small" data-filter=".<?php echo esc_attr($category->category_nicename);?>-sort"><?php echo esc_html($category->cat_name);?></a><?php
                        }else{ ?>
                        	<a href='#' class="dt-sc-tooltip-top dt-sc-button small" title="<?php echo esc_attr($category->count);?>" data-filter=".<?php echo esc_attr($category->category_nicename);?>-sort"><?php echo esc_html($category->cat_name);?></a><?php
                        }
                     endforeach; ?>
                    </div>
        <?php 	endif;
            endif;?>
        

<!-- **Portfolio Container** -->
<div class="dt-sc-portfolio-container no-space">
    <?php
    $args = array();
	$categories = isset($tpl_default_settings['portfolio-categories']) ? array_filter($tpl_default_settings['portfolio-categories']) : '';

    if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
    elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
    else { $paged = 1; }

    if(is_array($categories) && !empty($categories)):
        $terms = $categories;
        $args = array( 
            'orderby' => 'ID',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page,
            'tax_query' => array( array( 'taxonomy'=>'portfolio_entries', 'field'=>'id', 'operator'=>'IN', 'terms'=>$terms ) ) );
    else:
        $args = array( 'paged' => $paged ,'posts_per_page' => $post_per_page,'post_type' => 'dt_portfolios');
    endif;

    query_posts($args);
    if( have_posts() ):
        $i = 1;
        while( have_posts() ):
            the_post();
            
            $temp_class = $post_class;
            
            $the_id = get_the_ID();

            $portfolio_item_meta = get_post_meta($the_id,'_portfolio_settings',TRUE);
            $portfolio_item_meta = is_array($portfolio_item_meta) ? $portfolio_item_meta  : array();

            #Find sort class by using the portfolio_entries
            $sort = " ";
            if( array_key_exists("filter",$tpl_default_settings) ):
                $item_categories = get_the_terms( $the_id, 'portfolio_entries' );
                if(is_object($item_categories) || is_array($item_categories)):
                    foreach ($item_categories as $category):
                        $sort .= $category->slug.'-sort ';
                    endforeach;
                endif;
             endif;?>
            <!-- Portfolio Item -->
            <div id="<?php echo "portfolio-{$the_id}";?>" class="no-space <?php echo esc_attr($temp_class.$sort);?>">
                <figure>
                
                    <?php 
                        $popup = "http://placehold.it/800x400";
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
								$attachment_id = dt_get_attachment_id_from_url($portfolio_item_meta['items'][0]);
								$img_attributes = wp_get_attachment_image_src($attachment_id, "full");
                                echo "<img src='".$img_attributes[0]."' />";
                            }
                        } else {
                            echo "<img src='{$popup}' width='800' height='400' alt='' />";
                        }
                    ?>
                        
                    <figcaption>
                        <div class="fig-content">
                            <h5><a href="<?php the_permalink();?>" title="<?php printf( esc_attr__('%s'), the_title_attribute('echo=0'));?>"><?php the_title();?></a></h5>
                            <a class="dt-sc-button" href="<?php the_permalink();?>"> <?php _e("VIEW project","dt_themes"); ?> <i class="fa fa-thumbs-o-up"></i> </a>
                        </div>
                    </figcaption>
                        
                </figure>
            </div><!-- Portfolio Item -->
        <?php endwhile;
	else: ?>
            <h2><?php _e('Nothing Found.', 'dt_themes'); ?></h2><?php
    endif;
    wp_reset_query();?></div><!-- **Portfolio Container** -->
    <div class="dt-sc-hr-invisible"></div>

<?php if($post_per_page != -1) { ?>	

<a class="dt-sc-button medium load-more aligncenter" data-post-per-page="<?php echo esc_attr($post_per_page); ?>" data-page="<?php echo esc_attr($paged+1); ?>" data-postid="<?php echo esc_attr($tpl_postid); ?>" data-taxonomy="<?php echo implode(',', $categories); ?>" ><?php _e('Load More', 'dt_themes'); ?></a>
<?php } ?>  
<div class="dt-sc-hr-invisible"></div>

<?php
if(is_page_template('tpl-onepage.php')) {
	echo '</div>';
	echo '</div>';
}
?>