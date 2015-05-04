<!-- #post-<?php the_ID()?> starts -->
<?php 
$post_meta = get_post_meta(get_the_id() ,'_dt_post_settings',TRUE);
$post_meta = is_array( $post_meta ) ? $post_meta  : array(); 

$format = get_post_format(  get_the_id() );
$format_icons = array( 'status' => 'fa-comment', 'quote' => 'fa-quote-left', 'gallery' => 'fa-camera', 'image' => 'fa-image', 'video' => 'fa-film', 'audio' => 'fa-music', 'link' => 'fa-link', 'aside' => 'fa-align-left', 'chat' => 'fa-comments' );
	
if(isset($format_icons[$format])) $format_icon = $format_icons[$format]; else $format_icon = 'fa-pencil';	


$page_layout = dttheme_option('specialty','post-archives-layout');
$page_layout = !empty($page_layout) ? $page_layout : "content-full-width";

$post_layout = dttheme_option('specialty','post-archives-post-layout'); 
$post_layout = !empty($post_layout) ? $post_layout : "one-column";

switch($post_layout):
	case 'one-column':
	break;

	case 'one-half-column';
	break;

	case 'one-third-column':
	break;
endswitch;

?>
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
            <div class="entry-details">
                
                <div class="entry-metadata">
                     <p class="date">
                         <i class="fa fa-calendar"></i>
                         <?php echo get_the_date('d M Y');?>
                         <?php if( have_comments() || has_category() || has_tag() ){
									 echo "|";
								   } ?>
                     </p>
                     <p class="author"> 
                         <i class="fa fa-user"></i> <?php _e('Posted By:','dt_themes'); ?>
                         <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php _e('View all posts by ', 'dt_themes').get_the_author();?>"><?php echo get_the_author();?></a>
                     <?php if( have_comments() || has_category() || has_tag()  ){
								 echo "|";
							   } ?>
                     </p>
                     <p class="">
                        <i class="fa fa-comments"></i>
                        <?php comments_popup_link( '0', '1', '%', '', '0');?>
                        <?php if( has_category() || has_tag()  ){
									  echo "|";
								  } ?>
                     </p>
                     <?php if( has_category() ) { ?>
                     <p class="category"> 
                         <i class="fa fa-sitemap"></i> 
                         <?php the_category(', '); ?>
                         <?php if( has_tag()  ){
								 echo "|";
							   } ?>
                     </p>
                     <?php } ?>
                     <?php if(has_tag()){ ?>
                     <p class="tags"> 
                         <i class="fa fa-tags"></i>
                         <?php the_tags('', ', ', '');?>
                     </p>
                     <?php } ?>
                </div>
            </div>
            <?php if(is_sticky()): ?>
                    <div class="featured-post"> <span class="fa fa-trophy"> </span> <span class="text"> <?php _e('Featured','dt_themes');?> </span></div>
                <?php endif;?>
         </div>
    
    <?php	
    } else {
    ?>
            <div class="entry-thumb">
                <?php if( $format === "image" || empty($format) ): ?>
                        <a href="<?php the_permalink();?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>">
                        <?php if( has_post_thumbnail() ):
								$attachment_id = get_post_thumbnail_id(get_the_id());
								$img_attributes = wp_get_attachment_image_src($attachment_id, "full");
								echo "<img src='".$img_attributes[0]."' />";
                              elseif($pholder != 'on'):?>
                                <img src="http://placehold.it/1160x800&amp;text=<?php the_title(); ?>" alt="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" />
                        <?php endif;?>
                        </a>
                <?php elseif( $format === "gallery" && array_key_exists("items", $post_meta)):
                            echo "<ul class='entry-gallery-post-slider'>";
                            foreach ( $post_meta['items'] as $item ) { 
								$attachment_id = dt_get_attachment_id_from_url($item);
								$img_attributes = wp_get_attachment_image_src($attachment_id, "full");
								echo "<li><img src='".$img_attributes[0]."' /></li>";
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
								echo "<img src='".$img_attributes[0]."' />";
                            elseif($pholder != 'on'):?>
                                <img src="http://placehold.it/1160x800&amp;text=<?php the_title(); ?>" alt="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" title="<?php printf(esc_attr__('%s'),the_title_attribute('echo=0'));?>" />
                        <?php endif;?></a>
                <?php endif; ?>
            </div>
                    
            <div class="entry-details">
                <div class="entry-title">
                    <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a> </h4>
                </div>
                
                <div class="entry-metadata">
                     <p class="date">
                         <i class="fa fa-calendar"></i>
                         <?php echo get_the_date('d M Y');?>
                         <?php if( have_comments() || has_category() || has_tag()  ){
					 	 			echo "|";
				 	   			} ?>
                     </p>
                     <p class="author"> 
                         <i class="fa fa-user"></i> <?php _e('Posted By:','dt_themes'); ?>
                         <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php _e('View all posts by ', 'dt_themes').get_the_author();?>"><?php echo get_the_author();?></a>
                     <?php if( have_comments() || has_category() || has_tag()  ){
					 	 		echo "|";
				 	   		} ?>
                     </p>
                     <p class="">
                        <i class="fa fa-comments"></i>
                        <?php comments_popup_link( '0', '1', '%', '', '0');?>
                        <?php if( has_category() || has_tag()  ){
					 	 		echo "|";
				 	  		  } ?>
                     </p>
             <?php if( has_category() ) { ?>
                     <p class="category"> 
                         <i class="fa fa-sitemap"></i>
                         <?php the_category(', '); ?>
                         <?php if( has_tag() ){
					 				 echo "|";
				 	  		 	} ?>
                     </p>
             <?php } ?>
             <?php if(has_tag()){ ?>
                     <p class="tags"> 
                         <i class="fa fa-tags"></i>
                         <?php the_tags('', ', ', '');?>
                     </p>
             <?php } ?>
                </div>
                <div class="entry-body">
                    <?php echo '<p>'.get_the_excerpt().'</p>'; ?>
                </div>
                
             </div>   
             <?php if(is_sticky()): ?>
                    <div class="featured-post"> <span class="fa fa-trophy"> </span> <span class="text"> <?php _e('Featured','dt_themes');?> </span></div>
                <?php endif;?>               
        <?php
        }
        ?>
</article><!-- #post-<?php the_ID()?> Ends -->