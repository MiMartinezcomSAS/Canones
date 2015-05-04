<!--- Start loop to show blog posts -->
<?php 

$tpl_postid = $post->ID;

$tpl_default_settings = get_post_meta( $post->ID, '_tpl_default_settings', TRUE );
$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();

$post_layout = isset( $tpl_default_settings['blog-post-layout'] ) ? $tpl_default_settings['blog-post-layout'] : "one-column";
$post_per_page = isset($tpl_default_settings['blog-post-per-page']) ? $tpl_default_settings['blog-post-per-page'] : -1;
$categories = isset($tpl_default_settings['blog-post-exclude-categories']) ? array_filter($tpl_default_settings['blog-post-exclude-categories']) : NULL;

$hide_date_meta = isset( $tpl_default_settings['disable-date-info'] ) ? " hidden " : "";
$hide_comment_meta = isset( $tpl_default_settings['disable-comment-info'] ) ? " hidden " : " comments ";
$hide_author_meta = isset( $tpl_default_settings['disable-author-info'] ) ? " hidden " : "";
$hide_category_meta = isset( $tpl_default_settings['disable-category-info'] ) ? " hidden " : "";
$hide_tag_meta = isset( $tpl_default_settings['disable-tag-info'] ) ? " hidden " : "tags";

$container_class = "";

switch($post_layout):
	case 'one-column':
		$post_class = " column dt-sc-one-column blog-fullwidth";
		$columns = 1;
	break;

	case 'one-half-column';
		$post_class = " column dt-sc-one-half";
		$columns = 2;
		$container_class = "apply-isotope";
	break;

	case 'one-third-column':
		$post_class = " column dt-sc-one-third";
		$columns = 3;
		$container_class = "apply-isotope";
	break;
endswitch;

?>

<?php 
$blog_posts = get_post($post->ID);
echo do_shortcode($blog_posts->post_content);
?>

<?php if(is_page_template('tpl-onepage.php')): echo '<div class="content-main"> <div class="container">'; endif; ?>

<?php
echo "<div class='blog-items {$container_class} '>";

$sticky = get_option('sticky_posts');
$args = array( 'posts_per_page'=>$post_per_page, 'post_type'=> 'post', 'post__in'=>$sticky );

query_posts($args);

if( !empty($sticky) ){
  if( $sticky[0] ) :
	$i = 1;
	while( have_posts() ):
		the_post();

		$temp_class = "";
		if($i == 1) $temp_class = $post_class." first"; else $temp_class = $post_class;
		if($i == $columns) $i = 1; else $i = $i + 1;

		$format = get_post_format(  get_the_id() );
		$format_icons = array( 'status' => 'fa-comment', 'quote' => 'fa-quote-left', 'gallery' => 'fa-camera', 'image' => 'fa-image', 'video' => 'fa-film', 'audio' => 'fa-music', 'link' => 'fa-link', 'aside' => 'fa-align-left', 'chat' => 'fa-comments' );
		
		if(isset($format_icons[$format])) $format_icon = $format_icons[$format]; else $format_icon = 'fa-pencil';
		?>

		<div class="<?php echo esc_attr($temp_class);?>">
			<!-- #post-<?php the_ID()?> starts -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry'); ?>>
            
				<?php 
				$post_meta = get_post_meta(get_the_id() ,'_dt_post_settings',TRUE);
                $post_meta = is_array( $post_meta ) ? $post_meta  : array(); 
				$pholder = dttheme_option('general', 'disable-placeholder-images');
				?>
            	<?php
				if($format == 'quote') {
				?>		
                    <div class="black-box">  
                        
                        <div class="entry-details">
							
                            <div class="entry-metadata">
                                 <p class="date <?php echo esc_attr($hide_date_meta);?>">
                                     <i class="fa fa-calendar"></i>
                                     <?php echo get_the_date('d M Y');?>
                                     <?php if($hide_author_meta != ' hidden ' || $hide_comment_meta != ' hidden ' || $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
												echo "|";
											} ?>
                                 </p>
                                 <p class="author <?php echo esc_attr($hide_author_meta);?>"> 
                                     <i class="fa fa-user"></i> <?php _e('Posted By:','dt_themes'); ?>
                                     <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php _e('View all posts by ', 'dt_themes').get_the_author();?>"><?php echo get_the_author();?></a>
                                 <?php if( $hide_comment_meta != ' hidden ' || $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
											echo "|";
										} ?>
                                 </p>
                                 <p class="<?php echo esc_attr($hide_comment_meta);?>">
                                    <i class="fa fa-comments"></i>
                                    <?php comments_popup_link( '0', '1', '%', '', '0');?>
                                    <?php if( $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
											echo "|";
										  } ?>
                                 </p>
                                 <?php if( has_category() ) { ?>
                                 <p class="category <?php echo esc_attr($hide_category_meta);?>"> 
                                     <i class="fa fa-sitemap"></i>
                                     <?php the_category(', '); ?>
                                     <?php if( $hide_tag_meta != ' hidden '  ){
												 echo "|";
											} ?>
                                 </p>
                                 <?php } ?>
                                 
                                 <?php if(has_tag()){ ?>
                                 <p class="tags <?php echo esc_attr($hide_tag_meta);?>"> 
                                     <i class="fa fa-tags"></i>
                                     <?php the_tags('', ', ', '');?>
                                 </p>
                                 <?php } ?>
                            </div>
                        </div>
                        
                        <?php if(is_sticky()): ?>
                                <div class="featured-post"> <span class="fa fa-trophy"> </span> <span class="text"> <?php _e('Featured','dt_themes');?> </span></div>
                            <?php endif;?>
                        
                        <div class="entry-body">
                        	<?php if( array_key_exists('quote', $post_meta) ) { ?>
                                <p><a href="<?php the_permalink();?>"><?php echo esc_html($post_meta['quote']); ?></a></p>
                                <?php if( array_key_exists('quoteby', $post_meta) ) { ?>
                                    <span>- <?php echo esc_html($post_meta['quoteby']); ?></span>
                                <?php } ?>
                            <?php } else { ?>
                                <p><a href="<?php the_permalink();?>"><?php echo get_the_excerpt(); ?></a></p>
                            <?php } ?>
                        </div>
                        
                        
                     </div>
				
                <?php	
				} else { 
				?>
                    <div class="entry-thumb">
                        <?php 						
						if( $format === "image" || empty($format) ): ?>
                                <a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>">
                                <?php if( has_post_thumbnail() ):
										$attachment_id = get_post_thumbnail_id(get_the_id());
										$img_attributes = wp_get_attachment_image_src($attachment_id, "full");
										echo "<img src='".$img_attributes[0]."' alt='".get_the_title()."' />";
                                      elseif($pholder != 'on'):?>
                                        <img src="http://placehold.it/1160x800&amp;text=<?php the_title(); ?>" alt="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" />
                                <?php endif;?>
                                </a>
                        <?php elseif( $format === "gallery" && array_key_exists("items", $post_meta)):
                                    echo "<ul class='entry-gallery-post-slider'>";
									foreach ( $post_meta['items'] as $item ) { 
										$attachment_id = dt_get_attachment_id_from_url($item);
										$img_attributes = wp_get_attachment_image_src($attachment_id, "full");
										echo "<li><img src='".$img_attributes[0]."' alt='".get_the_title()."' /></li>";
									}
                                    echo "</ul>";
                              elseif( $format === "video" && ( array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta) ) ):
                                    if( array_key_exists('oembed-url', $post_meta) ):
                                        echo "<div class='dt-video-wrap'>".wp_oembed_get($post_meta['oembed-url']).'</div>';
                                    elseif( array_key_exists('self-hosted-url', $post_meta) ):
                                        echo "<div class='dt-video-wrap'>".apply_filters( 'the_content', $post_meta['self-hosted-url'] ).'</div>';
                                    endif;
                              elseif( $format === "audio" && (array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta)) ):
                                    if( array_key_exists('oembed-url', $post_meta) ):
                                        echo wp_oembed_get($post_meta['oembed-url']);
                                    elseif( array_key_exists('self-hosted-url', $post_meta) ):
                                        echo apply_filters( 'the_content', $post_meta['self-hosted-url'] );
                                    endif;
                              else: ?>
                                <a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php
                                    if( has_post_thumbnail() ):
										$attachment_id = get_post_thumbnail_id(get_the_id());
										$img_attributes = wp_get_attachment_image_src($attachment_id, 'full');
										echo "<img src='".$img_attributes[0]."' alt='".get_the_title()."' />";
                                    elseif($pholder != 'on'):?>
                                        <img src="http://placehold.it/1160x800&amp;text=<?php the_title(); ?>" alt="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" />
                                <?php endif;?></a>
                        <?php endif; ?>
                        
                        <?php if(is_sticky()): ?>
                            <div class="featured-post"> <span class="fa fa-trophy"> </span> <span class="text"> <?php _e('Featured','dt_themes');?> </span></div>
                        <?php endif;?> 
                        
                  </div>
                                
                    <div class="entry-details">
                        <div class="entry-title">
                            <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a> </h4>
                        </div>
                        
                        <div class="entry-metadata">
                             <p class="date <?php echo esc_attr($hide_date_meta);?>">
                                 <i class="fa fa-calendar"></i>
                                 <?php echo get_the_date('d M Y');?>
                                 <?php if($hide_author_meta != ' hidden ' || $hide_comment_meta != ' hidden ' || $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
					 	 			echo "|";
				 	   			} ?>
                             </p>
                             <p class="author <?php echo esc_attr($hide_author_meta);?>"> 
                                 <i class="fa fa-user"></i> <?php _e('Posted By:','dt_themes'); ?>
                                 <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php _e('Posted By: ', 'dt_themes').get_the_author();?>"><?php echo get_the_author();?></a>
                             <?php if( $hide_comment_meta != ' hidden ' || $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
					 	 		echo "|";
				 	   		} ?>
                             </p>
                             <p class="<?php echo esc_attr($hide_comment_meta);?>">
                                <i class="fa fa-comments"></i>
                                <?php comments_popup_link( '0', '1', '%', '', '0');?>
                                <?php if( $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
					 	 		echo "|";
				 	  		  } ?>
                             </p>
                             <?php if( has_category() ) { ?>
                             <p class="category <?php echo esc_attr($hide_category_meta);?>"> 
                                 <i class="fa fa-sitemap"></i>
                                 <?php the_category(', '); ?>
                                 <?php if( $hide_tag_meta != ' hidden '  ){
					 				 echo "|";
				 	  		 	} ?>
                             </p>
                             <?php } ?>
                             <?php if(has_tag()){ ?>
                             <p class="tags <?php echo esc_attr($hide_tag_meta);?>"> 
                                 <i class="fa fa-tags"></i>
                                 <?php the_tags('', ', ', '');?>
                             </p>
                             <?php } ?>
                        </div>
                        
                        <div class="entry-body">
                            <?php if( array_key_exists('blog-post-excerpt',$tpl_default_settings) ): ?>
                                <?php echo dttheme_excerpt($tpl_default_settings['blog-post-excerpt-length']); ?>
                             <?php else: ?>
                                <?php echo get_the_excerpt(); ?>
                             <?php endif;?>
                        </div>
                        
                     </div>   
                                   
                       
				<?php
                }
                ?>
                                            
			</article> <!-- #post-<?php the_ID()?> Ends -->
		</div>

	<?php endwhile;
endif;
}

wp_reset_query();

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

if ( empty( $categories ) ):
	$args = array( 'paged'=>$paged, 'posts_per_page'=>$post_per_page, 'post_type'=> 'post', 'post__not_in' => get_option( 'sticky_posts' ) );
else:
	$exclude_cats = array_unique( $categories );
	$args = array( 'paged'=>$paged, 'posts_per_page'=>$post_per_page, 'category__not_in'=>$exclude_cats, 'post_type'=>'post', 'post__not_in' => get_option( 'sticky_posts' ) );
endif;

query_posts($args);

if( have_posts() ):
	$i = 1;
	while( have_posts() ):
		the_post();

		$temp_class = "";
		if($i == 1) $temp_class = $post_class." first"; else $temp_class = $post_class;
		if($i == $columns) $i = 1; else $i = $i + 1;

		$format = get_post_format(  get_the_id() );
		$format_icons = array( 'status' => 'fa-comment', 'quote' => 'fa-quote-left', 'gallery' => 'fa-camera', 'image' => 'fa-image', 'video' => 'fa-film', 'audio' => 'fa-music', 'link' => 'fa-link', 'aside' => 'fa-align-left', 'chat' => 'fa-comments' );
		
		if(isset($format_icons[$format])) $format_icon = $format_icons[$format]; else $format_icon = 'fa-pencil';
		?>

		<div class="<?php echo esc_attr($temp_class);?>">
			<!-- #post-<?php the_ID()?> starts -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry'); ?>>
            
				<?php 
				$post_meta = get_post_meta(get_the_id() ,'_dt_post_settings',TRUE);
                $post_meta = is_array( $post_meta ) ? $post_meta  : array(); 
				$pholder = dttheme_option('general', 'disable-placeholder-images');
				?>
            	<?php
				if($format == 'quote') {
				?>		
                    <div class="black-box">  
                        
                        <div class="entry-details">
							
                            <div class="entry-metadata">
                                 <p class="date <?php echo esc_attr($hide_date_meta);?>">
                                     <i class="fa fa-calendar"></i>
                                     <?php echo get_the_date('d M Y');?>
                                     <?php if($hide_author_meta != ' hidden ' || $hide_comment_meta != ' hidden ' || $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
												echo "|";
											} ?>
                                 </p>
                                 <p class="author <?php echo esc_attr($hide_author_meta);?>"> 
                                     <i class="fa fa-user"></i> <?php _e('Posted By:','dt_themes'); ?>
                                     <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php _e('View all posts by ', 'dt_themes').get_the_author();?>"><?php echo get_the_author();?></a>
                                 <?php if( $hide_comment_meta != ' hidden ' || $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
											echo "|";
										} ?>
                                 </p>
                                 <p class="<?php echo esc_attr($hide_comment_meta);?>">
                                    <i class="fa fa-comments"></i>
                                    <?php comments_popup_link( '0', '1', '%', '', '0');?>
                                    <?php if( $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
											echo "|";
										  } ?>
                                 </p>
                                 <?php if( has_category() ) { ?>
                                 <p class="category <?php echo esc_attr($hide_category_meta);?>"> 
                                     <i class="fa fa-sitemap"></i>
                                     <?php the_category(', '); ?>
                                     <?php if( $hide_tag_meta != ' hidden '){
												 echo "|";
											} ?>
                                 </p>
                                 <?php } ?>
                                 <?php if(has_tag()){ ?>
                                 <p class="tags <?php echo esc_attr($hide_tag_meta);?>"> 
                                     <i class="fa fa-tags"></i>
                                     <?php the_tags('', ', ', '');?>
                                 </p>
                                 <?php } ?>
                            </div>
                        </div>
                        <?php if(is_sticky()): ?>
                                <div class="featured-post"> <span class="fa fa-trophy"> </span> <span class="text"> <?php _e('Featured','dt_themes');?> </span></div>
                            <?php endif;?>
                        
                        <div class="entry-body">
                        	<?php if( array_key_exists('quote', $post_meta) ) { ?>
                                <p><a href="<?php the_permalink();?>"><?php echo esc_html($post_meta['quote']); ?></a></p>
                                <?php if( array_key_exists('quoteby', $post_meta) ) { ?>
                                    <span>- <?php echo esc_html($post_meta['quoteby']); ?></span>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        
                     </div>
				
                <?php	
				} else {
					
					if( !empty($format) ) { ?>
                      <div class="entry-thumb">
                        <?php if( $format === "image" ): ?>
                                <a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>">
                                <?php if( has_post_thumbnail() ):
										$attachment_id = get_post_thumbnail_id(get_the_id());
										$img_attributes = wp_get_attachment_image_src($attachment_id, "full");
										echo "<img src='".$img_attributes[0]."' alt='".get_the_title()."' />";
                                      elseif($pholder != 'on'):?>
                                        <img src="http://placehold.it/1160x800&amp;text=<?php the_title(); ?>" alt="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" />
                                <?php endif;?>
                                </a>
                        <?php elseif( $format === "gallery" && array_key_exists("items", $post_meta)):
                                    echo "<ul class='entry-gallery-post-slider'>";
                                    foreach ( $post_meta['items'] as $item ) { 
										$attachment_id = dt_get_attachment_id_from_url($item);
										$img_attributes = wp_get_attachment_image_src($attachment_id, "full");
										echo "<li><img src='".$img_attributes[0]."' alt='".get_the_title()."' /></li>";
									}
                                    echo "</ul>";
                              elseif( $format === "video" && ( array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta) ) ):
                                    if( array_key_exists('oembed-url', $post_meta) ):
                                        echo "<div class='dt-video-wrap'>".wp_oembed_get($post_meta['oembed-url']).'</div>';
                                    elseif( array_key_exists('self-hosted-url', $post_meta) ):
                                        echo "<div class='dt-video-wrap'>".apply_filters( 'the_content', $post_meta['self-hosted-url'] ).'</div>';
                                    endif;
                              elseif( $format === "audio" && (array_key_exists('oembed-url', $post_meta) || array_key_exists('self-hosted-url', $post_meta)) ):
                                    if( array_key_exists('oembed-url', $post_meta) ):
                                        echo wp_oembed_get($post_meta['oembed-url']);
                                    elseif( array_key_exists('self-hosted-url', $post_meta) ):
                                        echo apply_filters( 'the_content', $post_meta['self-hosted-url'] );
                                    endif;
                              else: ?>
                                <a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>"><?php
                                    if( has_post_thumbnail() ):
										$attachment_id = get_post_thumbnail_id(get_the_id());
										$img_attributes = wp_get_attachment_image_src($attachment_id, "full");
										echo "<img src='".$img_attributes[0]."' alt='".get_the_title()."' />";
                                    elseif($pholder != 'on'):?>
                                        <img src="http://placehold.it/1160x800&amp;text=<?php the_title(); ?>" alt="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" />
                                <?php endif;?></a>
                        <?php endif; ?>
                        <?php if(is_sticky()): ?>
                        		<div class="featured-post"> <span class="fa fa-trophy"> </span> <span class="text"> <?php _e('Featured','dt_themes');?> </span></div>
                    	<?php endif;?>
                    </div>
                <?php } ?>
                                
                <div class="entry-details">
                    <div class="entry-title">
                        <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a> </h4>
                    </div>
                    
                    <div class="entry-metadata">
                         <p class="date <?php echo esc_attr($hide_date_meta);?>">
                             <i class="fa fa-calendar"></i>
                             <?php echo get_the_date('d M Y');?>
                             <?php if($hide_author_meta != ' hidden ' || $hide_comment_meta != ' hidden ' || $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
									 echo "|";
								   } ?>
                         </p>
                         <p class="author <?php echo esc_attr($hide_author_meta);?>"> 
                             <i class="fa fa-user"></i> <?php _e('Posted By:','dt_themes'); ?>
                             <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php _e('View all posts by ', 'dt_themes').get_the_author();?>"><?php echo get_the_author();?></a>
                         <?php if( $hide_comment_meta != ' hidden ' || $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
								 echo "|";
							   } ?>
                         </p>
                         <p class="<?php echo esc_attr($hide_comment_meta);?>">
                            <i class="fa fa-comments"></i>
                            <?php comments_popup_link( '0', '1', '%', '', '0');?>
						    <?php if( $hide_category_meta != ' hidden ' || $hide_tag_meta != ' hidden '  ){
									  echo "|";
								  } ?>
                         </p>
                   <?php if( has_category() ) { ?>
                         <p class="category <?php echo esc_attr($hide_category_meta);?>"> 
                             <i class="fa fa-sitemap"></i>
                             <?php the_category(', '); ?>
                             <?php if( $hide_tag_meta != ' hidden ' ){
					 				 echo "|";
				 	  		 	   } ?>
                         </p>
                   <?php } ?>
                   <?php if(has_tag()){ ?>
                         <p class="tags <?php echo esc_attr($hide_tag_meta);?>"> 
                             <i class="fa fa-tags"></i>
                             <?php the_tags('', ', ', '');?>
                         </p>
                   <?php } ?>
                    </div>
                    
                    <div class="entry-body">
                        <?php if( array_key_exists('blog-post-excerpt',$tpl_default_settings) ): ?>
                            <?php echo dttheme_excerpt($tpl_default_settings['blog-post-excerpt-length']); ?>
                         <?php else: ?>
                            <?php echo get_the_excerpt(); ?>
                         <?php endif;?>
                    </div>
                    
                 </div>   
                       
			<?php
            }
            ?>
                       
			</article><!-- #post-<?php the_ID()?> Ends -->
		</div>

	<?php endwhile;
endif;
wp_reset_query();

echo '</div>'; ?><!-- .tpl-blog-holder  -->

<!--- End of loop to show blog posts -->
<div class="dt-sc-hr-invisible-small"></div>
<?php if( is_page_template('tpl-onepage.php') ) : ?>
		<a class="dt-sc-button view-all" href="<?php echo get_page_link($tpl_postid); ?>"> <?php _e('Read All','dt_themes'); ?> </a>
<?php else: 
		 if($post_per_page != -1) { ?>	
			<div id="blog-loading-bar" class="loading-bar" data-page="<?php echo esc_attr($paged+1); ?>" data-postid="<?php echo esc_attr($tpl_postid); ?>" >
				<?php _e('Scroll Down To Load More', 'dt_themes'); ?>
			</div>
<?php 	 }
	  endif;?> 

<?php if(is_page_template('tpl-onepage.php')): echo '</div> </div> '; endif; ?>
<div class="dt-sc-hr-invisible-small"></div>