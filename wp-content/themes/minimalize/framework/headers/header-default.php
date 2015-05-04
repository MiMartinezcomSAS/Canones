<!--header starts-->
    <header id="header" class="<?php echo ' nav-from-top first-nav'; ?>">
    
        <!--container starts-->
        <div class="container">
        
            <!--logo starts-->
            <div id="logo">
				<?php
				$blog_title = dttheme_blog_title();
                if( dttheme_option('general', 'logo') ):
					$dark_layout = dttheme_option('general','enable-dark-layout');
					
                    $img_name = ($dark_layout != '') ? 'logo-dark' : 'logo';
                    $url = dttheme_option('general', 'logo-url');
                    $url = !empty( $url ) ? $url : IAMD_BASE_URL."images/{$img_name}.png";

					$img_name_retina = ($dark_layout != '') ? 'logo-dark@2x' : 'logo@2x';
                    $retina_url = dttheme_option('general','retina-logo-url');
                    $retina_url = !empty($retina_url) ? $retina_url : IAMD_BASE_URL."images/{$img_name_retina}.png";
                    
                    $width = dttheme_option('general','retina-logo-width');
                    $width = !empty($width) ? $width."px" : "187px";
                    
                    $height = dttheme_option('general','retina-logo-height');
                    $height = !empty($height) ? $height."px" : "46px";
					?>
                    <a href="<?php echo home_url();?>" title="<?php echo esc_attr($blog_title);?>">
                        <img class="normal_logo" src="<?php echo esc_url($url);?>" alt="<?php echo esc_attr($blog_title); ?>" title="<?php echo esc_attr($blog_title); ?>" id="dt_logo" />
                        <img class="retina_logo" src="<?php echo esc_url($retina_url);?>" alt="<?php echo esc_attr($blog_title);?>" title="<?php echo esc_attr($blog_title); ?>" style="width:<?php echo esc_attr($width); ?>; height:<?php echo esc_attr($height); ?>;" id="dt_retina_logo" />
                    </a><?php
                else:?>
                    <h2><a href="<?php echo home_url();?>" title="<?php echo esc_attr($blog_title);?>"><?php echo do_shortcode(get_option('blogname')); ?></a></h2><?php
                endif;?>
            </div>
            <!--logo ends-->
            
            <div class="menu-main-menu-container">
                <!--nav starts-->
                <nav id="main-menu">
                    <?php
					$postid = ( isset( $post->ID ) ? $post->ID : NULL ); 
					$tpl_default_settings = get_post_meta($postid,'_tpl_default_settings',TRUE);
					$tpl_default_settings = is_array($tpl_default_settings) ? $tpl_default_settings  : array();
					$menu_locations = (isset($tpl_default_settings['menu-locations']) && $tpl_default_settings['menu-locations'] != '') ?  $tpl_default_settings['menu-locations'] : 'header_menu';
					
                    $primaryMenu = NULL;
                    if (function_exists('wp_nav_menu')) :
                        $primaryMenu = wp_nav_menu(array(
                                    'theme_location'=>$menu_locations,
                                    'menu_id'=>'menu-main-menu',
                                    'menu_class'=>'group menu',
                                    'fallback_cb'=>'dttheme_default_navigation',
                                    'echo'=>false,
                                    'container'=>false,
                                    'walker' => new DTFrontEndMenuWalker()
                                ));
                    endif;
                    if(!empty($primaryMenu)) echo $primaryMenu;
                    ?>
                </nav>
                <!--nav ends-->
            </div>
            
        </div>
        <!--container ends-->
        
    </header>
<!--</div>-->

<?php
if(is_page_template('tpl-onepage.php')):
	dttheme_slider_section( $post->ID, 'topsection');	
endif; 
?>