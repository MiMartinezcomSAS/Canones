    </div>
                	
	<?php $dttheme_options = get_option(IAMD_THEME_SETTINGS); $dttheme_general = $dttheme_options['general'];?>
   	<?php if(!empty($dttheme_general['show-footer'])): ?>     
    <!--footer starts-->     
    <footer>
        <div class="copyright">
            <a href="#home" class="dt-sc-tooltip-top" id="toTop" title="Back To Top"> </a>
            <!--container starts-->
            <div class="container">
                <?php
                if( !empty($dttheme_general['show-copyrighttext']) ):
                    echo '<p>';
                    $copyright_code = stripslashes($dttheme_general['copyright-text']);
					echo wp_kses($copyright_code, array(
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
									    'br' => array(),
									    'em' => array(),
									    'strong' => array(),
							   ));
                    echo '</p>'; 
                endif;
                ?>
            </div>
            <!--container ends-->
        </div>
    </footer>
    <!--footer ends-->
    <?php endif;?>
  </div> <!-- ** Inner Wrapper - End** -->   
  
  <?php // header2 wrapper ends
  	$postid = ( isset( $post->ID ) ? $post->ID : NULL );
	$tpl_header_styles = get_post_meta( $postid, '_tpl_default_settings', TRUE );
	$tpl_header_styles = isset( $tpl_header_styles['header-styles'] ) ? $tpl_header_styles['header-styles']  : '';

	if($tpl_header_styles == 'type2') {
		echo '</div>';
	} ?>

</div> <!-- **Wrapper - End** -->
<?php
if (is_singular() AND comments_open())
	wp_enqueue_script( 'comment-reply');

wp_footer(); 
?>
</body>
</html>